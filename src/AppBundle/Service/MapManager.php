<?php
/**
 * Created by PhpStorm.
 * User: zak
 * Date: 05/06/18
 * Time: 14:26
 */


namespace AppBundle\Service;


class MapManager
{
    /**
     * @param $x
     * @param $y
     * @return bool
     */
    public function tileExists(int $x, int $y){

        if( (0<$x && $x>11) || (0<$y && $y>5) ){
            return false;
        }else{
            return true;
        }

    }


}