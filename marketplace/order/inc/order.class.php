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

class PluginOrderOrder extends CommonDBTM
{
    use Glpi\Features\Clonable;

    public static $rightname         = 'plugin_order_order';

    public $is_template              = true;

    public $dohistory                = true;

    protected $usenotepadrights      = true;

    protected $usenotepad            = true;

    public static $forward_entity_to = [
        "PluginOrderOrder_Item",
        "PluginOrderOrder_Supplier",
        "PluginOrderSurveySupplier"
    ];


    const ORDER_DEVICE_NOT_DELIVRED = 0;
    const ORDER_DEVICE_DELIVRED     = 1;

   // Const Budget
    const ORDER_IS_OVER_BUDGET      = 1;
    const ORDER_IS_EQUAL_BUDGET     = 2;
    const ORDER_IS_UNDER_BUDGET     = 3;

   /**
    * @var integer
    * @deprecated 2.1.2 Useless right. Update process will remove it from profiles rights.
    */
    const RIGHT_OPENTICKET                       = 128;

   // additionnals rights
    const RIGHT_VALIDATION                       = 256;
    const RIGHT_UNDO_VALIDATION                  = 512;
    const RIGHT_CANCEL                           = 1024;
    const RIGHT_GENERATEODT_WITHOUT_VALIDATION   = 2048;
    const RIGHT_GENERATEODT                      = 4096;
    const RIGHT_DELIVERY                         = 8192;
    const ALLRIGHTS                              = 16255;


    public function getCloneRelations(): array
    {
        return [];
    }


    public static function getTypeName($nb = 0)
    {
        return $nb > 1 ? __("Orders", "order") : __("Order", "order");
    }


    public function getState()
    {
        return $this->fields["plugin_order_orderstates_id"];
    }

    public static function getStateIcon($status)
    {
        $class = static::getStateClass($status);
        $label = static::getState($status);
        return "<i class='$class me-1' title='$label' data-bs-toggle='tooltip'></i>";
    }
   public static function getStateClass($status)
    {
        $class = null;
        $solid = true;

        switch ($status) {
            case 2:
                $class = "trash";
                break;
            case 9:
                $class = 'circle';
                break;
            case 14:
                $class = 'circle';
                $solid = false;
                break;
            case 12:
                $class = 'calendar';
                $solid = false;
                break;
            case 13:
                $class = 'circle';
                break;
            case 10:
                $class = 'circle';
                $solid = false;
                break;
            case 4:
                $class = 'circle';
                break;
            case 11:
                $class = 'check-circle';
                break;
            case 5:
                $class = 'eye';
                break;
            case 6:
                $class = 'circle';
                $solid = false;
                break;
        }

        return $class == null
         ? ''
         : 'itilstatus ' . ($solid ? 'fas fa-' : 'far fa-') . $class .
         " " . static::getStateKey($status);
    }

    /**
     * Get status key
     *
     * @since 9.3
     *
     * @return string
     */
    public static function getStateKey($status)
    {
        $key = '';
        switch ($status) {
            case 2:
                $key = 'new';
                break;
            case self::ASSIGNED:
                $key = 'assigned';
                break;
            case self::PLANNED:
                $key = 'planned';
                break;
            case self::WAITING:
                $key = 'waiting';
                break;
            case self::SOLVED:
                $key = 'solved';
                break;
            case self::CLOSED:
                $key = 'closed';
                break;
            case self::ACCEPTED:
                $key = 'accepted';
                break;
            case self::OBSERVED:
                $key = 'observe';
                break;
            case self::EVALUATION:
                $key = 'eval';
                break;
            case self::APPROVAL:
                $key = 'approval';
                break;
            case self::TEST:
                $key = 'test';
                break;
            case self::QUALIFICATION:
                $key = 'qualif';
                break;
            case self::CANCELLED:
                $key = 'cancelled';
                break;
        }
        return $key;
    }




    public static function canCancel()
    {
        return Session::haveRight("plugin_order_order", self::RIGHT_CANCEL);
    }


    public static function canUndo()
    {
        return Session::haveRight("plugin_order_order", self::RIGHT_UNDO_VALIDATION);
    }


    public static function canValidate()
    {
        return Session::haveRight("plugin_order_order", self::RIGHT_VALIDATION);
    }


    public static function canGenerateWithoutValidation()
    {
        return Session::haveRight("plugin_order_order", self::RIGHT_GENERATEODT_WITHOUT_VALIDATION);
    }


    public static function canDeliver()
    {
        return Session::haveRight("plugin_order_order", self::RIGHT_DELIVERY);
    }


    public function isDraft()
    {
        $config = PluginOrderConfig::getConfig();
        return $this->getState() == $config->getDraftState();
    }


    public function isWaitingForApproval()
    {
        $config = PluginOrderConfig::getConfig();
        return $this->getState() == $config->getWaitingForApprovalState();
    }


    public function isApproved()
    {
        $config = PluginOrderConfig::getConfig();
        return $this->getState() == $config->getApprovedState();
    }


    public function isPartiallyDelivered()
    {
        $config = PluginOrderConfig::getConfig();
        return $this->getState() == $config->getPartiallyDeliveredState();
    }

    public function isDelivered()
    {
        $config = PluginOrderConfig::getConfig();
        return isset($this->fields['plugin_order_orderstates_id'])
             && $this->getState() == $config->getDeliveredState();
    }

    public function isPaid()
    {
        $config = PluginOrderConfig::getConfig();
        return $this->getState() == $config->getPaidState();
    }


    public function cleanDBonPurge()
    {
        foreach (self::$forward_entity_to as $itemtype) {
            $temp = new $itemtype();
            $temp->deleteByCriteria(['plugin_order_orders_id' => $this->getID()]);
        }
    }


    public function isCanceled()
    {
        $config = PluginOrderConfig::getConfig();
        return $this->getState() == $config->getCanceledState();
    }


public function canUpdateOrder()
{
    if ($this->isDelivered()) {
        return false;
    }
    return true;
}


    public function canDisplayValidationForm($orders_id)
    {
       //If it's an order creation -> do not display form
        if (!$orders_id) {
            return false;
        } else {
            return $this->canUndoValidation()
                || $this->canCancelOrder();
        }
    }

    public function canCancelOrder()
    {
       //If order is canceled or if no right to cancel!
        if (
            $this->isCanceled()
            || !self::canCancel()
        ) {
            return false;
        }
        return true;
    }

    public function canDoValidationRequest()
    {
        $config = PluginOrderConfig::getConfig();
        if (!$config->useValidation()) {
            return false;
        } else {
            return $this->isDraft();
        }
    }


    public function canCancelValidationRequest()
    {
        return $this->isWaitingForApproval();
    }


    public function canUndoValidation()
    {
       //If order is canceled, cannot validate !
        if ($this->isCanceled()) {
            return false;
        }

       //If order is not validate, cannot undo validation !
        if (
            $this->isDraft()
            || $this->isWaitingForApproval()
        ) {
            return false;
        }

       //If no right to cancel
        return (self::canUndo());
    }

    public function canDisplayValidationTab()
    {
        return self::canCreate()
             && $this->canCancelOrder()
                || $this->canUndoValidation()
                || $this->canCancelValidationRequest()
                || $this->canDoValidationRequest();
    }


      /**
    * @since version 0.85
    *
    * @see commonDBTM::getRights()
   **/
    public function getRights($interface = 'central')
    {
        $values = parent::getRights();
        if ($interface == 'central') {
            $values[self::RIGHT_GENERATEODT]     = __("Order Generation", "order");
            $values[self::RIGHT_DELIVERY]        = __("Take item delivery", "order");
            $values[self::RIGHT_VALIDATION]      = __("Order validation", "order");
            $values[self::RIGHT_CANCEL]          = __("Cancel order", "order");
            $values[self::RIGHT_UNDO_VALIDATION] = __("Edit a validated order", "order");
            $values[self::RIGHT_GENERATEODT_WITHOUT_VALIDATION] = __("Generate order without validation", "order");
        }

        return $values;
    }


