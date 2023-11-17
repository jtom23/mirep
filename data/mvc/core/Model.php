<?php

namespace Core;

require "../config/db.php";
use PDO;
use PDOException;
use const DSN;
use const USUARIO;
use const PASSWORD;
class Model
{
    static function db(){



        try {
            //code...
            $dbh = new PDO(DSN,USUARIO,PASSWORD);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "conexion correcta";

        } catch (\PDOException $ex) {
            echo "fallo en la conexion : " . $ex->getMessage();
            //throw $th;
        }

        return $dbh; //devuelvo conexion
    }

}
