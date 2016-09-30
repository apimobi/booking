<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ProductType Form
 *
 * @category Form
 * @package  App\Form\
 */
class SearchType extends AbstractType
{
    public function getName()
    {
      return null;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'dateIn',
                DateType::class,
                [
                    'label' => 'dateIn',
                ]
            )
            ->add(
                'dateOut',
                DateType::class,
                [
                    'label' => 'dateOut',
                ]
            )
            ->add('Valider', SubmitType::class);
    }

}
