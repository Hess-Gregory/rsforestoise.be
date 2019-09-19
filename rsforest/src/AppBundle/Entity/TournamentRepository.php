<?php

namespace AppBundle\Entity;

/**
 * TournamentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TournamentRepository extends \Doctrine\ORM\EntityRepository
{
	public function findAllTournamentsAvailable()
	{
		$qb = $this->_em->createQueryBuilder();

		$qb->select('t')
		   ->from('AppBundle:Tournament', 't')
		   ->where(':currentDate < t.date')
		   ->setParameter('currentDate', new \DateTime());

		return $qb->getQuery()
		          ->getResult();
	}

	public function findLatestTournament()
	{
		$qb = $this->_em->createQueryBuilder();

		$qb->select('t')
		   ->from('AppBundle:Tournament', 't')
		   ->orderBy('t.date', 'DESC')
		   ->setMaxResults(1);

		return $qb->getQuery()
		          ->getSingleResult();
	}
}
