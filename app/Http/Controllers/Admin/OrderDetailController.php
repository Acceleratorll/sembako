<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderDetailRequest;
use App\Repositories\OrderDetailRepository;
use App\Services\OrderDetailService;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    protected $orderDetailService;
    protected $orderDetailRepository;

    public function __construct(OrderDetailService $orderDetailService, OrderDetailRepository $orderDetailRepository)
    {
        $this->orderDetailService = $orderDetailService;
        $this->orderDetailRepository = $orderDetailRepository;
    }

    // Return di Repo atau di service
    public function index()
    {
        $orderDetails = $this->orderDetailRepository->all();
        // return view('orderDetails.index', compact('orderDetails'));
        return response()->json(['orderDetails' => $orderDetails]);
    }

    public function create()
    {
        return view('orderDetails.create');
    }

    public function store(OrderDetailRequest $request)
    {
        $orderDetail = $this->orderDetailService->createOrderDetail($request);
        return response()->json(['orderDetail' => $orderDetail]);
    }

    public function show($id)
    {
        $orderDetail = $this->orderDetailRepository->find($id);
        // return view('orderDetails.show', compact('orderDetail'));
        return response()->json(['orderDetail' => $orderDetail]);
    }

    public function edit($id, orderDetailRequest $request)
    {
        $orderDetail = $this->orderDetailService->updateOrderDetail($id, $request);
        return view('orderDetails.edit', compact('orderDetail'));
    }

    public function update(OrderDetailRequest $request, $id)
    {
        $orderDetail = $this->orderDetailService->updateOrderDetail($id, $request);
        // return redirect()->route('orderDetails.show', $orderDetail->id);
        return response()->json(['orderDetail' => $orderDetail]);
    }

    public function destroy($id)
    {
        $this->orderDetailService->deleteOrderDetail($id);
        return redirect()->route('orderDetails.index');
    }
}
