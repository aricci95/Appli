<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity
 */
class Photo
{
    /**
     * @var string
     *
     * @ORM\Column(name="key_id", type="string", length=30, nullable=false)
     */
    private $keyId;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_url", type="text", length=65535, nullable=false)
     */
    private $photoUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_id", type="integer", nullable=false)
     */
    private $typeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="photo_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $photoId;



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

    /**
     * Get photoId
     *
     * @return integer
     */
    public function getPhotoId()
    {
        return $this->photoId;
    }
}
