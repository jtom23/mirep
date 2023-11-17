<?php
namespace App\Controllers;

class   LoginController{


function __construct(){
echo "<br> construyendo LOGIN controller";
}
    public function index()
    {
      require "../views/user/index.php";
      echo "<br> en el INDEX de login";
    }


    public function show()
    {
        echo "<br> en el SHOW de login";
    }

}