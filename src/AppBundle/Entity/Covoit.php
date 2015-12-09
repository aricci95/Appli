<?php

namespace AppBundle\Entity;

/**
 * Covoit
 */
class Covoit
{
    /**
     * @var integer
     */
    private $covoitId;

    /**
     * @var integer
     */
    private $concertId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \DateTime
     */
    private $dateDepart;

    /**
     * @var \DateTime
     */
    private $dateRetour;

    /**
     * @var integer
     */
    private $price = '0';

    /**
     * @var integer
     */
    private $villeId;


    /**
     * Get covoitId
     *
     * @return integer
     */
    public function getCovoitId()
    {
        return $this->covoitId;
    }

    /**
     * Set concertId
     *
     * @param integer $concertId
     *
     * @return Covoit
     */
    public function setConcertId($concertId)
    {
        $this->concertId = $concertId;

        return $this;
    }

    /**
     * Get concertId
     *
     * @return integer
     */
    public function getConcertId()
    {
        return $this->concertId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Covoit
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     *
     * @return Covoit
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set dateRetour
     *
     * @param \DateTime $dateRetour
     *
     * @return Covoit
     */
    public function setDateRetour($dateRetour)
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    /**
     * Get dateRetour
     *
     * @return \DateTime
     */
    public function getDateRetour()
    {
        return $this->dateRetour;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Covoit
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set villeId
     *
     * @param integer $villeId
     *
     * @return Covoit
     */
    public function setVilleId($villeId)
    {
        $this->villeId = $villeId;

        return $this;
    }

    /**
     * Get villeId
     *
     * @return integer
     */
    public function getVilleId()
    {
        return $this->villeId;
    }
}

