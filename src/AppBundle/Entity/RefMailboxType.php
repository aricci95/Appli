<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefMailboxType
 *
 * @ORM\Table(name="ref_mailbox_type")
 * @ORM\Entity
 */
class RefMailboxType
{
    /**
     * @var string
     *
     * @ORM\Column(name="mailbox_type_libel", type="string", length=10, nullable=false)
     */
    private $mailboxTypeLibel;

    /**
     * @var integer
     *
     * @ORM\Column(name="mailbox_type_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mailboxTypeId;



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

    /**
     * Get mailboxTypeId
     *
     * @return integer
     */
    public function getMailboxTypeId()
    {
        return $this->mailboxTypeId;
    }
}
