<?php

namespace AppBundle\Entity;

/**
 * Ville
 */
class Ville
{
    /**
     * @var integer
     */
    private $villeId;

    /**
     * @var string
     */
    private $insee;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $altitude;

    /**
     * @var integer
     */
    private $codePostal;

    /**
     * @var string
     */
    private $longitude;

    /**
     * @var string
     */
    private $lattitude;


    /**
     * Get villeId
     *
     * @return integer
     */
    public function getVilleId()
    {
        return $this->villeId;
    }

    /**
     * Set insee
     *
     * @param string $insee
     *
     * @return Ville
     */
    public function setInsee($insee)
    {
        $this->insee = $insee;

        return $this;
    }

    /**
     * Get insee
     *
     * @return string
     */
    public function getInsee()
    {
        return $this->insee;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Ville
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set altitude
     *
     * @param integer $altitude
     *
     * @return Ville
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get altitude
     *
     * @return integer
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     *
     * @return Ville
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return integer
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Ville
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set lattitude
     *
     * @param string $lattitude
     *
     * @return Ville
     */
    public function setLattitude($lattitude)
    {
        $this->lattitude = $lattitude;

        return $this;
    }

    /**
     * Get lattitude
     *
     * @return string
     */
    public function getLattitude()
    {
        return $this->lattitude;
    }
}

