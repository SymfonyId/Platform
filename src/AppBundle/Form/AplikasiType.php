<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AplikasiType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('kategori', EntityType::class, array(
                'class' => 'AppBundle\Entity\Kategori',
                'placeholder' => 'Pilih Kategori',
                'choice_label' => 'nama',
                'attr' => array(
                    'class' => 'form-control',
                ),
            ))
            ->add('icon', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                ),
            ))
            ->add('nama', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                ),
            ))
            ->add('deskripsi', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                ),
            ))
            ->add('package', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                ),
            ))
            ->add('url_download', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                ),
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Submit',
                'attr' => array(
                    'class' => 'btn btn-primary',
                ),
            ))
        ;
    }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Aplikasi',
        ));
    }
}
