<?php
// src/AppBundle/Repository/ProductRepository.php
namespace RecommandationBundle\Entity;

use Doctrine\ORM\EntityRepository;

class AgesRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM RecommandationBundle:Ages p ORDER BY p.ageid ASC'
            )
            ->getResult();
    }
}