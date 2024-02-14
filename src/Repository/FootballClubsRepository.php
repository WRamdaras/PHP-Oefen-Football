<?php

namespace App\Repository;

use App\Entity\FootballClubs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FootballClubs>
 *
 * @method FootballClubs|null find($id, $lockMode = null, $lockVersion = null)
 * @method FootballClubs|null findOneBy(array $criteria, array $orderBy = null)
 * @method FootballClubs[]    findAll()
 * @method FootballClubs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FootballClubsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FootballClubs::class);
    }

//    /**
//     * @return FootballClubs[] Returns an array of FootballClubs objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FootballClubs
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
