<?php

namespace AppBundle\Entity;

/**
 * RefPassion
 */
class RefPassion
{
    /**
     * @var integer
     */
    private $passionId;

    /**
     * @var string
     */
    private $passionLibel;


    /**
     * Get passionId
     *
     * @return integer
     */
    public function getPassionId()
    {
        return $this->passionId;
    }

    /**
     * Set passionLibel
     *
     * @param string $passionLibel
     *
     * @return RefPassion
     */
    public function setPassionLibel($passionLibel)
    {
        $this->passionLibel = $passionLibel;

        return $this;
    }

    /**
     * Get passionLibel
     *
     * @return string
     */
    public function getPassionLibel()
    {
        return $this->passionLibel;
    }
}

