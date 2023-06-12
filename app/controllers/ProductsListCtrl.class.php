<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\ProductsSearchForm;

class ProductsListCtrl {

    private $form; //dane formularza wyszukiwania
    private $records; //rekordy pobrane z bazy danych

    public function __construct() {

        $this->form = new ProductsSearchForm(); 
    }

    public function validate() {
        
        $this->form->Manufacturer = ParamUtils::getFromRequest('sf_Manufacturer');

        return !App::getMessages()->isError();
    }

    public function action_productList() {

        $this->validate();

        $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
        if (isset($this->form->Manufacturer) && strlen($this->form->Manufacturer) > 0) {
            $search_params['Manufacturer[~]'] = $this->form->Manufacturer . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        //dodanie frazy sortującej po nazwisku
        $where ["ORDER"] = "idProduct";
        //wykonanie zapytania

        try {
            $this->records = App::getDB()->select("products", [
                "idProduct",
                "Manufacturer",
                "Model",
                "Type",
                "Price",
                "Description"
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        // 4. wygeneruj widok
        App::getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
        App::getSmarty()->assign('prod', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->display('ProductsList.tpl');
    }

}
