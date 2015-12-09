<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefMailState
 *
 * @ORM\Table(name="ref_mail_state")
 * @ORM\Entity
 */
class RefMailState
{
    /**
     * @var string
     *
     * @ORM\Column(name="mail_state_libel", type="string", length=35, nullable=false)
     */
    private $mailStateLibel;

    /**
     * @var integer
     *
     * @ORM\Column(name="mail_state_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mailStateId;



    /**
     * Set mailStateLibel
     *
     * @param string $mailStateLibel
     *
     * @return RefMailState
     */
    public function setMailStateLibel($mailStateLibel)
    {
        $this->mailStateLibel = $mailStateLibel;

        return $this;
    }

    /**
     * Get mailStateLibel
     *
     * @return string
     */
    public function getMailStateLibel()
    {
        return $this->mailStateLibel;
    }

    /**
     * Get mailStateId
     *
     * @return integer
     */
    public function getMailStateId()
    {
        return $this->mailStateId;
    }
}