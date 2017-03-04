<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movielinks
 *
 * @ORM\Table(name="movielinks")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\MovielinksRepository")
 */
class Movielinks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="MovieId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $movieid;

    /**
     * @var integer
     *
     * @ORM\Column(name="LinkMovieId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linkmovieid;

    /**
     * @var string
     *
     * @ORM\Column(name="LinkType", type="string", length=30)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linktype;



    /**
     * Set movieid
     *
     * @param integer $movieid
     * @return Movielinks
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
     * Set linkmovieid
     *
     * @param integer $linkmovieid
     * @return Movielinks
     */
    public function setLinkmovieid($linkmovieid)
    {
        $this->linkmovieid = $linkmovieid;

        return $this;
    }

    /**
     * Get linkmovieid
     *
     * @return integer 
     */
    public function getLinkmovieid()
    {
        return $this->linkmovieid;
    }

    /**
     * Set linktype
     *
     * @param string $linktype
     * @return Movielinks
     */
    public function setLinktype($linktype)
    {
        $this->linktype = $linktype;

        return $this;
    }

    /**
     * Get linktype
     *
     * @return string 
     */
    public function getLinktype()
    {
        return $this->linktype;
    }
}
