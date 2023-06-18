<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('productList'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('productList',   'ProductsListCtrl');
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('productNew',    'ProductsEditCtrl',	['admin']);
Utils::addRoute('productEdit',   'ProductsEditCtrl',	['admin']);
Utils::addRoute('productSave',   'ProductsEditCtrl',	['admin']);
Utils::addRoute('productDelete', 'ProductsEditCtrl',	['admin']);
Utils::addRoute('productBuy',    'ProductsEditCtrl',	['user','admin']);
