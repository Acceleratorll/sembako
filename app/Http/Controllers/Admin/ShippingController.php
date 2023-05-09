<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShippingRequest;
use App\Repositories\ShippingRepository;
use App\Services\ShippingService;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    protected $shippingService;
    protected $shippingRepository;

    public function __construct(ShippingService $shippingService, ShippingRepository $shippingRepository)
    {
        $this->shippingService = $shippingService;
        $this->shippingRepository = $shippingRepository;
    }

    public function index()
    {
        $shippings = $this->shippingRepository->all();
        // return view('shippings.index', compact('shippings'));
        return response()->json(['shippings' => $shippings]);
    }

    public function create()
    {
        return view('shippings.create');
    }

    public function store(ShippingRequest $request)
    {
        $shipping = $this->shippingService->createShipping($request);

        return response()->json(['shipping' => $shipping]);
    }

    public function show($id)
    {
        $shipping = $this->shippingRepository->find($id);
        return response()->json(['shipping' => $shipping]);
        // return view('shippings.show', compact('shipping'));
    }

    public function edit($id, ShippingRequest $request)
    {
        $shipping = $this->shippingService->updateShipping($id, $request);
        return view('shippings.edit', compact('shipping'));
    }

    public function update(ShippingRequest $request, $id)
    {
        $shipping = $this->shippingService->updateShipping($id, $request);
        return response()->json(['shipping' => $shipping]);

        // return redirect()->route('shippings.show', $shipping->id);
    }

    public function destroy($id)
    {
        $this->shippingService->deleteShipping($id);
        return redirect()->route('shippings.index');
    }
}
