<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Repositories\ReviewRepository;
use App\Services\ReviewService;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    protected $reviewService;
    protected $reviewRepository;

    public function __construct(ReviewService $reviewService, ReviewRepository $reviewRepository)
    {
        $this->reviewService = $reviewService;
        $this->reviewRepository = $reviewRepository;
    }

    public function index()
    {
        $reviews = $this->reviewRepository->all();
        // return view('reviews.index', compact('reviews'));
        return response()->json(['reviews' => $reviews]);
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(ReviewRequest $request)
    {
        $review = $this->reviewService->createReview($request);

        return response()->json(['review' => $review]);
    }

    public function show($id)
    {
        $review = $this->reviewRepository->find($id);
        return response()->json(['review' => $review]);
        // return view('reviews.show', compact('review'));
    }

    public function edit($id, ReviewRequest $request)
    {
        $review = $this->reviewService->updateReview($id, $request);
        return view('reviews.edit', compact('review'));
    }

    public function update(ReviewRequest $request, $id)
    {
        $review = $this->reviewService->updateReview($id, $request);
        return response()->json(['review' => $review]);

        // return redirect()->route('reviews.show', $review->id);
    }

    public function destroy($id)
    {
        $this->reviewService->deleteReview($id);
        return redirect()->route('reviews.index');
    }
}
