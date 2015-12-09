<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefFilm
 *
 * @ORM\Table(name="ref_film")
 * @ORM\Entity
 */
class RefFilm
{
    /**
     * @var string
     *
     * @ORM\Column(name="film_libel", type="string", length=35, nullable=false)
     */
    private $filmLibel;

    /**
     * @var integer
     *
     * @ORM\Column(name="film_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $filmId;



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
