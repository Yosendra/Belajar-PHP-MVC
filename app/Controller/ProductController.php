<?php

namespace Yosendra\Belajar\PHP\MVC\Controller;

class ProductController
{
    function category(string $productId, string $categoryId): void
    {
        echo "PRODUCT $productId, CATEGORY $categoryId";
    }
}