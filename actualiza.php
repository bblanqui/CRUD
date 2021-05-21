<?php
include "db.php";

$id=$_POST["id2"];



if(empty($nombre=$_POST["nombre"])){
    echo json_encode("1");
     

   }elseif(empty($categoria=$_POST["categoria"])){

    echo json_encode("2");

   }elseif(empty( $fecha=$_POST["fecha"])){

    echo json_encode("3");

   }elseif (!preg_match("/\d{4}\-\d{2}-\d{2}/", $fecha=$_POST["fecha"])){
        echo json_encode("4");
    }elseif (empty($precio=$_POST["precio"])) {
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

        $consulta3="UPDATE producto SET nombre= ?, categoria= ?,fecha= ?,precio= ?,estado= ?,descripcion= ? WHERE id=?";
        $editar=new db();
        $editar->conectar();
        $editar->actualizar($consulta3, $nombre, $categoria, $fecha, $precio,  $estado=$_POST["estado"], $descripcion, $id);
        echo json_encode("10");
    }















?>

