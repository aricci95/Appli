<?php

namespace AppBundle\Entity;

/**
 * ListMusic
 */
class ListMusic
{
    /**
     * @var integer
     */
    private $listId;

    /**
     * @var integer
     */
    private $musicId;


    /**
     * Set listId
     *
     * @param integer $listId
     *
     * @return ListMusic
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
     * Set musicId
     *
     * @param integer $musicId
     *
     * @return ListMusic
     */
    public function setMusicId($musicId)
    {
        $this->musicId = $musicId;

        return $this;
    }

    /**
     * Get musicId
     *
     * @return integer
     */
    public function getMusicId()
    {
        return $this->musicId;
    }
}

