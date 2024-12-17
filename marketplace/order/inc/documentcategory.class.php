<?php

/**
 * -------------------------------------------------------------------------
 * Order plugin for GLPI
 * -------------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of Order.
 *
 * Order is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * Order is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Order. If not, see <http://www.gnu.org/licenses/>.
 * -------------------------------------------------------------------------
 * @copyright Copyright (C) 2009-2023 by Order plugin team.
 * @license   GPLv3 https://www.gnu.org/licenses/gpl-3.0.html
 * @link      https://github.com/pluginsGLPI/order
 * -------------------------------------------------------------------------
 */

if (!defined('GLPI_ROOT')) {
    die("Sorry. You can't access directly to this file");
}

class PluginOrderDocumentCategory extends CommonDBTM
{
    public static function getTypeName($nb = 0)
    {
        return __("Document category", "order");
    }


    public function getTabNameForItem(CommonGLPI $item, $withtemplate = 0)
    {
        $config = PluginOrderConfig::getConfig();

        if ($item->getType() == "DocumentCategory" && $config->canRenameDocuments()) {
            return __("Orders", "order");
        }

        return '';
    }


    public static function displayTabContentForItem(CommonGLPI $item, $tabnum = 1, $withtemplate = 0)
    {
        $config = PluginOrderConfig::getConfig();

        if ($item->getType() == "DocumentCategory" && $config->canRenameDocuments()) {
            self::showForDocumentCategory($item);
        }
        return true;
    }


    public static function purgeItem($item)
    {
        $temp = new self();
        $temp->deleteByCriteria([
            'documentcategories_id' => $item->getField("id")
        ]);
    }


public static function showForDocumentCategory($item)
{
    // Obtenemos el ID del usuario actual
    $userID = Session::getLoginUserID();

    // Comprobamos si el usuario tiene permisos para subir documentos, independientemente de actualizar
    // Vamos a permitir la subida de documentos incluso si no tiene permiso de "update"
    if (Session::haveRight('document', READ)) { 
        // Mostrar el formulario de subida de archivos
        echo "<form name='form_upload_document' method='post' enctype='multipart/form-data' action=''>
            <input type='file' name='documents[]' multiple>
            <input type='submit' name='upload_document' value='" . __('Upload', 'order') . "'>
        </form>";

        // Si el usuario ha subido un archivo
        if (isset($_FILES['documents'])) {
            foreach ($_FILES['documents']['tmp_name'] as $key => $tmp_name) {
                // Verificar y mover los archivos subidos
                $file_name = basename($_FILES['documents']['name'][$key]);
                $file_path = GLPI_ROOT . "/files/_uploads/" . uniqid() . "_" . $file_name;

                // Mover el archivo a la carpeta de destino
                if (move_uploaded_file($tmp_name, $file_path)) {
                    echo "Archivo subido correctamente: $file_name";

                    // Guardar la información del archivo en la base de datos
                    $query = "INSERT INTO glpi_documents (name, filepath, users_id) 
                              VALUES ('" . $DB->escape($file_name) . "', '" . $DB->escape($file_path) . "', $userID)";
                    $DB->query($query);
                } else {
                    echo "Error al subir el archivo: $file_name";
                }
            }
        }
    } else {
        echo "No tienes permisos para subir documentos.";
    }
}


   //------------------------------------------------------------
   //--------------------Install / uninstall --------------------
   //------------------------------------------------------------

    public static function install(Migration $migration)
    {
        /** @var \DBmysql $DB */
        global $DB;

        $default_charset = DBConnection::getDefaultCharset();
        $default_collation = DBConnection::getDefaultCollation();
        $default_key_sign = DBConnection::getDefaultPrimaryKeySignOption();

        $table = self::getTable();
       //Installation
        if (
            !$DB->tableExists($table)
            && !$DB->tableExists("glpi_plugin_order_documentcategories")
        ) {
            $migration->displayMessage("Installing $table");

            $query = "CREATE TABLE IF NOT EXISTS `glpi_plugin_order_documentcategories` (
                     `id` int {$default_key_sign} NOT NULL auto_increment,
                     `documentcategories_id` int {$default_key_sign} NOT NULL default '0',
                     `documentcategories_prefix` varchar(255) default NULL,
                     PRIMARY KEY  (`id`),
                     KEY `documentcategories_id` (`documentcategories_id`),
                     UNIQUE KEY `unicity` (`documentcategories_id`, `documentcategories_prefix`)
                  ) ENGINE=InnoDB DEFAULT CHARSET={$default_charset} COLLATE={$default_collation} ROW_FORMAT=DYNAMIC;";
            $DB->query($query) or die($DB->error());
        }
    }


    public static function uninstall()
    {
        /** @var \DBmysql $DB */
        global $DB;
       //Current table name
        $DB->query("DROP TABLE IF EXISTS  `" . self::getTable() . "`") or die($DB->error());
    }
}
