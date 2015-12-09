<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blacklist
 *
 * @ORM\Table(name="blacklist")
 * @ORM\Entity
 */
class Blacklist
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="black_listed_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
