<?php


namespace App\Repositories;

use App\Models\OrderDetail;

class OrderDetailRepository
{
    protected $model;

    public function __construct(OrderDetail $model)
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
        $orderDetail = $this->model->find($id);
        $orderDetail->update($data);
        return $orderDetail;
    }

    public function delete($id)
    {
        $orderDetail = $this->model->find($id);
        return $orderDetail->delete();
    }
}
