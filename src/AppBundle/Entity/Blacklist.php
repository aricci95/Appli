<?php

namespace AppBundle\Entity;

/**
 * Blacklist
 */
class Blacklist
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $blackListedId;


    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Blacklist
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
     * Set blackListedId
     *
     * @param integer $blackListedId
     *
     * @return Blacklist
     */
    public function setBlackListedId($blackListedId)
    {
        $this->blackListedId = $blackListedId;

        return $this;
    }

    /**
     * Get blackListedId
     *
     * @return integer
     */
    public function getBlackListedId()
    {
        return $this->blackListedId;
    }
}

