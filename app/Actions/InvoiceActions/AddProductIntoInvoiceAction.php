<?php

namespace App\Actions\InvoiceActions;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreProductInInvoiceRequest;

class AddProductIntoInvoiceAction
{
    public function execute(StoreProductInInvoiceRequest $request)
    {
        $invoiceProducts = session('invoiceProducts', []);

        $newData = $request->only('quantity', 'date');
        $newData['product'] = Product::where('id', $request->product_id)->select(['name', 'price'])->first();
        $newData['customer'] = Customer::where('id', $request->customer_id)->pluck('name')->first();

        $invoiceProducts[] = $newData;

        session(['invoiceProducts' => $invoiceProducts]);
    }
}
