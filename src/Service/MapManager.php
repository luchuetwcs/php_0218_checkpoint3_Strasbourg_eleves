<?php
// src/Service/MapManager.php
namespace App\Service;

class mapManager
{
    public function tileExists($x,$y)
    {
        if (isset($x) && isset($x) && !empty($y) && !empty($y)){
            if (($x >= 0) && ($x<=11) && ($y >= 0) && ($y<=5)){
                $tileExists = "TRUE";
            }else{
                $tileExists = "FALSE";
            }
    }
        return $tileExists;
    }
}