<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 08/06/18
 * Time: 09:39
 */

namespace AppBundle\Services;


use AppBundle\Entity\Tile;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Repository\TileRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;

class MapManager
{
    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function tileExist($x,$y){

        $tiles = $this->em->getRepository('AppBundle:Tile')->findby(array('coordX'=>$x, 'coordY'=>$y));
        if (count($tiles)===1){
            return true;
        }
        else {
            return false;
        }
    }

    public function getRandomIsland(){
        $islands = $this->em->getRepository('AppBundle:Tile')->findby(array('type'=>'island'));
        return $islands[array_rand($islands,1)];
    }

    public function checkTreasure($x,$y){

        $tile = $this->em->getRepository('AppBundle:Tile')->findby(array('coordX'=>$x, 'coordY'=>$y));
        if($tile[0]->getHasTreasure()==1){
            return true;
        }
        else{
            return false;
        }
    }
}