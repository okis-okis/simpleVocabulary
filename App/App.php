<?php

/*
Special class for execute pre process do
*/

declare(strict_types = 1);

namespace App;

require_once '/app/App/Libs/List.php';

class App
{
    private Router $router;

    public function __construct($router)
    {
        $this->router = $router;
    }
    
    public function run()
    {
        $this->router->resolve($_SERVER['REQUEST_URI']);
    }
}