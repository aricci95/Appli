<?php

namespace AppBundle\Entity;

/**
 * Chat
 */
class Chat
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $from = '';

    /**
     * @var string
     */
    private $to = '';

    /**
     * @var string
     */
    private $message;

    /**
     * @var \DateTime
     */
    private $sent = '0000-00-00 00:00:00';

    /**
     * @var integer
     */
    private $recd = '0';


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

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
}

