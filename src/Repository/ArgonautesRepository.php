<?php

namespace App\Repository;

use App\Entity\Argonautes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Argonautes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Argonautes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Argonautes[]    findAll()
 * @method Argonautes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArgonautesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Argonautes::class);
    }

    // /**
    //  * @return Argonautes[] Returns an array of Argonautes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Argonautes
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
