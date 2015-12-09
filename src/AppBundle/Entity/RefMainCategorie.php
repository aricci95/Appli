<?php

namespace AppBundle\Entity;

/**
 * RefMainCategorie
 */
class RefMainCategorie
{
    /**
     * @var integer
     */
    private $mainCategorieId;

    /**
     * @var string
     */
    private $mainCategorieLibel;


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
}

