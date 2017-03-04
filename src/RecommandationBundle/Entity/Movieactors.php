<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movieactors
 *
 * @ORM\Table(name="movieactors")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\MovieactorsRepository")
 */
class Movieactors
{
    /**
     * @var string
     *
     * @ORM\Column(name="PlayInfo", type="string", length=110, nullable=false)
     */
    private $playinfo;

    /**
     * @var string
     *
     * @ORM\Column(name="Role", type="string", length=256, nullable=false)
     */
    private $role;

    /**
     * @var integer
     *
     * @ORM\Column(name="MovieId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $movieid;

    /**
     * @var string
     *
     * @ORM\Column(name="Actor", type="string", length=75)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $actor;



    /**
     * Set playinfo
     *
     * @param string $playinfo
     * @return Movieactors
     */
    public function setPlayinfo($playinfo)
    {
        $this->playinfo = $playinfo;

        return $this;
    }

    /**
     * Get playinfo
     *
     * @return string 
     */
    public function getPlayinfo()
    {
        return $this->playinfo;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Movieactors
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set movieid
     *
     * @param integer $movieid
     * @return Movieactors
     */
    public function setMovieid($movieid)
    {
        $this->movieid = $movieid;

        return $this;
    }

    /**
     * Get movieid
     *
     * @return integer 
     */
    public function getMovieid()
    {
        return $this->movieid;
    }

    /**
     * Set actor
     *
     * @param string $actor
     * @return Movieactors
     */
    public function setActor($actor)
    {
        $this->actor = $actor;

        return $this;
    }

    /**
     * Get actor
     *
     * @return string 
     */
    public function getActor()
    {
        return $this->actor;
    }
}
