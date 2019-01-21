<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use MHEDev\MHEDebugger;


$test = array('a' => new \Exception());

MHEDebugger::debugVariable($test, '$test', 20);
