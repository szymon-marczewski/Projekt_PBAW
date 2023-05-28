<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('productList'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('productList',   'ProductListCtrl');
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('productNew',    'ProductEditCtrl',	['admin']);
Utils::addRoute('productEdit',   'ProductEditCtrl',	['admin']);
Utils::addRoute('productSave',   'ProductEditCtrl',	['admin']);
Utils::addRoute('productBuy',    'ProductEditCtrl',	['user','admin']);