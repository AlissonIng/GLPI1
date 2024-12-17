<?php

/**
 * ---------------------------------------------------------------------
 *
 * GLPI - Gestionnaire Libre de Parc Informatique
 *
 * http://glpi-project.org
 *
 * @copyright 2015-2024 Teclib' and contributors.
 * @copyright 2003-2014 by the INDEPNET Development Team.
 * @licence   https://www.gnu.org/licenses/gpl-3.0.html
 *
 * ---------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of GLPI.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * ---------------------------------------------------------------------
 */

class TicketSatisfaction extends CommonDBTM
{
    public static $rightname = 'ticket';

      public $dohistory         = true;
    public $history_blacklist = ['date_answered'];
    public static function getTypeName($nb = 0)
    {
        return __('Satisfaction');
    }

    /**
     * for use showFormHeader
     **/
    public static function getIndexName()
    {
        return 'tickets_id';
    }


    public function getLogTypeID()
    {
        return ['Ticket', $this->fields['tickets_id']];
    }


    public static function canUpdate()
    {
        return (Session::haveRight('ticket', READ));
    }


    /**
     * Is the current user have right to update the current satisfaction
     *
     * @return boolean
     **/
    public function canUpdateItem()
    {

        $ticket = new Ticket();
        if (!$ticket->getFromDB($this->fields['tickets_id'])) {
            return false;
        }

       // you can't change if your answer >
        if (
            !is_null($this->fields['date_answered'])
            && ((time() - strtotime($this->fields['date_answered'])) )
        ) {
            return false;
        }

        if (
            $ticket->isUser(CommonITILActor::REQUESTER, Session::getLoginUserID())
            || ($ticket->fields["users_id_recipient"] === Session::getLoginUserID() && Session::haveRight('ticket', Ticket::SURVEY))
            || (isset($_SESSION["glpigroups"])
              && $ticket->haveAGroup(CommonITILActor::REQUESTER, $_SESSION["glpigroups"]))
        ) {
            return true;
        }
        return false;
    }


