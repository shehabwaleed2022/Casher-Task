<?php
namespace App\Actions\CustomerActions;

use App\Models\customer;

class GetCustomersAction
{

    public function execute()
    {
        $customers = Customer::all();
        return $customers;
    }

}
