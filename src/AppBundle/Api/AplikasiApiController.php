<?php

namespace AppBundle\Api;

use AppBundle\Entity\Aplikasi;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfonian\Indonesia\RehatBundle\Controller\RehatController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/aplikasi")
 */
class AplikasiApiController extends RehatController
{
    /**
     * Get aplikasi collection.
     *
     * @Route("", name="aplikasi_list")
     * @Method({"GET"})
     *
     * @ApiDoc(
     *     section="Master",
     *     resource="Group",
     *     description="Get aplikasi collection"
     * )
     */
    public function cgetAction(Request $request)
    {
        return $this->getCollection($request, new \ReflectionClass(Aplikasi::class));
    }
}
