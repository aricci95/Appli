<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefBand
 *
 * @ORM\Table(name="ref_band")
 * @ORM\Entity
 */
class RefBand
{
    /**
     * @var string
     *
     * @ORM\Column(name="band_libel", type="string", length=35, nullable=false)
     */
    private $bandLibel;

    /**
     * @var integer
     *
     * @ORM\Column(name="band_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bandId;



    /**
     * Set bandLibel
     *
     * @param string $bandLibel
     *
     * @return RefBand
     */
    public function setBandLibel($bandLibel)
    {
        $this->bandLibel = $bandLibel;

        return $this;
    }

    /**
     * Get bandLibel
     *
     * @return string
     */
    public function getBandLibel()
    {
        return $this->bandLibel;
    }

    /**
     * Get bandId
     *
     * @return integer
     */
    public function getBandId()
    {
        return $this->bandId;
    }
}
