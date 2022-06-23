<?php

declare(strict_types = 1);

namespace App;

require_once '/app/App/Errors/ViewNotFoundException.php';

use App\Errors\ViewNotFoundException;

class View
{
    public function __construct(private string $view, private array $params = [])
    {

    }

    public static function make(string $view, array $params = []): self
    {
        return new static($view, $params);
    }

    public function render()
    {
        $header = '/app/App/Views/components/header.html';

        if(!file_exists($header)){
            throw new ViewNotFoundException();
        }

        include $header;

        $viewPath = '/app/App/Views/' . $this->view . '.php';

        if(!file_exists($viewPath)){
            throw new ViewNotFoundException();
        }

        include $viewPath;

        $footer = '/app/App/Views/components/footer.html';

        if(!file_exists($footer)){
            throw new ViewNotFoundException();
        }

        include $footer;
    }
}