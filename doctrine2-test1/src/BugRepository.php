<?php
declare(strict_types=1);

use Doctrine\ORM\EntityRepository;

class BugRepository extends EntityRepository {

    public function getRecentBugs($limit = 30)
    {
        $dql = 'SELECT b, e, r
            FROM Bug b
            JOIN b.engineer e
            JOIN b.reporter r
            ORDER BY b.created DESC';

        $query = $this->getEntityManager->createQuery($dql);
        $query->setMaxResults($limit);
        return $query->getResult();
    }

    public function getRecentBugsArray($limit = 30)
    {
        $dql = 'SELECT b, e, r, p
            FROM Bug b
            JOIN b.engineer e
            JOIN b.reporter r
            JOIN b.products p
            ORDER BY b.created DESC';

        $query = $this->getEntityManager->createQuery($dql);
        $query->setMaxResults($limit);
        return $query->getArrayResult();
    }

    public function getUserBugs($userId, $limit = 30)
    {
        $dql = "SELECT b, e, r 
            FROM Bug b
            JOIN b.engineer e
            JOIN b.reporter r
            WHERE
                (e.id = ?1 OR r.id = ?1)
                AND b.status='OPEN'
            ORDER BY b.created DESC";


        return $entityManager->createQuery($dql)
            ->setParameter('1', $userId)
            ->setMaxResults($limit)
            ->getResult();
    }

    public function getOpenBugsByProduct()
    {
        $dql = "SELECT
                products.id,
                products.name,
                count(bug.id) as openBugs
            FROM Bug bug
            JOIN bug.products products
            WHERE bug.status = 'OPEN'
            GROUP BY products.id
            ";


        return $entityManager->createQuery($dql)->getScalarResult();
    }
}

