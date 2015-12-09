<?php

namespace AppBundle\Entity;

/**
 * ListPassion
 */
class ListPassion
{
    /**
     * @var integer
     */
    private $listId;

    /**
     * @var integer
     */
    private $passionId;


    /**
     * Set listId
     *
     * @param integer $listId
     *
     * @return ListPassion
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
     * Set passionId
     *
     * @param integer $passionId
     *
     * @return ListPassion
     */
    public function setPassionId($passionId)
    {
        $this->passionId = $passionId;

        return $this;
    }

    /**
     * Get passionId
     *
     * @return integer
     */
    public function getPassionId()
    {
        return $this->passionId;
    }
}

