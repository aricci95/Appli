<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefBook
 *
 * @ORM\Table(name="ref_book")
 * @ORM\Entity
 */
class RefBook
{
    /**
     * @var string
     *
     * @ORM\Column(name="book_libel", type="string", length=75, nullable=false)
     */
    private $bookLibel;

    /**
     * @var integer
     *
     * @ORM\Column(name="book_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bookId;



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
