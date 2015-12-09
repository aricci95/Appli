<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefPassion
 *
 * @ORM\Table(name="ref_passion")
 * @ORM\Entity
 */
class RefPassion
{
    /**
     * @var string
     *
     * @ORM\Column(name="passion_libel", type="string", length=100, nullable=false)
     */
    private $passionLibel;

    /**
     * @var integer
     *
     * @ORM\Column(name="passion_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $passionId;



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

    /**
     * Get passionId
     *
     * @return integer
     */
    public function getPassionId()
    {
        return $this->passionId;
    }
}
