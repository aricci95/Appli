<?php

namespace AppBundle\Entity;

/**
 * ListBand
 */
class ListBand
{
    /**
     * @var integer
     */
    private $listId;

    /**
     * @var integer
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

