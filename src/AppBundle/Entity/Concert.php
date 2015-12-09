<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Concert
 *
 * @ORM\Table(name="concert")
 * @ORM\Entity
 */
class Concert
{
    /**
     * @var string
     *
     * @ORM\Column(name="concert_libel", type="text", length=65535, nullable=false)
     */
    private $concertLibel;

    /**
     * @var integer
     *
     * @ORM\Column(name="concert_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $concertId;



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

    /**
     * Get concertId
     *
     * @return integer
     */
    public function getConcertId()
    {
        return $this->concertId;
    }
}
