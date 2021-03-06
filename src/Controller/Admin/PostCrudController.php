<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use App\Form\AttachmentType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;


class PostCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        
        return Post::class;
    }
    public function configureFields(string $pageName): iterable
    {   $uploadPath = $this->getParameter('posts');
        return [
              AssociationField::new('name'),
              AssociationField::new('postby'),
              //ImageField::new('post_thumbnail')->setUploadDir('public/uploads/posts');
            //ImageField::new('post_thumbnail')->setUploadDir('~\public\uploads\posts'),
            //yield ImageField::new('post_thumbnail')->setUploadDir('public/uploads/posts'),
            ImageField::new('post_thumbnail')->setLabel('Image')->setBasePath($uploadPath['uploads']['url_prefix'])->setUploadDir($uploadPath['uploads']['url_path'])->setRequired(false),
            TextField::new('title'),
            TextEditorField::new('description'),
            BooleanField::new('status'),
            DateTimeField::new('created_at')
            ->hideOnForm(),
            DateTimeField::new('updated_at')
            ->hideOnForm(),
            CollectionField::new('attachments')
            ->setEntryType(AttachmentType::class)
            ->setFormTypeOption('by_reference',false)
            ->onlyOnForms(),
            // CollectionField::new('attachments')
            // ->setTemplatePath('images.html.twig')
            // ->onlyOnDetail()
        ];
    }
 
    public function configureActions(Actions $actions): Actions
    {
        return $actions
             ->setPermission(Action::DELETE, 'ROLE_ADMIN')
             ->setPermission(Action::EDIT, 'ROLE_ADMIN')
             ->add(CRUD::PAGE_INDEX,'detail');
             #->disable(Action::DELETE) ;
    }   
}
