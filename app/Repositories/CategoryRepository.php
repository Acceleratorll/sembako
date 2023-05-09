<?php


namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    protected $model;

    public function __construct(Category $model)
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
            'name' => $data['name'],
            'desc' => $data['desc'],
        ]);
    }

    public function update($id, $data)
    {
        $category = $this->model->find($id);
        $category->update([
            'store_id' => $data['store_id'],
            'name' => $data['name'],
            'desc' => $data['desc'],
        ]);
        return $category;
    }

    public function delete($id)
    {
        $category = $this->model->find($id);
        return $category->delete();
    }
}
