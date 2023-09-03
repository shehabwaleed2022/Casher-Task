<?php

namespace App\Http\Controllers;

use App\Actions\InvoiceActions\AddProductIntoInvoiceAction;
use App\Http\Requests\StoreProductInInvoiceRequest;

class AddProductToInvoiceController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreProductInInvoiceRequest $request, AddProductIntoInvoiceAction $addProductIntoInvoiceAction)
    {
        $addProductIntoInvoiceAction->execute($request);

        return back();
    }
}
