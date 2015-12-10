<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('artLibel')
            ->add('categorieId')
            ->add('artDescription')
            ->add('refStateId')
            ->add('artPrice')
            ->add('artDate', 'datetime')
            ->add('userId')
            ->add('artPhotoUrl')
            ->add('artColour')
            ->add('artPoids')
            ->add('artTaille')
            ->add('artMarque')
            ->add('livrePoste')
            ->add('livreSurplace')
            ->add('artStateId')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Article'
        ));
    }
}
