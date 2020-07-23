<?php

namespace App\Form;

use App\Entity\Service;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Property;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('city')
            ->add('area')
            ->add('price')
            ->add('nb_room')
            ->add('principalImage')
            ->add('type')
            ->add('services', EntityType::class, [
                'class' => Service::class,
                'multiple' => true,
                'expanded' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
        ]);
    }
}
