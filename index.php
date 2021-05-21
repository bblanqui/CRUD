<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css">
    <title>Stock</title>
</head>
<body>

<div class="row">
<div class="col">
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Stock</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control mr-4 mt-1" type="text" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
</div>
</div>

    </header>

<main> 

<div class="row">
<div class="col-md-5 mt-3">
<div class="card" >
  <div class="card-body">
  
                   <form id="formulario" method="POST">
                <h4>INGRESO DE PRODUCTOS</h4>
                     <div id="alerta1"></div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre producto" name="nombre">
                    </div>
               
                <div >
                    <div class="col mt-3">
                        <input type="text" class="form-control" placeholder="Categoria" name="categoria">
                    </div>
                    <div class="col mt-3">
                        <input type="text" class="form-control" placeholder="Fecha ingreso: 2021-12-31" name="fecha">
                    </div>
                </div>
                <div  class="mt-3" >
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Precio" name="precio">
                    </div>
                    <div class="col mt-3">
                        <input type="text" class="form-control" placeholder="nuevo o usado" name="estado">
                    </div>
                </div>
                <div class="mt-3">
                    
                    <div class="col">
                       
                        <textarea class="form-control" rows="4" name="descripcion"placeholder="descripcion del producto" style="resize: none;"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark btn-block mt-3" name="botonEnvio">ingresar producto</button>
                </div>
            </form>
 
</div>

</div>

<div class="col-md-7 mt-3">
<div class="card">
  <div class="card-body">
  
  <table class="table table-hover table-responsive table-sm  text-center">
  <thead>
    <tr>
      
      <td scope="col">nombre</th>
      <th scope="col">categoria</th>
      <th scope="col">fecha</th>
      <th scope="col">precio</th>
      <th scope="col">estado</th>
      <th scope="col">eliminar</th>
      <th scope="col">editar</th>
    
    </tr>
  </thead>
  <tbody id="lista">
   
    
  
  </tbody>
</table>
  

</div>
</div>
</div>
</div>





<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Actualizar</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form  id="formulario2" method="POST">
                      <div id="alerta3"></div>
                      <input id="id" >
                      <div class="col"  type="text">
                        <input type="text" class="form-control" placeholder="Nombre producto" name="nombre" id="nombre">
                    </div>
                 
                <div >
                    <div class="col mt-3">
                        <input type="text" class="form-control" placeholder="Categoria" name="categoria" id="categoria">
                    </div>
                    <div class="col mt-3">
                        <input type="text" class="form-control" placeholder="Fecha ingreso: 2021-12-31" name="fecha" id="fecha">
                    </div>
                </div>
                <div  class="mt-3" >
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Precio" name="precio" id="precio">
                    </div>
                    <div class="col mt-3">
                        <input type="text" class="form-control" placeholder="nuevo o usado" name="estado" id="estado">
                    </div>
                </div>
                <div class="mt-3">
                    
                    <div class="col">
                       
                        <textarea class="form-control" rows="4" name="descripcion"placeholder="descripcion del producto" style="resize: none;" id="descripcion"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark btn-block mt-3" name="actualizar">Actualizar</button>
                </div>
                        
                        </form>
                </div>
                
              </div>
            </div>
          </div>




</main>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="fetch.js"></script>
</body>
</html>