<?php
namespace Dwes;
require "galaxia.php";
require "galaxiaEnana/galaxiaEnana.php";

echo "Namespace ACTUAL: ". __NAMESPACE__;

echo "<h2> Acceso sin cualificar </h2>";// clases del mismo paquete(namespace)
observar("Vía Lactea");
echo "<br> eL radio es: ". RADIO;
$gl= new Galaxia(); // creo una galaxia vacía

Galaxia::muerte();

echo "<h2> Acceso cualificado </h2>";// absoluto desde mi ubicación
GalaxiaEnana\observar("LOs 3 pilares");
echo "<br> eL radio es: ". GalaxiaEnana\RADIO;
$gl= new GalaxiaEnana\Galaxia(); // creo una galaxia vacía

GalaxiaEnana\Galaxia::muerte();

echo "<h2> Acceso totalmente cualificado </h2>";// absoluto desde la raiz
\Dwes\GalaxiaEnana\observar("NG 5790");
echo "<br> eL radio es: ". \Dwes\GalaxiaEnana\RADIO;
$gl= new \Dwes\GalaxiaEnana\Galaxia(); // creo una galaxia vacía

\Dwes\GalaxiaEnana\Galaxia::muerte();


//importar la clase : comando use
echo "<br> <h2>importando con comando use </h2>";
use function \Dwes\GalaxiaEnana\observar;
use const \Dwes\GalaxiaEnana\RADIO;
observar("Otra galaxia");
echo "<br> el radio es". RADIO;


//importar la clase : comando use pero con alias
echo "<br> <h2>Apodar/ alias namespace</h2>";
use function \Dwes\GalaxiaEnana\observar as mirar;
mirar("cometa Halley");

//namespace global. COlisión entre funciones time() ( la de PHP y de Galaxia)
echo "<br> <h2>namespace GLOBAL </h2>";
echo "<br> hora actual: " .  \time();
echo "<hr>";
echo " <br> ".time();