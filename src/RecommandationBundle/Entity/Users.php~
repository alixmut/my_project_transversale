<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\UsersRepository")
 */
class Users
{
    /**
     * @var string
     *
     * @ORM\Column(name="Gender", type="string", length=1, nullable=false)
     */
    private $gender;

    /**
     * @var integer
     *
     * @ORM\Column(name="Age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var integer
     *
     * @ORM\Column(name="Occupation", type="integer", nullable=false)
     */
    private $occupation;

    /**
     * @var integer
     *
     * @ORM\Column(name="UserId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userid;



    /**
     * Set gender
     *
     * @param string $gender
     * @return Users
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return Users
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set occupation
     *
     * @param integer $occupation
     * @return Users
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Get occupation
     *
     * @return integer 
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }
}
