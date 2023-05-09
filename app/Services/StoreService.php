<?php

namespace App\Services;

use App\Repositories\StoreRepository;

class StoreService
{
    protected $storeRepository;

    public function __construct(StoreRepository $storeRepository)
    {
        $this->storeRepository = $storeRepository;
    }

    public function createStore($data)
    {
        $store = $this->storeRepository->create($data);

        return $store;
    }

    public function updateStore($id, $data)
    {
        $store = $this->storeRepository->update($id, $data);

        return $store;
    }

    public function deleteStore($id)
    {
        $store = $this->storeRepository->delete($id);

        return $store;
    }
}
