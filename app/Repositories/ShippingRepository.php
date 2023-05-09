<?php


namespace App\Repositories;

use App\Models\Shipping;

class ShippingRepository
{
    protected $model;

    public function __construct(Shipping $model)
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
        return $this->model->create([
            'method' => $data['method'],
            'shipping_date' => $data['shipping_date'],
            'cost' => $data['cost'],
        ]);
    }

    public function update($id, $data)
    {
        $shipping = $this->model->find($id);
        $shipping->update([
            'method' => $data['method'],
            'shipping_date' => $data['shipping_date'],
            'cost' => $data['cost'],
        ]);
        return $shipping;
    }

    public function delete($id)
    {
        $shipping = $this->model->find($id);
        return $shipping->delete();
    }
}
