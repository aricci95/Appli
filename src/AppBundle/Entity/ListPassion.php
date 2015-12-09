<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListPassion
 *
 * @ORM\Table(name="list_passion")
 * @ORM\Entity
 */
class ListPassion
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
     * @ORM\Column(name="passion_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $passionId;



    /**
     * Set listId
     *
     * @param integer $listId
     *
     * @return ListPassion
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
     * Set passionId
     *
     * @param integer $passionId
     *
     * @return ListPassion
     */
    public function setPassionId($passionId)
    {
        $this->passionId = $passionId;

        return $this;
    }

    /**
     * Get passionId
     *
     * @return integer
     */
    public function getPassionId()
    {
        return $this->passionId;
    }
}
