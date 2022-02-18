<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Transaction.php';
require_once __DIR__.'/../repository/TransactionRepository.php';

class TransactionController extends AppController
{

    private $message = [];
    private $transactionRepository;


    public function __construct()
    {
        parent::__construct();
        $this->transactionRepository = new TransactionRepository();
    }

    public function offer_post()
    {
        if($this->isPost() && $this->validate())
        {
            $user_id = 1;
            //return $this->render('offer_post',['messages' => [$user_id, $_POST['login'], $_POST['password'],
             //   $_POST['price']                            ]]);
            $timestamp_start = date('Y-m-d H:i:s', mktime( $_POST['date-start'],$_POST['time-start']));
            $timestamp_end = date('Y-m-d H:i:s', mktime($_POST['date-end'], $_POST['time-end']));
            $transaction = new Transaction($user_id, $user_id, $_POST['price'], $_POST['login'], $_POST['password'],
                $timestamp_start, $timestamp_end);
            $this->transactionRepository->addTransaction($transaction);
            return $this->render('marketplace');
        }
        return $this->render('offer_post',['messages' => $this->message]);
    }

    private function validate(): bool
    {
        return true;
    }
}