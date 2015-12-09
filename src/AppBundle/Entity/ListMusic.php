<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListMusic
 *
 * @ORM\Table(name="list_music")
 * @ORM\Entity
 */
class ListMusic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="list_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $listId;

    /**
     * @var integer
     *
     * @ORM\Column(name="music_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $musicId;



    /**
     * Set listId
     *
     * @param integer $listId
     *
     * @return ListMusic
     */
    public function setListId($listId)
    {
        $this->listId = $listId;

        return $this;
    }

    /**
     * Get listId
     *
     * @return integer
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * Set musicId
     *
     * @param integer $musicId
     *
     * @return ListMusic
     */
    public function setMusicId($musicId)
    {
        $this->musicId = $musicId;

        return $this;
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
