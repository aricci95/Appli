<?php

namespace AppBundle\Entity;

/**
 * ListBook
 */
class ListBook
{
    /**
     * @var integer
     */
    private $listId;

    /**
     * @var integer
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

