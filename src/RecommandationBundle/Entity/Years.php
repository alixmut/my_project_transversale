<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Years
 *
 * @ORM\Table(name="years")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\YearsRepository")
 */
class Years
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Decade", type="integer", nullable=false)
     */
    private $decade;

    /**
     * @var integer
     *
     * @ORM\Column(name="Year", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $year;



    /**
     * Set decade
     *
     * @param integer $decade
     * @return Years
     */
    public function setDecade($decade)
    {
        $this->decade = $decade;

        return $this;
    }

    /**
     * Get decade
     *
     * @return integer 
     */
    public function getDecade()
    {
        return $this->decade;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }
}
