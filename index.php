<?php

require 'Routing.php';
#pobieram dane z serwera i ucinam slasha
$path = trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index', 'DefaultController');
Routing::get('marketplace', 'DefaultController');
#TODO add the rest;
Routing::run($path);