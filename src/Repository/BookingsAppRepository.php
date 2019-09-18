<?php

namespace App\Repository;

use App\Entity\BookingsApp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method BookingsApp|null find($id, $lockMode = null, $lockVersion = null)
 * @method BookingsApp|null findOneBy(array $criteria, array $orderBy = null)
 * @method BookingsApp[]    findAll()
 * @method BookingsApp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookingsAppRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BookingsApp::class);
    }

    // /**
    //  * @return BookingsApp[] Returns an array of BookingsApp objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BookingsApp
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
