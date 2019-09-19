<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Tournament
 *
 * @ORM\Table(name="tournament")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\TournamentRepository")
 */
class Tournament
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_tournament", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\TournamentPool", mappedBy="tournament", cascade={"persist", "remove"})
     */
    private $tournamentpools;

    function __construct()
    {
        $this->date = new \DateTime();
        $this->tournamentpools = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Tournament
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Add tournamentpool
     *
     * @param \AppBundle\Entity\TournamentPool $tournamentpool
     *
     * @return Tournament
     */
    public function addTournamentpool(\AppBundle\Entity\TournamentPool $tournamentpool)
    {
        $this->tournamentpools[] = $tournamentpool;

        return $this;
    }

    /**
     * Remove tournamentpool
     *
     * @param \AppBundle\Entity\TournamentPool $tournamentpool
     */
    public function removeTournamentpool(\AppBundle\Entity\TournamentPool $tournamentpool)
    {
        $this->tournamentpools->removeElement($tournamentpool);
    }

    /**
     * Get tournamentpools
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTournamentpools()
    {
        return $this->tournamentpools;
    }
}
