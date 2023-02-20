<?php

namespace Yosendra\Belajar\PHP\MVC\Middleware;

class AuthMiddleware implements IMiddleware
{
    function before(): void
    {
        session_start();
        if (!isset($_SESSION["user"])) 
        {
            header("Location: /login");
            exit();
        }
    }
}