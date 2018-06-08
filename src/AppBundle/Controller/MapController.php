<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Boat;
use AppBundle\Entity\Tile;
use AppBundle\Services\MapManager;
use AppBundle\Traits\BoatTrait;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MapController extends Controller
{
    use BoatTrait;

    /**
     * @Route("/map", name="map")
     */
    public function displayMapAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tiles = $em->getRepository(Tile::class)->findAll();

        foreach ($tiles as $tile) {
            $map[$tile->getCoordX()][$tile->getCoordY()] = $tile;
        }

        $boat = $this->getBoat();

        return $this->render('map/index.html.twig', [
            'map'  => $map ?? [],
            'boat' => $boat,
        ]);
    }
    /**
     * @Route("/start", name="start")
     */
    public function startAction(MapManager $mapManager){
        $em = $this->getDoctrine()->getManager();
        $boat = $this->getBoat();
        $islands= $this->em->getRepository('AppBundle:Tile')->findby(array('type'=>'island'));
        foreach ($islands as $island){
            $island->setHasTreasure(0);
        }
        $mapManager->getRandomIsland()->setHasTreasure(1);
        $boat->setCoordX(0);
        $boat->setCoordY(0);
        $em->flush();
        return $this->redirectToRoute('map');
    }
}
