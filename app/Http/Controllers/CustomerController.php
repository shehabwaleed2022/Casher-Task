<?php

namespace App\Http\Controllers;

use App\Actions\CustomerActions\CreateCustomerAction;
use Illuminate\Http\Request;
use App\Actions\CustomerActions\GetCustomersAction;
use App\Http\Requests\StoreCustomerRequest;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}