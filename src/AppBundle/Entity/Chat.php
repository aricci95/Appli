<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chat
 *
 * @ORM\Table(name="chat")
 * @ORM\Entity
 */
class Chat
{
    /**
     * @var string
     *
     * @ORM\Column(name="from", type="string", length=255, nullable=false)
     */
    private $from = '';

    /**
     * @var string
     *
     * @ORM\Column(name="to", type="string", length=255, nullable=false)
     */
    private $to = '';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=false)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sent", type="datetime", nullable=false)
     */
    private $sent = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="recd", type="integer", nullable=false)
     */
    private $recd = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set from
     *
     * @param string $from
     *
     * @return Chat
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set to
     *
     * @param string $to
     *
     * @return Chat
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Chat
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set sent
     *
     * @param \DateTime $sent
     *
     * @return Chat
     */
    public function setSent($sent)
    {
        $this->sent = $sent;

        return $this;
    }

    /**
     * Get sent
     *
     * @return \DateTime
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * Set recd
     *
     * @param integer $recd
     *
     * @return Chat
     */
    public function setRecd($recd)
    {
        $this->recd = $recd;

        return $this;
    }

    /**
     * Get recd
     *
     * @return integer
     */
    public function getRecd()
    {
        return $this->recd;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
