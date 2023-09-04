<?php

namespace App\Actions\CustomerActions;

use App\Models\Customer;

class CreateCustomerAction
{
    public function execute(array $customerData)
    {
        Customer::create($customerData);
    }
}
