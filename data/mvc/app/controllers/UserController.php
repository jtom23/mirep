<?php
namespace App\Controllers;

class UserController{


function __construct(){
echo "<br> construyendo USER controller";
}
    public function index()
    {
      require "../views/user/index.php";
      echo "<br> en el INDEX de user";
    }


    public function show()
    {
        echo "<br> en el SHOW de user";
    }





}