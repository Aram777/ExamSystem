<?php

namespace App\Repository;

use App\Entity\EduUsers;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;

/**
 * @method EduUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method EduUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method EduUsers[]    findAll()
 * @method EduUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EduUsersRepository extends EntityRepository implements UserLoaderInterface
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EduUsers::class);
    }

    public function loadUserByUsername($username)
    {
        return $this->createQueryBuilder('u')
            ->where('u.username = :username OR u.email = :email')
            ->setParameter('username', $username)
            ->setParameter('email', $username)
            ->getQuery()
            ->getOneOrNullResult();
    }

//    /**
//     * @return EduUsers[] Returns an array of EduUsers objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EduUsers
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
