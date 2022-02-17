<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Transaction.php';
require_once __DIR__.'/../repository/TransactionRepository.php';

class TransactionController extends AppController
{

    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['application/json'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';
    private $message = [];
    private $transactionRepository;


    public function __construct()
    {
        parent::__construct();
        $this->transactionRepository = new TransactionRepository();
    }

    public function add_wallet()
    {
        if($this->isPost() && is_uploaded_file($_FILES['json_file']['tmp_name'])
            && $this->validate($_FILES['json_file']))
        {
            move_uploaded_file(
                $_FILES['json_file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['json_file']['name']
            );
            $wallet = new Wallet($_POST['mnemonic_phrase'], $_POST['private-key'], $_FILES['json_file']['name']);
            # TODO add this to a new view with user details
            return $this->render('user_details', ['messages' => $this->message, 'wallet' => $wallet]);
        }
        return $this->render('add_wallet',['messages' => $this->message]);
    }

    private function validate(array $file): bool
    {

        return true;
    }
}