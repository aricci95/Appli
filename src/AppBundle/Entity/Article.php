<?php

namespace AppBundle\Entity;

/**
 * Article
 */
class Article
{
    /**
     * @var integer
     */
    private $artId;

    /**
     * @var string
     */
    private $artLibel;

    /**
     * @var integer
     */
    private $categorieId = '5';

    /**
     * @var string
     */
    private $artDescription;

    /**
     * @var integer
     */
    private $refStateId = '1';

    /**
     * @var integer
     */
    private $artPrice;

    /**
     * @var \DateTime
     */
    private $artDate;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $artPhotoUrl;

    /**
     * @var string
     */
    private $artColour;

    /**
     * @var integer
     */
    private $artPoids;

    /**
     * @var integer
     */
    private $artTaille;

    /**
     * @var string
     */
    private $artMarque;

    /**
     * @var integer
     */
    private $livrePoste;

    /**
     * @var integer
     */
    private $livreSurplace;

    /**
     * @var integer
     */
    private $artStateId = '1';


    /**
     * Get artId
     *
     * @return integer
     */
    public function getArtId()
    {
        return $this->artId;
    }

    /**
     * Set artLibel
     *
     * @param string $artLibel
     *
     * @return Article
     */
    public function setArtLibel($artLibel)
    {
        $this->artLibel = $artLibel;

        return $this;
    }

    /**
     * Get artLibel
     *
     * @return string
     */
    public function getArtLibel()
    {
        return $this->artLibel;
    }

    /**
     * Set categorieId
     *
     * @param integer $categorieId
     *
     * @return Article
     */
    public function setCategorieId($categorieId)
    {
        $this->categorieId = $categorieId;

        return $this;
    }

    /**
     * Get categorieId
     *
     * @return integer
     */
    public function getCategorieId()
    {
        return $this->categorieId;
    }

    /**
     * Set artDescription
     *
     * @param string $artDescription
     *
     * @return Article
     */
    public function setArtDescription($artDescription)
    {
        $this->artDescription = $artDescription;

        return $this;
    }

    /**
     * Get artDescription
     *
     * @return string
     */
    public function getArtDescription()
    {
        return $this->artDescription;
    }

    /**
     * Set refStateId
     *
     * @param integer $refStateId
     *
     * @return Article
     */
    public function setRefStateId($refStateId)
    {
        $this->refStateId = $refStateId;

        return $this;
    }

    /**
     * Get refStateId
     *
     * @return integer
     */
    public function getRefStateId()
    {
        return $this->refStateId;
    }

    /**
     * Set artPrice
     *
     * @param integer $artPrice
     *
     * @return Article
     */
    public function setArtPrice($artPrice)
    {
        $this->artPrice = $artPrice;

        return $this;
    }

    /**
     * Get artPrice
     *
     * @return integer
     */
    public function getArtPrice()
    {
        return $this->artPrice;
    }

    /**
     * Set artDate
     *
     * @param \DateTime $artDate
     *
     * @return Article
     */
    public function setArtDate($artDate)
    {
        $this->artDate = $artDate;

        return $this;
    }

    /**
     * Get artDate
     *
     * @return \DateTime
     */
    public function getArtDate()
    {
        return $this->artDate;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Article
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
     * Set artPhotoUrl
     *
     * @param string $artPhotoUrl
     *
     * @return Article
     */
    public function setArtPhotoUrl($artPhotoUrl)
    {
        $this->artPhotoUrl = $artPhotoUrl;

        return $this;
    }

    /**
     * Get artPhotoUrl
     *
     * @return string
     */
    public function getArtPhotoUrl()
    {
        return $this->artPhotoUrl;
    }

    /**
     * Set artColour
     *
     * @param string $artColour
     *
     * @return Article
     */
    public function setArtColour($artColour)
    {
        $this->artColour = $artColour;

        return $this;
    }

    /**
     * Get artColour
     *
     * @return string
     */
    public function getArtColour()
    {
        return $this->artColour;
    }

    /**
     * Set artPoids
     *
     * @param integer $artPoids
     *
     * @return Article
     */
    public function setArtPoids($artPoids)
    {
        $this->artPoids = $artPoids;

        return $this;
    }

    /**
     * Get artPoids
     *
     * @return integer
     */
    public function getArtPoids()
    {
        return $this->artPoids;
    }

    /**
     * Set artTaille
     *
     * @param integer $artTaille
     *
     * @return Article
     */
    public function setArtTaille($artTaille)
    {
        $this->artTaille = $artTaille;

        return $this;
    }

    /**
     * Get artTaille
     *
     * @return integer
     */
    public function getArtTaille()
    {
        return $this->artTaille;
    }

    /**
     * Set artMarque
     *
     * @param string $artMarque
     *
     * @return Article
     */
    public function setArtMarque($artMarque)
    {
        $this->artMarque = $artMarque;

        return $this;
    }

    /**
     * Get artMarque
     *
     * @return string
     */
    public function getArtMarque()
    {
        return $this->artMarque;
    }

    /**
     * Set livrePoste
     *
     * @param integer $livrePoste
     *
     * @return Article
     */
    public function setLivrePoste($livrePoste)
    {
        $this->livrePoste = $livrePoste;

        return $this;
    }

    /**
     * Get livrePoste
     *
     * @return integer
     */
    public function getLivrePoste()
    {
        return $this->livrePoste;
    }

    /**
     * Set livreSurplace
     *
     * @param integer $livreSurplace
     *
     * @return Article
     */
    public function setLivreSurplace($livreSurplace)
    {
        $this->livreSurplace = $livreSurplace;

        return $this;
    }

    /**
     * Get livreSurplace
     *
     * @return integer
     */
    public function getLivreSurplace()
    {
        return $this->livreSurplace;
    }

    /**
     * Set artStateId
     *
     * @param integer $artStateId
     *
     * @return Article
     */
    public function setArtStateId($artStateId)
    {
        $this->artStateId = $artStateId;

        return $this;
    }

    /**
     * Get artStateId
     *
     * @return integer
     */
    public function getArtStateId()
    {
        return $this->artStateId;
    }
}

