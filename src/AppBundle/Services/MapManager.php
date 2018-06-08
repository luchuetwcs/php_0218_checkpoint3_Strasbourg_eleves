<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 08/06/18
 * Time: 10:09
 */

namespace AppBundle\Services;

use AppBundle\Repository\TileRepository;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Controller\MapController;


class MapManager{

    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function tileExists($x,$y)
    {

        $tiles = $this->em->getRepository(Tile::class)->findAll();

        foreach ($tiles as $tile) {
            if ($tile->getCoordX() == $x && $tile->getCoordY() == $y){
                return true;
            }
        }
        return false;

    }

}