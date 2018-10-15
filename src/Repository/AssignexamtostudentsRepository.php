<?php

namespace App\Repository;

use App\Entity\Assignexamtostudents;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Assignexamtostudents|null find($id, $lockMode = null, $lockVersion = null)
 * @method Assignexamtostudents|null findOneBy(array $criteria, array $orderBy = null)
 * @method Assignexamtostudents[]    findAll()
 * @method Assignexamtostudents[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AssignexamtostudentsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Assignexamtostudents::class);
    }

//    /**
//     * @return Assignexamtostudents[] Returns an array of Assignexamtostudents objects
//     */
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
    public function findOneBySomeField($value): ?Assignexamtostudents
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
