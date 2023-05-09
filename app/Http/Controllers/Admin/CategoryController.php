<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Repositories\CategoryRepository;
use App\Services\CategoryService;
use Facade\FlareClient\Http\Response;
use Illuminate\View\View;

class CategoryController extends Controller
{
    protected $categoryService;
    protected $categoryRepository;

    public function __construct(CategoryService $categoryService, CategoryRepository $categoryRepository)
    {
        $this->categoryService = $categoryService;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->all();
        return response()->json(['categories' => $categories]);
    }

    public function create(): View
    {
        return view('category.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = $this->categoryService->createCategory($request);
        return response()->json(['category' => $category]);
    }

    public function show($id)
    {
        $category = $this->categoryRepository->find($id);
        // return view('category.show', compact('category'));
        return response()->json(['category' => $category]);
    }

    public function edit($id)
    {
        // $category = $this->categoryService->updateCategory($id, $request);
        return view('category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = $this->categoryService->updateCategory($id, $request);
        return response()->json(['category' => $category]);
    }

    public function destroy($id)
    {
        $this->categoryService->deleteCategory($id);
        return redirect()->route('category.index');
    }
}
