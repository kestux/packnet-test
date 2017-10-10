<?php
/**
 * Created by PhpStorm.
 * User: kestutiskacinskas
 * Date: 10/10/2017
 * Time: 11:01
 */

namespace AppBundle\Controller;


use AppBundle\Service\AlbumService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/album")
 */
class AlbumController extends Controller
{

    /**
     * @Route("/year/amount", name="packnet-test.appbundle.album.amount_by_year")
     * @Method({"GET"})
     */
    public function getAlbumsPerYear(Request $request, AlbumService $service)
    {
        print_r($service->getAlbumMoneyPerYear($request->query->get('filter', array())));
    }
}