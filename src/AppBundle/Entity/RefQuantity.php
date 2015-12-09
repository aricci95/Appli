<?php

namespace AppBundle\Entity;

/**
 * RefQuantity
 */
class RefQuantity
{
    /**
     * @var integer
     */
    private $quantityId;

    /**
     * @var string
     */
    private $quantityLibel;


    /**
     * Get quantityId
     *
     * @return integer
     */
    public function getQuantityId()
    {
        return $this->quantityId;
    }

    /**
     * Set quantityLibel
     *
     * @param string $quantityLibel
     *
     * @return RefQuantity
     */
    public function setQuantityLibel($quantityLibel)
    {
        $this->quantityLibel = $quantityLibel;

        return $this;
    }

    /**
     * Get quantityLibel
     *
     * @return string
     */
    public function getQuantityLibel()
    {
        return $this->quantityLibel;
    }
}

