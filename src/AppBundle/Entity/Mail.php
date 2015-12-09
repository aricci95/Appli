<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mail
 *
 * @ORM\Table(name="mail")
 * @ORM\Entity
 */
class Mail
{
    /**
     * @var string
     *
     * @ORM\Column(name="mail_content", type="text", length=65535, nullable=false)
     */
    private $mailContent;

    /**
     * @var integer
     *
     * @ORM\Column(name="mail_expediteur", type="integer", nullable=false)
     */
    private $mailExpediteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="mail_destinataire", type="integer", nullable=false)
     */
    private $mailDestinataire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mail_date", type="datetime", nullable=false)
     */
    private $mailDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="mail_state_id", type="integer", nullable=false)
     */
    private $mailStateId;

    /**
     * @var integer
     *
     * @ORM\Column(name="mailbox_id", type="integer", nullable=false)
     */
    private $mailboxId;

    /**
     * @var integer
     *
     * @ORM\Column(name="mail_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mailId;



    /**
     * Set mailContent
     *
     * @param string $mailContent
     *
     * @return Mail
     */
    public function setMailContent($mailContent)
    {
        $this->mailContent = $mailContent;

        return $this;
    }

    /**
     * Get mailContent
     *
     * @return string
     */
    public function getMailContent()
    {
        return $this->mailContent;
    }

    /**
     * Set mailExpediteur
     *
     * @param integer $mailExpediteur
     *
     * @return Mail
     */
    public function setMailExpediteur($mailExpediteur)
    {
        $this->mailExpediteur = $mailExpediteur;

        return $this;
    }

    /**
     * Get mailExpediteur
     *
     * @return integer
     */
    public function getMailExpediteur()
    {
        return $this->mailExpediteur;
    }

    /**
     * Set mailDestinataire
     *
     * @param integer $mailDestinataire
     *
     * @return Mail
     */
    public function setMailDestinataire($mailDestinataire)
    {
        $this->mailDestinataire = $mailDestinataire;

        return $this;
    }

    /**
     * Get mailDestinataire
     *
     * @return integer
     */
    public function getMailDestinataire()
    {
        return $this->mailDestinataire;
    }

    /**
     * Set mailDate
     *
     * @param \DateTime $mailDate
     *
     * @return Mail
     */
    public function setMailDate($mailDate)
    {
        $this->mailDate = $mailDate;

        return $this;
    }

    /**
     * Get mailDate
     *
     * @return \DateTime
     */
    public function getMailDate()
    {
        return $this->mailDate;
    }

    /**
     * Set mailStateId
     *
     * @param integer $mailStateId
     *
     * @return Mail
     */
    public function setMailStateId($mailStateId)
    {
        $this->mailStateId = $mailStateId;

        return $this;
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

    /**
     * Set mailboxId
     *
     * @param integer $mailboxId
     *
     * @return Mail
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
     * Get mailId
     *
     * @return integer
     */
    public function getMailId()
    {
        return $this->mailId;
    }
}
