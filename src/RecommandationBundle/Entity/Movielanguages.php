<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movielanguages
 *
 * @ORM\Table(name="movielanguages")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\MovielanguagesRepository")
 */
class Movielanguages
{
    /**
     * @var string
     *
     * @ORM\Column(name="LanguageInfo", type="string", length=70, nullable=false)
     */
    private $languageinfo;

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
     * @ORM\Column(name="Language", type="string", length=30)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $language;



    /**
     * Set languageinfo
     *
     * @param string $languageinfo
     * @return Movielanguages
     */
    public function setLanguageinfo($languageinfo)
    {
        $this->languageinfo = $languageinfo;

        return $this;
    }

    /**
     * Get languageinfo
     *
     * @return string 
     */
    public function getLanguageinfo()
    {
        return $this->languageinfo;
    }

    /**
     * Set movieid
     *
     * @param integer $movieid
     * @return Movielanguages
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
     * Set language
     *
     * @param string $language
     * @return Movielanguages
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }
}
