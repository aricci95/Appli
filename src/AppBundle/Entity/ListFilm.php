<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListFilm
 *
 * @ORM\Table(name="list_film")
 * @ORM\Entity
 */
class ListFilm
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
     * @ORM\Column(name="film_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
