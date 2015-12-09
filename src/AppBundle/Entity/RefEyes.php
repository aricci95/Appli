<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefEyes
 *
 * @ORM\Table(name="ref_eyes")
 * @ORM\Entity
 */
class RefEyes
{
    /**
     * @var string
     *
     * @ORM\Column(name="eyes_libel", type="string", length=35, nullable=false)
     */
    private $eyesLibel;

    /**
     * @var integer
     *
     * @ORM\Column(name="eyes_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eyesId;



    /**
     * Set eyesLibel
     *
     * @param string $eyesLibel
     *
     * @return RefEyes
     */
    public function setEyesLibel($eyesLibel)
    {
        $this->eyesLibel = $eyesLibel;

        return $this;
    }

    /**
     * Get eyesLibel
     *
     * @return string
     */
    public function getEyesLibel()
    {
        return $this->eyesLibel;
    }

    /**
     * Get eyesId
     *
     * @return integer
     */
    public function getEyesId()
    {
        return $this->eyesId;
    }
}
