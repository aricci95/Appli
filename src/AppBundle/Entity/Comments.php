<?php

namespace AppBundle\Entity;

/**
 * Comments
 */
class Comments
{
    /**
     * @var integer
     */
    private $commentId;

    /**
     * @var string
     */
    private $commentContenu;

    /**
     * @var \DateTime
     */
    private $commentDate;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $newsId;


    /**
     * Get commentId
     *
     * @return integer
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * Set commentContenu
     *
     * @param string $commentContenu
     *
     * @return Comments
     */
    public function setCommentContenu($commentContenu)
    {
        $this->commentContenu = $commentContenu;

        return $this;
    }

    /**
     * Get commentContenu
     *
     * @return string
     */
    public function getCommentContenu()
    {
        return $this->commentContenu;
    }

    /**
     * Set commentDate
     *
     * @param \DateTime $commentDate
     *
     * @return Comments
     */
    public function setCommentDate($commentDate)
    {
        $this->commentDate = $commentDate;

        return $this;
    }

    /**
     * Get commentDate
     *
     * @return \DateTime
     */
    public function getCommentDate()
    {
        return $this->commentDate;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Comments
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
     * Set newsId
     *
     * @param integer $newsId
     *
     * @return Comments
     */
    public function setNewsId($newsId)
    {
        $this->newsId = $newsId;

        return $this;
    }

    /**
     * Get newsId
     *
     * @return integer
     */
    public function getNewsId()
    {
        return $this->newsId;
    }
}

