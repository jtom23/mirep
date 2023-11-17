<?php

require "../bdcon2.php";

try {
    $dbh = new PDO(DSN, USERNAME, PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //FORMA A: NAMED PLACEHOLDER
    $sql = "INSERT INTO ".TABLACLIENTES ." (ID,Name,Adress,Age,Telephone,Fecha)VALUES(:id,:nombre,:direccion,:edad,:telefono,:fecha)";

    $statement=$dbh->prepare($sql);


    //Recojemos valores

        //Etablecemos los valores para realizar la insercion
        //OPCION 1: bindParam -> variable es una referencia
        //se tienen que llamar igual el :id que en la sentencia $sql
        $statement->bindParam(":id",$id);
        $statement->bindParam(":nombre",$nombre);
        $statement->bindParam(":direccion",$direccion);
        $statement->bindParam(":edad",$edad);
        $statement->bindParam(":telefono",$telefono);


    $statement->execute();


echo "cumplio";

} catch (\Throwable $th) {
    //throw $th;
}

?>