<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefMusic
 *
 * @ORM\Table(name="ref_music")
 * @ORM\Entity
 */
class RefMusic
{
    /**
     * @var string
     *
     * @ORM\Column(name="music_libel", type="string", length=35, nullable=false)
     */
    private $musicLibel;

    /**
     * @var integer
     *
     * @ORM\Column(name="music_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $musicId;



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

    /**
     * Get musicId
     *
     * @return integer
     */
    public function getMusicId()
    {
        return $this->musicId;
    }
}
