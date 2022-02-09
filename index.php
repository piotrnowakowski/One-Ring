<?php

require 'Routing.php';
#pobieram dane z serwera i ucinam slasha
$path = trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('login', 'DefaultController');
Routing::get('marketplace', 'DefaultController');
Routing::get('reservation', 'DefaultController');
#TODO add the rest;
Routing::run($path);