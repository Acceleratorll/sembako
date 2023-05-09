<?php

namespace App\Services;

use App\Repositories\OwnerRepository;

class OwnerService
{
    protected $ownerRepository;

    public function __construct(OwnerRepository $ownerRepository)
    {
        $this->ownerRepository = $ownerRepository;
    }

    public function createOwner($data)
    {
        $owner = $this->ownerRepository->create($data);

        return $owner;
    }

    public function updateOwner($id, $data)
    {
        $owner = $this->ownerRepository->update($id, $data);

        return $owner;
    }

    public function deleteOwner($id)
    {
        $owner = $this->ownerRepository->delete($id);

        return $owner;
    }
}
