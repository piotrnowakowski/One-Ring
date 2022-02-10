<?php
require_once 'AppController.php';

class WalletController extends AppController
{
    public function add_wallet()
    {
        $this->render('add_wallet');
    }
}