<?php

namespace App\Actions\InvoiceActions;

use App\Http\Requests\StoreProductInInvoiceRequest;
use App\Models\Customer;
use App\Models\Product;

class AddProductIntoInvoiceAction
{
    public function execute(StoreProductInInvoiceRequest $request)
    {
        $invoiceProducts = session('invoiceProducts', []);

        $newData = $request->only('quantity', 'date', 'customer_id');
        $newData['product'] = Product::where('id', $request->product_id)->select(['id', 'name', 'price'])->first();
        $newData['customer'] = Customer::where('id', $request->customer_id)->select(['id', 'name'])->first();

        $invoiceProducts[] = $newData;

        session(['invoiceProducts' => $invoiceProducts]);
    }
}
