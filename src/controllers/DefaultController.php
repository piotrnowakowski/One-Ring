<?php
require_once 'AppController.php';
class DefaultController extends AppController{
    public function login()
    {
        #TODO display login.html;
        $this->render('login');
    }
    public function marketplace()
    {
        #TODO display marketplace
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
}