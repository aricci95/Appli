<?php

namespace AppBundle\Entity;

/**
 * RefOrigin
 */
class RefOrigin
{
    /**
     * @var integer
     */
    private $originId;

    /**
     * @var string
     */
    private $originLibel;


    /**
     * Get originId
     *
     * @return integer
     */
    public function getOriginId()
    {
        return $this->originId;
    }

    /**
     * Set originLibel
     *
     * @param string $originLibel
     *
     * @return RefOrigin
     */
    public function setOriginLibel($originLibel)
    {
        $this->originLibel = $originLibel;

        return $this;
    }

    /**
     * Get originLibel
     *
     * @return string
     */
    public function getOriginLibel()
    {
        return $this->originLibel;
    }
}

