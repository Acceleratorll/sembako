<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Repositories\ProductRepository;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;
    protected $productRepository;

    public function __construct(ProductService $productService, ProductRepository $productRepository)
    {
        $this->productService = $productService;
        $this->productRepository = $productRepository;
    }

    // Return di Repo atau di service
    public function index()
    {
        $products = $this->productRepository->all();
        // return view('products.index', compact('products'));
        return response()->json(['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        $product = $this->productService->createProduct($request);
        return response()->json(['product' => $product]);
    }

    public function show($id)
    {
        $product = $this->productRepository->find($id);
        // return view('products.show', compact('product'));
        return response()->json(['product' => $product]);
    }

    public function edit($id, ProductRequest $request)
    {
        $product = $this->productService->updateProduct($id, $request);
        return view('products.edit', compact('product'));
    }

    public function update(ProductRequest $request, $id)
    {
        $product = $this->productService->updateProduct($id, $request);
        // return redirect()->route('products.show', $product->id);
        return response()->json(['product' => $product]);
    }

    public function destroy($id)
    {
        $this->productService->deleteProduct($id);
        return redirect()->route('products.index');
    }
}
