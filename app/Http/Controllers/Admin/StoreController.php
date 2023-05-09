<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Repositories\StoreRepository;
use App\Services\StoreService;

class StoreController extends Controller
{
    protected $storeService;
    protected $storeRepository;

    public function __construct(StoreService $storeService, StoreRepository $storeRepository)
    {
        $this->storeService = $storeService;
        $this->storeRepository = $storeRepository;
    }

    public function index()
    {
        $stores = $this->storeRepository->all();
        // return view('stores.index', compact('stores'));
        return response()->json(['stores' => $stores]);
    }

    public function create()
    {
        return view('stores.create');
    }

    public function store(StoreRequest $request)
    {
        $store = $this->storeService->createStore($request);

        return response()->json(['store' => $store]);
    }
    
    public function show($id)
    {
        $store = $this->storeRepository->find($id);
        return response()->json(['store' => $store]);
        // return view('stores.show', compact('store'));
    }
    
    public function edit($id, StoreRequest $request)
    {
        $store = $this->storeService->updateStore($id, $request);
        return view('stores.edit', compact('store'));
    }
    
    public function update(StoreRequest $request, $id)
    {
        $store = $this->storeService->updateStore($id, $request);
        return response()->json(['store' => $store]);

        // return redirect()->route('stores.show', $store->id);
    }

    public function destroy($id)
    {
        $this->storeService->deleteStore($id);
        return redirect()->route('stores.index');
    }
}
