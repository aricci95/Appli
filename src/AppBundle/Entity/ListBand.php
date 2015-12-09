<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListBand
 *
 * @ORM\Table(name="list_band")
 * @ORM\Entity
 */
class ListBand
{
    /**
     * @var integer
     *
     * @ORM\Column(name="list_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $listId;

    /**
     * @var integer
     *
     * @ORM\Column(name="band_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bandId;



    /**
     * Set listId
     *
     * @param integer $listId
     *
     * @return ListBand
     */
    public function setListId($listId)
    {
        $this->listId = $listId;

        return $this;
    }

    /**
     * Get listId
     *
     * @return integer
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * Set bandId
     *
     * @param integer $bandId
     *
     * @return ListBand
     */
    public function setBandId($bandId)
    {
        $this->bandId = $bandId;

        return $this;
    }

    /**
     * Get bandId
     *
     * @return integer
     */
    public function getBandId()
    {
        return $this->bandId;
    }
}
