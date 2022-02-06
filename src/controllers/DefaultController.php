<?php
require_once 'AppController.php';
class DefaultController extends AppController{
    public function index()
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

    }
    public function registration_form()
    {

    }
    public function reservation()
    {

    }
}