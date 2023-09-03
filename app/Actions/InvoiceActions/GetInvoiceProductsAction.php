<?php
namespace App\Actions\InvoiceActions;

use Illuminate\Support\Facades\Session;

class GetInvoiceProductsAction
{
    public function execute()
    {
        $products = collect(Session::get('invoiceProducts'));

        return $products;
    }
}
