<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function createCategory($data)
    {
        $category = $this->categoryRepository->create($data);
        
        return $category;
    }

    public function updateCategory($id, $data)
    {
        $category = $this->categoryRepository->update($id, $data);
        
        return $category;
    }

    public function deleteCategory($id)
    {
        $category = $this->categoryRepository->delete($id);
        
        return $category;
    }
}
