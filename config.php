<?php

date_default_timezone_set("Asia/Bangkok");

// Always provide a TRAILING SLASH (/) AFTER A PATH
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http";
$pathName = '/tpg.co.th/';
define('URL', $protocol.'://'.$_SERVER['HTTP_HOST'].$pathName);

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'probooking_db');
define('DB_USER', 'probooking_dbo');
define('DB_PASS', 'Modest*Bare9PlanningLicence');


define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('WWW_COMPONENTS', ROOT . DS . "Components" . DS);
define('WWW_IMAGES', ROOT . DS . "public\images". DS );
define('WWW_VENDORS', ROOT . DS . "vendors" . DS);


define('IMAGES', URL."public/images/" );


$url = isset($_GET['url']) ? $_GET['url'] : null;
$url = rtrim($url, '/');
$url = filter_var($url, FILTER_SANITIZE_URL);

$params = explode('/', $url);