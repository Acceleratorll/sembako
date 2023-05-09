<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderProductRequest;
use App\Repositories\OrderProductRepository;
use App\Services\OrderProductService;

class OrderProductController extends Controller
{
    protected $orderProductService;
    protected $orderProductRepository;

    public function __construct(OrderProductService $orderProductService, OrderProductRepository $orderProductRepository)
    {
        $this->orderProductService = $orderProductService;
        $this->orderProductRepository = $orderProductRepository;
    }

    // Return di Repo atau di service
    public function index()
    {
        $orderProducts = $this->orderProductRepository->all();
        // return view('orderProducts.index', compact('orderProducts'));
        return response()->json(['orderProducts' => $orderProducts]);
    }

    public function create()
    {
        return view('orderProducts.create');
    }

    public function store(OrderProductRequest $request)
    {
        $orderProduct = $this->orderProductService->createOrderProduct($request);
        return response()->json(['orderProduct' => $orderProduct]);
    }

    public function show($id)
    {
        $orderProduct = $this->orderProductRepository->find($id);
        // return view('orderProducts.show', compact('orderProduct'));
        return response()->json(['orderProduct' => $orderProduct]);
    }

    public function edit($id, orderProductRequest $request)
    {
        $orderProduct = $this->orderProductService->updateOrderProduct($id, $request);
        return view('orderProducts.edit', compact('orderProduct'));
    }

    public function update(OrderProductRequest $request, $id)
    {
        $orderProduct = $this->orderProductService->updateOrderProduct($id, $request);
        // return redirect()->route('orderProducts.show', $orderProduct->id);
        return response()->json(['orderProduct' => $orderProduct]);
    }

    public function destroy($id)
    {
        $this->orderProductService->deleteOrderProduct($id);
        return redirect()->route('orderProducts.index');
    }
}
