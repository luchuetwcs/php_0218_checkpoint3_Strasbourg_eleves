<?php

namespace AppBundle\Services;

use AppBundle\Entity\Boat;
use AppBundle\Entity\Tile;
use AppBundle\Traits\BoatTrait;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MapManager
{

    public function tileExists(int $x, int $y) : bool
    {
        if ($x > 11 OR $y > 5 OR $x < 0 OR $y < 0) {
            return false;
        } else {
            return true;
        }
    }

}