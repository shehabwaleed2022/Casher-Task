<?php

namespace App\Http\Controllers;

use App\Actions\CustomerActions\CreateCustomerAction;
use App\Actions\CustomerActions\GetCustomersAction;
use App\Http\Requests\StoreCustomerRequest;
use Illuminate\Support\Facades\Redirect;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(GetCustomersAction $getCustomersAction)
    {
        $customers = $getCustomersAction->execute();

        return view('customers.index', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $storeCustomerRequest, CreateCustomerAction $createCustomerAction)
    {
        $createCustomerAction->execute($storeCustomerRequest->validated());

        return Redirect::back()->with('success', 'Customer added successfully. ');
    }
}
