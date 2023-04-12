<?php


namespace App\Repositories;

use App\Models\Owner;

class OwnerRepository
{
    protected $model;

    public function __construct(Owner $model)
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
        $owner = $this->model->find($id);
        $owner->update($data);
        return $owner;
    }

    public function delete($id)
    {
        $owner = $this->model->find($id);
        return $owner->delete();
    }
}
