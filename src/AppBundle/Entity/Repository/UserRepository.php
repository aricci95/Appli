<?php

// src/AppBundle/Entity/Repository/UserRepository.php
namespace AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p.userLogin FROM AppBundle:User as p'
            )
            ->getResult();
    }
}
