<?php
include "db.php";

$id=file_get_contents("php://input");


$consulta="DELETE FROM producto WHERE id = ?";

$eliminar = new db();

$eliminar->conectar();

$eliminar->eliminar($consulta,$id);



?>