<?php
namespace App\Controllers;

class   HomeController{


function __construct(){
echo "<br> construyendo HOME controller";
}
    public function index()
    {
      require "../views/user/index.php";
      echo "<br> en el INDEX de home";
    }


    public function show()
    {
        echo "<br> en el SHOW de home";
    }

}