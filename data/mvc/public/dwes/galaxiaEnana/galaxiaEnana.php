<?php
namespace Dwes\GalaxiaEnana;
function observar($nombre){
    echo "<br> Mirando a: $nombre";
}

const RADIO= 35;    // MILLONES DE KM
class Galaxia {

function __construct(){
        $this->nacer();

}
function nacer(){
    echo "<br> NUeva Galaxia en camino!";
}

static function muerte(){
    echo "<br> Galaxia destruyendose en 3 , 2, 1 ";

}


}//fin_ de la clase galaxia
