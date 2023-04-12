<?php

namespace App\Services;

use App\Repositories\OrderReturnRepository;

class OrderReturnService
{
    protected $orderReturnRepository;

    public function __construct(OrderReturnRepository $orderReturnRepository)
    {
        $this->orderReturnRepository = $orderReturnRepository;
    }

    public function createRetur($data)
    {
        $retur = $this->orderReturnRepository->create($data);

        return $retur;
    }

    public function updateRetur($id, $data)
    {
        $retur = $this->orderReturnRepository->update($id, $data);

        return $retur;
    }

    public function deleteRetur($id)
    {
        $retur = $this->orderReturnRepository->delete($id);

        return $retur;
    }
}
