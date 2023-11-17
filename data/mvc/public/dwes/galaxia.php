<?php
namespace Dwes;
function observar($nombre){
    echo "<br> observando la galaxia: $nombre";
}

const RADIO= 126.88;    // MILLONES DE KM
class Galaxia {

function __construct(){
        $this->nacer();

}
function nacer(){
    echo "<br> Hola! soy una nueva galaxia";
}

static function muerte(){
    echo "<br> Me estoy muriendo...";

}

}//fin_ de la clase galaxia

function time(){
    echo "me quedan 21832843268746 años de vida";
    }