    public function rawSearchOptions()
    {

        $tab = [];

        $tab[] = [
            'id'            => 'common',
            'name'          => __('Orders management', 'order'),
        ];

        $tab[] = [
            'id'            => 1,
            'table'         => self::getTable(),
            'field'         => 'name',
            'name'          => __('ID del caso', 'order'),
            'datatype'      => 'itemlink',
            'checktype'     => 'text',
            'displaytype'   => 'text',
            'injectable'    => true,
            'massiveaction' => false,
            'autocomplete'  => true,
        ];


        $tab[] = [
            'id'            => 2,
            'table'         => self::getTable(),
            'field'         => 'order_date',
            'name'          => __('Date of order', 'order'),
            'datatype'      => 'date',
            'checktype'     => 'date',
            'displaytype'   => 'date',
            'injectable'    => true,
            'massiveaction' => false,
        ];

     /*
   $tab[] = [
            'id'            => 3,
            'table'         => 'glpi_plugin_order_ordertaxes',
            'field'         => 'name',
            'name'          => __('VAT', 'order') . ' ' . __('Postage', 'order'),
            'datatype'      => 'dropdown',
            'checktype'     => 'text',
            'displaytype'   => 'dropdown',
            'injectable'    => true,
            'massiveaction' => false,
        ];
*/
        $tab[] = [
            'id'            => 4,
            'table'         => 'glpi_locations',
            'field'         => 'completename',
            'name'          => __('Delivery location', 'order'),
            'datatype'      => 'itemlink',
            'checktype'     => 'text',
            'displaytype'   => 'dropdown',
            'injectable'    => true,
            'massiveaction' => false,
        ];
        $tab[] = [
            'id'            => 5,
            'table'         => 'glpi_plugin_order_orderstates',
            'field'         => 'name',
            'name'          => __('Order status', 'order'),
            'datatype'      => 'dropdown',
            'checktype'     => 'text',
            'displaytype'   => 'dropdown',
            'massiveaction' => false,
        ];
/*
        $tab[] = [
            'id'            => 7,
            'table'         => 'glpi_plugin_order_orderpayments',
            'field'         => 'name',
            'name'          => __('Payment conditions', 'order'),
            'datatype'      => 'dropdown',
            'checktype'     => 'text',
            'displaytype'   => 'dropdown',
            'injectable'    => true,
            'massiveaction' => false,
        ];

        $tab[] = [
            'id'            => 8,
            'table'         => 'glpi_contacts',
            'field'         => 'name',
            'name'          => __('Alternate username'),
            'datatype'      => 'itemlink',
            'itemlink_type' => 'Contact',
            'forcegroupby'  => true,
            'checktype'     => 'text',
            'displaytype'   => 'dropdown',
            'injectable'    => true,
            'massiveaction' => false,
        ];

        $tab[] = [
            'id'            => 9,
            'table'         => 'glpi_budgets',
            'field'         => 'name',
            'name'          => __('Budget'),
            'datatype'      => 'itemlink',
            'itemlink_type' => 'Budget',
            'forcegroupby'  => true,
            'checktype'     => 'text',
            'displaytype'   => 'dropdown',
            'injectable'    => true,
            'massiveaction' => false,
        ];
*/
        $tab[] = [
            'id'            => 10,
            'table'         => self::getTable(),
            'field'         => 'num_order',
            'name'          => __('Nombre del pedido', 'order'),
            'searchtype'    => 'contains',
            'checktype'     => 'text',
            'displaytype'   => 'text',
            'injectable'    => true,
            'massiveaction' => false,
            'autocomplete'  => true,
        ];


        $tab[] = [
            'id'            => 11,
            'table'         => 'glpi_plugin_order_ordertypes',
            'field'         => 'name',
            'name'          => __('Area solicitada'),
            'datatype'      => 'dropdown',
            'checktype'     => 'text',
            'displaytype'   => 'dropdown',
            'injectable'    => true,
            'massiveaction' => false,
        ];

        $tab[] = [
            'id'            => 12,
            'table'         => self::getTable(),
            'field'         => 'duedate',
            'name'          => __('Fecha de entrega', 'order'),
            'datatype'      => 'date',
            'checktype'     => 'date',
            'displaytype'   => 'date',
            'injectable'    => true,
            'massiveaction' => false,
        ];
/*
        $tab[] = [
            'id'            => 13,
            'table'         => self::getTable(),
            'field'         => 'deliverydate',
            'name'          => __('Delivery due date'),
            'datatype'      => 'date',
            'checktype'     => 'date',
            'displaytype'   => 'date',
            'injectable'    => true,
            'massiveaction' => false,
        ];

        $tab[] = [
            'id'            => 14,
            'table'         => self::getTable(),
            'field'         => 'is_late',
            'name'          => __('Order is late', 'order'),
            'datatype'      => 'bool',
            'checktype'     => 'bool',
            'displaytype'   => 'bool',
            'injectable'    => true,
            'massiveaction' => false,
        ];
*/
        $tab[] = [
            'id'            => 15,
            'table'         => self::getTable(),
            'field'         => 'is_helpdesk_visible',
            'name'          => __('Associable to a ticket'),
            'datatype'      => 'bool',
            'injectable'    => true,
            'massiveaction' => true,
        ];

        $tab[] = [
            'id'            => 16,
            'table'         => self::getTable(),
            'field'         => 'comment',
            'name'          => __('Description'),
            'datatype'      => 'text',
            'checktype'     => 'text',
            'displaytype'   => 'multiline_text',
            'injectable'    => true,
            'massiveaction' => false,
        ];
/*
        $tab[] = [
            'id'            => 17,
            'table'         => self::getTable(),
            'field'         => 'port_price',
            'name'          => __('Postage', 'order'),
            'datatype'      => 'decimal',
            'checktype'     => 'text',
            'displaytype'   => 'text',
            'injectable'    => true,
            'massiveaction' => false,
        ];
*/
        $tab[] = [
            'id'            => 24,
            'table'         => 'glpi_users',
            'field'         => 'name',
            'name'          => __('Author'),
            'linkfield'     => 'users_id',
            'datatype'      => 'itemlink',
            'massiveaction' => false,
        ];

        $tab[] = [
            'id'            => 25,
            'table'         => 'glpi_users',
            'field'         => 'name',
            'name'          => __('Responsable'),
            'linkfield'     => 'users_id_delivery',
            'datatype'      => 'itemlink',
            'massiveaction' => false,
        ];
/*
        $tab[] = [
            'id'            => 26,
            'table'         => 'glpi_groups',
            'field'         => 'name',
            'name'          => __('Author group', 'order'),
            'linkfield'     => 'groups_id',
            'datatype'      => 'dropdown',
            'massiveaction' => false,
        ];

        $tab[] = [
            'id'            => 27,
            'table'         => 'glpi_groups',
            'field'         => 'name',
            'name'          => __('Recipient group', 'order'),
            'linkfield'     => 'groups_id_delivery',
            'datatype'      => 'dropdown',
            'massiveaction' => false,
        ];
*/

        $tab[] = [
            'id'            => 31,
            'table'         => self::getTable(),
            'field'         => 'id',
            'name'          => __('ID'),
            'injectable'    => false,
            'massiveaction' => false,
        ];

        $tab[] = [
            'id'            => 35,
            'table'         => self::getTable(),
            'field'         => 'date_mod',
            'name'          => __('Last update'),
            'datatype'      => 'datetime',
            'massiveaction' => false,
        ];

        $tab[] = [
            'id'            => 86,
            'table'         => self::getTable(),
            'field'         => 'is_recursive',
            'name'          => __('Child entities'),
            'datatype'      => 'bool',
            'checktype'     => 'bool',
            'displaytype'   => 'bool',
            'injectable'    => true,
            'massiveaction' => true,
        ];
/*
        $tab[] = [
            'id'            => 87,
            'table'         => 'glpi_plugin_order_accountsections',
            'field'         => 'name',
            'name'          =>  __("Account Section", "order"),
            'datatype'      => 'dropdown',
            'checktype'     => 'text',
            'displaytype'   => 'dropdown',
            'injectable'    => true,
            'massiveaction' => false,
        ];
*/
        return $tab;
    }


    public function defineTabs($options = [])
    {
        $ong = [];

        if (
            !$this->fields['is_template']
            || !isset($options['withtemplate'])
            || !$options['withtemplate']
        ) {
            $this->addDefaultFormTab($ong);
            $this->addStandardTab('PluginOrderOrder_Item', $ong, $options);
            $this->addStandardTab('PluginOrderOrder', $ong, $options);
            $this->addStandardTab('PluginOrderOrder_Supplier', $ong, $options);
            $this->addStandardTab('PluginOrderReception', $ong, $options);
            $this->addStandardTab('PluginOrderLink', $ong, $options);
            $this->addStandardTab('PluginOrderBill', $ong, $options);
            $this->addStandardTab('PluginOrderSurveySupplier', $ong, $options);
            $this->addStandardTab('Ticket', $ong, $options);
        }
if (!$this->isNewID($this->fields['id'])) {
    // A�adir pesta�as est�ndar sin restricciones
    $this->addDefaultFormTab($ong);

    // Mostrar Document_Item sin restricciones
    // La funci�n 'addStandardTab' a�ade una pesta�a est�ndar. Aqu� aseguramos que siempre se muestre.
    // Eliminamos cualquier verificaci�n de permisos.
    $options['force_no_permissions'] = true; // A�adir esta opci�n para deshabilitar la verificaci�n de permisos
    $this->addStandardTab('Document_Item', $ong, $options);

    // Mostrar Notepad y Log sin restricciones
    $this->addStandardTab('Notepad', $ong, $options);
    $this->addStandardTab('Log', $ong, $options);
}

return $ong;
    }





    public function prepareInputForAdd($input)
    {
        if (
            isset($input['is_template'])
            && $input['is_template'] == 1
        ) {
            return $input;
        }

        if (
            isset($input["id"])
            && $input["id"] > 0
        ) {
            $input["_oldID"] = $input["id"];
            unset($input['id']);
            unset($input['withtemplate']);
        } else {
            if (
                !isset($input["num_order"])
                || $input["num_order"] == ''
            ) {
                Session::addMessageAfterRedirect(__("An order number is mandatory !", "order"), false, ERROR);
                return [];
            } else if (
                !isset($input["name"])
                    || $input["name"] == ''
            ) {
                $input["name"] = $input["num_order"];
            }

            $config = PluginOrderConfig::getConfig();
            if ($config->isAccountSectionDisplayed() && $config->isAccountSectionMandatory() && $input["plugin_order_accountsections_id"] == 0) {
                Session::addMessageAfterRedirect(__("An account section is mandatory !", "order"), false, ERROR);
                return [];
            }

            if (
                isset($input['budgets_id'])
                && $input['budgets_id'] > 0
            ) {
                if (!self::canStillUseBudget($input)) {
                    Session::addMessageAfterRedirect(__("The order date must be within the dates entered for the selected budget.", "order"), false, ERROR);
                }
            }
        }

        return $input;
    }


    public function post_addItem()
    {
       // Manage add from template
        if (isset($this->input["_oldID"])) {
           // ADD Documents
            $docitem  = new Document_Item();
            $docs     = getAllDataFromTable(
                "glpi_documents_items",
                [
                    'items_id' => $this->input["_oldID"],
                    'itemtype' => $this->getType(),
                ]
            );
            if (!empty($docs)) {
                foreach ($docs as $doc) {
                    $docitem->add([
                        'documents_id' => $doc["documents_id"],
                        'itemtype'     => $this->getType(),
                        'items_id'     => $this->fields['id'],
                    ]);
                }
            }
        }
    }



    public function post_updateItem($history = true)
    {
        /** @var \DBmysql $DB */
        global $DB;
        $config = PluginOrderConfig::getConfig();

        if (
            $config->fields['transmit_budget_change']
            && in_array('budgets_id', $this->updates)
        ) {
            $infocom = new Infocom();
            $query = "SELECT `items_id`, `itemtype`
                   FROM `glpi_plugin_order_orders_items`
                   WHERE `plugin_order_orders_id`='" . $this->getID() . "'";
            foreach ($DB->request($query) as $infos) {
                $infocom->getFromDBforDevice($infos['itemtype'], $infos['items_id']);
                $infocom->update(['id' => $infocom->getID(),
                    'budgets_id' => $this->fields['budgets_id']
                ]);
            }
        }
    }


    public function prepareInputForUpdate($input)
    {
        if (
            isset($input['budgets_id']) && $input['budgets_id'] > 0
            || (isset($input['budgets_id'])
              && $input['budgets_id'] > 0
              && $this->fields['budgets_id'] != $input['budgets_id'])
        ) {
            if (
                !self::canStillUseBudget($input)
                && !isset($input['_unlink_budget'])
            ) {
                Session::addMessageAfterRedirect(__("The order date must be within the dates entered for the selected budget.", "order"), false, ERROR);
            }
        }

        $config = PluginOrderConfig::getConfig();
        if (
            $config->isAccountSectionDisplayed()
            && $config->isAccountSectionMandatory()
            && ($input["plugin_order_accountsections_id"] ?? $this->fields["plugin_order_accountsections_id"]) == 0
        ) {
            Session::addMessageAfterRedirect(__("An account section is mandatory !", "order"), false, ERROR);
            return [];
        }

        if (
            !isset($input['is_late'])
            && $this->shouldBeAlreadyDelivered()
        ) {
            $this->setIsLate();
        }
        return $input;
    }


    public function setIsLate()
    {
        $this->update([
            'id'      => $this->getID(),
            'is_late' => 1
        ]);
    }


