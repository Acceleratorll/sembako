<?php


namespace App\Repositories;

use App\Models\Store;

class StoreRepository
{
    protected $model;

    public function __construct(Store $model)
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
        $store = $this->model->find($id);
        $store->update($data);
        return $store;
    }

    public function delete($id)
    {
        $store = $this->model->find($id);
        return $store->delete();
    }
}
