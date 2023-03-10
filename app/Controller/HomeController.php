<?php

namespace Yosendra\Belajar\PHP\MVC\Controller;

use Yosendra\Belajar\PHP\MVC\App\View;

class HomeController
{
    function index(): void
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Belajar PHP MVC"
        ];

        View::render("Home/index", $model);
    }

    function hello(): void
    {
        echo "HomeController.hello()";
    }

    function world(): void
    {
        echo "HomeController.world()";
    }

    function about(): void
    {
        echo "Author: Yosendra Evriyantino";
    }
}