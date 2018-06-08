<?php

namespace AppBundle\Controller;

use AppBundle\Service\MapManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request,MapManager $mapManager)
    {


        $resultat = $mapManager->tileExists();

        return $this->render('default/index.html.twig'['resultat'=> $resultat]);
    }
}
