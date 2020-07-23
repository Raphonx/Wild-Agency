<?php

namespace App\Form;

use App\Entity\Message;
use App\Entity\Property;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('contact_information')
            ->add('message')
            ->add('properties', EntityType::class, [
                'class' => Property::class,
                'choice_label' => function (Property $property) {
                    return $property->getTitle();
                },
                'expanded' => true,
                'multiple' => true,
                'by_reference'=> false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}
