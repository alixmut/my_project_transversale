<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moviekeywords
 *
 * @ORM\Table(name="moviekeywords")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\MoviekeywordsRepository")
 */
class Moviekeywords
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
     * @var string
     *
     * @ORM\Column(name="Keyword", type="string", length=60)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $keyword;



    /**
     * Set movieid
     *
     * @param integer $movieid
     * @return Moviekeywords
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
     * Set keyword
     *
     * @param string $keyword
     * @return Moviekeywords
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string 
     */
    public function getKeyword()
    {
        return $this->keyword;
    }
}
