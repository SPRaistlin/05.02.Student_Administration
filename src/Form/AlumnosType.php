<?php

namespace App\Form;

use App\Entity\Alumnos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlumnosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('n_expediente')
            ->add('nombre')
            ->add('apellidos')
            ->add('sexo')
            ->add('email')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Alumnos::class,
        ]);
    }
}
