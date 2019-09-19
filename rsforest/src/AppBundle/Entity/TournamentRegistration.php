<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * TournamentRegistration
 *
 * @ORM\Table(name="tournament_registration")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\TournamentRegistrationRepository")
 */
class TournamentRegistration
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
     * @ORM\Column(name="in_charge", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $inCharge;

    /**
     * @var integer
     *
     * @ORM\Column(name="registration_number", type="smallint", nullable=false)
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 1,
     *      max = 9999,
     *      minMessage = "Le numéro de matricule ne peut être plus petit que {{ limit }}",
     *      maxMessage = "Le numéro de matricule ne peut être plus grand que {{ limit }}"
     * )
     */
    private $registrationNumber;

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
     * @ORM\ManyToMany(targetEntity="TournamentRegistrationTeam")
     * @ORM\JoinTable(name="tournament_registrations_tournament_registration_teams",
     *      joinColumns={@ORM\JoinColumn(name="tournament_registration_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="tournament_registration_team_id", referencedColumnName="id")}
     *      )
     * @Assert\NotBlank()
     **/
    private $tournamentRegistrationTeams;

    /**
     * @var boolean
     *
     * @ORM\Column(name="condition_term", type="boolean", nullable=false)
     * @Assert\NotBlank()
     */
    private $condition;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_registration", type="datetime", nullable=true)
     */
    private $date;

    public function __construct() {
        $this->tournamentRegistrationTeams = new \Doctrine\Common\Collections\ArrayCollection();
        $this->condition = false;
        $this->date = new \DateTime();
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
     * @return TournamentRegistration
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
     * Set inCharge
     *
     * @param string $inCharge
     *
     * @return TournamentRegistration
     */
    public function setInCharge($inCharge)
    {
        $this->inCharge = $inCharge;

        return $this;
    }

    /**
     * Get inCharge
     *
     * @return string
     */
    public function getInCharge()
    {
        return $this->inCharge;
    }

    /**
     * Set registrationNumber
     *
     * @param integer $registrationNumber
     *
     * @return TournamentRegistration
     */
    public function setRegistrationNumber($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;

        return $this;
    }

    /**
     * Get registrationNumber
     *
     * @return integer
     */
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return TournamentRegistration
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
     * @return TournamentRegistration
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
     * Set postalCode
     *
     * @param integer $postalCode
     *
     * @return TournamentRegistration
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
     * @return TournamentRegistration
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
     * @return TournamentRegistration
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
     * @return TournamentRegistration
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
     * Set condition
     *
     * @param boolean $condition
     *
     * @return TournamentRegistration
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Get condition
     *
     * @return boolean
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Add tournamentRegistrationTeam
     *
     * @param \AppBundle\Entity\TournamentRegistrationTeam $tournamentRegistrationTeam
     *
     * @return TournamentRegistration
     */
    public function addTournamentRegistrationTeam(\AppBundle\Entity\TournamentRegistrationTeam $tournamentRegistrationTeam)
    {
        $this->tournamentRegistrationTeams[] = $tournamentRegistrationTeam;

        return $this;
    }

    /**
     * Remove tournamentRegistrationTeam
     *
     * @param \AppBundle\Entity\TournamentRegistrationTeam $tournamentRegistrationTeam
     */
    public function removeTournamentRegistrationTeam(\AppBundle\Entity\TournamentRegistrationTeam $tournamentRegistrationTeam)
    {
        $this->tournamentRegistrationTeams->removeElement($tournamentRegistrationTeam);
    }

    /**
     * Get tournamentRegistrationTeams
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTournamentRegistrationTeams()
    {
        return $this->tournamentRegistrationTeams;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return TournamentRegistration
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
}
