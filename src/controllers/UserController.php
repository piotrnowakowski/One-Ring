<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../controllers/UserController.php';


class UserController extends AppController
{

    private $message = [];
    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }


    public function registration_form()
    {
        if($this->isPost() && $this->validate($_POST['email'], $_POST['name'], $_POST['surname'], $_POST['nick'], $_POST['password']))
        {
            $user = new User($_POST['email'], $_POST['password'], $_POST['name'], $_POST['surname'], $_POST['nick']);
            $this->userRepository->addUser($user);
            return $this->render('login');
        }
        return $this->render('registration_form',['messages' => $this->message]);
    }

    private function validate($email, $name, $surname, $nick, $password): bool
    {
        return true;
    }
}