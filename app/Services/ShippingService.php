<?php

namespace App\Services;

use App\Repositories\ShippingRepository;

class ShippingService
{
    protected $shippingRepository;

    public function __construct(ShippingRepository $shippingRepository)
    {
        $this->shippingRepository = $shippingRepository;
    }

    public function createShipping($data)
    {
        return $this->shippingRepository->create($data);
    }

    public function updateShipping($id, $data)
    {
        return $this->shippingRepository->update($id, $data);
    }

    public function deleteShipping($id)
    {
        $shipping = $this->shippingRepository->delete($id);

        return $shipping;
    }
}
