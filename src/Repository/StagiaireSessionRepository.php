<?php

namespace App\Repository;

use App\Entity\StagiaireSession;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StagiaireSession|null find($id, $lockMode = null, $lockVersion = null)
 * @method StagiaireSession|null findOneBy(array $criteria, array $orderBy = null)
 * @method StagiaireSession[]    findAll()
 * @method StagiaireSession[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StagiaireSessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StagiaireSession::class);
    }

    // /**
    //  * @return StagiaireSession[] Returns an array of StagiaireSession objects
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
    public function findOneBySomeField($value): ?StagiaireSession
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
