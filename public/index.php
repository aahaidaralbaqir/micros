<?php 

require_once '../app/bootstrap.php';

$dotenv = Dotenv\Dotenv::createImmutable("../");
$dotenv->safeLoad();

$route = new Route();