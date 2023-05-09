<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductRepository
{
    protected $model;

    public function __construct(Product $model)
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
        // $file = $data->file('img');
        // $filename = $file->getClientOriginalName();
        // $file->storeAs('public/products/', $filename);
        // $file->save();
        return $this->model->create([
            'store_id' => $data['store_id'],
            'name' => $data['name'],
            'qty' => $data['qty'],
            'price' => $data['price'],
            'desc' => $data['desc'],
            // 'img' => $filename,
            'img' => $data['img'],
        ]);
    }

    public function update($id, $data)
    {
        // $file = $data->file('img');
        // $filename = $file->getClientOriginalName();
        // if (!Storage::disk('public')->exists('products/', $filename)) {
        //     $file->storeAs('public/products/', $filename);
        //     $file->save();
        // }
        $product = $this->model->find($id);
        $product->update([
            'store_id' => $data['store_id'],
            'name' => $data['name'],
            'qty' => $data['qty'],
            'price' => $data['price'],
            'desc' => $data['desc'],
            'img' => $data['img'],
            // 'img' => $filename,
        ]);
        return $product;
    }

    public function delete($id)
    {
        $product = $this->model->find($id);
        return $product->delete();
    }
}
