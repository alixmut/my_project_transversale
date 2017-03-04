<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userratings
 *
 * @ORM\Table(name="userratings")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\UserratingsRepository")
 */
class Userratings
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Rating", type="integer", nullable=false)
     */
    private $rating;

    /**
     * @var integer
     *
     * @ORM\Column(name="UserId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="MovieId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $movieid;



    /**
     * Set rating
     *
     * @param integer $rating
     * @return Userratings
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return Userratings
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
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

    /**
     * Set movieid
     *
     * @param integer $movieid
     * @return Userratings
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
}
