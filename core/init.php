<?php

// Include Config
require_once('config/config.php');

// Include Helper Files
require_once('helpers/system_helper.php');

// Add Autoload class
function __autoload($class_name)
{
    require_once('includes/' . $class_name . '.php');
}
