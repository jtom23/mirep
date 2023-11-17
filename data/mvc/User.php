<?php



class User
{
    const  USERS = [
        array(1, "Pedro"),
        array(2, "Carla"),
        array(3, "Jacinto"),
        array(4, "Carmen")
    ];

    //@return Array con los datos de los usuarios
    public static function all()
    {
        return User::USERS;
    } //all
    //@return un usuario en particular
    //@param $id
    public static function find($id)
    {
        //return User::USERS[$id-1];
        foreach (User::USERS as $key => $user) {
            if ($user[0] == $id) {
                return $user;
            }
        }
        return null;
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
