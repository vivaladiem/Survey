<?php

namespace BoShurik\SurveyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ChoiceType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
        ;
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'BoShurik\SurveyBundle\Entity\Choice',
        );
    }

    public function getName()
    {
        return 'choice_type';
    }
}
