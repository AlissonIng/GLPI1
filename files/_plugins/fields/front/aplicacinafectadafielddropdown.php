<?php

Plugin::load('fields', true);

$dropdown = new PluginFieldsAplicacinafectadafieldDropdown();
include GLPI_ROOT . "/front/dropdown.common.php";
