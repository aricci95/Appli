<?php

namespace AppBundle\Entity;

/**
 * RefBook
 */
class RefBook
{
    /**
     * @var integer
     */
    private $bookId;

    /**
     * @var string
     */
    private $bookLibel;


    /**
     * Get bookId
     *
     * @return integer
     */
    public function getBookId()
    {
        return $this->bookId;
    }

    /**
     * Set bookLibel
     *
     * @param string $bookLibel
     *
     * @return RefBook
     */
    public function setBookLibel($bookLibel)
    {
        $this->bookLibel = $bookLibel;

        return $this;
    }

    /**
     * Get bookLibel
     *
     * @return string
     */
    public function getBookLibel()
    {
        return $this->bookLibel;
    }
}

