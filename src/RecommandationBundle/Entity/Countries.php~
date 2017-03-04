<?php

namespace RecommandationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 *
 * @ORM\Table(name="countries")
 * @ORM\Entity(repositoryClass="RecommandationBundle\Entity\CountriesRepository")
 */
class Countries
{
    /**
     * @var string
     *
     * @ORM\Column(name="Continent", type="string", length=40, nullable=false)
     */
    private $continent;

    /**
     * @var string
     *
     * @ORM\Column(name="Country", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $country;



    /**
     * Set continent
     *
     * @param string $continent
     * @return Countries
     */
    public function setContinent($continent)
    {
        $this->continent = $continent;

        return $this;
    }

    /**
     * Get continent
     *
     * @return string 
     */
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }
}
