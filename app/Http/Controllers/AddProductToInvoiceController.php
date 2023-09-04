<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreProductInInvoiceRequest;
use App\Actions\InvoiceActions\AddProductIntoInvoiceAction;

class AddProductToInvoiceController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreProductInInvoiceRequest $request, AddProductIntoInvoiceAction $addProductIntoInvoiceAction)
    {

        if (Session::get('invoiceProducts')[0]['customer_id'] != $request->customer_id)
            return back()->with('failed', 'Please finish current customer\'s order');

        $addProductIntoInvoiceAction->execute($request);

        return back()->with('success', 'Product added to invoice successfully.');
    }
}
