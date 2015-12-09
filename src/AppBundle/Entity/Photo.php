<?php

namespace AppBundle\Entity;

/**
 * Photo
 */
class Photo
{
    /**
     * @var integer
     */
    private $photoId;

    /**
     * @var string
     */
    private $keyId;

    /**
     * @var string
     */
    private $photoUrl;

    /**
     * @var integer
     */
    private $typeId;


    /**
     * Get photoId
     *
     * @return integer
     */
    public function getPhotoId()
    {
        return $this->photoId;
    }

    /**
     * Set keyId
     *
     * @param string $keyId
     *
     * @return Photo
     */
    public function setKeyId($keyId)
    {
        $this->keyId = $keyId;

        return $this;
    }

    /**
     * Get keyId
     *
     * @return string
     */
    public function getKeyId()
    {
        return $this->keyId;
    }

    /**
     * Set photoUrl
     *
     * @param string $photoUrl
     *
     * @return Photo
     */
    public function setPhotoUrl($photoUrl)
    {
        $this->photoUrl = $photoUrl;

        return $this;
    }

    /**
     * Get photoUrl
     *
     * @return string
     */
    public function getPhotoUrl()
    {
        return $this->photoUrl;
    }

    /**
     * Set typeId
     *
     * @param integer $typeId
     *
     * @return Photo
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Get typeId
     *
     * @return integer
     */
    public function getTypeId()
    {
        return $this->typeId;
    }
}

