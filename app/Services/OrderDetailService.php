<?php

namespace App\Services;

use App\Repositories\OrderDetailRepository;

class OrderDetailService
{
    protected $orderDetailRepository;

    public function __construct(OrderDetailRepository $orderDetailRepository)
    {
        $this->orderDetailRepository = $orderDetailRepository;
    }

    public function createOrderDetail($data)
    {
        $orderDetail = $this->orderDetailRepository->create($data);

        return $orderDetail;
    }

    public function updateOrderDetail($id, $data)
    {
        $orderDetail = $this->orderDetailRepository->update($id, $data);

        return $orderDetail;
    }

    public function deleteOrderDetail($id)
    {
        $orderDetail = $this->orderDetailRepository->delete($id);

        return $orderDetail;
    }
}
