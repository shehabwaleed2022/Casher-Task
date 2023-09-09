<?php

namespace App\Actions\OrderActions;

use App\Models\Order;
use App\Models\OrderProduct;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CreateOrderFromSessionAction
{
    public function execute()
    {
        $invoiceProducts = Session::get('invoiceProducts');

        if (! $invoiceProducts) {
            return false;
        }

        DB::transaction(function () use ($invoiceProducts) {
            $orderData = $this->createOrder($invoiceProducts);
            $this->createOrderProducts($invoiceProducts, $orderData->id);
        });

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

    private function createOrder($invoiceProducts)
    {
        $customer = $invoiceProducts[0]['customer'];
        $totalAmount = 0;
        $totalQuantity = 0;

        foreach ($invoiceProducts as $product) {
            $totalAmount += intval($product['quantity'] * $product['product']->price);
            $totalQuantity += intval($product['quantity']);
        }

        return Order::create([
            'customer_id' => $customer->id,
            'quantity' => $totalQuantity,
            'total_amount' => $totalAmount,
        ]);

    }
}
