<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Repositories\CustomerRepository;
use App\Services\CustomerService;

class CustomerController extends Controller
{
    protected $customerService;
    protected $customerRepository;

    public function __construct(CustomerService $customerService, CustomerRepository $customerRepository)
    {
        $this->customerService = $customerService;
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        $customers = $this->customerRepository->all();
        // return view('customers.index', compact('customers'));
        return response()->json(['customers' => $customers]);
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(CustomerRequest $request)
    {
        $customer = $this->customerService->createCustomer($request);

        return redirect()->route('customers.show', $customer->id);
    }

    public function show($id)
    {
        $customer = $this->customerRepository->find($id);
        return view('customers.show', compact('customer'));
    }

    public function edit($id, CustomerRequest $request)
    {
        $customer = $this->customerService->updateCustomer($id, $request);
        return view('customers.edit', compact('customer'));
    }

    public function update(CustomerRequest $request, $id)
    {
        $customer = $this->customerService->updateCustomer($id, $request);

        return redirect()->route('customers.show', $customer->id);
    }

    public function destroy($id)
    {
        $this->customerService->deleteCustomer($id);
        return redirect()->route('customers.index');
    }
}
