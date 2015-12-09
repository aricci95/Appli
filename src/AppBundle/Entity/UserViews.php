<?php

namespace AppBundle\Entity;

/**
 * UserViews
 */
class UserViews
{
    /**
     * @var integer
     */
    private $viewerId;

    /**
     * @var integer
     */
    private $viewedId;

    /**
     * @var \DateTime
     */
    private $viewDate;


    /**
     * Set viewerId
     *
     * @param integer $viewerId
     *
     * @return UserViews
     */
    public function setViewerId($viewerId)
    {
        $this->viewerId = $viewerId;

        return $this;
    }

    /**
     * Get viewerId
     *
     * @return integer
     */
    public function getViewerId()
    {
        return $this->viewerId;
    }

    /**
     * Set viewedId
     *
     * @param integer $viewedId
     *
     * @return UserViews
     */
    public function setViewedId($viewedId)
    {
        $this->viewedId = $viewedId;

        return $this;
    }

    /**
     * Get viewedId
     *
     * @return integer
     */
    public function getViewedId()
    {
        return $this->viewedId;
    }

    /**
     * Set viewDate
     *
     * @param \DateTime $viewDate
     *
     * @return UserViews
     */
    public function setViewDate($viewDate)
    {
        $this->viewDate = $viewDate;

        return $this;
    }

    /**
     * Get viewDate
     *
     * @return \DateTime
     */
    public function getViewDate()
    {
        return $this->viewDate;
    }
}

