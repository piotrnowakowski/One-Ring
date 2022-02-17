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
        if($this->isPost() && $this->validate($_POST['login'], $_POST['password'], $_POST['price'],
                $_POST['date-start'], $_POST['date-end'], $_POST['time-start'], $_POST['time-end']))
        {

            $user = new User($_POST['email'], $_POST['password'], $_POST['name'], $_POST['surname'], $_POST['nick']);
            $this->userRepository->addUser($user);
            return $this->render('marketplace');
        }
        return $this->render('registration_form',['messages' => $this->message]);
    }

    private function validate($email, $password, $price, $date_start, $date_end, $time_start, $time_end): bool
    {
        return true;
    }
}