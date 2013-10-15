<?php

namespace Persistencia\persistenciaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class pacienteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('documento')
            ->add('nombre')
            ->add('apellido')
            ->add('edad')
            ->add('sexo')
            ->add('telefono')
            ->add('email')
            ->add('descripcionEnfermedad')
            ->add('contactos')
            ->add('especialistas')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Persistencia\persistenciaBundle\Entity\paciente'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'persistencia_persistenciabundle_paciente';
    }
}
