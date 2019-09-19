<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Registration
 *
 * @ORM\Table(name="registration")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\RegistrationRepository")
 */
class Registration
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
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $firstName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_birth", type="datetime", nullable=false)
     * @Assert\NotBlank()
     * @Assert\DateTime()
     */
    private $dateBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="birthplace", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $birthplace;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", nullable=false)
     * @Assert\NotBlank()
     */
    private $street;

    /**
     * @var integer
     *
     * @ORM\Column(name="number_street", type="smallint", nullable=false)
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 1,
     *      max = 9999,
     *      minMessage = "Le numéro de votre habitation ne peut être plus petit que {{ limit }}",
     *      maxMessage = "Le numéro de votre habitation ne peut être plus grand que {{ limit }}"
     * )
     */
    private $numberStreet;

    /**
     * @var string
     *
     * @ORM\Column(name="mailbox", type="string", length=255, nullable=true)
     */
    private $mailbox;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="smallint", nullable=false)
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 1,
     *      max = 9999,
     *      minMessage = "Votre code postal ne peut être plus petit que {{ limit }}",
     *      maxMessage = "Votre code postal ne peut être plus grand que {{ limit }}"
     * )
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     * @Assert\Email(
     *     message = "'{{ value }}' n'est pas un email valide",
     *     checkMX = true
     * )
     */
    private $email;
    
    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $phone;
    
    /**
     * @var string
     *
     * @ORM\Column(name="responsible_phone", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $responsiblePhone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    protected $enabled;

    public function __construct() {
        $this->enabled = false;
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
     * @return Registration
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Registration
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set dateBirth
     *
     * @param \DateTime $dateBirth
     *
     * @return Registration
     */
    public function setDateBirth($dateBirth)
    {
        $this->dateBirth = $dateBirth;

        return $this;
    }

    /**
     * Get dateBirth
     *
     * @return \DateTime
     */
    public function getDateBirth()
    {
        return $this->dateBirth;
    }

    /**
     * Set birthplace
     *
     * @param string $birthplace
     *
     * @return Registration
     */
    public function setBirthplace($birthplace)
    {
        $this->birthplace = $birthplace;

        return $this;
    }

    /**
     * Get birthplace
     *
     * @return string
     */
    public function getBirthplace()
    {
        return $this->birthplace;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return Registration
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set numberStreet
     *
     * @param integer $numberStreet
     *
     * @return Registration
     */
    public function setNumberStreet($numberStreet)
    {
        $this->numberStreet = $numberStreet;

        return $this;
    }

    /**
     * Get numberStreet
     *
     * @return integer
     */
    public function getNumberStreet()
    {
        return $this->numberStreet;
    }

    /**
     * Set mailbox
     *
     * @param string $mailbox
     *
     * @return Registration
     */
    public function setMailbox($mailbox)
    {
        $this->mailbox = $mailbox;

        return $this;
    }

    /**
     * Get mailbox
     *
     * @return string
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }

    /**
     * Set postalCode
     *
     * @param integer $postalCode
     *
     * @return Registration
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return integer
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Registration
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Registration
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Registration
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set responsiblePhone
     *
     * @param string $responsiblePhone
     *
     * @return Registration
     */
    public function setResponsiblePhone($responsiblePhone)
    {
        $this->responsiblePhone = $responsiblePhone;

        return $this;
    }

    /**
     * Get responsiblePhone
     *
     * @return string
     */
    public function getResponsiblePhone()
    {
        return $this->responsiblePhone;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Registration
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
}
