<?php

namespace App\Form;

use App\Entity\Hangar;
use App\Entity\Member;
use App\Entity\Starship;
use App\Repository\HangarRepository;
use App\Repository\StarshipRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HangarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
{
    //dump($options);
    // Get the current starship from 'data' option passed to the form
    $hangar = $options['data'] ?? null;
    // get the hangar's creator
    $member = $hangar->getMember();

    $builder
        ->add('name')
        ->add('published')
        ->add('member', null, [
            'disabled'   => true,
        ])
        ->add('starships', null, [
            // adjust the loading of possible starships to those of the current member's agency
            // the use helps pass the member to the lambda
            // avec 'by_reference' => false, sauvegarde les modifications
            'by_reference' => false,
            // classe pas obligatoire
            //'class' => [Object]::class,
            // permet sélection multiple
            'multiple' => true,
            // affiche sous forme de checkboxes
            'expanded' => true,
            'query_builder' => function (StarshipRepository $starshipRepository) use ($member) {
                                      return $starshipRepository->createQueryBuilder('o')
                                          ->leftJoin('o.agency', 'i')
                                          ->leftJoin('i.member', 'm')
                                          ->andWhere('m.id = :memberId')
                                          ->setParameter('memberId', $member->getId())
                                          ;
                                        }
                                ])
                ;
        }






    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hangar::class,
        ]);
    }
}
