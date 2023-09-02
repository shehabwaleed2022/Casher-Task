<?php

namespace App\Http\Controllers;

use App\Actions\CustomerActions\GetCustomersAction;
use App\Actions\ProductActions\GetProductsAction;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(GetProductsAction $getProductsAction, GetCustomersAction $getCustomersAction)
    {
        $products = $getProductsAction->execute();
        $customers = $getCustomersAction->execute();

        return view('orders.index', compact('products', 'customers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
