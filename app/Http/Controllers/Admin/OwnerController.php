<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OwnerRequest;
use App\Repositories\OwnerRepository;
use App\Services\OwnerService;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    protected $ownerService;
    protected $ownerRepository;

    public function __construct(OwnerService $ownerService, OwnerRepository $ownerRepository)
    {
        $this->ownerService = $ownerService;
        $this->ownerRepository = $ownerRepository;
    }

    public function index()
    {
        $owners = $this->ownerRepository->all();
        // return view('owners.index', compact('owners'));
        return response()->json(['owners' => $owners]);
    }

    public function create()
    {
        return view('owners.create');
    }

    public function store(OwnerRequest $request)
    {
        $owner = $this->ownerService->createOwner($request);

        return redirect()->route('owners.show', $owner->id);
    }

    public function show($id)
    {
        $owner = $this->ownerRepository->find($id);
        return view('owners.show', compact('owner'));
    }

    public function edit($id, OwnerRequest $request)
    {
        $owner = $this->ownerService->updateOwner($id, $request);
        return view('owners.edit', compact('owner'));
    }

    public function update(OwnerRequest $request, $id)
    {
        $owner = $this->ownerService->updateOwner($id, $request);

        return redirect()->route('owners.show', $owner->id);
    }

    public function destroy($id)
    {
        $this->ownerService->deleteOwner($id);
        return redirect()->route('owners.index');
    }
}
