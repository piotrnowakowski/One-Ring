<?php
require_once 'AppController.php';
class DefaultController extends AppController{
    public function login()
    {
        #TODO display login.html;
        $this->render('login');
    }
    public function index()
    {
        #TODO display login.html;
        $this->render('login');
    }
    public function marketplace()
    {
        $this->render('marketplace');
    }
    public function offer_post()
    {
        $this->render('offer_post');
    }
    public function registration_form()
    {
        $this->render('registration_form');
    }
    public function reservation()
    {
        $this->render('reservation');
    }
    public function add_wallet()
    {
        $this->render('add_wallet');
    }
    public function user_details()
    {
        $this->render('user_details');
    }
}