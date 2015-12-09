<?php

namespace AppBundle\Entity;

/**
 * RefMailboxType
 */
class RefMailboxType
{
    /**
     * @var integer
     */
    private $mailboxTypeId;

    /**
     * @var string
     */
    private $mailboxTypeLibel;


    /**
     * Get mailboxTypeId
     *
     * @return integer
     */
    public function getMailboxTypeId()
    {
        return $this->mailboxTypeId;
    }

    /**
     * Set mailboxTypeLibel
     *
     * @param string $mailboxTypeLibel
     *
     * @return RefMailboxType
     */
    public function setMailboxTypeLibel($mailboxTypeLibel)
    {
        $this->mailboxTypeLibel = $mailboxTypeLibel;

        return $this;
    }

    /**
     * Get mailboxTypeLibel
     *
     * @return string
     */
    public function getMailboxTypeLibel()
    {
        return $this->mailboxTypeLibel;
    }
}

