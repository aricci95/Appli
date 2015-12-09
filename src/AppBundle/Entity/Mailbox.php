<?php

namespace AppBundle\Entity;

/**
 * Mailbox
 */
class Mailbox
{
    /**
     * @var integer
     */
    private $mailboxId = '0';

    /**
     * @var integer
     */
    private $userId = '0';

    /**
     * @var integer
     */
    private $mailboxTypeId;


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
}

