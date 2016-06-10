<?php
/**
 * Created by PhpStorm.
 * User: adrenaline
 * Date: 08.06.16
 * Time: 8:40
 */
session_start();

ini_set('display_errors', true);
ini_set('error_reporting', E_ALL);

setlocale(LC_ALL, "ru_RU.UTF-8");
header('Content-Type: text/html; charset=utf-8');

use core\ControllersManager;
use core\Registry;

require 'protected/vendor/autoload.php';
require 'protected/core/Autoloader.php';

$a = new Autoloader();
$a->register();

$conf = require 'protected/conf/config.php';
Registry::set('config', $conf);

try {
    $cm = new ControllersManager();
    $cm->run();
} catch (Exception $e) {
    die($e->getMessage());
}