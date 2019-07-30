<?php

namespace App\Repository;

use App\Entity\Nationalit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Nationalit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nationalit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nationalit[]    findAll()
 * @method Nationalit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NationalitRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Nationalit::class);
    }

    // /**
    //  * @return Nationalit[] Returns an array of Nationalit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nationalit
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
