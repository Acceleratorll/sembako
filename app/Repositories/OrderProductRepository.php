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
        return $this->model->create([
            'order_detail_id' => $data['order_detail_id'],
            'product_id' => $data['product_id'],
            'qty' => $data['qty'],
            'total' => $data['total'],
        ]);
    }

    public function update($id, $data)
    {
        $orderProduct = $this->model->find($id);
        $orderProduct->update([
            'order_detail_id' => $data['order_detail_id'],
            'product_id' => $data['product_id'],
            'qty' => $data['qty'],
            'total' => $data['total'],
        ]);
        return $orderProduct;
    }

    public function delete($id)
    {
        $orderProduct = $this->model->find($id);
        return $orderProduct->delete();
    }
}
