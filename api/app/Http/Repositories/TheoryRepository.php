<?php

namespace App\Repositories;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use App\Entities\Theory;

class TheoryRepository extends EntityRepository
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        parent::__construct($em, $em->getClassMetadata(Theory::class));
    }
}
