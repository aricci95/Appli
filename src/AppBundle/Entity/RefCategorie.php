<?php

namespace AppBundle\Entity;

/**
 * RefCategorie
 */
class RefCategorie
{
    /**
     * @var integer
     */
    private $categorieId;

    /**
     * @var string
     */
    private $categorieLibel;

    /**
     * @var integer
     */
    private $mainCategorieId;


    /**
     * Get categorieId
     *
     * @return integer
     */
    public function getCategorieId()
    {
        return $this->categorieId;
    }

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
}

