<?php

namespace AppBundle\Entity;

/**
 * Concert
 */
class Concert
{
    /**
     * @var integer
     */
    private $concertId;

    /**
     * @var string
     */
    private $concertLibel;


    /**
     * Get concertId
     *
     * @return integer
     */
    public function getConcertId()
    {
        return $this->concertId;
    }

    /**
     * Set concertLibel
     *
     * @param string $concertLibel
     *
     * @return Concert
     */
    public function setConcertLibel($concertLibel)
    {
        $this->concertLibel = $concertLibel;

        return $this;
    }

    /**
     * Get concertLibel
     *
     * @return string
     */
    public function getConcertLibel()
    {
        return $this->concertLibel;
    }
}

