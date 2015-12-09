<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mailbox
 *
 * @ORM\Table(name="mailbox")
 * @ORM\Entity
 */
class Mailbox
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mailbox_type_id", type="integer", nullable=false)
     */
    private $mailboxTypeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="mailbox_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mailboxId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;



    /**
     * Set mailboxTypeId
     *
     * @param integer $mailboxTypeId
     *
     * @return Mailbox
     */
    public function setMailboxTypeId($mailboxTypeId)
    {
        $this->mailboxTypeId = $mailboxTypeId;

        return $this;
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

    /**
     * Set mailboxId
     *
     * @param integer $mailboxId
     *
     * @return Mailbox
     */
    public function setMailboxId($mailboxId)
    {
        $this->mailboxId = $mailboxId;

        return $this;
    }

    /**
     * Get mailboxId
     *
     * @return integer
     */
    public function getMailboxId()
    {
        return $this->mailboxId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Mailbox
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
