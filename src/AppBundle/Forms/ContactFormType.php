<?php
/**
 * Created by PhpStorm.
 * User: bogdana.banciu
 * Date: 7/26/2017
 * Time: 4:46 PM
 */

namespace AppBundle\Forms;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('yourName', TextType::class, array('attr' =>  array('placeholder' => 'Anne Scott'),
                'constraints' => array(
                    new NotBlank(),
                    new Regex(array('pattern' => '/^[a-zA-Z]*$/'))
                )))
            ->add('yourEmail', EmailType::class, array('attr' => array('placeholder' => 'somebody@site.com'),
                'constraints' => array(
                    new NotBlank(),
                    new Email(array('message' => 'Invalid e-mail'))
                )))
            ->add('subject', TextType::class, array('attr' => array('placeholder' => 'Hello world!'),
                'constraints' => array(
                    new NotBlank(),
                    new Length(array('min' => '3')))
            ))
           ->add('yourMessage', TextareaType::class, array('attr' =>array('placeholder' => "Don't be shy!"),
               'constraints' => array(
                    new NotBlank(array('message' => "Don't let this field blank! :)")),
                    new Length(array('min' => 20, 'max' => 250))
               )));
    }
}