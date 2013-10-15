<?php

namespace Persistencia\persistenciaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class especialistaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo')
            ->add('nombre')
            ->add('apellido')
            ->add('tipoEspecialista')
            ->add('email')
            ->add('telefono')
            ->add('tarjetaprofesional')
            ->add('pacientes')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Persistencia\persistenciaBundle\Entity\especialista'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'persistencia_persistenciabundle_especialista';
    }
}
