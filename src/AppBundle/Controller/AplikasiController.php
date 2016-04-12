<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfonian\Indonesia\AdminBundle\Annotation\Crud;
use Symfonian\Indonesia\AdminBundle\Annotation\Page;
use Symfonian\Indonesia\AdminBundle\Controller\CrudController;

/**
 * @Route("/aplikasi")
 *
 * @Page("Aplikasi", description="List Aplikasi")
 * @Crud("AppBundle\Entity\Aplikasi", form="AppBundle\Form\AplikasiType", menuIcon="fa-bars")
 */
class AplikasiController extends CrudController
{
    public function getClassName()
    {
        return __CLASS__;
    }
}
