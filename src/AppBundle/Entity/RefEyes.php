<?php

namespace AppBundle\Entity;

/**
 * RefEyes
 */
class RefEyes
{
    /**
     * @var integer
     */
    private $eyesId;

    /**
     * @var string
     */
    private $eyesLibel;


    /**
     * Get eyesId
     *
     * @return integer
     */
    public function getEyesId()
    {
        return $this->eyesId;
    }

    /**
     * Set eyesLibel
     *
     * @param string $eyesLibel
     *
     * @return RefEyes
     */
    public function setEyesLibel($eyesLibel)
    {
        $this->eyesLibel = $eyesLibel;

        return $this;
    }

    /**
     * Get eyesLibel
     *
     * @return string
     */
    public function getEyesLibel()
    {
        return $this->eyesLibel;
    }
}

