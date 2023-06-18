<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\ProductsEditForm;

class ProductsEditCtrl {

    private $form; 

    public function __construct() {
        
        $this->form = new ProductsEditForm();
    }

    
    public function validateSave() {
        $this->form->idProduct = ParamUtils::getFromRequest('idProduct', true, 'Błędne wywołanie aplikacji');
        $this->form->Manufacturer = ParamUtils::getFromRequest('Manufacturer', true, 'Błędne wywołanie aplikacji');
        $this->form->Model = ParamUtils::getFromRequest('Model', true, 'Błędne wywołanie aplikacji');
        $this->form->Type = ParamUtils::getFromRequest('Type', true, 'Błędne wywołanie aplikacji');
        $this->form->Price = ParamUtils::getFromRequest('Price', true, 'Błędne wywołanie aplikacji');
        $this->form->Availability = ParamUtils::getFromRequest('Availability', true, 'Błędne wywołanie aplikacji');
        $this->form->Description = ParamUtils::getFromRequest('Description', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;

        if (($this->form->idProduct)<0 || $this->form->idProduct == 'null') {
            Utils::addErrorMessage('Wprowadź id');
        }
        if (empty(trim($this->form->Manufacturer))) {
            Utils::addErrorMessage('Wprowadź producenta');
        }
        if (empty(trim($this->form->Model))) {
            Utils::addErrorMessage('Wprowadź model');
        }
        if (empty(trim($this->form->Type))) {
            Utils::addErrorMessage('Wprowadź typ produktu');
        }
        if (empty(trim($this->form->Price))) {
            Utils::addErrorMessage('Wprowadź kwotę');
        }
        if (is_null($this->form->Availability)) {
            Utils::addErrorMessage('Wprowadź czy produkt dostepny');
        }

        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }


    public function validateEdit() {
        $this->form->idProduct = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_productNew() {
        $this->generateView();
    }

    public function action_productEdit() {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("products", "*", [
                    "idProduct" => $this->form->idProduct
                ]);
                $this->form->Manufacturer = $record['Manufacturer'];
                $this->form->Model = $record['Model'];
                $this->form->Type = $record['Type'];
                $this->form->Price = $record['Price'];
                $this->form->Availability = $record['Availability'];
                $this->form->Description = $record['Description'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        $this->generateView();
    }

    public function action_productDelete() {
        if ($this->validateEdit()) {

            try {
                App::getDB()->delete("products", [
                    "idProduct" => $this->form->idProduct
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        App::getRouter()->forwardTo('productList');
    }

    public function action_productSave() {

        if ($this->validateSave()) {
            try {

                if ($this->form->idProduct > App::getDB()->count("products")) {
                    $count = App::getDB()->count("products");
                    if ($count <= 20) {
                        App::getDB()->insert("products", [
                            "idProduct" => $this->form->idProduct,
                            "Manufacturer" => $this->form->Manufacturer,
                            "Model" => $this->form->Model,
                            "Type" => $this->form->Type,
                            "Price" => $this->form->Price,
                            "Availability" => $this->form->Availability,
                            "Description" => $this->form->Description
                        ]);
                    } else { 
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView(); 
                        exit(); 
                    }
                } else {
                    App::getDB()->update("products", [
                        "Manufacturer" => $this->form->Manufacturer,
                        "Model" => $this->form->Model,
                        "Type" => $this->form->Type,
                        "Price" => $this->form->Price,
                        "Availability" => $this->form->Availability,
                        "Description" => $this->form->Description
                            ], [
                        "idProduct" => $this->form->idProduct
                    ]);
                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            App::getRouter()->forwardTo('productList');
        } else {
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); 
        App::getSmarty()->display('ProductsEdit.tpl');
    }

}