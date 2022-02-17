<?php
require_once 'AppController.php';
require_once __DIR__ .'/../models/Wallet.php';
require_once __DIR__.'/../repository/WalletRepository.php';


class WalletController extends AppController
{
    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['application/json'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';
    private $message = [];
    private $walletRepository;

    public function __construct()
    {
        parent::__construct();
        $this->walletRepository = new WalletRepository();
    }


    public function add_wallet()
    {
        if($this->isPost() && is_uploaded_file($_FILES['json_file']['tmp_name'])
            && $this->validate_file($_FILES['json_file']))
        {
            move_uploaded_file(
                $_FILES['json_file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['json_file']['name']
            );
            if($this->validate_wallet_data($_POST['mnemonic_phrase'], $_POST['private-key'], $_FILES['json_file']['name'])) {
                $wallet = new Wallet($_POST['mnemonic_phrase'], $_POST['private-key'], $_FILES['json_file']['name']);
                $this->walletRepository->addWallet($wallet);
                # TODO add this to a new view with user details
                return $this->render('user_details', ['messages' => $this->message, 'wallet' => $wallet]);
            }
            else {
                $this->message[] = 'Wrong wallet data.';
            }
            }
        return $this->render('add_wallet',['messages' => $this->message]);
    }

    private function validate_file(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'File is too large for destination file system.';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'File type is not supported.';
            return false;
        }
        return true;
    }
    private function validate_wallet_data($mnemonic_phrase, $private_key, $json_file)
    {
        return true;
    }
}