<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefHair
 *
 * @ORM\Table(name="ref_hair")
 * @ORM\Entity
 */
class RefHair
{
    /**
     * @var string
     *
     * @ORM\Column(name="hair_libel", type="string", length=35, nullable=false)
     */
    private $hairLibel;

    /**
     * @var integer
     *
     * @ORM\Column(name="hair_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hairId;



    /**
     * Set hairLibel
     *
     * @param string $hairLibel
     *
     * @return RefHair
     */
    public function setHairLibel($hairLibel)
    {
        $this->hairLibel = $hairLibel;

        return $this;
    }

    /**
     * Get hairLibel
     *
     * @return string
     */
    public function getHairLibel()
    {
        return $this->hairLibel;
    }

    /**
     * Get hairId
     *
     * @return integer
     */
    public function getHairId()
    {
        return $this->hairId;
    }
}
