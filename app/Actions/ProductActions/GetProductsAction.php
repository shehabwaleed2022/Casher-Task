<?php
namespace App\Actions\ProductActions;

use App\Models\Product;

class GetProductsAction
{

    public function execute()
    {
        $products = Product::all();
        return $products;
    }

}