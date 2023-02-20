<?php

namespace Yosendra\Belajar\PHP\MVC\Middleware;

interface IMiddleware
{
    function before(): void; 
}