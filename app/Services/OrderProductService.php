<?php

namespace App\Services;

use App\Repositories\OrderProductRepository;

class OrderProductService
{
    protected $orderProductRepository;

    public function __construct(OrderProductRepository $orderProductRepository)
    {
        $this->orderProductRepository = $orderProductRepository;
    }

    public function createOrderProduct($data)
    {
        $orderProduct = $this->orderProductRepository->create($data);

        return $orderProduct;
    }

    public function updateOrderProduct($id, $data)
    {
        $orderProduct = $this->orderProductRepository->update($id, $data);

        return $orderProduct;
    }

    public function deleteOrderProduct($id)
    {
        $orderProduct = $this->orderProductRepository->delete($id);

        return $orderProduct;
    }
}
