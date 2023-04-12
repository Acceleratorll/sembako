<?php


namespace App\Repositories;

use App\Models\OrderProduct;

class OrderProductRepository
{
    protected $model;

    public function __construct(OrderProduct $model)
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
        $orderProduct = $this->model->find($id);
        $orderProduct->update($data);
        return $orderProduct;
    }

    public function delete($id)
    {
        $orderProduct = $this->model->find($id);
        return $orderProduct->delete();
    }
}
