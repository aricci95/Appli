<?php

namespace AppBundle\Entity;

/**
 * RefMusic
 */
class RefMusic
{
    /**
     * @var integer
     */
    private $musicId;

    /**
     * @var string
     */
    private $musicLibel;


    /**
     * Get musicId
     *
     * @return integer
     */
    public function getMusicId()
    {
        return $this->musicId;
    }

    /**
     * Set musicLibel
     *
     * @param string $musicLibel
     *
     * @return RefMusic
     */
    public function setMusicLibel($musicLibel)
    {
        $this->musicLibel = $musicLibel;

        return $this;
    }

    /**
     * Get musicLibel
     *
     * @return string
     */
    public function getMusicLibel()
    {
        return $this->musicLibel;
    }
}

