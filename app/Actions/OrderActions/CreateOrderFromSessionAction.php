<?php

namespace App\Actions\OrderActions;

use App\Models\Order;
use App\Models\OrderProduct;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class CreateOrderFromSessionAction
{
    public function execute()
    {
        $invoiceProducts = Session::get('invoiceProducts');
        $totalAmount = 0;
        $totalQuantity = 0;

        if (! $invoiceProducts) {
            return false;
        }

        foreach ($invoiceProducts as $product) {
            $totalAmount += intval($product['quantity'] * $product['product']->price);
            $totalQuantity += intval($product['quantity']);
        }

        $orderData = Order::create([
            'customer_id' => $invoiceProducts[0]['customer']->id,
            'quantity' => $totalQuantity,
            'total_amount' => $totalAmount,
        ]);

        $this->createOrderProducts($invoiceProducts, $orderData->id);

        Session::flush();

        return true;
    }

    private function createOrderProducts(array $invoiceProducts, int $orderId)
    {
        foreach ($invoiceProducts as $product) {
            OrderProduct::create([
                'order_id' => $orderId,
                'product_id' => $product['product']['id'],
                'quantity' => $product['quantity'],
                'date' => Carbon::parse($product['date']),
            ]);
        }
    }
}
