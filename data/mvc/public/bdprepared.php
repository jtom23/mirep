<?php
require "../bdcon.php";
echo "<h2> sentencia preparada <h2>";
/*
 1 preparar la sentencia--> prepare:

    - named placeholder:  : nomvariable
    - question mark  placeholedr: ?

2. Vincular valores a los variables
    --bindParam
    -binValue

    3. ejecutar la sentencia -> execute
 
 */
try {
   $dbh = new PDO(DSN, USERNAME, PASSWORD);
   $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //FORMA A: NAMED PLACEHOLDER
   $sql = "INSERT INTO " . TABLACLIENTES . "(ID,Name,Address,Age,Telephone) VALUES(:id,:nombre,:direccion,:edad,:telefono)";
   // FORMA B : question NAMED PLACEHOLDER
   $sql2 = "INSERT INTO " . TABLACLIENTES . "(ID,Name,Address,Age,Telephone) VALUES(?,?,?,?,?)";

   // $statement = $dbh->prepare($sql);
   $statement = $dbh->prepare($sql2);
   //opcion 1 . bindParam-> una variable es una referencia .
   // son valores que recojo: $_GET, $_POST, $_COOKIE, $_SESSION
   //se pueden modificar los valores antes de ejecutar la sentencia
   $id = null;
   $name = "Francisco";
   $direccion = "Calle 5 # 6-48";
   $edad = 43;
   $telefono = "978111234";

   //  $statement->bindParam(":id",$id);
   //  $statement->bindParam(":nombre",$name);
   //  $statement->bindParam(":direccion",$direccion);
   //  $statement->bindParam(":edad",$edad);
   //  $statement->bindParam(":telefono",$telefono);

   // $edad=65;
   //  $statement->execute();
   //  echo "<h1> inserción correcta <h1>";
   // opcion 2 : bindvalue--> asocio los valores
   // $statement->bindValue(":id",$id);
   // $statement->bindValue(":nombre",$name);
   // $statement->bindValue(":direccion",$direccion);
   // $statement->bindValue(":edad",$edad);
   // $statement->bindValue(":telefono",$telefono);
   // $edad=65;
   // $statement->execute();
   // echo "<h1> inserción correcta <h1>";

   // $statement->bindParam(1, $id);
   // $statement->bindParam(2, $name);
   // $statement->bindParam(3 ,$direccion);
   // $statement->bindParam(4, $edad);
   // $statement->bindParam(5, $telefono);

   
   // $statement->execute();
   $statement->bindValue(1, $id);
   $statement->bindValue(2, $name);
   $statement->bindValue(3 ,$direccion);
   $statement->bindValue(4, $edad);
   $statement->bindValue(5, $telefono);

   
   $statement->execute();
// Sobre la tabla clients
// añade una columna a la tabla: fecha
//insertar 5 filas con BindParam
//insertar 5 filas con BidValue
// los datos ha insertar se deberán de recoger de un formulario
// que se deberan de realizar y rellenar con los datos
// el formato a insertar es la fecha 5/10/2023

   echo "<h1> inserción correcta <h1>";
} catch (Exception $ex) {
   echo ("Error" . $ex->getMessage());
} finally {
   $dbh = null;
   echo "<br> cierro conexión";
}