    /**
     * form for satisfaction
     *
     * @param $ticket Object : the ticket
     **/
    public function showSatisactionForm($ticket)
    {

        $tid                 = $ticket->fields['id'];
        $options             = [];
        $options['colspan']  = 1;

       // for external inquest => link
        if ($this->fields["type"] == 2) {
            $url = Entity::generateLinkSatisfaction($ticket);
            echo "<div class='center spaced'>" .
              "<a href='$url'>" . __('External survey') . "</a><br>($url)</div>";
        } else { // for internal inquest => form
// Extraer el nombre del solicitante
$ticket = new Ticket();
if ($ticket->getFromDB($tid)) { 
    $requester_custom_name = $ticket->fields['requester_custom_name'];
} else {
    $requester_custom_name = ''; // O algún valor predeterminado
}

// Mostrar el encabezado del formulario
$this->showFormHeader($options);

// Configurar la satisfacción por defecto si no está establecida
if (is_null($this->fields["satisfaction"])) {
    $this->fields["satisfaction"] = 1; // Cambia el valor por defecto si es necesario
}

// Fila para la satisfacción
echo "<tr class='tab_bg_2'>";
echo "<td>" . __('Satisfaction with the resolution of the ticket') . "</td>";
echo "<td>";
echo "<input type='hidden' name='tickets_id' value='$tid'>";

// Muestra las caritas en lugar de estrellas
$satisfactionValue = $this->fields["satisfaction"];
echo "<div class='satisfaction-survey' style='display: flex; justify-content: center; align-items: flex-end;'>"; // Flexbox para alinear

// Caritas (orden: feliz, neutral, triste)
$emojis = [
    3 => '&#128522;', // ?? (feliz)
    2 => '&#128528;', // ?? (normal)
    1 => '&#128577;'  // ?? (triste)
];

$labels = [
    3 => __('Bueno'),   // Etiqueta para carita feliz
    2 => __('Regular'),  // Etiqueta para carita neutral
    1 => __('Malo')      // Etiqueta para carita triste
];

// Añadir espacio entre las caritas
foreach ($emojis as $value => $emoji) {
    $selectedClass = ($value == $satisfactionValue) ? 'selected' : '';
    echo "<div style='text-align: center; margin: 0 10px;'>"; // Div para centrar caritas y etiquetas
    echo "<span class='satisfaction-option $selectedClass' style='font-size: 40px; cursor: pointer;' onclick='submitResponse($value)' data-value='$value'>$emoji</span><br>"; // Carita
    echo "<span style='font-size: 14px;'>" . $labels[$value] . "</span>"; // Etiqueta
    echo "</div>"; // Cerrar div
}

echo "</div>";
echo "<input type='hidden' id='satisfaction_data' name='satisfaction' value='$satisfactionValue'>";

// Añadir JavaScript para manejar la selección de las caritas
echo "<script type='text/javascript'>";
echo "function submitResponse(value) {";
echo "    $('#satisfaction_data').val(value);";
echo "    $('.satisfaction-option').removeClass('selected');"; // Eliminar clase seleccionada
echo "    $('.satisfaction-option[data-value=\"' + value + '\"]').addClass('selected');"; // Agregar clase a la seleccionada
echo "}";
echo "$(document).ready(function() {";
echo "    $('.satisfaction-option').click(function() {";
echo "        var value = $(this).data('value');";
echo "        submitResponse(value);";
echo "    });";
echo "});";
echo "</script>";

echo "</td></tr>";

echo "</td></tr>";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $satisfaction_value = isset($_POST['satisfaction']) ? intval($_POST['satisfaction']) : null; 
    // Validar que el valor es correcto
    if ($satisfaction_value !== null && in_array($satisfaction_value, [1, 2, 3])) {      
        $ticket->update(['satisfaction' => $satisfaction_value]); // Guardar en la base de datos
    }

    // También guardar la firma
    if (isset($_POST['signature'])) {
        $signature = $_POST['signature'];
        // Guarda la firma en la base de datos (ajusta según tu modelo)
        $ticket->update(['signature' => $signature]); // Asegúrate de que 'signature' es un campo en la tabla de tickets
    }
}

echo "<style type='text/css'>
    .satisfaction-survey {
        margin-left: 20px; /* Espacio entre el texto y las caritas */
        cursor: pointer;
    }
    
    .satisfaction-option {
        font-size: 40px;
        filter: grayscale(100%); /* Blanco y negro por defecto */
        transition: filter 0.3s; /* Transición suave al cambiar el filtro */
    }
    
    .satisfaction-option.selected {
        filter: grayscale(0%); /* Color para la carita seleccionada */
    }
    
    .satisfaction-option:hover {
        color: #ff9900; /* Color al pasar el mouse */
    }
</style>";

// Fila para los comentarios
echo "<tr class='tab_bg_2'>";
echo "<td rowspan='1'>" . __('Comments') . "</td>";
echo "<td rowspan='1' class='middle'>";
echo "<textarea class='form-control' rows='7' name='comment'>" . htmlspecialchars($this->fields["comment"]?? '') . "</textarea>";
echo "</td></tr>";

if ($this->fields["date_answered"] > 0) {
    echo "<tr class='tab_bg_2'>";
    echo "<td>" . __('Response date to the satisfaction survey') . "</td><td>";
    echo Html::convDateTime($this->fields["date_answered"]) . "</td></tr>\n";
}

// Fila para el nuevo dato
echo "<tr class='tab_bg_2'>";
echo "<td>" . __('Nombre del solicitante') . ":</td>";
echo "<td>";
if (isset($requester_custom_name) && $requester_custom_name != '') {
    echo "<p>" . htmlspecialchars($requester_custom_name) . "</p>";
} else {
    echo "<p>" . __('No disponible') . "</p>";
}
echo "</td></tr>";

$options['candel'] = false;
$this->showFormButtons($options);
}
}  


    public function prepareInputForUpdate($input)
    {
        if ($input['satisfaction'] >= 0) {
            $input["date_answered"] = $_SESSION["glpi_currenttime"];
        }

        return $input;
    }


    public function post_addItem()
    {
        /** @var array $CFG_GLPI */
        global $CFG_GLPI;

        if (!isset($this->input['_disablenotif']) && $CFG_GLPI["use_notifications"]) {
            $ticket = new Ticket();
            if ($ticket->getFromDB($this->fields['tickets_id'])) {
                NotificationEvent::raiseEvent("satisfaction", $ticket);
            }
        }
    }


    /**
     * @since 0.85
     **/
    public function post_UpdateItem($history = true)
    {
        /** @var array $CFG_GLPI */
        global $CFG_GLPI;

        if (!isset($this->input['_disablenotif']) && $CFG_GLPI["use_notifications"]) {
            // Send notification only if fields related to reply are updated.
            $answer_updates = array_filter(
                $this->updates,
                fn ($field) => in_array($field, ['satisfaction', 'comment'])
            );

            $ticket = new Ticket();
            if (count($answer_updates) > 1 && $ticket->getFromDB($this->fields['tickets_id'])) {
                NotificationEvent::raiseEvent("replysatisfaction", $ticket);
            }
        }
    }


    /**
     * display satisfaction value
     *
     * @param $value decimal between 0 and 5
     **/
    public static function displaySatisfaction($value)
{
    if (is_null($value) || $value == 0) {
        return '';
    }
$emoji = '';
    switch ($value) {
        case 1:
            // Carita triste
            $emoji = '<span style="font-size: 30px;">&#128577;</span>';
            break;
        case 2:
            // Carita neutral
            $emoji = '<span style="font-size: 30px;">&#128528;</span>';
            break;
        case 3:
            // Carita feliz
           $emoji = '<span style="font-size: 30px;">&#128522;</span>';          
            break;
    }

    return '<div style="text-align: center;">' . $emoji . '</div>';
}

    /**
     * Get name of inquest type
     *
     * @param $value status ID
     **/
    public static function getTypeInquestName($value)
    {

        switch ($value) {
            case 1:
                return __('Internal survey');

            case 2:
                return __('External survey');


            default:
               // Get value if not defined
                return $value;
        }
    }


    /**
     * @since 0.84
     *
     * @param $field
     * @param $values
     * @param $options   array
     **/
    public static function getSpecificValueToDisplay($field, $values, array $options = [])
    {

        if (!is_array($values)) {
            $values = [$field => $values];
        }
        switch ($field) {
            case 'type':
                return self::getTypeInquestName($values[$field]);
        }
        return parent::getSpecificValueToDisplay($field, $values, $options);
    }


    /**
     * @since 0.84
     *
     * @param $field
     * @param $name                  (default '')
     * @param $values                (default '')
     * @param $options   array
     **/
    public static function getSpecificValueToSelect($field, $name = '', $values = '', array $options = [])
    {

        if (!is_array($values)) {
            $values = [$field => $values];
        }
        $options['display'] = false;

        switch ($field) {
            case 'type':
                $options['value'] = $values[$field];
                $typeinquest = [1 => __('Internal survey'),
                    2 => __('External survey')
                ];
                return Dropdown::showFromArray($name, $typeinquest, $options);
        }
        return parent::getSpecificValueToSelect($field, $name, $values, $options);
    }

    public static function getFormURLWithID($id = 0, $full = true)
    {

        $satisfaction = new self();
        if (!$satisfaction->getFromDB($id)) {
            return '';
        }

        return Ticket::getFormURLWithID($satisfaction->fields['tickets_id']) . '&forcetab=Ticket$3';
    }
}
