<?php
// Sobre la tabla clients
// añade una columna a la tabla: fecha
//insertar 5 filas con BindParam
//insertar 5 filas con BidValue
// los datos ha insertar se deberán de recoger de un formulario
// que se deberan de realizar y rellenar con los datos
// el formato a insertar es la fecha 5/10/2023

require "../bdcon.php";
echo "<h2> sentencia preparada <h2>";

try {
    $dbh = new PDO(DSN, USERNAME, PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
// alternativa con código para 
    // $sql3 = "ALTER TABLE `clients` ADD `Fecha` DATE  AFTER `Telephone`"; 


    // $sql2 = "SELECT DATE_FORMAT(NOW(), \'%d/%m/%Y\') AS FechaFormato;";

// hacerlo a nivel del código, cambiar el dato de formato para que sea así, no hay que cambiar nada de la base de datos
// poner la fecha como varchar?

    $sql = "INSERT INTO " . TABLACLIENTES . "(ID,Name,Address,Age,Telephone,Fecha) VALUES(:id,:nombre,:direccion,:edad,:telefono,;fecha)";

 $statement = $dbh->prepare($sql);
 $statement->bindParam(":id",$id);
    $statement->bindParam(":nombre",$name);
    $statement->bindParam(":direccion",$direccion);
    $statement->bindParam(":edad",$edad);
    $statement->bindParam(":telefono",$telefono);
    $statement->bindParam(":fecha",$fecha);

    $statement->execute();
    echo "<h1> inserción correcta <h1>";
//    opcion 2 : bindvalue--> asocio los valores
   $statement->bindValue(":id",$id);
   $statement->bindValue(":nombre",$name);
   $statement->bindValue(":direccion",$direccion);
   $statement->bindValue(":edad",$edad);
   $statement->bindValue(":telefono",$telefono);
   $statement->bindParam(":fecha",$fecha);

   $statement->execute();
   
   echo "<h1> inserción correcta <h1>";
} catch (Exception $ex) {
   echo ("Error" . $ex->getMessage());
} finally {
   $dbh = null;
   echo "<br> cierro conexión";
}
?>