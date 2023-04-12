<?php


namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository
{
    protected $model;

    public function __construct(Customer $model)
    {
        $this->model = $model;
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        $customer = $this->model->find($id);
        $customer->update($data);
        return $customer;
    }

    public function delete($id)
    {
        $customer = $this->model->find($id);
        return $customer->delete();
    }
}
