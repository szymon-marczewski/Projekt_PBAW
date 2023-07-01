<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        if (!isset($this->form->login))
            return false;

        
        if (empty($this->form->login)) {
            Utils::addErrorMessage('No login provided');
        }

        if (strlen($this->form->login)<5) {
            Utils::addErrorMessage('Username is too short');
        }

        if (empty($this->form->email)) {
            Utils::addErrorMessage('No email provided');
        }

        if (!filter_var($this->form->email, FILTER_VALIDATE_EMAIL))
        {
            Utils::addErrorMessage('Wrong email format');
        }

        if (empty($this->form->pass)) {
            Utils::addErrorMessage('No password provided');
        }

        if (strlen($this->form->pass)<5) {
            Utils::addErrorMessage('Password is too short');
        }

        if (App::getMessages()->isError())
            return false;

        $x = App::getDB()->count("users");
        $active = 1;

        App::getDB()->update("users", [
            "Active" => 0
        ],["idUser[<]" => $x]); 

        if ($this->form->login == "admin" && $this->form->pass == "admin") { 
            App::getDB()->update("users", [
                "Active" => 1
            ],["Username" => $this->form->login]); 
            RoleUtils::addRole('admin');
            return !App::getMessages()->isError();

        } else if ($this->form->login != "admin" && $this->form->pass != "admin") {
            
            if(App::getDB()->count("users", ["Username" => $this->form->login]) == 0 && App::getDB()->count("users", ["Email" => $this->form->email]) == 0)
            {
            App::getDB()->insert("users", [
                "idUser" => $x++,
                "Username" => $this->form->login,
                "Email" => $this->form->email,
                "Password" => $this->form->pass,
                "Role_name" => "User",
                "Active" => $active
            ]);
            RoleUtils::addRole('user');

            } else if(App::getDB()->count("users", ["Username" => $this->form->login]) == 1)
            {
                $user = App::getDB()-> get("users", "idUser", ["Username" => $this->form->login]);
                $email = App::getDB()-> get("users", "idUser", ["Email" => $this->form->email]);
                $passwd = App::getDB()-> get("users", "idUser", ["Password" => $this->form->pass]);
                if(($user == $email) && ($user == $passwd)){ //?

                    App::getDB()->update("users", [
                        "Active" => $active
                    ],["Username" => $this->form->login]); 
                    RoleUtils::addRole('user');
                } else {
                    Utils::addErrorMessage('Email or login already in use');
                }


            } else {
                Utils::addErrorMessage('Something went wrong');
            }
            return !App::getMessages()->isError();

        }
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            Utils::addInfoMessage('Logged successfully');
            App::getRouter()->redirectTo("productList");
        } else {
            $this->generateView();
        }
    }

    public function action_logout() {
        session_destroy();
        App::getRouter()->redirectTo('productList');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); 
        App::getSmarty()->display('LoginView.tpl');
    }

}
