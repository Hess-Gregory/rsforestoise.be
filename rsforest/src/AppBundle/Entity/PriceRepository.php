<?php

namespace AppBundle\Entity;

/**
 * PriceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PriceRepository extends \Doctrine\ORM\EntityRepository
{
	public function findPriceOfCurrentYear()
	{
		$qb = $this->_em->createQueryBuilder();

		$qb->select('p')
		   ->from('AppBundle:Price', 'p')
		   ->where(':currentDate BETWEEN p.dateStart AND p.dateEnd')
		   ->setParameter('currentDate', new \DateTime());

		return $qb->getQuery()
		          ->getResult();
	}
}
