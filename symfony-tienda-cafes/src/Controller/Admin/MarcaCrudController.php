<?php

namespace App\Controller\Admin;

use App\Entity\Marca;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Symfony\Component\Validator\Constraints\Image;

class MarcaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Marca::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            Field::new('name'),
            ImageField::new('photo')->setUploadDir('/public/images')->setBasePath('/images/'),
            Field::new('designation')
        ];
    }
}


    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
