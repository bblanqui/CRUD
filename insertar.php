

<?php
include "db.php";
    if(empty($nombre=$_POST["nombre"])){
     echo json_encode("1");
      

    }elseif(empty($apellido=$_POST["apellido"])){

     echo json_encode("2");

    }elseif(empty( $edad=$_POST["edad"])){

     echo json_encode("3");

    }elseif (!preg_match(!preg_match("/^[[:digit:]]+$/",$edad=$_POST["edad"])){
         echo json_encode("4");
     }elseif (empty($telefono=$_POST["precio"])) {
         echo json_encode("5");
     }elseif (!preg_match("/^[[:digit:]]+$/",$precio=$_POST["precio"])) {
         echo json_encode("6");
     }elseif (empty( $estado=$_POST["estado"])) {
         echo json_encode("7");
     }elseif ($estado=$_POST["estado"] !== "nuevo" and $estado=$_POST["estado"] !== "usado") {
         echo json_encode("8");
     }elseif (empty($descripcion=$_POST["descripcion"])) {
         echo json_encode("9");
     }else{

        $consulta="INSERT INTO producto (nombre, categoria, fecha, precio,estado,descripcion) VALUES (?,?,?,?,?,?)";
        $insertar=new db();
        $insertar->conectar();
        $insertar->insertar($consulta, $nombre, $categoria, $fecha, $precio, $estado=$_POST["estado"], $descripcion); 
        echo json_encode("10");

     }






?>





