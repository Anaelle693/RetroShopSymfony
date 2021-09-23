<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('roles', ChoiceType::class, [
                'multiple' => true,
                'choices' => [
                    'admin' => 'ROLE_ADMIN',
                    'user' => 'ROLE_USER',
                ]
            ])
            ->add('password')
            ->add('nom')
            ->add('prenom')
            ->add('genre')
            ->add('date_naissance')
            ->add('adress')
            ->add('CP')
            ->add('ville')
            ->add('phone')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
