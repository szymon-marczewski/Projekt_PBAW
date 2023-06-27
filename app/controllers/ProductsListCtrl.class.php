<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\ProductsSearchForm;
use app\controllers\LoginCtrl;

class ProductsListCtrl {

    private $form; 
    private $records; 

    public function __construct() {

        $this->form = new ProductsSearchForm(); 
    }

    public function validate() {
        
        $this->form->Manufacturer = ParamUtils::getFromRequest('sf_Manufacturer');

        return !App::getMessages()->isError();
    }

    public function action_productList() {

        $this->validate();

        $search_params = []; 
        if (isset($this->form->Manufacturer) && strlen($this->form->Manufacturer) > 0) {
            $search_params['Manufacturer[~]'] = $this->form->Manufacturer.'%'; 
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        $where ["LIMIT"] = 20;
        $where ["AND"] = ["Availability[=]" => 1];
        try {
            $this->records = App::getDB()->select("products", [
                "idProduct",
                "Manufacturer",
                "Model",
                "Type",
                "Price",
                "Description",
            ], $where);
            
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        // 4. wygeneruj widok
        App::getSmarty()->assign('searchForm', $this->form); 
        App::getSmarty()->assign('prod', $this->records);  
        App::getSmarty()->display('ProductsList.tpl');
    }

}
