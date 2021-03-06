<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ConcertRepository
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ConcertRepository extends EntityRepository
{


    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery('SELECT p.userLogin FROM AppBundle:User p ORDER BY p.userLogin ASC')
            ->getResult();
    }


}
