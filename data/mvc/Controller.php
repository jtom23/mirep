<?php
require_once('User.php');
class Controller
{
    //recupera todos los usuarios
    // invoca a vista con todos los usuarios

    public function index()
    {
        $arrayusers = User::ALL();
        require "views/index.php";
    }


    public function show()
    {
        $id = $_GET["id"];
        $user = User::find($id);
        require "views/show.php";
    }


    // <?php
    // require_once('User.php');

    // class Controller  
    // {
    //     public function index()
    //     {
    //         $users = User::all();
    //         // echo json_encode($users);
    //         require('views/index.php');
    //     }
    //     public function show()
    //     {
    //         $id = $_GET['id'];
    //         $user = User::find($id);
    //         // echo json_encode($user);
    //         require('views/show.php');
    //     }
    // }
}
