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
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->email)) {
            Utils::addErrorMessage('Nie podano emaila');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        if (App::getMessages()->isError())
            return false;

        if ($this->form->login == "admin" && $this->form->pass == "admin") {
            RoleUtils::addRole('admin');
        } else if ($this->form->login != "admin" && $this->form->pass != "admin") {
            $x = App::getDB()->count("users");
            
            if(App::getDB()->count("users", ["Username" => $this->form->login]) < 1 && App::getDB()->count("users", ["Email" => $this->form->email]) < 1)
            {
            App::getDB()->insert("users", [
                "idUser" => $x++,
                "Username" => $this->form->login,
                "Email" => $this->form->email,
                "Password" => $this->form->pass,
                "Role_name" => "User",
            ]);
            RoleUtils::addRole('user');
            } else {
                Utils::addErrorMessage('User or email is already existing');
            }
            return !App::getMessages()->isError();

        } else {
            Utils::addErrorMessage('Niepoprawny login lub hasło');
        }
        return !App::getMessages()->isError();
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
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
