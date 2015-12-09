<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefMainCategorie
 *
 * @ORM\Table(name="ref_main_categorie")
 * @ORM\Entity
 */
class RefMainCategorie
{
    /**
     * @var string
     *
     * @ORM\Column(name="main_categorie_libel", type="string", length=80, nullable=false)
     */
    private $mainCategorieLibel;

    /**
     * @var integer
     *
     * @ORM\Column(name="main_categorie_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mainCategorieId;



    /**
     * Set mainCategorieLibel
     *
     * @param string $mainCategorieLibel
     *
     * @return RefMainCategorie
     */
    public function setMainCategorieLibel($mainCategorieLibel)
    {
        $this->mainCategorieLibel = $mainCategorieLibel;

        return $this;
    }

    /**
     * Get mainCategorieLibel
     *
     * @return string
     */
    public function getMainCategorieLibel()
    {
        return $this->mainCategorieLibel;
    }

    /**
     * Get mainCategorieId
     *
     * @return integer
     */
    public function getMainCategorieId()
    {
        return $this->mainCategorieId;
    }
}
