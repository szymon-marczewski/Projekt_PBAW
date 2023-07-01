<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;


class OrdersListCtrl {

    private $records; 



    public function action_OrdersList() {

        $activeUser = App::getDB()->select("users", "idUser", ["Active[=]" => 1]);

        $where ["ORDER"] = "orders.idOrder";
        $where ["AND"] = ["orders.idUser[=]" => $activeUser];

        try {
            $this->records = App::getDB()->select("transactions", [
                "[>]orders" => ["idOrder" => "idOrder"],
                "[>]products" => ["idProduct" => "idProduct"]
            ],[
                "orders.idOrder",
                "products.Manufacturer",
                "products.Model",
                "products.Price",
                "products.Type",
                "transactions.Amount",
                // "transactions.Total_price",
                "orders.Date",
                "orders.Status",
                "orders.Description"
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Something went wrong');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('ord', $this->records);  
        App::getSmarty()->display('OrdersList.tpl');
    }

}
