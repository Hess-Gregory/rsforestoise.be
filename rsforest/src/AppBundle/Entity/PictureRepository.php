<?php

namespace AppBundle\Entity;

/**
 * PictureRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PictureRepository extends \Doctrine\ORM\EntityRepository
{
	public function findAllPicturesByActualityId($actualityId)
	{
		$qb = $this->_em->createQueryBuilder();

		$qb->select('p')
		   ->from('AppBundle:Picture', 'p')
		   ->where('p.actuality = :actualityId')
		   ->setParameter('actualityId', $actualityId);

		return $qb->getQuery()
		          ->getResult();
	}

	public function findAllPicturesByTeamId($teamId)
	{
		$qb = $this->_em->createQueryBuilder();

		$qb->select('p')
		   ->from('AppBundle:Picture', 'p')
		   ->where('p.team = :teamId')
		   ->setParameter('teamId', $teamId);

		return $qb->getQuery()
		          ->getResult();
	}

	public function findAllPicturesByPlayerId($playerId)
	{
		$qb = $this->_em->createQueryBuilder();

		$qb->select('p')
		   ->from('AppBundle:Picture', 'p')
		   ->where('p.player = :playerId')
		   ->setParameter('playerId', $playerId);

		return $qb->getQuery()
		          ->getResult();
	}

	public function findAllPicturesByCommitteeId($committeeId)
	{
		$qb = $this->_em->createQueryBuilder();

		$qb->select('p')
		   ->from('AppBundle:Picture', 'p')
		   ->where('p.committee = :committeeId')
		   ->setParameter('committeeId', $committeeId);

		return $qb->getQuery()
		          ->getResult();
	}

	public function findAllPicturesByTeamStaffId($teamStaffId)
	{
		$qb = $this->_em->createQueryBuilder();

		$qb->select('p')
		   ->from('AppBundle:Picture', 'p')
		   ->where('p.teamStaff = :teamStaffId')
		   ->setParameter('teamStaffId', $teamStaffId);

		return $qb->getQuery()
		          ->getResult();
	}
}
