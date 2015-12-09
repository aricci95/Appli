<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity
 */
class Comments
{
    /**
     * @var string
     *
     * @ORM\Column(name="comment_contenu", type="text", length=65535, nullable=false)
     */
    private $commentContenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_date", type="datetime", nullable=false)
     */
    private $commentDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="news_id", type="integer", nullable=false)
     */
    private $newsId;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentId;



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

    /**
     * Get commentId
     *
     * @return integer
     */
    public function getCommentId()
    {
        return $this->commentId;
    }
}
