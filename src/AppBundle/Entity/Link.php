<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Link
 *
 * @ORM\Table(name="link")
 * @ORM\Entity
 */
class Link
{
    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modification_date", type="date", nullable=false)
     */
    private $modificationDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="expediteur_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $expediteurId;

    /**
     * @var integer
     *
     * @ORM\Column(name="destinataire_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $destinataireId;



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
}
