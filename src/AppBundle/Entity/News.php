<?php

namespace AppBundle\Entity;

/**
 * News
 */
class News
{
    /**
     * @var integer
     */
    private $newsId;

    /**
     * @var string
     */
    private $newsTitre;

    /**
     * @var string
     */
    private $newsContenu;

    /**
     * @var \DateTime
     */
    private $newsDate;

    /**
     * @var integer
     */
    private $newsTypeId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $newsMediaUrl;

    /**
     * @var string
     */
    private $newsPhotoUrl;


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
     * Set newsTitre
     *
     * @param string $newsTitre
     *
     * @return News
     */
    public function setNewsTitre($newsTitre)
    {
        $this->newsTitre = $newsTitre;

        return $this;
    }

    /**
     * Get newsTitre
     *
     * @return string
     */
    public function getNewsTitre()
    {
        return $this->newsTitre;
    }

    /**
     * Set newsContenu
     *
     * @param string $newsContenu
     *
     * @return News
     */
    public function setNewsContenu($newsContenu)
    {
        $this->newsContenu = $newsContenu;

        return $this;
    }

    /**
     * Get newsContenu
     *
     * @return string
     */
    public function getNewsContenu()
    {
        return $this->newsContenu;
    }

    /**
     * Set newsDate
     *
     * @param \DateTime $newsDate
     *
     * @return News
     */
    public function setNewsDate($newsDate)
    {
        $this->newsDate = $newsDate;

        return $this;
    }

    /**
     * Get newsDate
     *
     * @return \DateTime
     */
    public function getNewsDate()
    {
        return $this->newsDate;
    }

    /**
     * Set newsTypeId
     *
     * @param integer $newsTypeId
     *
     * @return News
     */
    public function setNewsTypeId($newsTypeId)
    {
        $this->newsTypeId = $newsTypeId;

        return $this;
    }

    /**
     * Get newsTypeId
     *
     * @return integer
     */
    public function getNewsTypeId()
    {
        return $this->newsTypeId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return News
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
     * Set newsMediaUrl
     *
     * @param string $newsMediaUrl
     *
     * @return News
     */
    public function setNewsMediaUrl($newsMediaUrl)
    {
        $this->newsMediaUrl = $newsMediaUrl;

        return $this;
    }

    /**
     * Get newsMediaUrl
     *
     * @return string
     */
    public function getNewsMediaUrl()
    {
        return $this->newsMediaUrl;
    }

    /**
     * Set newsPhotoUrl
     *
     * @param string $newsPhotoUrl
     *
     * @return News
     */
    public function setNewsPhotoUrl($newsPhotoUrl)
    {
        $this->newsPhotoUrl = $newsPhotoUrl;

        return $this;
    }

    /**
     * Get newsPhotoUrl
     *
     * @return string
     */
    public function getNewsPhotoUrl()
    {
        return $this->newsPhotoUrl;
    }
}

