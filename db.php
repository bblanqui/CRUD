<?php


class db{

    private $usuario="root";
    private $pass="";

    public function __construct(){}

        public function conectar(){


            try{

                $datosconexion="mysql:host=localhost;dbname=productos";///se crea una valiable la cual guarda los datos para conectar el manejdaor de la basededatos el cual lleva el nombre del manejador, la ruta, y en nombre de la base de datos
                $conexion= new PDO($datosconexion, $this->usuario, $this->pass);///se crea una valiable la cual guarda el objeto PDO el cual resibe 3 parametros primero es $datosBD resibe los datos de manejador ruta y nombre de la base, resibe $this->usuarioBD que es el usuario de la 
                
                return ($conexion);/// re rerotna ña variable coneciion con todos los datos  incluyendo el objeto
    
            }catch(PDOException $error){//llama al objeto pdoexeption para capturar el error
    
                echo($error->getMessage());
            }///fin del tricatd
        }

        public function listar ($sentencia){

            $conectarbase=$this->conectar();
            $preparesql=$conectarbase->prepare($sentencia);
            $preparesql->setFetchMode(PDO::FETCH_ASSOC);
            $resultado=$preparesql->execute();
            if($resultado){///SI HAY REGISTRO DENTRO DEL ARRAY
                return($preparesql->fetchAll());///DEVUELVE EL ARRAY
             }else{
                 echo("error");//SINO EERROR
             }
    
        }


        public function insertar($consulta,  $nombre, $categoria, $fecha, $precio, $estado, $descripcion){
                 
           $conectarbase=$this->conectar();

           $preparesql=$conectarbase->prepare($consulta);
           $preparesql->bindParam(1,$nombre);
           $preparesql->bindParam(2,$categoria);
           $preparesql->bindParam(3,$fecha);
           $preparesql->bindParam(4,$precio);
           $preparesql->bindParam(5,$estado);
           $preparesql->bindParam(6,$descripcion);
           $resultado= $preparesql->execute();

            }


        public function eliminar($sentencia, $id){

            $conectarbase=$this->conectar();
            $preparesql=$conectarbase->prepare($sentencia);
            $preparesql->bindParam(1,$id);
            $resultado= $preparesql->execute();

        }



        public function editar($sentencia, $id){

            $conectarbase=$this->conectar();
            $preparesql=$conectarbase->prepare($sentencia);
            $preparesql->bindParam(1,$id);
            $preparesql->setFetchMode(PDO::FETCH_ASSOC);
            $resultado=$preparesql->execute();
            if($resultado){///SI HAY REGISTRO DENTRO DEL ARRAY
                return($preparesql->fetchAll());///DEVUELVE EL ARRAY
             }else{
                 echo("error");//SINO EERROR
             }

        }


      
        public function actualizar($consulta,  $nombre, $categoria, $fecha, $precio, $estado, $descripcion, $id){
                 
            $conectarbase=$this->conectar();
 
            $preparesql=$conectarbase->prepare($consulta);
            $preparesql->bindParam(1,$nombre);
            $preparesql->bindParam(2,$categoria);
            $preparesql->bindParam(3,$fecha);
            $preparesql->bindParam(4,$precio);
            $preparesql->bindParam(5,$estado);
            $preparesql->bindParam(6,$descripcion);
            $preparesql->bindParam(7,$id);
            $resultado= $preparesql->execute();
 
        }

    }
?>