    public function shouldBeAlreadyDelivered($check_all_status = false)
    {
        if ($check_all_status || $this->isApproved() || $this->isPartiallyDelivered()) {
            if (
                !is_null($this->fields['duedate']) && $this->fields['duedate'] != ''
                && (new DateTime($this->fields['duedate']) < new DateTime())
            ) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


    public function showForm($ID, $options = [])
    {
        /** @var \DBmysql $DB */
        global $DB;

        $config = PluginOrderConfig::getConfig();
        if (!$config->isConfigured()) {
            $link = "<a href='" . $config->getLinkURL() . "' class='alert-link'>" . __('Go to configuration page', 'order') . "</a>";

            echo "<div class='alert alert-warning' role='alert'>
            <div class='d-flex'>
                <div>
                    <i class='ti ti-alert-triangle fa-2x'></i>
                </div>
                <div class='ms-2'>
                    " . __('You must set up at least the order life cycle before starting.', 'order') . " — $link
                </div>
            </div>
         </div>";
            return;
        }

        $this->initForm($ID, $options);
        $this->showFormHeader($options);

        $rand   = mt_rand();
        $user   = new User();

        if (isset($options['withtemplate']) && $options['withtemplate'] == 2) {
            $template   = "newcomp";
            $datestring = sprintf(__('Created on %s'), Html::convDateTime($_SESSION["glpi_currenttime"]));
        } else if (isset($options['withtemplate']) && $options['withtemplate'] == 1) {
            $template   = "newtemplate";
            $datestring = sprintf(__('Created on %s'), Html::convDateTime($_SESSION["glpi_currenttime"]));
        } else {
            $template   = false;
            $datestring = sprintf(__('Last update on %s'), Html::convDateTime($this->fields["date_mod"]));
        }

$canedit = ($this->getID() == 0) || ($this->canUpdateOrder() && $this->canUpdate() && !$this->isCanceled());

// Si el pedido est� en estado entregado, entonces no permitir la edici�n
if ($this->isDelivered()) {
    $canedit = false;
}
$cancancel = self::canCancel() && $this->can($ID, UPDATE) && !$this->isCanceled();
        $options['canedit'] = $canedit;
        $options['candel']  = $cancancel;

        if ($template) {
            $this->fields['order_date'] = null;
        }

       // Displaying OVER BUDGET ALERT
        if ($this->fields['budgets_id'] > 0) {
            self::displayAlertOverBudget(self::isOverBudget($ID));
        }

       //Display without inside table

/* conectar el pedido con el caso por el id */
echo "<tr class='tab_bg_1'><td>" . __("ID del caso", "order") . "*: </td>";
echo "<td>";

// Verificar si estamos creando un nuevo pedido
if (!$this->getID()) {
    // Aqu� puedes permitir la edici�n solo cuando se est� creando el pedido
    if ($canedit) {
        $objectName = autoName(
            $this->fields["name"],
            "name",
            ($template === "newcomp"),
            $this->getType(),
            $this->fields["entities_id"]
        );
        echo Html::input(
            'name',
            [
                'value' => $objectName,
                'canedit' => true, // Permitir editar en la creaci�n
            ]
        );
    } else {
        echo $this->fields["name"];
    }
} else {
    // Se est� editando un pedido existente
    global $DB;
    $userID = Session::getLoginUserID();

    // Verificar si el usuario tiene el perfil 4
    $query = "SELECT `profiles_id` FROM `glpi_profiles_users` WHERE `users_id` = $userID AND `profiles_id` = 4";
    $result = $DB->query($query);

    if ($result === false) {
        // Manejar el error en caso de que la consulta falle
        echo "Error en la consulta: " . $DB->error();
    } else {
        // Si el usuario tiene el perfil 4, puede editar
        if ($DB->numrows($result) > 0) {
            // Permitir edici�n del ID del caso solo para el perfil 4
            echo Html::input(
                'name',
                [
                    'value' => $this->fields["name"],
                    'canedit' => true, // Permitir editar solo para el perfil 4
                ]
            );
        } else {
            // Mostrar el ID del caso como solo lectura para otros perfiles
            echo $this->fields["name"];
        }
    }
}

echo "</td></tr>";
   
/* Nombre del pedido */
echo "<tr class='tab_bg_1'><td>" . __("Nombre del pedido", "order");
if ($ID > 0) {
    echo "*";
} else {
    echo " <span class='red'>*</span>";
}
echo ": </td>";
echo "<td>";

// Verificar si se est� editando un pedido existente
if ($ID > 0) {
    // Obtener el ID del usuario y verificar el perfil
    global $DB;
    $userID = Session::getLoginUserID();
    
    // Consulta para verificar si el usuario tiene el perfil 30 o 4
    $query = "SELECT `profiles_id` FROM `glpi_profiles_users` WHERE `users_id` = $userID AND `profiles_id` IN (30, 4)";
    $result = $DB->query($query);

    // Comprobar si la consulta fue exitosa
    if ($result === false) {
        echo "Error en la consulta: " . $DB->error();
    } else {
        // Contar el n�mero de perfiles encontrados
        $numProfiles = $DB->numrows($result);
        
        // Si el usuario tiene el perfil 4, se permite la edici�n
        if ($numProfiles > 0 && $result->fetch_array()[0] == 4) {
            // Permitir editar el nombre del pedido
            $objectOrder = autoName(
                $this->fields["num_order"],
                "num_order",
                ($template === "newcomp"),
                $this->getType(),
                $this->fields["entities_id"]
            );
            echo Html::input(
                'num_order',
                [
                    'value' => $objectOrder,
                ]
            );
        } else {
            // Si el usuario tiene el perfil 30 o no tiene ninguno de los dos, mostrar solo lectura
            echo $this->fields["num_order"];
        }
    }
} else {
    // Se est� creando un nuevo pedido, se permite la edici�n
    $objectOrder = autoName(
        $this->fields["num_order"],
        "num_order",
        ($template === "newcomp"),
        $this->getType(),
        $this->fields["entities_id"]
    );
    echo Html::input(
        'num_order',
        [
            'value' => $objectOrder,
        ]
    );
}

echo "</td></tr>";

/* date of order */

echo "<td>" . __("Date of order", "order") . ":</td><td>";
    // Establecer la fecha actual autom�ticamente al crear el pedido
    $value = date('Y-m-d  H:i:s'); 
    echo Html::convDate($value); // Mostrar la fecha formateada
    echo Html::convDate($this->fields["order_date"]);
echo "</td></tr>";


/* �rea del pedido que se solicita */
echo "<tr class='tab_bg_1'><td>" . __("&Aacute;rea solicitada") . ": </td><td>";

// Verificar si se est� creando un nuevo pedido
if (!$this->getID()) {
    // Aqu� se permite editar solo al crear un pedido
    if ($canedit) {
        PluginOrderOrderType::Dropdown([
            'name'  => "plugin_order_ordertypes_id",
            'value' => $this->fields["plugin_order_ordertypes_id"]
        ]);
    } else {
        // Mostrar como solo lectura para otros perfiles
        echo Dropdown::getDropdownName(
            "glpi_plugin_order_ordertypes",
            $this->fields["plugin_order_ordertypes_id"]
        );
    }
} else {
    // Para pedidos existentes
    global $DB;
    $userID = Session::getLoginUserID();

    // Verificar si el usuario tiene el perfil 4
    $query = "SELECT `profiles_id` FROM `glpi_profiles_users` WHERE `users_id` = $userID AND `profiles_id` = 4";
    $result = $DB->query($query);

    if ($result === false) {
        // Manejar el error en caso de que la consulta falle
        echo "Error en la consulta: " . $DB->error();
    } else {
        // Comprobar si el usuario tiene el perfil 4
        if ($DB->numrows($result) > 0) {
            // Permitir editar el �rea si el perfil es 4
            PluginOrderOrderType::Dropdown([
                'name'  => "plugin_order_ordertypes_id",
                'value' => $this->fields["plugin_order_ordertypes_id"]
            ]);
        } else {
            // Mostrar como solo lectura para otros perfiles
            echo Dropdown::getDropdownName(
                "glpi_plugin_order_ordertypes",
                $this->fields["plugin_order_ordertypes_id"]
            );
        }
    }
}

echo "</td></tr>";
echo "<tr class='tab_bg_1'><td>" . __("Order status", "order") . ": </td>";
echo "<td>";

// Determinar el estado actual
if (!$this->getID()) {
    $state = $config->getDraftState();
} else {
    $state = $this->fields["plugin_order_orderstates_id"];
}
// Obtener el �cono del estado
$stateIcon = PluginOrderOrderState::getStateIcon($state);

// Verificar si el usuario tiene el perfil con ID 30 para permisos de edici�n
global $DB;
$userID = Session::getLoginUserID();
$query = "SELECT `profiles_id` FROM `glpi_profiles_users` WHERE `users_id` = $userID AND `profiles_id` = 30";
$result = $DB->query($query);

if ($result === false) {
    echo "Error en la consulta: " . $DB->error();
} else {
 if (!$this->getID()) {
        // Mostrar el estado por defecto como solo lectura con �cono y c�rculo de color
        echo "<div style='display:flex; align-items:center;'>$stateIcon";
        echo Dropdown::getDropdownName("glpi_plugin_order_orderstates", $state);
        echo "</div>";
    } else {
        if ($canedit && $DB->numrows($result) > 0) {
            // Mostrar el dropdown para editar el estado con �cono y c�rculo de color
            echo "<div style='display:flex; align-items:center;'>$stateIcon";
            PluginOrderOrderState::Dropdown([
                'name'   => "plugin_order_orderstates_id",
                'value'  => $state

            ]);
            echo "</div>";
        } else {
            // Mostrar el estado como solo lectura con �cono y c�rculo de color
            echo "<div style='display:flex; align-items:center;'>$stateIcon";
            echo Dropdown::getDropdownName("glpi_plugin_order_orderstates", $state);
            echo "</div>";
        }
    }
}
echo "</td></tr>";

/* �rea del pedido que se solicita  //* location */
echo "<tr class='tab_bg_1'><td>" . __("Delivery location", "order") . ":</td>";
echo "<td>";

// Obtener el ID del usuario y comprobar su perfil
global $DB;
$userID = Session::getLoginUserID();
$queryProfile30 = "SELECT `profiles_id` FROM `glpi_profiles_users` WHERE `users_id` = $userID AND `profiles_id` = 30";
$queryProfile4 = "SELECT `profiles_id` FROM `glpi_profiles_users` WHERE `users_id` = $userID AND `profiles_id` = 4";
$resultProfile30 = $DB->query($queryProfile30);
$resultProfile4 = $DB->query($queryProfile4);

// L�gica para determinar si el campo debe ser editable
if (!$this->getID()) {
    // Se est� creando un nuevo pedido
    if ($canedit) {
        // Mostrar el campo de selecci�n de ubicaci�n editable para todos los usuarios que crean pedidos
        Location::Dropdown([
            'name'   => "locations_id",
            'value'  => $this->fields["locations_id"],
            'entity' => $this->fields["entities_id"],
        ]);
    }
} else {
    // Se est� editando un pedido existente
    // Comprobar si el usuario tiene perfil 4 o no
    if ($DB->numrows($resultProfile4) > 0) {
        // Permitir editar el campo solo si es perfil 4
        Location::Dropdown([
            'name'   => "locations_id",
            'value'  => $this->fields["locations_id"],
            'entity' => $this->fields["entities_id"],
        ]);
    } else {
        // Mostrar la ubicaci�n como solo lectura para los dem�s
        echo Dropdown::getDropdownName("glpi_locations", $this->fields["locations_id"]);
    }
}

echo "</td></tr>";

// Asociable a un caso
echo "<tr class='tab_bg_1'>";
echo "<td>" . __("Associable to a ticket") . "&nbsp;:</td><td>";

global $DB;
$userID = Session::getLoginUserID();
$query = "SELECT `profiles_id` FROM `glpi_profiles_users` WHERE `users_id` = $userID AND `profiles_id` IN (4)";
$result = $DB->query($query);

// Comprobar si la consulta fue exitosa
if ($result === false) {
    // Manejar el error en caso de que la consulta falle
    echo "Error en la consulta: " . $DB->error();
} else {
    // Verificar si el usuario tiene el perfil 30 o 4
    if ($DB->numrows($result) > 0) {
        // Mostrar como solo lectura para el perfil 30 y 4
            Dropdown::showYesNo('is_helpdesk_visible', $this->fields['is_helpdesk_visible']);

    } else {
        // Comprobar si el pedido ha sido guardado (por ejemplo, verificar un campo que indique si es nuevo o no)
        if ($this->fields['id'] === 0 || !$this->getID()) { // Aseg�rate de que 'isSaved' sea una propiedad que determines cuando el pedido es nuevo
            // Permitir editar para otros usuarios
            Dropdown::showYesNo('is_helpdesk_visible', $this->fields['is_helpdesk_visible']);
        } else {
            // Mostrar como solo lectura si el pedido ya fue guardado
            echo Dropdown::getYesNo($this->fields['is_helpdesk_visible']);
        }
    }
}

echo "</td></tr>";
 /* Fecha de entrega */
echo "<tr class='tab_bg_1'><td>" . __("Fecha de entrega", "order") . ": ";
if ($this->isDelivered() && $this->fields['deliverydate']) {
    echo "<br/>" . __("Delivery date") . ":";
}
echo "</td><td>";

global $DB;
$userID = Session::getLoginUserID();

// Verificar si el usuario tiene los perfiles 30 o 4
$query = "SELECT `profiles_id` FROM `glpi_profiles_users` WHERE `users_id` = $userID AND `profiles_id` IN (30)";
$result = $DB->query($query);

// Comprobar si la consulta fue exitosa
if ($result === false) {
    // Manejar el error en caso de que la consulta falle
    echo "Error en la consulta: " . $DB->error();
} else {
    // Determinar si el usuario puede editar
    $canEdit = $DB->numrows($result) > 0;

    // Mostrar la fecha de entrega
    if ($canEdit) {
        $value = $this->fields["duedate"] == null ? '' : $this->fields["duedate"];
        Html::showDateField('duedate', [
            'value'      => $value,
            'maybeempty' => true,
            'canedit'    => true
        ]);
    } else {
        echo Html::convDate($this->fields["duedate"]);
    }

    // Mostrar la fecha de entrega si ya ha sido entregado
    if ($this->isDelivered() && $this->fields['deliverydate']) {
        echo "<br/>" . Html::convDate($this->fields['deliverydate']);
    }
}

echo "</td></tr>";
       /* account section */
        echo "<tr class='tab_bg_1'>";
        echo "<td>";
        if (!$config->isAccountSectionDisplayed()) {
            echo "<span style='display:none'>";
        }
        echo __("Account section", "order") . " :";
        if (!$config->isAccountSectionDisplayed()) {
            echo "</span>";
        }
        echo "</td>";

        echo "<td>";
        if (!$config->isAccountSectionDisplayed()) {
            echo "<span style='display:none'>";
        }
        if ($canedit) {
            PluginOrderAccountSection::Dropdown([
                'name'  => "plugin_order_accountsections_id",
                'value' => $this->fields["plugin_order_accountsections_id"],
            ]);
        } else {
            echo Dropdown::getDropdownName(
                "glpi_plugin_order_accountsections",
                $this->fields["plugin_order_accountsections_id"]
            );
        }

        if ($config->isAccountSectionMandatory()) {
            echo " <span class='red'>*</span>";
        }
        if (!$config->isAccountSectionDisplayed()) {
            echo "</span>";
        }
        echo "</td>";
        echo "<td colspan='2'></td>";
        echo "</tr>";

        echo "<tr class='tab_bg_1'>";
        echo "<td colspan='2' class='center'>" . $datestring;
        if (!$template && !empty($this->fields['template_name'])) {
            echo "<span class='small_space'>(" . __("Template name") . "&nbsp;: "
            . $this->fields['template_name'] . ")</span>";
        }
        echo "</td><td colspan='2'></td>";
        echo "</tr>";

        echo "<tr class='tab_bg_1'>";

       // Detalle del pedido
echo "<tr class='tab_bg_1'><td>" . __("Detalle del pedido") . ":  </td>";
echo "<td colspan='3' align='center'>";

// Verificar si el usuario tiene el perfil con ID 30
global $DB;
$userID = Session::getLoginUserID();
$query30 = "SELECT `profiles_id` FROM `glpi_profiles_users` WHERE `users_id` = $userID AND `profiles_id` = 30";
$result30 = $DB->query($query30);

// Verificar si el usuario tiene el perfil con ID 4
$query4 = "SELECT `profiles_id` FROM `glpi_profiles_users` WHERE `users_id` = $userID AND `profiles_id` = 4";
$result4 = $DB->query($query4);

// Comprobar si la consulta fue exitosa
if ($result30 === false || $result4 === false) {
    // Manejar el error en caso de que la consulta falle
    echo "Error en la consulta: " . ($result30 === false ? $DB->error() : $DB->error());
} else {
    // Verificar si se est� creando un nuevo pedido
    if (!$this->getID()) {
        // Para nuevos pedidos, permitir la edici�n
        echo "<textarea cols='40' rows='3' name='comment' class='form-control'>" . $this->fields["comment"] . "</textarea>";
    } else {
        // Si ya existe el pedido
        if ($DB->numrows($result30) > 0) {
            // Mostrar el comentario como texto sin permitir edici�n (solo lectura para el perfil 30)
            echo "<div class='form-control'>" . $this->fields["comment"] . "</div>";
        } elseif ($DB->numrows($result4) > 0) {
            // Permitir la edici�n solo para el perfil 4
            echo "<textarea cols='40' rows='3' name='comment' class='form-control'>" . $this->fields["comment"] . "</textarea>";
        } else {
            // Para los dem�s usuarios, mostrar como solo lectura
            echo "<div class='form-control'>" . $this->fields["comment"] . "</div>";
        }
    }
}

echo "</td></tr>";

echo "<tr class='tab_bg_1'>";
echo "<th colspan='2'>" . __("Actores") . "</th>";
if ($ID > 0 && !$template) {
    echo "<th colspan='2'></th>";
}
echo "</tr>";
//Autor del pedido
        echo "<tr class='tab_bg_1'>";
        echo "<td colspan='2'>";
        echo "<table class='format'>";
        echo "<tr class='tab_bg_1'><td>" . __("Author") . ":</td><td style='width: 170px;'>";
        if ($canedit) {
            if ($template == 'newcomp') {
                $value = Session::getLoginUserID();
            } else {
                $value = $this->fields['users_id'];
            }
            User::Dropdown([
                'name'   => 'users_id',
                'value'  => $value,
                'right'  => 'interface',
                'entity' => $this->fields["entities_id"],
                'width'  => '150px',
            ]);
        } else {
            if ($this->fields['users_id']) {
                $output = "";

                if ($user->getFromDB($this->fields['users_id'])) {
                    $output = formatUserName(
                        $this->fields['users_id'],
                        $user->fields['name'],
                        $user->fields['realname'],
                        $user->fields['firstname']
                    );
                }
                echo $output;
            }
        }
                echo "</td></tr>";
        echo "<tr class='tab_bg_1'>";
        echo "<td>" . __("Responsable") . ":</td>";
        echo "<td style='width: 170px;'>";
        if ($canedit) {
            if (empty($ID) || $ID < 0) {
                if (! empty($this->fields['users_id_delivery'])) {
                    $users_id = $this->fields['users_id_delivery'];
                } else {
                    $users_id = $config->getDefaultRecipient();
                }
            } else {
                $users_id = $this->fields['users_id_delivery'];
            }
            User::Dropdown([
                'name'   => 'users_id_delivery',
                'value'  => $users_id,
                'right'  => 'all',
                'entity' => $this->fields["entities_id"],
                'width'  => '150px',
            ]);
        } else {
            if ($this->fields['users_id_delivery']) {
                $user->getFromDB($this->fields['users_id_delivery']);
                $output = formatUserName(
                    $this->fields['users_id'],
                    $user->fields['name'],
                    $user->fields['realname'],
                    $user->fields['firstname']
                );
                echo $output;
            }
        }
          echo "</td>";
        echo "<td>" . __("Recipient group", "order") . ":</td>";
        echo "<td style='width: 180px;'>";
        if ($canedit) {
            if (empty($ID) || $ID < 0) {
                if (! empty($this->fields['groups_id_delivery'])) {
                    $groups_id = $this->fields['groups_id_delivery'];
                } else {
                    $groups_id = $config->getDefaultRecipientGroup();
                }
            } else {
                $groups_id = $this->fields['groups_id_delivery'];
            }
            Group::Dropdown([
                'name'  => 'groups_id_delivery',
                'value' => $groups_id,
                'width'  => '150px',
            ]);
        } else {
            echo Dropdown::getDropdownName('glpi_groups', $this->fields['groups_id_delivery']);
        }
        echo "</td>";
        echo "</tr></table></td>";

 if ($canedit || $cancancel) {
            $this->showFormButtons($options);
        } else {
            echo "</table></div>";
            Html::closeForm();
        }

        return true;

     }



    public function addStatusLog($orders_id, $status, $comments = '')
    {
        $changes = Dropdown::getDropdownName("glpi_plugin_order_orderstates", $status);

        if ($comments != '') {
            $changes .= " : " . $comments;
        }

        $this->addHistory($this->getType(), '', $changes, $orders_id);
    }


    public function updateOrderStatus($orders_id, $status, $comments = '')
    {
        /** @var array $CFG_GLPI */
        global $CFG_GLPI;

        $config = PluginOrderConfig::getConfig();

        $input["plugin_order_orderstates_id"] = $status;
        $input["id"]                          = $orders_id;
        $this->dohistory                      = false;

        if (!$this->isDelivered() && $status == $config->getDeliveredState()) {
            $input['deliverydate'] = $_SESSION['glpi_currenttime'];
        }

        $this->update($input);
        $this->addStatusLog($orders_id, $status, $comments);

        $this->dohistory = true;
        $notify          = true;
        $event           = "";

        if ($CFG_GLPI["use_notifications"]) {
            switch ($status) {
                case $config->getApprovedState():
                    $event = "validation";
                    break;
                case $config->getWaitingForApprovalState():
                    $event = "ask";
                    break;
                case $config->getCanceledState():
                    $event = "cancel";
                    break;
                case $config->getDeliveredState():
                    $event = "delivered";
                    break;
                case $config->getState():
                    $event = "statechange";
                    break;
               default:
                    $notify = false;
                    break;
            }
            if ($notify) {
                NotificationEvent::raiseEvent($event, $this, ['comments' => $comments]);
            }
        }

        return true;
    }


    public function addHistory($type, $old_value, $new_value, $ID)
    {
        $changes[0] = 0;
        $changes[1] = $old_value;
        $changes[2] = $new_value;
        Log::history($ID, $type, $changes, 0, Log::HISTORY_LOG_SIMPLE_MESSAGE);
    }


    public function deleteAllLinkWithItem($orders_id)
    {
        $detail  = new PluginOrderOrder_Item();
        $detail->deleteByCriteria([
            'plugin_order_orders_id' => $orders_id
        ]);
    }


    public function checkIfDetailExists($orders_id, $only_delivered = false)
    {
        if ($orders_id) {
            $where  = ['plugin_order_orders_id' => $orders_id];
            if ($only_delivered) {
                $where['states_id'] = ['>', 0];
            }
            return (countElementsInTable("glpi_plugin_order_orders_items", $where));
        } else {
            return false;
        }
    }


   
    public function showGenerationForm($ID)
    {
        /** @var array $CFG_GLPI */
        global $CFG_GLPI;

        echo "<form action='" . Plugin::getWebDir('order') . "/front/export.php?id=" . $ID
        . "&display_type=" . Search::PDF_OUTPUT_LANDSCAPE . "' method=\"GET\" target='_blank'>";
        echo "<div align=\"center\">";
        echo "<table class='tab_cadre_fixe'>";
        echo "<tr><th colspan='2'>" . __("Order Generation", "order") . "</th></tr>";

        if (PluginOrderPreference::atLeastOneTemplateExists()) {
            if ($this->getState() > PluginOrderOrderState::DRAFT || $this->canGenerateWithoutValidation()) {
                $template = PluginOrderPreference::checkPreferenceTemplateValue(Session::getLoginUserID());
                echo "<tr class='tab_bg_1'>";
                echo "<td>" . __("Use this model", "order") . "</td>";
                echo "<td>";
                PluginOrderPreference::dropdownFileTemplates($template);
                echo "</td>";
                echo "</tr>";

                if (PluginOrderPreference::atLeastOneSignatureExists()) {
                    echo "<tr class='tab_bg_1'>";
                    $signature = PluginOrderPreference::checkPreferenceSignatureValue(Session::getLoginUserID());
                    echo "<td class='center'>" . __("Use this sign", "order") . "</td>";
                    echo "<td class='center' >";
                    PluginOrderPreference::dropdownFileSignatures($signature);
                    echo "</td>";
                    echo "</tr>";
                } else {
                    echo Html::hidden('sign', ['value' => 0]);
                }
                echo "<tr class='tab_bg_1'>";
                echo "<td class='center' colspan='2'>";
                echo Html::hidden('id', ['value' => $ID]);
                echo "<input type='submit' value=\"" . __("Order Generation", "order") . "\" class='submit' >";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr class='tab_bg_1'>";
            echo "<td class='center'>";
            echo "<a href='" . $CFG_GLPI['root_doc'] . "/front/preference.php?forcetab=order_1'>"
            . __("Thanks to select a model into your preferences", "order") . "</a>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "</div>";
        Html::closeForm();
    }


    public function generateOrder($params)
    {
        /** @var \DBmysql $DB */
        global $DB;

        $ID        = $params['id'];
        $template  = $params['template'];
        $signature = $params['sign'];

        if ($template) {
            $config = ['PATH_TO_TMP' => GLPI_DOC_DIR . '/_tmp'];
            $odf = new Odtphp\Odf(PLUGIN_ORDER_TEMPLATE_DIR . "$template", $config);
            $this->getFromDB($ID);

            if (file_exists(PLUGIN_ORDER_TEMPLATE_CUSTOM_DIR . "custom.php")) {
                include_once(PLUGIN_ORDER_TEMPLATE_CUSTOM_DIR . "custom.php");
            }

            if (function_exists("plugin_order_getCustomFieldsForODT")) {
                plugin_order_getCustomFieldsForODT($ID, $template, $odf, $signature);
            } else {
                $PluginOrderOrder_Item         = new PluginOrderOrder_Item();
                $PluginOrderReference_Supplier = new PluginOrderReference_Supplier();

                try {
                    $odf->setImage('logo', PLUGIN_ORDER_TEMPLATE_LOGO_DIR . '/logo.jpg');
                } catch (\Odtphp\Exceptions\OdfException $e) {
                    $is_cs_happy = true;
                }

                $values = [
                    'title_order'           => __("Order number", "order"),
                    'num_order'             => $this->fields["num_order"],
                    'title_invoice_address' => __("Invoice address", "order"),
                    'comment_order'         => $this->fields["comment"],
                ];

                $entity = new Entity();
                $entity->getFromDB($this->fields["entities_id"]);
                $town   = '';

                if ($this->fields["entities_id"] != 0) {
                    $name_entity = $entity->fields["name"];
                } else {
                    $name_entity = __("Root entity");
                }

                $values['entity_name'] = $name_entity;
                if ($entity->getFromDB($this->fields["entities_id"])) {
                    $town = $entity->fields["town"];

                    $values['entity_address']  = $entity->fields["address"];
                    $values['entity_postcode'] = $entity->fields["postcode"];
                    $values['entity_town']     = $entity->fields["town"];
                    $values['entity_country']  = $entity->fields["country"];
                }

                $supplier = new Supplier();
                if ($supplier->getFromDB($this->fields["suppliers_id"])) {
                    $values['supplier_name']     = $supplier->fields["name"];
                    $values['supplier_address']  = $supplier->fields["address"];
                    $values['supplier_postcode'] = $supplier->fields["postcode"];
                    $values['supplier_town']     = $supplier->fields["town"];
                    $values['supplier_country']  = $supplier->fields["country"];
                }

                $location = new Location();
                if ($location->getFromDB($this->fields["locations_id"])) {
                    $values['title_delivery_address']   = __("Delivery address", "order");
                    $values['comment_delivery_address'] = $location->fields['comment'];
                }

                if ($town) {
                    $town = $town . ", ";
                }
                $order_date = Html::convDate($this->fields["order_date"]);
                $username   = getUserName(Session::getLoginUserID());

                $values['title_date_order'] = $town . __("The", "order") . " ";
                $values['date_order']       = $order_date;
                $values['title_sender']     = __("Issuer order", "order");
                $values['sender']           = $username;
                $values['title_budget']     = __("Budget");

                $budget = new Budget();
                if ($budget->getFromDB($this->fields["budgets_id"])) {
                    $values['budget'] = $budget->fields['name'];
                } else {
                    $values['budget'] = '';
                }

                $output = '';
                $contact = new Contact();
                if ($contact->getFromDB($this->fields["contacts_id"])) {
                    $output = formatUserName(
                        $contact->fields["id"],
                        "",
                        $contact->fields["name"],
                        $contact->fields["firstname"],
                        0
                    );
                }

                $values['title_recipient']    = __("Recipient", "order");
                $values['recipient']          = $output;
                $values['nb']                 = __("Quantity", "order");
                $values['title_item']         = __("Designation", "order");
                $values['title_ref']          = __("Reference");
                $values['HTPrice_item']       = __("Unit price", "order");
                $values['TVA_item']           = __("VAT", "order");
                $values['title_discount']     = __("Discount rate", "order");
                $values['HTPriceTotal_item']  = __("Sum tax free", "order");
                $values['ATIPriceTotal_item'] = __("Price ATI", "order");

                $listeArticles = [];

                $result = $PluginOrderOrder_Item->queryDetail($ID, 'glpi_plugin_order_references');

                while ($data = $DB->fetchArray($result)) {
                    $quantity = $PluginOrderOrder_Item->getTotalQuantityByRefAndDiscount(
                        $ID,
                        $data["id"],
                        $data["price_taxfree"],
                        $data["discount"]
                    );

                    $tax = new PluginOrderOrderTax();
                    $tax->getFromDB($data["plugin_order_ordertaxes_id"]);

                    $listeArticles[] = [
                        'quantity'         => $quantity,
                        'ref'              => $data["name"],
                        'taxe'             => $tax->getRate(),
                        'refnumber'        => $PluginOrderReference_Supplier->getReferenceCodeByReferenceAndSupplier(
                            $data["id"],
                            $this->fields["suppliers_id"]
                        ),
                        'price_taxfree'    => $data["price_taxfree"],
                        'discount'         => $data["discount"], false, 0,
                        'price_discounted' => $data["price_discounted"] * $quantity,
                        'price_ati'        => $data["price_ati"]
                    ];
                }

                $result = $PluginOrderOrder_Item->queryDetail($ID, 'glpi_plugin_order_referencefrees');

                while ($data = $DB->fetchArray($result)) {
                    $quantity = $PluginOrderOrder_Item->getTotalQuantityByRefAndDiscount(
                        $ID,
                        $data["id"],
                        $data["price_taxfree"],
                        $data["discount"]
                    );

                    $tax = new PluginOrderOrderTax();
                    $tax->getFromDB($data["plugin_order_ordertaxes_id"]);

                    $listeArticles[] = [
                        'quantity'         => $quantity,
                        'ref'              => $data["name"],
                        'taxe'             => $tax->getRate(),
                        'refnumber'        => $PluginOrderReference_Supplier->getReferenceCodeByReferenceAndSupplier(
                            $data["id"],
                            $this->fields["suppliers_id"]
                        ),
                        'price_taxfree'    => $data["price_taxfree"],
                        'discount'         => $data["discount"], false, 0,
                        'price_discounted' => $data["price_discounted"] * $quantity,
                        'price_ati'        => $data["price_ati"]
                    ];
                }

                $article = $odf->setSegment('articles');
                foreach ($listeArticles as $element) {
                    $articleValues = [];
                    $articleValues['nbA'] = $element['quantity'];
                    $articleValues['titleArticle'] = $element['ref'];
                    $articleValues['refArticle'] = $element['refnumber'];
                    $articleValues['TVAArticle'] = $element['taxe'];
                    $articleValues['HTPriceArticle'] = Html::formatNumber($element['price_taxfree']);
                    if ($element['discount'] != 0) {
                        $articleValues['discount'] = Html::formatNumber($element['discount']) . " %";
                    } else {
                        $articleValues['discount'] = "";
                    }
                    $articleValues['HTPriceTotalArticle'] = Html::formatNumber($element['price_discounted']);

                    $total_TTC_Article = $element['price_discounted'] * (1 + ($element['taxe'] / 100));
                    $articleValues['ATIPriceTotalArticle'] = Html::formatNumber($total_TTC_Article);

                   // Set variables in odt segment
                    foreach ($articleValues as $field => $val) {
                        try {
                            $article->setVars($field, $val, true, 'UTF-8');
                        } catch (\Odtphp\Exceptions\SegmentException $e) {
                            $is_cs_happy = true;
                        }
                    }
                    $article->merge();
                }

                $odf->mergeSegment($article);

                $prices = $PluginOrderOrder_Item->getAllPrices($ID);

               // total price (with postage)
                $tax = new PluginOrderOrderTax();
                $tax->getFromDB($this->fields["plugin_order_ordertaxes_id"]);

                $postagewithTVA = $PluginOrderOrder_Item->getPricesATI(
                    $this->fields["port_price"],
                    $tax->getRate()
                );

                $total_HT  = $prices["priceHT"] + $this->fields["port_price"];
                $total_TVA = $prices["priceTVA"] + $postagewithTVA - $this->fields["port_price"];
                $total_TTC = $prices["priceTTC"] + $postagewithTVA;

                if ($signature) {
                    try {
                        $odf->setImage('sign', PLUGIN_ORDER_SIGNATURE_DIR . $signature);
                    } catch (\Odtphp\Exceptions\OdfException $e) {
                        $is_cs_happy = true;
                    }
                } else {
                    try {
                        $odf->setImage('sign', '../pics/nothing.gif');
                    } catch (\Odtphp\Exceptions\OdfException $e) {
                        $is_cs_happy = true;
                    }
                }

                $name = Dropdown::getDropdownName("glpi_plugin_order_orderpayments", $this->fields["plugin_order_orderpayments_id"]);

                $values['title_totalht']      = __("Price tax free", "order");
                $values['totalht']            = Html::formatNumber($prices['priceHT']);
                $values['title_port']         = __("Price tax free with postage", "order");
                $values['totalht_port_price'] = Html::formatNumber($total_HT);
                $values['title_price_port']   = __("Postage", "order");
                $values['price_port_tva']     = " (" . Dropdown::getDropdownName("glpi_plugin_order_ordertaxes", $this->fields["plugin_order_ordertaxes_id"]) . "%)";
                $values['port_price']         = Html::formatNumber($postagewithTVA);
                $values['title_tva']          = __("VAT", "order");
                $values['totaltva']           = Html::formatNumber($total_TVA);
                $values['title_totalttc']     = __("Price ATI", "order");
                $values['totalttc']           = Html::formatNumber($total_TTC);
                $values['title_money']        = __("€", "order");
                $values['title_sign']         = __("Signature of issuing order", "order");

               // Set variables in odt template
                foreach ($values as $field => $val) {
                    try {
                        $odf->setVars($field, $val, true, 'UTF-8');
                    } catch (\Odtphp\Exceptions\OdfException $e) {
                        $is_cs_happy = true;
                    }
                }
            }

            $message = "_";
            if (Session::isMultiEntitiesMode()) {
                $entity = new Entity();
                $entity->getFromDB($this->fields['entities_id']);
                $message .= $entity->getName();
            }
            $message   .= "_" . $this->fields['num_order'] . "_";
            $message   .= Html::convDateTime($_SESSION['glpi_currenttime']);
            $message    = str_replace(" ", "_", $message);
            $outputfile = str_replace(".odt", $message . ".odt", $template);
           // We export the file
            $odf->exportAsAttachedFile($outputfile);
        }
    }


    public function transfer($ID, $entity)
    {
        /** @var \DBmysql $DB */
        global $DB;

        $supplier  = new PluginOrderOrder_Supplier();
        $reference = new PluginOrderReference();

        $this->getFromDB($ID);
        $this->update([
            "id"          => $ID,
            "entities_id" => $entity,
        ]);

        if ($supplier->getFromDBByOrder($ID)) {
            $supplier->update([
                "id"          => $supplier->fields["id"],
                "entities_id" => $entity,
            ]);
        }

        $query = "SELECT `plugin_order_references_id`
                FROM `glpi_plugin_order_orders_items`
                WHERE `plugin_order_orders_id` = '$ID'
                GROUP BY plugin_order_references_id";
        $result = $DB->query($query);
        if ($DB->numrows($result)) {
            while ($detail = $DB->fetchArray($result)) {
                $reference->transfer($detail["plugin_order_references_id"], $entity);
            }
        }
    }


    public static function showForBudget($budgets_id)
    {
        /** @var \DBmysql $DB */
        global $DB;

        $table = self::getTable();
        $query = "SELECT *
                FROM `$table`
                WHERE `budgets_id` = '$budgets_id'
                AND `is_template`='0'
                ORDER BY `entities_id`, `name` ";
        $result = $DB->query($query);

        echo "<div class='center'>";
        if ($nb = $DB->numrows($result)) {
            $start       = (isset($_REQUEST["start"])) ? $_REQUEST["start"] : 0;
            $query_limit = $query . " LIMIT " . (int) $start . "," . (int) $_SESSION['glpilist_limit'];

            Html::printAjaxPager(__("Linked orders", "order"), $start, $nb);

            echo "<table class='tab_cadre_fixe'>";
            echo "<tr>";
            echo "<th style='width:15%;'>" . _n("Action", "Actions", 2) . "</th>";
            echo "<th>" . __("Name") . "</th>";
            echo "<th>" . __("Order status", "order") . "</th>";
            echo "<th>" . __("Entity") . "</th>";
            echo "<th>" . __("Price tax free", "order") . "</th>";
            echo "<th>" . __("Price ATI", "order") . "</th>";
            echo "</tr>";

            $total = 0;
            foreach ($DB->request($query_limit) as $data) {
                $PluginOrderOrder_Item = new PluginOrderOrder_Item();
                $prices                = $PluginOrderOrder_Item->getAllPrices($data["id"]);

                $tax = new PluginOrderOrderTax();
                $tax->getFromDB($data["plugin_order_ordertaxes_id"]);

                $postagewithTVA        = $PluginOrderOrder_Item->getPricesATI(
                    $data["port_price"],
                    $tax->getRate()
                );

                //if state is cancel do not decremente total already use
                if ($data['plugin_order_orderstates_id'] < 5) {
                     $total += $prices["priceHT"];
                }
                $link   = Toolbox::getItemTypeFormURL(__CLASS__);

                echo "<tr class='tab_bg_1' align='center'>";
                echo "<td>";
                echo "<a href=\"" . $link . "?unlink_order=unlink_order&id=" . $data["id"] . "\">"
                 . __("Unlink", "order") . "</a>";
                echo "</td>";
                echo "<td>";

                if (self::canView()) {
                    echo "<a href=\"" . $link . "?id=" . $data["id"] . "\">" . $data["name"] . "</a>";
                } else {
                    echo $data["name"];
                }
                echo "</td>";

                echo "<td>";
                echo Dropdown::getDropdownName(
                    PluginOrderOrderState::getTable(),
                    $data["plugin_order_orderstates_id"]
                );
                echo "</td>";

                echo "<td>";
                echo Dropdown::getDropdownName("glpi_entities", $data["entities_id"]);
                echo "</td>";

                echo "<td>";
                echo Html::formatNumber($prices["priceHT"]);
                echo "</td>";

                echo "<td>";
                echo Html::formatNumber($prices["priceTTC"] + $postagewithTVA);
                echo "</td>";

                echo "</tr>";
            }
            echo "</table></div>";

            echo "<br><div class='center'>";
            echo "<table class='tab_cadre' width='15%'>";
            echo "<tr class='tab_bg_2'><td>" . __("Budget already used") . ": </td>";
            echo "<td>";
            echo Html::formatNumber($total) . "</td>";
            echo "</tr>";
            echo "</table></div>";
        } else {
            echo "<table class='tab_cadre_fixe'>";
            echo "<tr><td class='center'>" . __("No item to display") . "</td></tr>";
            echo "</table>";
        }
    }


    public function canStillUseBudget($input)
    {
        $budget = new Budget();
        $budget->getFromDB($input['budgets_id']);

       //If no begin date on a budget : do not display a warning
        if (empty($budget->fields['begin_date'])) {
            return true;
        } else {
           //There's a begin date and order date is prior to it
            if ($input['order_date'] < $budget->getField('begin_date')) {
                return false;
            }
           //There's an end date and order date is above it
            if (
                !empty($budget->fields['end_date'])
                && $input['order_date'] > $budget->getField('end_date')
            ) {
                return false;
            }
        }

        return true;
    }


    public static function updateBillState($ID)
    {
        $all_paid    = true;
        $order_items = getAllDataFromTable(
            PluginOrderOrder_Item::getTable(),
            ['plugin_order_orders_id' => $ID]
        );
        foreach ($order_items as $item) {
            if ($item['plugin_order_billstates_id'] == PluginOrderBillState::NOTPAID) {
                $all_paid = false;
            }
        }

        $order = new self();
        $order->getFromDB($ID);
        if ($all_paid) {
            $state = PluginOrderBillState::PAID;
        } else {
            $state = PluginOrderBillState::NOTPAID;
        }
        $order->update([
            'id'                         => $ID,
            'plugin_order_billstates_id' => $state
        ]);
    }


    public function isOverBudget($ID)
    {
        /** @var \DBmysql $DB */
        global $DB;
       //Do not check if it's a template
        if ($this->fields['is_template']) {
            return PluginOrderOrder::ORDER_IS_UNDER_BUDGET;
        }
       // Compute all prices for BUDGET
        $table = $this->getTable();
        $query = "SELECT *
                FROM `$table`
                WHERE `budgets_id` = '{$this->fields['budgets_id']}'";

       // Get BUDGET
        $budget = new Budget();
        if (!$budget->getFromDB($this->fields['budgets_id'])) {
            return false;
        }

        if ($budget->fields['value'] == 0) {
            return PluginOrderOrder::ORDER_IS_UNDER_BUDGET;
        }

        $total_HT = 0;
        foreach ($DB->request($query) as $data) {
            $item      = new PluginOrderOrder_Item();
            $prices    = $item->getAllPrices($data['id']);
            $total_HT += $prices["priceHT"] + $data['port_price'];
        }

       // Compare BUDGET value to TOTAL_HT value
        if ($total_HT > $budget->getField('value')) {
            return PluginOrderOrder::ORDER_IS_OVER_BUDGET;
        } else if ($total_HT == $budget->getField('value')) {
            return PluginOrderOrder::ORDER_IS_EQUAL_BUDGET;
        } else {
            return PluginOrderOrder::ORDER_IS_UNDER_BUDGET;
        }
    }


    public function displayAlertOverBudget($type)
    {
        $message = "";
        switch ($type) {
            case PluginOrderOrder::ORDER_IS_OVER_BUDGET:
                $message = "<h3><span class='red'>"
                       . __("Total orders related with this budget is greater than its value.", "order")
                       . "</span></h3>";
                break;
            case PluginOrderOrder::ORDER_IS_EQUAL_BUDGET:
                $message = "<h3><span class='red'>"
                       . __("Total orders related with this budget is equal to its value.", "order")
                       . "</span></h3>";
                break;
        }

        if ($type != PluginOrderOrder::ORDER_IS_UNDER_BUDGET) {
            echo "<div class='box' style='margin-bottom:20px;'>";
            echo "<div class='box-tleft'><div class='box-tright'><div class='box-tcenter'>";
            echo "</div></div></div>";
            echo "<div class='box-mleft'><div class='box-mright'><div class='box-mcenter'>";
            echo $message;
            echo "</div></div></div>";
            echo "<div class='box-bleft'><div class='box-bright'><div class='box-bcenter'>";
            echo "</div></div></div>";
            echo "</div>";
        }
    }


    public function unlinkBudget($ID)
    {
        $order = new self();
        $order->getFromDB($ID);
        $order->update([
            'id'             => $ID,
            'budgets_id'     => 0,
            '_unlink_budget' => 1
        ]);
    }


    public static function cronComputeLateOrders($task)
    {
        /** @var array $CFG_GLPI */
        /** @var \DBmysql $DB */
        global $CFG_GLPI, $DB;

        $nblate = 0;
        $table  = self::getTable();

        foreach (getAllDataFromTable($table, ['is_template' => 0]) as $values) {
            $order = new self();
            $order->fields = $values;
            if (!$order->fields['is_late'] && $order->shouldBeAlreadyDelivered(true)) {
                $order->setIsLate();
                $nblate++;
            }
        }
        $task->addVolume($nblate);

        if ($CFG_GLPI["use_notifications"]) {
            $message = __("Order is late", "order");
            $alert   = new Alert();
            $config  = PluginOrderConfig::getConfig();

            $entities[] = 0;
            foreach ($DB->request("SELECT `id` FROM `glpi_entities` ORDER BY `id` ASC") as $entity) {
                $entities[] = $entity['id'];
            }
            foreach ($entities as $entity) {
                $query_alert = "SELECT `$table`.`id` AS id,
                                   `$table`.`name` AS name,
                                   `$table`.`num_order` AS num_order,
                                   `$table`.`order_date` AS order_date,
                                   `$table`.`duedate` AS duedate,
                                   `$table`.`deliverydate` AS deliverydate,
                                   `$table`.`comment` AS comment,
                                   `$table`.`plugin_order_orderstates_id` AS plugin_order_orderstates_id,
                                   `glpi_alerts`.`id` AS alertID,
                                   `glpi_alerts`.`date`
                            FROM `$table`
                            LEFT JOIN `glpi_alerts`
                              ON `$table`.`id` = `glpi_alerts`.`items_id`
                              AND `glpi_alerts`.`itemtype` = '" . __CLASS__ . "'
                            WHERE `$table`.`entities_id` = '" . $entity . "'
                              AND `glpi_alerts`.`date` IS NULL
                              AND `$table`.`is_late`='1'
                              AND `plugin_order_orderstates_id`!='" . $config->getDeliveredState() . "';";
                $orders = [];
                foreach ($DB->request($query_alert) as $order) {
                    $orders[$order['id']] = $order;
                }

                if (!empty($orders)) {
                    $options['entities_id'] = $entity;
                    $options['orders']      = $orders;
                    if (NotificationEvent::raiseEvent('duedate', new PluginOrderOrder(), $options)) {
                        if ($task) {
                             $task->log(Dropdown::getDropdownName("glpi_entities", $entity)
                             . "&nbsp;:  $message\n");
                             $task->addVolume(1);
                        } else {
                            Session::addMessageAfterRedirect(Dropdown::getDropdownName("glpi_entities", $entity) .
                                                      "&nbsp;:  $message");
                        }
                        $input["type"]     = Alert::THRESHOLD;
                        $input["itemtype"] = 'PluginOrderOrder';

                       // add alerts
                        foreach ($orders as $ID => $tmp) {
                            $input["items_id"] = $ID;
                            $alert->add($input);
                            unset($alert->fields['id']);
                        }
                    } else {
                        if ($task) {
                            $task->log(Dropdown::getDropdownName("glpi_entities", $entity) .
                                "&nbsp;: Send order alert failed\n");
                        } else {
                            Session::addMessageAfterRedirect(Dropdown::getDropdownName("glpi_entities", $entity) .
                                                      "&nbsp;: Send order alert failed", false, ERROR);
                        }
                    }
                }
            }
        }
        return true;
    }


    public static function addDocumentCategory(Document $document)
    {

        $config   = PluginOrderConfig::getConfig();

        if (
            isset($document->input['itemtype'])
            && $document->input['itemtype'] == __CLASS__
            && !$document->input['documentcategories_id']
        ) {
            $category = $config->getDefaultDocumentCategory();
            if ($category) {
                $document->update([
                    'id'                    => $document->getID(),
                    'documentcategories_id' => $category,
                ]);
            }
        }

       // Fomrat document name
        if (
            isset($document->input['itemtype'])
            && $document->input['itemtype'] == __CLASS__
            && $document->input['documentcategories_id']
            && $config->canRenameDocuments()
        ) {
           // Get document category
            $documentCategory = new PluginOrderDocumentCategory();
            if (!$documentCategory->getFromDBByCrit(['documentcategories_id' => $document->input['documentcategories_id']])) {
                $documentCategory->getEmpty();
            }
           // Get order linked to document
            $document_item = new Document_Item();
            if ($document_item->getFromDBByCrit(['documents_id' => $document->fields['id'], 'itemtype' => self::getType()])) {
               // Update document name
                $order = new self();
                $order->getFromDB($document_item->fields['items_id']);
                $extension = explode('.', $document->fields['filename']);
                $tag = "";
                if (!empty($documentCategory->fields['documentcategories_prefix'])) {
                    $tag = $documentCategory->fields['documentcategories_prefix'] . "-";
                }
                $document->fields['filename'] = $tag . $order->fields['num_order'] . "." . $extension[1];
                $document->updateInDB(['filename']);
            }
        }
    }


    public function getForbiddenStandardMassiveAction()
    {

        $forbidden = parent::getForbiddenStandardMassiveAction();
        $forbidden[] = 'update';
        return $forbidden;
    }


   /**
    * @since version 0.85
    *
    * @see CommonDBTM::showMassiveActionsSubForm()
    **/
    public static function showMassiveActionsSubForm(MassiveAction $ma)
    {
        switch ($ma->getAction()) {
            case 'transfert':
                Entity::dropdown();
                echo "&nbsp;" .
                  Html::submit(_x('button', 'Post'), ['name' => 'massiveaction']);
                return true;
        }
        return "";
    }


    public function getSpecificMassiveActions($checkitem = null)
    {

        $isadmin = static::canUpdate();
        $actions = parent::getSpecificMassiveActions($checkitem);

        if ($isadmin) {
            if (
                Session::haveRight('transfer', READ)
                && Session::isMultiEntitiesMode()
            ) {
                $actions['PluginOrderOrder:transfert'] = __('Transfer');
            }
        }

        return $actions;
    }


   /**
    * @since version 0.85
    *
    * @see CommonDBTM::processMassiveActionsForOneItemtype()
    **/
    public static function processMassiveActionsForOneItemtype(MassiveAction $ma, CommonDBTM $item, array $ids)
    {
        switch ($ma->getAction()) {
            case "transfert":
                $input = $ma->getInput();
                $entities_id = $input['entities_id'];

                foreach ($ids as $id) {
                    if ($item->getFromDB($id)) {
                        $item->update([
                            "id"          => $id,
                            "entities_id" => $entities_id,
                            "update"      => __('Update'),
                        ]);
                         $ma->itemDone($item->getType(), $id, MassiveAction::ACTION_OK);
                    }
                }
                return;
               break;
        }
        return;
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
        if (!$DB->tableExists($table) && !$DB->tableExists("glpi_plugin_order")) {
            $migration->displayMessage("Installing $table");

            $query = "CREATE TABLE IF NOT EXISTS `glpi_plugin_order_orders` (
               `id` int {$default_key_sign} NOT NULL auto_increment,
               `entities_id` int {$default_key_sign} NOT NULL default '0',
               `is_template` tinyint NOT NULL default '0',
               `template_name` varchar(255) default NULL,
               `is_recursive` tinyint NOT NULL default '0',
               `name` varchar(255) default NULL,
               `num_order` varchar(255) default NULL,
               `budgets_id` int {$default_key_sign} NOT NULL default '0' COMMENT 'RELATION to glpi_budgets (id)',
               `plugin_order_ordertaxes_id` int {$default_key_sign} NOT NULL default '0' COMMENT 'RELATION to glpi_plugin_order_ordertaxes (id)',
               `plugin_order_orderpayments_id` int {$default_key_sign} NOT NULL default '0' COMMENT 'RELATION to glpi_plugin_order_orderpayments (id)',
               `order_date` date default NULL,
               `duedate` date default NULL,
               `deliverydate` date default NULL,
               `is_late` tinyint NOT NULL default '0',
               `suppliers_id` int {$default_key_sign} NOT NULL default '0' COMMENT 'RELATION to glpi_suppliers (id)',
               `contacts_id` int {$default_key_sign} NOT NULL default '0' COMMENT 'RELATION to glpi_contacts (id)',
               `plugin_order_accountsections_id` int {$default_key_sign} NOT NULL default '0' COMMENT 'RELATION to plugin_order_accountsections (id)',
               `locations_id` int {$default_key_sign} NOT NULL default '0' COMMENT 'RELATION to glpi_locations (id)',
               `plugin_order_orderstates_id` int {$default_key_sign} NOT NULL default 1,
               `plugin_order_billstates_id` int {$default_key_sign} NOT NULL default 0,
               `port_price` float NOT NULL default 0,
               `global_discount` float NOT NULL default 0,
               `comment` text,
               `notepad` longtext,
               `is_deleted` tinyint NOT NULL default '0',
               `users_id` int {$default_key_sign} NOT NULL default '0',
               `groups_id` int {$default_key_sign} NOT NULL default '0',
               `users_id_delivery` int {$default_key_sign} NOT NULL default '0',
               `groups_id_delivery` int {$default_key_sign} NOT NULL default '0',
               `plugin_order_ordertypes_id` int {$default_key_sign} NOT NULL default '0' COMMENT 'RELATION to glpi_plugin_order_ordertypes (id)',
               `date_mod` timestamp NULL default NULL,
               `is_helpdesk_visible` tinyint NOT NULL default '1',
               PRIMARY KEY  (`id`),
               KEY `name` (`name`),
               KEY `entities_id` (`entities_id`),
               KEY `plugin_order_ordertaxes_id` (`plugin_order_ordertaxes_id`),
               KEY `plugin_order_orderpayments_id` (`plugin_order_orderpayments_id`),
               KEY `states_id` (`plugin_order_orderstates_id`),
               KEY `suppliers_id` (`suppliers_id`),
               KEY `contacts_id` (`contacts_id`),
               KEY `plugin_order_accountsections_id` (`plugin_order_accountsections_id`),
               KEY `locations_id` (`locations_id`),
               KEY `is_late` (`is_late`),
               KEY `is_template` (`is_template`),
               KEY `is_deleted` (`is_deleted`),
               KEY date_mod (date_mod)
            ) ENGINE=InnoDB DEFAULT CHARSET={$default_charset} COLLATE={$default_collation} ROW_FORMAT=DYNAMIC;";
            $DB->query($query) or die($DB->error());

            CronTask::Register(__CLASS__, 'computeLateOrders', HOUR_TIMESTAMP, [
                'param' => 24,
                'mode'  => CronTask::MODE_EXTERNAL
            ]);
        } else {
           //Upgrade
            $migration->displayMessage("Upgrading $table");

            if ($DB->tableExists('glpi_plugin_order')) {
               //Update to 1.1.0
                $migration->addField('glpi_plugin_order', "port_price", "FLOAT NOT NULL default '0'");
                $migration->addField('glpi_plugin_order', "taxes", "FLOAT NOT NULL default '0'");
                if ($DB->fieldExists("glpi_plugin_order", "numordersupplier")) {
                    foreach ($DB->request("glpi_plugin_order") as $data) {
                        $query = "INSERT INTO  `glpi_plugin_order_suppliers`
                              (`ID`, `FK_order`, `numorder`, `numbill`) VALUES
                              (NULL, '" . $data["ID"] . "', '" . $data["numordersupplier"] . "', '" . $data["numbill"] . "') ";
                        $DB->query($query) or die($DB->error());
                    }
                }
                $migration->dropField('glpi_plugin_order', 'numordersupplier');
                $migration->dropField('glpi_plugin_order', 'numbill');
                $migration->migrationOneTable('glpi_plugin_order');
            }

           //1.2.0
            $domigration_itemtypes = false;
            if ($DB->tableExists('glpi_plugin_order')) {
                $migration->renameTable("glpi_plugin_order", $table);
                $domigration_itemtypes = true;
            }

            $migration->changeField($table, "ID", "id", "int {$default_key_sign} NOT NULL AUTO_INCREMENT");
            $migration->changeField(
                $table,
                "FK_entities",
                "entities_id",
                "int {$default_key_sign} NOT NULL default 0"
            );
            $migration->changeField(
                $table,
                "recursive",
                "is_recursive",
                "tinyint NOT NULL default 0"
            );
            $migration->changeField(
                $table,
                "name",
                "name",
                "varchar(255) default NULL"
            );
            $migration->changeField(
                $table,
                "budget",
                "budgets_id",
                "int {$default_key_sign} NOT NULL default '0' COMMENT 'RELATION to glpi_budgets (id)'"
            );
            $migration->changeField(
                $table,
                "numorder",
                "num_order",
                "varchar(255) default NULL"
            );
            $migration->changeField(
                $table,
                "taxes",
                "plugin_order_ordertaxes_id",
                "int {$default_key_sign} NOT NULL default '0' COMMENT 'RELATION to glpi_plugin_order_ordertaxes (id)'"
            );
            $migration->changeField(
                $table,
                "payment",
                "plugin_order_orderpayments_id",
                "int {$default_key_sign} NOT NULL default '0' COMMENT 'RELATION to glpi_plugin_order_orderpayments (id)'"
            );
            $migration->changeField(
                $table,
                "date",
                "order_date",
                "date default NULL"
            );
            $migration->changeField(
                $table,
                "FK_enterprise",
                "suppliers_id",
                "int {$default_key_sign} NOT NULL default '0' COMMENT 'RELATION to glpi_suppliers (id)'"
            );
            $migration->changeField(
                $table,
                "FK_contact",
                "contacts_id",
                "int {$default_key_sign} NOT NULL default '0' COMMENT 'RELATION to glpi_contacts (id)'"
            );
            $migration->changeField(
                $table,
                "location",
                "locations_id",
                "int {$default_key_sign} NOT NULL default '0' COMMENT 'RELATION to glpi_locations (id)'"
            );
            $migration->changeField(
                $table,
                "status",
                "states_id",
                "int {$default_key_sign} NOT NULL default '0'"
            );
            $migration->changeField(
                $table,
                "comment",
                "comment",
                "text"
            );
            $migration->changeField(
                $table,
                "Comentarios",
                "notepad",
                "longtext"
            );
            $migration->changeField(
                $table,
                "deleted",
                "is_deleted",
                "tinyint NOT NULL default '0'"
            );
            $migration->addKey($table, "name");
            $migration->addKey($table, "entities_id");
            $migration->addKey($table, "plugin_order_ordertaxes_id");
            $migration->addKey($table, "plugin_order_orderpayments_id");
            $migration->addKey($table, "states_id");
            $migration->addKey($table, "suppliers_id");
            $migration->addKey($table, "contacts_id");
            $migration->addKey($table, "locations_id");
            $migration->addKey($table, "is_deleted");
            $migration->migrationOneTable($table);

           //Only migrate itemtypes when it's only necessary, otherwise it breaks upgrade procedure !
            if ($domigration_itemtypes) {
                Plugin::migrateItemType(
                    [3150 => 'PluginOrderOrder'],
                    ["glpi_savedsearches", "glpi_savedsearches_users",
                        "glpi_displaypreferences", "glpi_documents_items",
                        "glpi_infocoms", "glpi_logs", "glpi_tickets"
                    ],
                    []
                );
            }

            if ($DB->tableExists("glpi_plugin_order_budgets")) {
               //Manage budgets (here because class has been remove since 1.4.0)
                $migration->changeField("glpi_plugin_order_budgets", "ID", "id", " int {$default_key_sign} NOT NULL auto_increment");
                $migration->changeField(
                    "glpi_plugin_order_budgets",
                    "FK_entities",
                    "entities_id",
                    "int {$default_key_sign} NOT NULL default '0'"
                );
                $migration->changeField(
                    "glpi_plugin_order_budgets",
                    "FK_budget",
                    "budgets_id",
                    "int {$default_key_sign} NOT NULL default '0'"
                );
                $migration->changeField(
                    "glpi_plugin_order_budgets",
                    "comments",
                    "comment",
                    "text"
                );
                $migration->changeField(
                    "glpi_plugin_order_budgets",
                    "deleted",
                    "is_deleted",
                    "tinyint NOT NULL default '0'"
                );
                $migration->changeField(
                    "glpi_plugin_order_budgets",
                    "startdate",
                    "start_date",
                    "date default NULL"
                );
                $migration->changeField(
                    "glpi_plugin_order_budgets",
                    "enddate",
                    "end_date",
                    "date default NULL"
                );
                $migration->changeField(
                    "glpi_plugin_order_budgets",
                    "value",
                    "value",
                    "float NOT NULL DEFAULT '0'"
                );
                $migration->addKey("glpi_plugin_order_budgets", "entities_id");
                $migration->addKey("glpi_plugin_order_budgets", "is_deleted");
                $migration->migrationOneTable("glpi_plugin_order_budgets");

                Plugin::migrateItemType(
                    [3153 => 'PluginOrderBudget'],
                    ["glpi_savedsearches", "glpi_savedsearches_users",
                        "glpi_displaypreferences", "glpi_documents_items",
                        "glpi_infocoms", "glpi_logs", "glpi_tickets"
                    ],
                    []
                );

               //Manage budgets migration before dropping the table
                $budget = new Budget();
                $matchings = [
                    'budgets_id'  => 'id',
                    'name'        => 'name',
                    'start_date'  => 'begin_date',
                    'end_date'    => 'end_date',
                    'value'       => 'value',
                    'comment'     => 'comment',
                    'entities_id' => 'entities_id',
                    'is_deleted'  => 'is_deleted'
                ];
                foreach (getAllDataFromTable("glpi_plugin_order_budgets") as $data) {
                    $tmp    = [];
                    foreach ($matchings as $old => $new) {
                        if (!is_null($data[$old])) {
                            $tmp[$new] = $data[$old];
                        }
                    }

                    $tmp['comment'] = Toolbox::addslashes_deep($tmp['comment']);

                   //Budget already exists in the core: update it
                    if ($budget->getFromDB($data['budgets_id'])) {
                        $budget->update($tmp);
                    } else {
                       //Budget doesn't exists in the core: create it
                        unset($tmp['id']);
                        $budget->add($tmp);
                    }
                }

                $DB->query("DROP TABLE `glpi_plugin_order_budgets`");

                foreach (
                    ['glpi_displaypreferences', 'glpi_documents_items', 'glpi_savedsearches',
                        'glpi_logs'
                    ] as $t
                ) {
                    $DB->query("DELETE FROM `$t` WHERE `itemtype` = 'PluginOrderBudget'");
                }
            }

           //1.3.0
            $migration->addField(
                $table,
                "plugin_order_ordertypes_id",
                "int {$default_key_sign} NOT NULL default '0' COMMENT 'RELATION to glpi_plugin_order_ordertypes (id)'"
            );
            $migration->migrationOneTable($table);

           //1.4.0
            if (
                $migration->changeField(
                    "glpi_plugin_order_orders",
                    "states_id",
                    "plugin_order_orderstates_id",
                    "int {$default_key_sign} NOT NULL default 1"
                )
            ) {
                $migration->migrationOneTable($table);
                $query = "UPDATE `glpi_plugin_order_orders` SET `plugin_order_orderstates_id`=`plugin_order_orderstates_id`+1";
                $DB->query($query) or die($DB->error());
            }

            $migration->addField($table, "duedate", "DATETIME NULL");
            $migration->migrationOneTable($table);

           //1.5.0
            if ($DB->tableExists("glpi_dropdown_plugin_order_status")) {
                $DB->query("DROP TABLE `glpi_dropdown_plugin_order_status`") or die($DB->error());
            }

            if ($DB->tableExists("glpi_plugin_order_mailing")) {
                $DB->query("DROP TABLE IF EXISTS `glpi_plugin_order_mailing`;") or die($DB->error());
            }

            $migration->addField($table, 'plugin_order_billstates_id', "int {$default_key_sign} NOT NULL default 0");

           //1.5.2
            $migration->addField($table, 'deliverydate', "DATETIME NULL");
            $migration->addField($table, "is_late", "TINYINT NOT NULL DEFAULT '0'");
            $migration->addKey($table, "is_late");
            if (!countElementsInTable('glpi_crontasks', ['name' => 'computeLateOrders'])) {
                CronTask::Register(__CLASS__, 'computeLateOrders', HOUR_TIMESTAMP, [
                    'param' => 24,
                    'mode'  => CronTask::MODE_EXTERNAL
                ]);
            }

            $migration->migrationOneTable($table);

            if ($migration->addField($table, "is_template", "tinyint NOT NULL DEFAULT 0")) {
                $migration->addField($table, "template_name", "VARCHAR(255) default NULL");
                $migration->migrationOneTable($table);
            }

            $migration->addField($table, "users_id", "INT {$default_key_sign} NOT NULL DEFAULT '0'");
            $migration->addField($table, "groups_id", "INT {$default_key_sign} NOT NULL DEFAULT '0'");
            $migration->addField($table, "users_id_delivery", "INT {$default_key_sign} NOT NULL DEFAULT '0'");
            $migration->addField($table, "groups_id_delivery", "INT {$default_key_sign} NOT NULL DEFAULT '0'");

           //1.7.0
            $migration->addField($table, "date_mod", "timestamp");
            $migration->addKey($table, "date_mod");

           //1.7.2
            $migration->addField($table, "is_helpdesk_visible", "bool", ['value' => 1]);
            $migration->migrationOneTable($table);

           //Displayprefs
            $prefs = [1 => 1, 2 => 2, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 10 => 10];
            foreach ($prefs as $num => $rank) {
                if (
                    !countElementsInTable(
                        "glpi_displaypreferences",
                        ['itemtype' => 'PluginOrderOrder',
                            'num' => $num,
                            'users_id' => 0
                        ]
                    )
                ) {
                    $DB->query("INSERT INTO glpi_displaypreferences
                                  (`itemtype`, `num`, `rank`, `users_id`)
                           VALUES ('PluginOrderOrder','$num','$rank','0');");
                }
            }

           //Remove unused notifications
            $notification = new Notification();
            $notification->deleteByCriteria("`itemtype`='PluginOrderOrder_Item'");

           //2.7.0
            $migration->addField($table, "global_discount", "FLOAT NOT NULL default '0'");

           //2.7.3
            $migration->changeField($table, "plugin_order_billstates_id", "plugin_order_billstates_id", "int {$default_key_sign} NOT NULL DEFAULT 0");
        }

       // Remove RIGHT_OPENTICKET
        /** @phpstan-ignore-next-line */
        $right_openticket = self::RIGHT_OPENTICKET;
        $DB->update(
            ProfileRight::getTable(),
            ['rights' => new QueryExpression($DB->quoteName('rights') . ' & ~' . $right_openticket)],
            ['name' => self::$rightname]
        );

        if (!$DB->fieldExists($table, 'plugin_order_accountsections_id')) {
            $migration->addField($table, 'plugin_order_accountsections_id', "int {$default_key_sign} NOT NULL DEFAULT 0", ['after' => 'contacts_id']);
            $migration->migrationOneTable($table);
        }
    }


    public static function uninstall()
    {
        /** @var \DBmysql $DB */
        global $DB;

        $tables = ["glpi_displaypreferences", "glpi_documents_items", "glpi_savedsearches",
            "glpi_logs"
        ];
        foreach ($tables as $table) {
            $query = "DELETE FROM `$table` WHERE `itemtype`='" . __CLASS__ . "'";
            $DB->query($query);
        }

       //Old table name
        $DB->query("DROP TABLE IF EXISTS `glpi_plugin_order`") or die($DB->error());

       //Current table name
        $DB->query("DROP TABLE IF EXISTS  `" . self::getTable() . "`") or die($DB->error());
    }


    public static function getIcon()
    {
        return "fas fa-shopping-cart";
    }
}
