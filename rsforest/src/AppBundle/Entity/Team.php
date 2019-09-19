<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Team
 *
 * @ORM\Table(name="team")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\TeamRepository")
 */
class Team
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
    * @Gedmo\Slug(fields={"name"})
    * @ORM\Column(length=128)
    */
    private $slug;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Picture", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="picture_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    private $picture;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\TeamStaff", mappedBy="team", cascade={"persist", "remove"})
     */
    private $teamStaffs;

    function __construct()
    {
        $this->type = 'young'; 
        $this->teamStaffs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->updatedAt = new \DateTime();
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
     * Set name
     *
     * @param string $name
     *
     * @return Team
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Team
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Team
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Team
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set picture
     *
     * @param \AppBundle\Entity\Picture $picture
     *
     * @return Team
     */
    public function setPicture(\AppBundle\Entity\Picture $picture = null)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return \AppBundle\Entity\Picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Add teamStaff
     *
     * @param \AppBundle\Entity\TeamStaff $teamStaff
     *
     * @return Team
     */
    public function addTeamStaff(\AppBundle\Entity\TeamStaff $teamStaff)
    {
        $this->teamStaffs[] = $teamStaff;

        return $this;
    }

    /**
     * Remove teamStaff
     *
     * @param \AppBundle\Entity\TeamStaff $teamStaff
     */
    public function removeTeamStaff(\AppBundle\Entity\TeamStaff $teamStaff)
    {
        $this->teamStaffs->removeElement($teamStaff);
    }

    /**
     * Get teamStaffs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTeamStaffs()
    {
        return $this->teamStaffs;
    }
}
