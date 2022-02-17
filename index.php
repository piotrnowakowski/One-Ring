<?php

require 'Routing.php';
#pobieram dane z serwera i ucinam slasha
$path = trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::get('marketplace', 'DefaultController');
Routing::get('reservation', 'DefaultController');
Routing::post('registration_form', 'UserController');
Routing::get('offer_post', 'TransactionController');
Routing::get('user_details', 'DefaultController');
Routing::post('add_wallet', 'WalletController');

Routing::run($path);