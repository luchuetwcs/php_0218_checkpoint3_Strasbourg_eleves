<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Boat;
use AppBundle\Entity\Tile;
use AppBundle\Traits\BoatTrait;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\MapManager;

class MapController extends Controller
{
    use BoatTrait;

    /**
     * @Route("/map", name="map")
     * @ParamConverter('tile',class="AppBundle\Entity\Tile")
     *
     */
    public function displayMapAction(MapManager $mapManager,Tile $tile,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $tiles = $em->getRepository(Tile::class)->findAll();

        foreach ($tiles as $tile) {
            $map[$tile->getCoordX()][$tile->getCoordY()] = $tile;
        }

        $boat = $this->getBoat();

        $lost = $mapManager->tileExists($tile->getCoordX(),$tile->getCoordY());

        return $this->render('map/index.html.twig', [
            'map'  => $map,
            'boat' => $boat,
            'lost' =>$lost
        ]);
    }

}
