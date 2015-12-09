<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefOrigin
 *
 * @ORM\Table(name="ref_origin")
 * @ORM\Entity
 */
class RefOrigin
{
    /**
     * @var string
     *
     * @ORM\Column(name="origin_libel", type="string", length=35, nullable=false)
     */
    private $originLibel;

    /**
     * @var integer
     *
     * @ORM\Column(name="origin_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $originId;



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

    /**
     * Get originId
     *
     * @return integer
     */
    public function getOriginId()
    {
        return $this->originId;
    }
}
