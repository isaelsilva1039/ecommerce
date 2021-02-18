<?php 

require_once("vendor/autoload.php");
use \Hcode\Page;
$app = new \Slim\Slim();


$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page;
	$page ->setTpl("index");
	$page ->setTpl("footer");


});

$app->run();

 ?>