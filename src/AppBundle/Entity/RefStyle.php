<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefStyle
 *
 * @ORM\Table(name="ref_style")
 * @ORM\Entity
 */
class RefStyle
{
    /**
     * @var string
     *
     * @ORM\Column(name="style_libel", type="string", length=35, nullable=false)
     */
    private $styleLibel;

    /**
     * @var integer
     *
     * @ORM\Column(name="style_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $styleId;



    /**
     * Set styleLibel
     *
     * @param string $styleLibel
     *
     * @return RefStyle
     */
    public function setStyleLibel($styleLibel)
    {
        $this->styleLibel = $styleLibel;

        return $this;
    }

    /**
     * Get styleLibel
     *
     * @return string
     */
    public function getStyleLibel()
    {
        return $this->styleLibel;
    }

    /**
     * Get styleId
     *
     * @return integer
     */
    public function getStyleId()
    {
        return $this->styleId;
    }
}
