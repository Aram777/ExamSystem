<?php

namespace App\Repository;

use App\Entity\Questions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Questions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Questions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Questions[]    findAll()
 * @method Questions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Questions::class);
    }
    /**
    * @return Questions[] Returns an array of Questions objects
    */
    public function GetAllQuestions($userid):array{
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT
            id,
            qdescription,
            qcategory,
            CASE
            WHEN qcategory =1  THEN "Programming"
            WHEN qcategory =2  THEN "Math"
            WHEN qcategory =3  THEN "Finnish Languge"
            ELSE "No category is selected"
            END as qcategoryDsc,
            qdifficultylevel,
            CASE
            WHEN qdifficultylevel =0  THEN "Easy"
            WHEN qdifficultylevel =1  THEN "Medium"
            WHEN qdifficultylevel =2  THEN "Hard"
            ELSE "No qdifficultylevel is selected"
            END as qdifficultylevelDsc,

            userid
            FROM questions q
            WHERE q.userid = :userid
            ORDER BY q.qcategory
            ';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['userid' => $userid]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

        public function GetQuestionAnswers($qid):array{
                $conn = $this->getEntityManager()->getConnection();

                $sql = '
                    SELECT
                    id, questionid, ansdescription,  iscorrect,
                    CASE
                    WHEN iscorrect =0  THEN "Wrong"
                    WHEN iscorrect =1  THEN "Correct"
                    END as iscorrectDsc
                    FROM answers a
                    WHERE a.questionid= :qid
                    ';
                    $stmt = $conn->prepare($sql);
                    $stmt->execute(['qid' => $qid]);

                // returns an array of arrays (i.e. a raw data set)
                return $stmt->fetchAll();
            }

//    /**
//     * @return Questions[] Returns an array of Questions objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Questions
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
