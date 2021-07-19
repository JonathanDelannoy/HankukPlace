<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('name', TextType::class, [
                    "attr" => [
                        "class" => "form-control my-4"
                    ],
                    "label" => "Nom"
                ]
            )
            ->add('surname', TextType::class, [
                    "attr" => [
                        "class" => "form-control my-4"
                    ],
                    "label" => "Prénom"
                ]
            )
            ->add('email', EmailType::class, [
                    "attr" => [
                        "class" => "form-control my-4"
                    ],
                    "label" => "Email"
                ]
            )
            ->add('address', TextType::class, [
                    "attr" => [
                        "class" => "form-control my-4"
                    ],
                    "label" => "Adresse"
                ]
            );
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
