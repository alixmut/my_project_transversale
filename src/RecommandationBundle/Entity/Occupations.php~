<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Occupations
 *
 * @ORM\Table(name="occupations")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\OccupationsRepository")
 */
class Occupations
{
    /**
     * @var string
     *
     * @ORM\Column(name="Occupation", type="string", length=25, nullable=false)
     */
    private $occupation;

    /**
     * @var integer
     *
     * @ORM\Column(name="OccupationId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $occupationid;



    /**
     * Set occupation
     *
     * @param string $occupation
     * @return Occupations
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Get occupation
     *
     * @return string 
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Get occupationid
     *
     * @return integer 
     */
    public function getOccupationid()
    {
        return $this->occupationid;
    }
}
