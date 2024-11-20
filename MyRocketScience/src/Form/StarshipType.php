<?php

namespace App\Form;

use App\Entity\Agency;
use App\Entity\Hangar;
use App\Entity\Starship;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StarshipType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('agency', EntityType::class, [
                'class' => Agency::class,
                'choice_label' => 'id']);
        $builder->add('agency',EntityType::class, ['disabled' => true,'class'=>Agency::class]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Starship::class,
        ]);
    }
}
