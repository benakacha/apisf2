<?php

namespace Nmpolo\RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Nmpolo\RestBundle\Entity\User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nmpolo\RestBundle\Entity\UserRepository")
 *
 * @ExclusionPolicy("all")
 */
class User
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Expose
     */
    private $id;

    /**
     * @var string $date
     *
     * @ORM\Column(name="date", type="string", length=255)
     *
     * @Constraints\NotNull
     * @Constraints\NotBlank
     * @Expose
     */
    private $date;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     *
     * @Constraints\NotNull
     * @Constraints\NotBlank
     * @Expose
     */
    private $email;

    /**
     * @var string $actif
     *
     * @ORM\Column(name="actif", type="string", length=255)
     *
     * @Constraints\NotNull
     * @Constraints\NotBlank
     * @Expose
     */
    private $actif;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=10)
     *
     * @Constraints\NotNull
     * @Constraints\NotBlank
     * @Expose
     */
    private $name;
    /**
     * @var Groups $groups
     *
     * @ORM\ManyToOne(targetEntity="Groups", inversedBy="users")
     */
    private $groups;

    public function __construct(Groups $groups)
    {
        $this->Groups = $groups;
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
     * @return User
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
     * Set email
     *
     * @param string $email
     * @return User
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
     * Set actif
     *
     * @param string $actif
     * @return User
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return string
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return User
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Set Groups
     *
     * @param Nmpolo\RestBundle\Entity\Groups $Groups
     * @return User
     */
    public function setGroups(\Nmpolo\RestBundle\Entity\Groups $groups = null)
    {
        $this->Groups = $groups;

        return $this;
    }

    /**
     * Get Groups
     *
     * @return Nmpolo\RestBundle\Entity\Groups 
     */
    public function getGroups()
    {
        return $this->groups;
    }
}
