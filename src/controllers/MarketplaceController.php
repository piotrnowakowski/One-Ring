<?php
require_once 'AppController.php';
require_once __DIR__.'/../models/Transaction.php';
require_once __DIR__.'/../repository/TransactionRepository.php';

class MarketplaceController extends AppController
{
    private $message = [];
    private $transactionRepository;


    public function __construct()
    {
        parent::__construct();
        $this->transactionRepository = new TransactionRepository();
    }
    public function marketplace()
    {

        $transaction = $this->transactionRepository->getWholeOrderBook();
        return $this->render('marketplace', ['transactions' => $transaction]);
        //return $this->render('offer_post', ['messages' => 'work']);
        }
}