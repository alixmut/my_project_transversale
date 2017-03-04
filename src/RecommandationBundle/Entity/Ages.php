<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ages
 *
 * @ORM\Table(name="ages")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\AgesRepository")
 */
class Ages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="MinAge", type="integer", nullable=false)
     */
    private $minage;

    /**
     * @var integer
     *
     * @ORM\Column(name="MaxAge", type="integer", nullable=false)
     */
    private $maxage;

    /**
     * @var integer
     *
     * @ORM\Column(name="AgeId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ageid;



    /**
     * Set minage
     *
     * @param integer $minage
     * @return Ages
     */
    public function setMinage($minage)
    {
        $this->minage = $minage;

        return $this;
    }

    /**
     * Get minage
     *
     * @return integer 
     */
    public function getMinage()
    {
        return $this->minage;
    }

    /**
     * Set maxage
     *
     * @param integer $maxage
     * @return Ages
     */
    public function setMaxage($maxage)
    {
        $this->maxage = $maxage;

        return $this;
    }

    /**
     * Get maxage
     *
     * @return integer 
     */
    public function getMaxage()
    {
        return $this->maxage;
    }

    /**
     * Get ageid
     *
     * @return integer 
     */
    public function getAgeid()
    {
        return $this->ageid;
    }
}
