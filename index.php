<?php

require 'Routing.php';
#pobieram dane z serwera i ucinam slasha
$path = trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::get('marketplace', 'DefaultController');
#Routing::post('marketplace', 'DefaultController');
Routing::get('reservation', 'DefaultController');
Routing::get('registration_form', 'DefaultController');
Routing::get('offer_post', 'DefaultController');
Routing::post('add_wallet', 'WalletController');

#Routing::post('reservation', 'DefaultController');
#TODO add the rest;
Routing::run($path);