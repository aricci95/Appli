<?php

namespace AppBundle\Entity;

/**
 * RefFilm
 */
class RefFilm
{
    /**
     * @var integer
     */
    private $filmId;

    /**
     * @var string
     */
    private $filmLibel;


    /**
     * Get filmId
     *
     * @return integer
     */
    public function getFilmId()
    {
        return $this->filmId;
    }

    /**
     * Set filmLibel
     *
     * @param string $filmLibel
     *
     * @return RefFilm
     */
    public function setFilmLibel($filmLibel)
    {
        $this->filmLibel = $filmLibel;

        return $this;
    }

    /**
     * Get filmLibel
     *
     * @return string
     */
    public function getFilmLibel()
    {
        return $this->filmLibel;
    }
}

