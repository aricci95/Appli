<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefCategorie
 *
 * @ORM\Table(name="ref_categorie")
 * @ORM\Entity
 */
class RefCategorie
{
    /**
     * @var string
     *
     * @ORM\Column(name="categorie_libel", type="string", length=50, nullable=false)
     */
    private $categorieLibel;

    /**
     * @var integer
     *
     * @ORM\Column(name="main_categorie_id", type="integer", nullable=false)
     */
    private $mainCategorieId;

    /**
     * @var integer
     *
     * @ORM\Column(name="categorie_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categorieId;



    /**
     * Set categorieLibel
     *
     * @param string $categorieLibel
     *
     * @return RefCategorie
     */
    public function setCategorieLibel($categorieLibel)
    {
        $this->categorieLibel = $categorieLibel;

        return $this;
    }

    /**
     * Get categorieLibel
     *
     * @return string
     */
    public function getCategorieLibel()
    {
        return $this->categorieLibel;
    }

    /**
     * Set mainCategorieId
     *
     * @param integer $mainCategorieId
     *
     * @return RefCategorie
     */
    public function setMainCategorieId($mainCategorieId)
    {
        $this->mainCategorieId = $mainCategorieId;

        return $this;
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

    /**
     * Get categorieId
     *
     * @return integer
     */
    public function getCategorieId()
    {
        return $this->categorieId;
    }
}
