<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function createProduct($data)
    {
        $product = $this->productRepository->create($data);
        // perform other business logic related to creating a product
        return $product;
    }

    public function updateProduct($id, $data)
    {
        $product = $this->productRepository->update($id, $data);
        // perform other business logic related to updating a product
        return $product;
    }

    public function deleteProduct($id)
    {
        $product = $this->productRepository->delete($id);
        // perform other business logic related to deleting a product
        return $product;
    }
}