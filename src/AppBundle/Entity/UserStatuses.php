<?php

namespace AppBundle\Entity;

/**
 * UserStatuses
 */
class UserStatuses
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var boolean
     */
    private $status;


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
     * Set status
     *
     * @param boolean $status
     *
     * @return UserStatuses
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }
}

