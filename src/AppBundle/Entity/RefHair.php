<?php

namespace AppBundle\Entity;

/**
 * RefHair
 */
class RefHair
{
    /**
     * @var integer
     */
    private $hairId;

    /**
     * @var string
     */
    private $hairLibel;


    /**
     * Get hairId
     *
     * @return integer
     */
    public function getHairId()
    {
        return $this->hairId;
    }

    /**
     * Set hairLibel
     *
     * @param string $hairLibel
     *
     * @return RefHair
     */
    public function setHairLibel($hairLibel)
    {
        $this->hairLibel = $hairLibel;

        return $this;
    }

    /**
     * Get hairLibel
     *
     * @return string
     */
    public function getHairLibel()
    {
        return $this->hairLibel;
    }
}

