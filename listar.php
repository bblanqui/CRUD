<?php
$data=file_get_contents("php://input");
include "db.php";

$consulta2="SELECT * from producto";

$select=new db();
$select->conectar();
$resultados=$select->listar($consulta2);
if ($data != "") {
  $consulta3="SELECT * from producto where nombre LIKE '%".$data."%' or precio LIKE '%".$data."'  or id  LIKE '%".$data."%' or categoria LIKE '%".$data."%' or estado LIKE '%".$data."%' or fecha LIKE '%".$data."%'";

$resultados=$select->listar($consulta3);
}
foreach($resultados as $resultado){
   echo "<tr>
     <td>".$resultado["nombre"]."</td>
     <td>".$resultado["categoria"]."</td>
     <td>".$resultado["fecha"]."</td>
     <td>".$resultado["precio"]."</td>
     <td>".$resultado["estado"]."</td>
     <td><button type='button' class='btn btn-danger' onclick=eliminar('".$resultado['id']."')>eliminar</button></td>
     <td><button  data-bs-toggle='modal' data-bs-target='#exampleModal' type='button' class='btn btn-success ' onclick=editar('".$resultado['id']."')>editar</button></td>
    </tr>";
}



?>