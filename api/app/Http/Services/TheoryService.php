<?php

namespace App\Services;

use App\Repositories\TheoryRepository;
use App\Entities\Theory;

class TheoryService
{
    /**
     * @var TheoryRepository
     */
    private $mainRepository;

    /**
     * TheoryService constructor.
     * @param TheoryRepository $mainRepository
     */
    public function __construct()
    {
        $this->mainRepository = new TheoryRepository;
    }

    public function findAll()
    {
        return $this->userRepository->findAll();
    }
}
