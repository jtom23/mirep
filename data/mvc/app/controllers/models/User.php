<?php

    namespace App\Models;
    require "../core/Model.php";
    use Core\Model ;

class User extends Model
{
   

    //@return Array con los datos de los usuarios
    public static function all()
    {
        // $dbh = User::db();//self::db();
        // $sql="SELECT * FROM users";
        // $statement = $dbh->query($sql);
        echo "recupero usuario";
        
    } //all
    //@return un usuario en particular
    //@param $id
    public static function find($id)
    {
        //return User::USERS[$id-1];
        echo "<br> Recupero un registro";
        
     
    }

    public static function insert() {
        echo "<br> creo un registro";

    }

    public static function save() {
        echo "<br> Actualizando  un registro";

    }
    public static function delete() {
        echo "<br> Borro  un registro";

    }
}//find





// class User
// {
//     const USERS = [
//         array(1, 'Juan'),
//         array(2, 'Ana'),
//         array(3, 'Pepa'),
//         array(4, 'Toni')
//     ];

//     public static function all()
//     {
//         return User::USERS;
//     }
//     public static function find($id)
//     {
//         foreach (User::USERS as $key => $user) {
//             if ($user[0] == $id) {
//                 return $user;
//             }
//         }
//         return null;
//     }
// }
