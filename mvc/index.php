<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);


define('ROOT', dirname(__FILE__));
define('HOST', "http://".$_SERVER['HTTP_HOST']."/");
require_once (ROOT."/components/Router.php");
require_once (ROOT."/components/Db.php");


 
$router = new Router();
$router->run();

