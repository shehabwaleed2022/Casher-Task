<?php

namespace App\Http\Controllers;

use App\Actions\CustomerActions\GetCustomersAction;
use App\Actions\InvoiceActions\GetInvoiceProductsAction;
use App\Actions\OrderActions\CreateOrderFromSessionAction;
use App\Actions\ProductActions\GetProductsAction;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(GetProductsAction $getProductsAction, GetCustomersAction $getCustomersAction, GetInvoiceProductsAction $getInvoiceProductsAction)
    {
        $products = $getProductsAction->execute();
        $invoiceProducts = $getInvoiceProductsAction->execute();
        $customers = $getCustomersAction->execute();

        return view('orders.index', compact('products', 'customers', 'invoiceProducts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateOrderFromSessionAction $createOrderFromSessionAction)
    {
        if ($createOrderFromSessionAction->execute()) {
            return back()->with('success', 'Order created successfully.');
        } else {
            return back()->with('failed', 'Please add some prodects to the invoice.');
        }
    }
}
