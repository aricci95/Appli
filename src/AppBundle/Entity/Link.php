<?php

namespace AppBundle\Entity;

/**
 * Link
 */
class Link
{
    /**
     * @var integer
     */
    private $expediteurId;

    /**
     * @var integer
     */
    private $destinataireId;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $modificationDate;


    /**
     * Set expediteurId
     *
     * @param integer $expediteurId
     *
     * @return Link
     */
    public function setExpediteurId($expediteurId)
    {
        $this->expediteurId = $expediteurId;

        return $this;
    }

    /**
     * Get expediteurId
     *
     * @return integer
     */
    public function getExpediteurId()
    {
        return $this->expediteurId;
    }

    /**
     * Set destinataireId
     *
     * @param integer $destinataireId
     *
     * @return Link
     */
    public function setDestinataireId($destinataireId)
    {
        $this->destinataireId = $destinataireId;

        return $this;
    }

    /**
     * Get destinataireId
     *
     * @return integer
     */
    public function getDestinataireId()
    {
        return $this->destinataireId;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Link
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set modificationDate
     *
     * @param \DateTime $modificationDate
     *
     * @return Link
     */
    public function setModificationDate($modificationDate)
    {
        $this->modificationDate = $modificationDate;

        return $this;
    }

    /**
     * Get modificationDate
     *
     * @return \DateTime
     */
    public function getModificationDate()
    {
        return $this->modificationDate;
    }
}

