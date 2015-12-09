<?php

namespace AppBundle\Entity;

/**
 * ListFilm
 */
class ListFilm
{
    /**
     * @var integer
     */
    private $listId;

    /**
     * @var integer
     */
    private $filmId;


    /**
     * Set listId
     *
     * @param integer $listId
     *
     * @return ListFilm
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
     * Set filmId
     *
     * @param integer $filmId
     *
     * @return ListFilm
     */
    public function setFilmId($filmId)
    {
        $this->filmId = $filmId;

        return $this;
    }

    /**
     * Get filmId
     *
     * @return integer
     */
    public function getFilmId()
    {
        return $this->filmId;
    }
}

