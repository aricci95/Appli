<?php

namespace AppBundle\Entity;

/**
 * RefLook
 */
class RefLook
{
    /**
     * @var integer
     */
    private $lookId;

    /**
     * @var string
     */
    private $lookLibel;


    /**
     * Get lookId
     *
     * @return integer
     */
    public function getLookId()
    {
        return $this->lookId;
    }

    /**
     * Set lookLibel
     *
     * @param string $lookLibel
     *
     * @return RefLook
     */
    public function setLookLibel($lookLibel)
    {
        $this->lookLibel = $lookLibel;

        return $this;
    }

    /**
     * Get lookLibel
     *
     * @return string
     */
    public function getLookLibel()
    {
        return $this->lookLibel;
    }
}

