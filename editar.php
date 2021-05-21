<?php
include "db.php";

$id=file_get_contents("php://input");

$consulta2="SELECT * from producto where id = ?";

$select=new db();
$select->conectar();
$resultados=$select->editar($consulta2,$id);

echo json_encode($resultados);


?>