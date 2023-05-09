<?php


namespace App\Repositories;

use App\Models\OrderReturn;

class OrderReturnRepository
{
    protected $model;

    public function __construct(OrderReturn $model)
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
        $retur = $this->model->find($id);
        $retur->update($data);
        return $retur;
    }

    public function delete($id)
    {
        $retur = $this->model->find($id);
        return $retur->delete();
    }
}
