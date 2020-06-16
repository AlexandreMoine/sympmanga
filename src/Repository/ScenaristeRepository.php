<?php

namespace App\Repository;

use App\Entity\Scenariste;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Scenariste|null find($id, $lockMode = null, $lockVersion = null)
 * @method Scenariste|null findOneBy(array $criteria, array $orderBy = null)
 * @method Scenariste[]    findAll()
 * @method Scenariste[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScenaristeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Scenariste::class);
    }

    // /**
    //  * @return ScenaristeController[] Returns an array of ScenaristeController objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ScenaristeController
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
