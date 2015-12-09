<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefState
 *
 * @ORM\Table(name="ref_state")
 * @ORM\Entity
 */
class RefState
{
    /**
     * @var string
     *
     * @ORM\Column(name="state_libel", type="string", length=35, nullable=false)
     */
    private $stateLibel;

    /**
     * @var integer
     *
     * @ORM\Column(name="ref_state_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refStateId;



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

    /**
     * Get refStateId
     *
     * @return integer
     */
    public function getRefStateId()
    {
        return $this->refStateId;
    }
}
