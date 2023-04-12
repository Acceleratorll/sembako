<?php

namespace App\Services;

use App\Repositories\CustomerRepository;

class CustomerService
{
    protected $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function createCustomer($data)
    {
        $customer = $this->customerRepository->create($data);

        return $customer;
    }

    public function updateCustomer($id, $data)
    {
        $customer = $this->customerRepository->update($id, $data);

        return $customer;
    }

    public function deleteCustomer($id)
    {
        $customer = $this->customerRepository->delete($id);

        return $customer;
    }
}
