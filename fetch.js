
let listar =(busqueda)=>{

    


    

    fetch("listar.php",{
         method:"POST",
         body:busqueda


    }).then((respuesta) =>{

        
      if (respuesta.ok == true){
          
        return respuesta.text()

      }else{

        return  Promise.reject(respueta)
      }
      

    }).then((json)=>{

        lista.innerHTML=`${json}`
      
      
  
    
    }



    ).catch((err) =>{

          console.log("estamos en el error", err)

    })

}

listar()

formulario.addEventListener('submit', (e)=>{
    e.preventDefault();
    
    let datosformulario = new FormData(formulario);


    fetch("insertar.php",{
        method:'POST',
        body:datosformulario



    }).then(res=>{

    if (res.ok==true){
        
        return res.json()
        
    }else{

        return  Promise.reject(res)
    }





    }).then(data =>{
        
     if (data=="1"){

        

          alerta1.innerHTML=`<div class="alert alert-danger alert-dismissible fade show col" role="alert">
          ingrese nombre del producto
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>`
          

     }else if(data=="2"){
 

        alerta1.innerHTML=`<div class="alert alert-danger alert-dismissible fade show" role="alert">
        ingrese categoria
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`

     }else if(data=="3"){
      

        alerta1.innerHTML=`<div class="alert alert-danger alert-dismissible fade show" role="alert">
        ingrese fecha
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`

     }else if(data=="4"){
  

        alerta1.innerHTML=`<div class="alert alert-danger alert-dismissible fade show" role="alert">
        ingrese fecha en formato correcto 2021-01-31
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`

     }else if(data=="5"){
        

        alerta1.innerHTML=`<div class="alert alert-danger alert-dismissible fade show" role="alert">
        ingrese precio
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`

     }else if(data=="6"){
        

        alerta1.innerHTML=`<div class="alert alert-danger alert-dismissible fade show" role="alert">
        ingrese solo numeros en el precio
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`

     }else if(data=="7"){
  

        alerta1.innerHTML=`<div class="alert alert-danger alert-dismissible fade show" role="alert">
        ingrese estado
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`

     }else if(data=="8"){
      

        alerta1.innerHTML=`<div class="alert alert-danger alert-dismissible fade show" role="alert">
        ingrese estado valido  "nuevo" o "usado"
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`

     }else if(data=="9"){
        

        alerta1.innerHTML=`<div class="alert alert-danger alert-dismissible fade show" role="alert">
        ingrese descripcion
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`

     }else{

      

        alerta1.innerHTML=`<div class="alert alert-success alert-dismissible fade show" role="alert">
        agregado correctamente
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`
         
      formulario.reset()
      listar()
         
      
     }




     



    }).catch((error)=>{

       console.log(error)


    })



    

})

let eliminar = (id)=>{
    


    Swal.fire({
        title: 'Eliminar',
        text: "Si lo eliminar no podra recuparar el producto",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#322727',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText:'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {

            fetch("eliminar.php",{
                method:"POST",
                body:id

               }).then(res =>{
                   if (res.ok == true){
                     return res.text()
                 
                   }else{
                 
                     return  Promise.reject(res)
                   }
               })

               Swal.fire(
                'Eliminado!',
                'Producto eliminado correctamente.',
                'success'
              )



               listar()


        
        }
      })


         
        }
    
        
let editar =(id)=>{

    fetch("editar.php",{
        method:"POST",
        body:id

       }).then(res =>{
           if (res.ok == true){
             return res.json()
         
           }else{
         
             return  Promise.reject(res)
           }
       }).then(res=>{

        id2.value=res[0].id
        nombre.value=res[0].nombre
        categoria.value=res[0].categoria
        fecha.value=res[0].fecha
        precio.value=res[0].precio
        estado.value=res[0].estado
        descripcion.value=res[0].descripcion
    
       })

      




}


formulario2.addEventListener('submit', (e)=>{
    e.preventDefault();
    
    let datosformulario2 = new FormData(formulario2);


    fetch("actualiza.php",{
        method:'POST',
        body:datosformulario2



    }).then(res=>{

    if (res.ok==true){
        
        return res.json()
        
    }else{

        return  Promise.reject(res)
    }





    }).then(data =>{
        
     if (data=="1"){

   

          alerta3.innerHTML=`<div class="alert alert-danger alert-dismissible fade show col" role="alert">
          ingrese nombre del producto
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>`
          

     }else if(data=="2"){
        

        alerta3.innerHTML=`<div class="alert alert-danger alert-dismissible fade show" role="alert">
        ingrese categoria
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`

     }else if(data=="3"){
     

        alerta3.innerHTML=`<div class="alert alert-danger alert-dismissible fade show" role="alert">
        ingrese fecha
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`

     }else if(data=="4"){
   

        alerta3.innerHTML=`<div class="alert alert-danger alert-dismissible fade show" role="alert">
        ingrese fecha en formato correcto 2021-01-31
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`

     }else if(data=="5"){
    

        alerta3.innerHTML=`<div class="alert alert-danger alert-dismissible fade show" role="alert">
        ingrese precio
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`

     }else if(data=="6"){
      

        alerta3.innerHTML=`<div class="alert alert-danger alert-dismissible fade show" role="alert">
        ingrese solo numeros en el precio
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`

     }else if(data=="7"){
       

        alerta3.innerHTML=`<div class="alert alert-danger alert-dismissible fade show" role="alert">
        ingrese estado
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`

     }else if(data=="8"){
        
        alerta3.innerHTML=`<div class="alert alert-danger alert-dismissible fade show" role="alert">
        ingrese estado valido  "nuevo" o "usado"
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`

     }else if(data=="9"){
        

        alerta3.innerHTML=`<div class="alert alert-danger alert-dismissible fade show" role="alert">
        ingrese descripcion
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`

     }else{

   

        alerta3.innerHTML=`<div class="alert alert-success alert-dismissible fade show" role="alert">
        actualizado correctamente
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`
         
      formulario2.reset()
      listar()
         
      
     }




     



    }).catch((error)=>{

       console.log(error)


    })



    

})


buscar.addEventListener("keyup",()=>{

const valor = buscar.value
if (valor == ""){

    listar()
}else{

    listar(valor)

}


})




