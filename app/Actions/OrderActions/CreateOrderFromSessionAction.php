<?php
namespace App\Actions\OrderActions;

use App\Models\Order;
use Illuminate\Support\Facades\Session;

class CreateOrderFromSessionAction
{
    public function execute()
    {
        $invoiceProducts = Session::get('invoiceProducts');
        $totalAmount = 0;
        $totalQuantity = 0;

        if (!$invoiceProducts)
            return false;

        foreach ($invoiceProducts as $product) {
            $totalAmount += intval($product['quantity'] * $product['product']->price);
            $totalQuantity += intval($product['quantity']);
        }

        $orderData = Order::create([
            'customer_id' => $invoiceProducts[0]['customer']->id,
            'quantity' => $totalQuantity,
            'total_amount' => $totalAmount
        ]);


        Session::flush();
        return true;
    }
}
