<?php

namespace AppBundle\Entity;

/**
 * RefBand
 */
class RefBand
{
    /**
     * @var integer
     */
    private $bandId;

    /**
     * @var string
     */
    private $bandLibel;


    /**
     * Get bandId
     *
     * @return integer
     */
    public function getBandId()
    {
        return $this->bandId;
    }

    /**
     * Set bandLibel
     *
     * @param string $bandLibel
     *
     * @return RefBand
     */
    public function setBandLibel($bandLibel)
    {
        $this->bandLibel = $bandLibel;

        return $this;
    }

    /**
     * Get bandLibel
     *
     * @return string
     */
    public function getBandLibel()
    {
        return $this->bandLibel;
    }
}

