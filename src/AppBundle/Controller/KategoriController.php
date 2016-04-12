<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfonian\Indonesia\AdminBundle\Annotation\Crud;
use Symfonian\Indonesia\AdminBundle\Annotation\Page;
use Symfonian\Indonesia\AdminBundle\Controller\CrudController;

/**
 * @Route("/kategori")
 *
 * @Page("Kategori", description="Kategori Aplikasi")
 * @Crud("AppBundle\Entity\Kategori", form="AppBundle\Form\KategoriType", menuIcon="fa-bars")
 */
class KategoriController extends CrudController
{
    public function getClassName()
    {
        return __CLASS__;
    }
}
