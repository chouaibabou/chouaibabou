<?php
/**
 * Created by PhpStorm.
 * User: CAB3682
 * Date: 05/05/2017
 * Time: 11:45
 */
namespace FrontBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SheetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('Nom',null,array('label'=>'Nom complet'))
        ->add('Age')
        ->add('Pays')
        ->add('Choisir', CheckboxType::class, array('mapped' => false))
        ->add('save', SubmitType::class)
        ;
    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault(
            'data_class', 'FrontBundle\Entity\Sheet'
        );
    }

    public function getName()
    {
        return 'sheet_form';
    }

}