<?php

require "../bdcon.php";

//MWSQLI, PDO
echo "<h2> BBDD en PHP";
// print_r(PDO::getAvailableDrivers());
// try{
// $dbh= new PDO(DSN,USERNAME,PASSWORD);
// $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// $sql="SELECT * FROM city";

//forma 1 con query
// $register=$dbh->query($sql);
// foreach($register as $row){
// echo " id: " . $row["ID"];
// echo " NoMbre: " . $row["Name"];
// echo " Distrito: " . $row["District"];
// echo " poblacion: " . $row["Population"];
// echo  "<br>";
// }
//forma 2 con prepare + execute
// $statement= $dbh->prepare($sql);
// $statement->execute();

//recoger los resultados
//varias formas
// opcion a : fetchALl como array asociativo

// $register=$statement->fetchAll(PDO::FETCH_ASSOC);
// foreach($register as $row){
//     echo " id: " . $row["ID"];
//     echo " NoMbre: " . $row["Name"];
//     echo " Distrito: " . $row["District"];
//     echo " poblacion: " . $row["Population"];
//     echo  "<br>";
//     }

// opcion b recogerlo como un objeto

//  $register=$statement->fetchAll(PDO::FETCH_OBJ);
//  foreach($register as $row){
//      echo " id: " . $row->ID;
//      echo " NoMbre: " . $row->Name;
//      echo " Distrito: " . $row->District;
//      echo " poblacion: " . $row->Population;
//      echo  "<br>";
//      }

// recogiendolo como una clase...

try{
   $dbh= new PDO(DSN,USERNAME,PASSWORD);
   $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   $sql="SELECT * FROM clients";

//forma 1 con query
 $register=$dbh->query($sql);
 $contador=0;
 foreach($register as $row){
 echo " id: " . $row["Id"];
 echo " Name: " . $row["Name"];
 echo " Address: " . $row["Address"];
 echo " Age: " . $row["Age"];
 echo " Telephone: " . $row["Telephone"];
 echo  "<br>";
 $contador++;

 
 }
 //echo "Se han consultado " . $contador . " clientes";
 echo "Se han consultado " . $register->rowCount() . " clientes";
 $contador=0;


//forma 2 con prepare + execute
// $statement= $dbh->prepare($sql);
// $statement->execute();
// $register=$statement->fetchAll(PDO::FETCH_ASSOC);
// foreach($register as $row){
//     echo " id: " . $row["Id"];
//     echo " Name: " . $row["Name"];
//     echo " Address: " . $row["Address"];
//     echo " Age: " . $row["Age];
//     echo " Telephone: " . $row["Telephone];
//     echo  "<br>";
//     }

// opcion b recogerlo como un objeto

//  $register=$statement->fetchAll(PDO::FETCH_OBJ);
//  foreach($register as $row){
//      echo " id: " . $row->Id;
//     echo " Name: " . $row->Name;
//     echo " Address: " . $row->Address;
//     echo " Age: " . $row->Age;
//     echo " Telephone: " . $row->Telephone;
//     echo  "<br>";
//     }


$sql2="INSERT INTO clients VALUES (null,'Pepito','coso',34,'67797989')";
$statement= $dbh->prepare($sql2);
 $statement->execute();

 echo " <br> ultimo id: ". $dbh->LastInsertID();
echo "<br> todo chachi";
   // } catch(\throwable $th){

   }catch (Exception $ex){
      echo("Error".$ex->getMessage());
   }finally{
      $dbh=null;
      echo "<br> cierro conexión";
   }


