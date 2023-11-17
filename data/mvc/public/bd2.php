<?php

require "../bdcon2.php";



echo"<br> bbdd con php";

try {
    $dbh=new PDO(DSN,USERNAME,PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM Cliente";
    $sql="INSERT INTO $table VALUES(null,'Pepito','Calle Coso',34,'976666666')";
    echo "<br> conexion satisfactoria";

    // //FORMA 1: QUERY
    // $registers = $dbh->query($sql);
    //  foreach ($registers as $row){
    //     echo "Id : " . $row["ID"];
    //     echo "Nombre : " . $row["Name"];
    //     echo "Distrito : " . $row["District"];
    //     echo "Poblacion : " . $row["Population"];
    //     echo "<br>";
    //  }

         //fORMA 2 : EXECUTE & QUERY

         $stmnt = $dbh->prepare($sql);
         $stmnt2 = $dbh2->prepare($sql);
         $stmnt ->execute();
         $stmnt2 ->execute();
         
         //echo "Ultimo id ". $stmnt::lastInsertId();

         //recoger los resultados:
         //OPCION A: fetchAll como array asociativo

         ////El fecthAll nos recupera todos los registros si quieres recoger una linea solo usariamos el fetch
        // $registers=$stmnt->fetchAll(PDO::FETCH_ASSOC);
        // foreach ($registers as $row){
        //         echo "Id : " . $row["ID"];
        //         echo "Nombre : " . $row["Name"];
        //         echo "Distrito : " . $row["District"];
        //         echo "Poblacion : " . $row["Population"];
        //         echo "<br>";
        // }

         //OPCION B: fechAll  como un objeto
         $registers=$stmnt->fetchALL(PDO::FETCH_OBJ);
         foreach ($registers as $row){
            echo "Id : " . $row->id;
            echo "Nombre : " . $row->NAME;
            echo "Direccion : " . $row->Adress;
            echo "Edad : " . $row->Age;
            echo "Telefono : " . $row->Telephone;
            echo "<br>";
            }


            

    }  catch (\Throwable $ex) {
    //throw $th;
    echo"<br> fallo en la conexion : " . $ex->getMessage();
}finally { 
    $dbh=null;
    echo "<br> conexion cerrada";
}

?>