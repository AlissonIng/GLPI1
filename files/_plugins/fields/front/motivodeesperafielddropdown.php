<?php

Plugin::load('fields', true);

$dropdown = new PluginFieldsMotivodeesperafieldDropdown();
include GLPI_ROOT . "/front/dropdown.common.php";
