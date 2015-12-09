<?php

namespace AppBundle\Entity;

/**
 * RefState
 */
class RefState
{
    /**
     * @var integer
     */
    private $refStateId;

    /**
     * @var string
     */
    private $stateLibel;


    /**
     * Get refStateId
     *
     * @return integer
     */
    public function getRefStateId()
    {
        return $this->refStateId;
    }

    /**
     * Set stateLibel
     *
     * @param string $stateLibel
     *
     * @return RefState
     */
    public function setStateLibel($stateLibel)
    {
        $this->stateLibel = $stateLibel;

        return $this;
    }

    /**
     * Get stateLibel
     *
     * @return string
     */
    public function getStateLibel()
    {
        return $this->stateLibel;
    }
}

