<?php

namespace AppBundle\Entity;

/**
 * RefMailState
 */
class RefMailState
{
    /**
     * @var integer
     */
    private $mailStateId;

    /**
     * @var string
     */
    private $mailStateLibel;


    /**
     * Get mailStateId
     *
     * @return integer
     */
    public function getMailStateId()
    {
        return $this->mailStateId;
    }

    /**
     * Set mailStateLibel
     *
     * @param string $mailStateLibel
     *
     * @return RefMailState
     */
    public function setMailStateLibel($mailStateLibel)
    {
        $this->mailStateLibel = $mailStateLibel;

        return $this;
    }

    /**
     * Get mailStateLibel
     *
     * @return string
     */
    public function getMailStateLibel()
    {
        return $this->mailStateLibel;
    }
}

