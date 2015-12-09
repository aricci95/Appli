<?php

namespace AppBundle\Entity;

/**
 * RefStyle
 */
class RefStyle
{
    /**
     * @var integer
     */
    private $styleId;

    /**
     * @var string
     */
    private $styleLibel;


    /**
     * Get styleId
     *
     * @return integer
     */
    public function getStyleId()
    {
        return $this->styleId;
    }

    /**
     * Set styleLibel
     *
     * @param string $styleLibel
     *
     * @return RefStyle
     */
    public function setStyleLibel($styleLibel)
    {
        $this->styleLibel = $styleLibel;

        return $this;
    }

    /**
     * Get styleLibel
     *
     * @return string
     */
    public function getStyleLibel()
    {
        return $this->styleLibel;
    }
}

