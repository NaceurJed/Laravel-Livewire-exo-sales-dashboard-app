<?php
namespace App\Service;

class Stats
{
    //Ces class vont être statique pour pas créer d'objet Stats lorsqu'on appel ces méthodes
    public static function newOrders():int
    {
        return rand(5, 100);
    }

    public static function salesAmount():int
    {
        return rand(100, 1000);
    }

    public static function satisfaction():int
    {
        return rand(90, 100);
    }
}
