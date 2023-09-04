<?php

namespace App\Actions\ProductActions;

use App\Models\Product;

class GetProductsAction
{
    public function execute()
    {
        $products = Product::latest()->get();

        return $products;
    }
}
