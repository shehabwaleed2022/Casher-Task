<?php

namespace App\Http\Controllers;

use App\Actions\ProductActions\CreateProductAction;
use App\Actions\ProductActions\GetProductsAction;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Facades\Redirect;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(GetProductsAction $getProductsAction)
    {
        $products = $getProductsAction->execute();

        return view('products.index', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request, CreateProductAction $createProductAction)
    {
        $createProductAction->execute($request->validated());

        return Redirect::back()->with('success', 'Product created successfully.');
    }
}
