<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Picture
 *
 * @ORM\Table(name="picture")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\PictureRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Picture
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
   * @ORM\Column(name="file_type", type="string", length=255, nullable=false)
   */
  private $fileType;
  
  /**
   * @var string
   *
   * @ORM\Column(name="original_name", type="string", length=255, nullable=false)
   */
  private $originalName;

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Actuality", cascade={"persist"})
   * @ORM\JoinColumn(name="actuality_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
   */
  private $actuality;

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Team", cascade={"persist"})
   * @ORM\JoinColumn(name="team_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
   */
  private $team;

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Player", cascade={"persist"})
   * @ORM\JoinColumn(name="player_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
   */
  private $player;

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Committee", cascade={"persist"})
   * @ORM\JoinColumn(name="committee_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
   */
  private $committee;

  /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TeamStaff", cascade={"persist"})
   * @ORM\JoinColumn(name="teamStaff_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
   */
  private $teamStaff;


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
     * @return Picture
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
     * Set fileType
     *
     * @param string $fileType
     *
     * @return Picture
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;

        return $this;
    }

    /**
     * Get fileType
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Set originalName
     *
     * @param string $originalName
     *
     * @return Picture
     */
    public function setOriginalName($originalName)
    {
        $this->originalName = $originalName;

        return $this;
    }

    /**
     * Get originalName
     *
     * @return string
     */
    public function getOriginalName()
    {
        return $this->originalName;
    }

    /**
     * Set actuality
     *
     * @param \AppBundle\Entity\Actuality $actuality
     *
     * @return Picture
     */
    public function setActuality(\AppBundle\Entity\Actuality $actuality = null)
    {
        $this->actuality = $actuality;

        return $this;
    }

    /**
     * Get actuality
     *
     * @return \AppBundle\Entity\Actuality
     */
    public function getActuality()
    {
        return $this->actuality;
    }

    /**
     * Set team
     *
     * @param \AppBundle\Entity\Team $team
     *
     * @return Picture
     */
    public function setTeam(\AppBundle\Entity\Team $team = null)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return \AppBundle\Entity\Team
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set player
     *
     * @param \AppBundle\Entity\Player $player
     *
     * @return Picture
     */
    public function setPlayer(\AppBundle\Entity\Player $player = null)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return \AppBundle\Entity\Player
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set committee
     *
     * @param \AppBundle\Entity\Committee $committee
     *
     * @return Picture
     */
    public function setCommittee(\AppBundle\Entity\Committee $committee = null)
    {
        $this->committee = $committee;

        return $this;
    }

    /**
     * Get committee
     *
     * @return \AppBundle\Entity\Committee
     */
    public function getCommittee()
    {
        return $this->committee;
    }

    /**
     * Set teamStaff
     *
     * @param \AppBundle\Entity\TeamStaff $teamStaff
     *
     * @return Picture
     */
    public function setTeamStaff(\AppBundle\Entity\TeamStaff $teamStaff = null)
    {
        $this->teamStaff = $teamStaff;

        return $this;
    }

    /**
     * Get teamStaff
     *
     * @return \AppBundle\Entity\TeamStaff
     */
    public function getTeamStaff()
    {
        return $this->teamStaff;
    }
}
