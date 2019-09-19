<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Page
 *
 * @ORM\Table(name="page")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\PageRepository")
 */
class Page
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
     * @ORM\Column(name="routing_name", type="string", length=255, nullable=false)
     */
    private $routingName;

    /**
    * @ORM\OneToOne(targetEntity="AppBundle\Entity\SEO")
    * @ORM\JoinColumn(nullable=true)
    */
    private $seo;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Text", mappedBy="page")
     **/
    private $texts;

    public function __construct() {
        $this->texts = new ArrayCollection();
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
     * @return Page
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
     * Set routingName
     *
     * @param string $routingName
     * @return Page
     */
    public function setRoutingName($routingName)
    {
        $this->routingName = $routingName;

        return $this;
    }

    /**
     * Get routingName
     *
     * @return string 
     */
    public function getRoutingName()
    {
        return $this->routingName;
    }

    /**
     * Set seo
     *
     * @param \AppBundle\Entity\SEO $seo
     * @return Page
     */
    public function setSeo(\AppBundle\Entity\SEO $seo)
    {
        $this->seo = $seo;

        return $this;
    }

    /**
     * Get seo
     *
     * @return \AppBundle\Entity\SEO 
     */
    public function getSeo()
    {
        return $this->seo;
    }

    /**
     * Add texts
     *
     * @param \AppBundle\Entity\Text $texts
     * @return Page
     */
    public function addText(\AppBundle\Entity\Text $texts)
    {
        $this->texts[] = $texts;

        return $this;
    }

    /**
     * Remove texts
     *
     * @param \AppBundle\Entity\Text $texts
     */
    public function removeText(\AppBundle\Entity\Text $texts)
    {
        $this->texts->removeElement($texts);
    }

    /**
     * Get texts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTexts()
    {
        return $this->texts;
    }
}
