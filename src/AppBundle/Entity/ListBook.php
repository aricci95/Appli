<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListBook
 *
 * @ORM\Table(name="list_book")
 * @ORM\Entity
 */
class ListBook
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
     * @ORM\Column(name="book_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bookId;



    /**
     * Set listId
     *
     * @param integer $listId
     *
     * @return ListBook
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
     * Set bookId
     *
     * @param integer $bookId
     *
     * @return ListBook
     */
    public function setBookId($bookId)
    {
        $this->bookId = $bookId;

        return $this;
    }

    /**
     * Get bookId
     *
     * @return integer
     */
    public function getBookId()
    {
        return $this->bookId;
    }
}
