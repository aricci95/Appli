<?php

namespace AppBundle\Entity;

/**
 * Forum
 */
class Forum
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $userLogin;


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
     * Set content
     *
     * @param string $content
     *
     * @return Forum
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Forum
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Forum
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set userLogin
     *
     * @param string $userLogin
     *
     * @return Forum
     */
    public function setUserLogin($userLogin)
    {
        $this->userLogin = $userLogin;

        return $this;
    }

    /**
     * Get userLogin
     *
     * @return string
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }
}

