<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserViews
 *
 * @ORM\Table(name="user_views")
 * @ORM\Entity
 */
class UserViews
{
    /**
     * @var integer
     *
     * @ORM\Column(name="viewer_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $viewerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="viewed_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $viewedId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="view_date", type="datetime")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
