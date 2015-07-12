<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 27/05/2015
 * Time: 10:46 PM
 */

namespace DS\FormMediaBundle\Form\Example;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ExampleType extends AbstractType {

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'example';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('imagen', 'media');
    }


}