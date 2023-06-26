<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;

use app\forms\LoginForm;

class OrdersListCtrl {

    private $form; 
    private $records; 

    public function __construct() {
        $this->form = new LoginForm();       
    }

    public function loginOrder() {

        $this->form->login = ParamUtils::getFromGet('login');
        return !App::getMessages()->isError();
    }

    public function action_productOrder() {

        $this->loginOrder();

        $where ["ORDER"] = "orders.Date";

        try {
            $this->records = App::getDB()->select("transactions", [
                "[<]orders" => ["idOrder" => "idOrder"],
                "[<]products" => ["idProduct" => "idProduct"]
            ],[
                "orders.idOrder",
                "products.Manufacturer",
                "products.Model",
                "products.Price",
                "orders.Date",
                "orders.Status"
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        // 4. wygeneruj widok
        App::getSmarty()->assign('ord', $this->records);  
        App::getSmarty()->display('OrdersList.tpl');
    }

}