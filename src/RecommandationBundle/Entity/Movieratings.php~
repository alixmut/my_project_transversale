<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movieratings
 *
 * @ORM\Table(name="movieratings")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\MovieratingsRepository")
 */
class Movieratings
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Votes", type="integer", nullable=false)
     */
    private $votes;

    /**
     * @var string
     *
     * @ORM\Column(name="Rating", type="decimal", precision=4, scale=2, nullable=false)
     */
    private $rating;

    /**
     * @var integer
     *
     * @ORM\Column(name="MovieId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $movieid;



    /**
     * Set votes
     *
     * @param integer $votes
     * @return Movieratings
     */
    public function setVotes($votes)
    {
        $this->votes = $votes;

        return $this;
    }

    /**
     * Get votes
     *
     * @return integer 
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * Set rating
     *
     * @param string $rating
     * @return Movieratings
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return string 
     */
    public function getRating()
    {
        return $this->rating;
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
