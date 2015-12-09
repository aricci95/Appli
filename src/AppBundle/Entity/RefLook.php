<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefLook
 *
 * @ORM\Table(name="ref_look")
 * @ORM\Entity
 */
class RefLook
{
    /**
     * @var string
     *
     * @ORM\Column(name="look_libel", type="string", length=35, nullable=false)
     */
    private $lookLibel;

    /**
     * @var integer
     *
     * @ORM\Column(name="look_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lookId;



    /**
     * Set lookLibel
     *
     * @param string $lookLibel
     *
     * @return RefLook
     */
    public function setLookLibel($lookLibel)
    {
        $this->lookLibel = $lookLibel;

        return $this;
    }

    /**
     * Get lookLibel
     *
     * @return string
     */
    public function getLookLibel()
    {
        return $this->lookLibel;
    }

    /**
     * Get lookId
     *
     * @return integer
     */
    public function getLookId()
    {
        return $this->lookId;
    }
}