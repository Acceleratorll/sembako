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
        return $this->model->create([
            'owner_id' => $data['owner_id'],
            'name' => $data['name'],
            'address' => $data['address'],
            'city' => $data['city'],
            'slogan' => $data['slogan'],
            'front_img' => $data['front_img'],
            'wallet' => $data['wallet'],
            'phone' => $data['phone'],
            'email' => $data['email'],
        ]);
    }

    public function update($id, $data)
    {
        $store = $this->model->find($id);
        $store->update([
            'owner_id' => $data['owner_id'],
            'name' => $data['name'],
            'address' => $data['address'],
            'city' => $data['city'],
            'slogan' => $data['slogan'],
            'front_img' => $data['front_img'],
            'wallet' => $data['wallet'],
            'phone' => $data['phone'],
            'email' => $data['email'],
        ]);
        return $store;
    }

    public function delete($id)
    {
        $store = $this->model->find($id);
        return $store->delete();
    }
}
