<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefQuantity
 *
 * @ORM\Table(name="ref_quantity")
 * @ORM\Entity
 */
class RefQuantity
{
    /**
     * @var string
     *
     * @ORM\Column(name="quantity_libel", type="string", length=35, nullable=false)
     */
    private $quantityLibel;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $quantityId;



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

    /**
     * Get quantityId
     *
     * @return integer
     */
    public function getQuantityId()
    {
        return $this->quantityId;
    }
}
