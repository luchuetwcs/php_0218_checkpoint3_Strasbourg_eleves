<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 08/06/18
 * Time: 09:48
 */

namespace AppBundle\Service;
use AppBundle\Entity\Tile;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class MapManager
{
    const COORDXMIN = 0;
    const COORDYMIN = 0;
    const CORRDXMAX = 11;
    const COORDYMAX = 5;

    /*
     * @var string
     */
    private $coordX;

    /*
     * @var string
     */
    private $coordY;




    /**
     * Test si les coordonnées reçu sont dans la map
     *
     * @param int $coordX  Tile
     * @param int $coordY Tile
     *
     * @return boolean
     */
    public function tileExists($coordX,$coordY)
    {
        $boolean ='';

        //$fetchTitleCoord[] = $tileRepository->FindAllCord();

        if(($coordX<self::COORDYMIN)||($coordX>self::COORDXMAX)||($coordY<self::COORDYMIN)||($coordY>self::COORDYMAX)){
            return $boolean ='true';
    }else{
            return $boolean ='false';
        }
    }
}
