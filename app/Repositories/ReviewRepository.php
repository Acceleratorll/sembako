<?php


namespace App\Repositories;

use App\Models\Review;

class ReviewRepository
{
    protected $model;

    public function __construct(Review $model)
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
            'product_id' => $data['product_id'],
            'customer_id' => $data['customer_id'],
            'rating' => $data['rating'],
            'comment' => $data['comment'],
        ]);
    }

    public function update($id, $data)
    {
        $review = $this->model->find($id);
        $review->update([
            'product_id' => $data['product_id'],
            'customer_id' => $data['customer_id'],
            'rating' => $data['rating'],
            'comment' => $data['comment'],
        ]);
        return $review;
    }

    public function delete($id)
    {
        $review = $this->model->find($id);
        return $review->delete();
    }
}
