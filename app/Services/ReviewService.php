<?php

namespace App\Services;

use App\Repositories\ReviewRepository;

class ReviewService
{
    protected $reviewRepository;

    public function __construct(ReviewRepository $reviewRepository)
    {
        $this->reviewRepository = $reviewRepository;
    }

    public function createReview($data)
    {
        return $this->reviewRepository->create($data);
    }

    public function updateReview($id, $data)
    {
        return $this->reviewRepository->update($id, $data);
    }

    public function deleteReview($id)
    {
        $review = $this->reviewRepository->delete($id);

        return $review;
    }
}
