<?php 

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\UserRepository")
 */
 class User extends BaseUser 
 {
 	/**
 	 * @ORM\Id
 	 * @ORM\Column(type="integer")
 	 * @ORM\GeneratedValue(strategy="AUTO")
 	 */
 	protected $id;

 	public function __construct()
 	{
 		parent::__construct();
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
}
