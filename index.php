<?php

/*
Author  :   Okis
Project :   Simple registration module
Date    :   02.06.2022
*/

declare(strict_types = 1);

//Libraries and other files
require_once "App\Router.php";
require_once "App\App.php";
require_once "App\Controllers\MainController.php";
require_once "App\Errors\RouteNotFoundException.php";

use App\Router;
use App\App;
use App\Controllers\Main;

session_start();

//Code
try{
    $router = new Router();

    $router ->register('/',                 [Main::class, 'index'])
            ->register('/about',            [Main::class, 'about'])
            ->register('/tests/random',     [Main::class, 'randomTests'])
            ->register('/tests/order',      [Main::class, 'orderTests']);

    (new App($router))->run();

}catch(Exception $e){
    echo "<br>Error! " . $e->getMessage();
}