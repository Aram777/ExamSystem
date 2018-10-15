<?php

namespace App\Repository;

use App\Entity\Assignquestiontoexam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Assignquestiontoexam|null find($id, $lockMode = null, $lockVersion = null)
 * @method Assignquestiontoexam|null findOneBy(array $criteria, array $orderBy = null)
 * @method Assignquestiontoexam[]    findAll()
 * @method Assignquestiontoexam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AssignquestiontoexamRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Assignquestiontoexam::class);
    }

//    /**
//     * @return Assignquestiontoexam[] Returns an array of Assignquestiontoexam objects
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
    public function findOneBySomeField($value): ?Assignquestiontoexam
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
