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
        return $this->model->create([
            'store_id' => $data['store_id'],
            'customer_id' => $data['customer_id'],
            'shipping_id' => $data['shipping_id'],
            'payment_id' => $data['payment_id'],
            'ppn' => $data['ppn'],
            'discount' => $data['discount'],
            'total' => $data['total'],
        ]);
    }

    public function update($id, $data)
    {
        $orderDetail = $this->model->find($id);
        $orderDetail->update([
            'store_id' => $data['store_id'],
            'customer_id' => $data['customer_id'],
            'shipping_id' => $data['shipping_id'],
            'payment_id' => $data['payment_id'],
            'ppn' => $data['ppn'],
            'discount' => $data['discount'],
            'total' => $data['total'],
        ]);
        return $orderDetail;
    }

    public function delete($id)
    {
        $orderDetail = $this->model->find($id);
        return $orderDetail->delete();
    }
}
