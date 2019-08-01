<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Crud Seguro</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <?php include "linkscss.php"; 
      ?>
   </head>
   <body id="modoOscuro">
<nav class=" navbar navbar-expand-lg  navbar-dark colorblue" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Crud con PHP</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Usuarios <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <form class="form-inline">
      <button class="btn btn-primary my-2 my-sm-0 sinradio colorblue" type="submit"><li class="fa fa-sign-in"></li>&nbsp;Login</button> 
      <button class="btn btn-primary my-2 my-sm-0 sinradio colorblue " type="submit"><li class="fa fa-unlock-alt"></li>&nbsp;Login Admin</button> 

      </form>

      
      <button class="btn btn-primary  my-2 my-sm-0 sinradio colorblue float-right" type="submit" onclick="toggleFullScreen()"><i class="fa fa-arrows-alt "></i>&nbsp;Full Screen</button>  

  


  </div>
</nav>
         <!--  -->

        
         <span class="float btn btn-primary btn-circle btn-circle-lg m-1" data-toggle="modal" data-target="#modalCrear"><i class="fa fa-plus"></i></span>
       
      <div class="container col-sm-8">

                        <!-- NAVBAR -->


         <!-- <span href="#" class="float"><i class="fa fa-plus my-float"></i></span> -->
         <!--   <span class="float btn btn-primary material-icons md-48" data-toggle="modal" data-target="#exampleModal"><i class="material-icons">
            add
         </i></span> -->
         
     <!--     <div class="row" >
            <div class="col-sm text-center float-right">
               <br>
               <h5>Crud PHP</h5>
               <br>
            </div>
         </div> -->
         <br>
         <div class="row">
            <div class="input-group mb-3 col-sm-12">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Buscar Por :</span>
  </div>
  <input type="text" id="searchBox" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nombres, Apellidos, Telefono y Estado">
  <button type="button" class="btn btn-primary sinradio" id="test" onclick="limpiar()"><li class="fa fa-undo" ></li></button>
</div>
 <!--         <div class="input-group">
                            <input type="text" class="form-control input-lg" id="searchBox" placeholder="Busque por Nombre, Apellidos, Telefono o Estado">
                        
                        </div> -->

         
          <br><br>
         <div  class="col-sm-12" id="tablaDatos"></div>
         </div>
      </div>
      <!-- Modal de Agregar registro -->
      <!-- Modal -->
      <div class="modal fade" id="modalCrear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content col-sm-12">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Registrar Datos</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <!--  <div class="col-sm-6 containers"  >
                        <img id="blah" src="../img/RegisterUser.png" alt="your image"  class="img-fluid image" />
                        <div class="middle">
                           <button type="button" class="btn btn-outline-light float-right " onclick="elimina()" disabled="" id="eliminafoto">Eliminar  <li class="fa fa-trash-o"></li></button>
                        </div>
                     </div> -->
                     <div class="col-sm-6">
                        <form id="frmAgregarDatos"   enctype= "multipart/form-data" >
                           <div class="form-group row ">
                              <div class="col-sm-12">
                                 <input type="text" class="form-control text-uppercase" id="nombre"  placeholder="Nombre *" name="nombre"  value=""  required />
                              </div>
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-sm-12">
                                 <input type="text" class="form-control text-uppercase" id="apellidoP" placeholder="Apellido Paterno *" name="apellidoP" value="" required>
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-sm-12">
                                 <input type="text" class="form-control text-uppercase" id="apellidoM" placeholder="Apellido Materno *" name="apellidoM" value="" required>
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-sm-6">
                                 <input type="text" class="form-control text-uppercase" id="telefono" placeholder="Telefono *" name="telefono" value="" required>
                              </div>
                              <div class="col-sm-6">
                                 <input type="number" class="form-control" id="edad" placeholder="Edad *" min="3" max="99" name="edad" value=""  required>
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-sm-12 ">
                              </div>
                              
                              <!--  <div class="input-group mb-3 col-sm-12">
                                 <input name="file" accept="image/jpeg, image/png" type="file" name="foto" id="foto" class="btn btn-secondary" />
                                 
                              </div> -->
                              <div class="col-sm-3 "></div>
                              <label for="inputEmail3" class="col-sm-3 col-form-label">Estado: *</label>
                              <div class="col-sm-6 ">
                                 <select class="form-control btn btn-outline-secondary" id="estado" name="estado" value="Activo" >
                                    <option>Activo</option>
                                    <option>Dar de Baja</option>
                                 </select>
                              </div>
                              
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <br>
               <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> -->
                  <button type="button" class="btn btn-primary"   data-dismiss="modal" id="btnGuardarDatos" onclick="agregarDatos()">Guardar Cambios</button>
               </div>
            </div>
         </div>
      </div>
      <!--  -->
      <!-- Modal actualizar Registro -->
      <!-- Modal -->
      <div class="modal fade" id="modalActualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content col-sm-12">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Registrar Datos</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <!--  <div class="col-sm-6 containers"  >
                        <img id="blah" src="../img/RegisterUser.png" alt="your image"  class="img-fluid image" />
                        <div class="middle">
                           <button type="button" class="btn btn-outline-light float-right " onclick="elimina()" disabled="" id="eliminafoto">Eliminar  <li class="fa fa-trash-o"></li></button>
                        </div>
                     </div> -->
                     <div class="col-sm-6">
                        <form id="frmAgregarDatosU"   enctype= "multipart/form-data" >
                           <div class="form-group row ">
                              <div class="col-sm-12">
                                 <input type="text" class="form-control text-uppercase" id="idu"  placeholder="Nombre" name="idu"    required />
                              </div>
                              
                           </div>
                           <div class="form-group row ">
                              <div class="col-sm-12">
                                 <input type="text" class="form-control text-uppercase" id="nombreu"  placeholder="Nombre" name="nombreu"  value=""  required />
                              </div>
                              
                           </div>
                           <div class="form-group row">
                              <div class="col-sm-12">
                                 <input type="text" class="form-control text-uppercase" id="apellidoPu" placeholder="Apellido Paterno" name="apellidoPu" value="" required>
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-sm-12">
                                 <input type="text" class="form-control text-uppercase" id="apellidoMu" placeholder="Apellido Materno" name="apellidoMu" value="" required>
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-sm-6">
                                 <input type="text" class="form-control text-uppercase" id="telefonou" placeholder="Telefono" name="telefonou" value="" required>
                              </div>
                              <div class="col-sm-6">
                                 <input type="number" class="form-control" id="edadu" placeholder="Edad" min="3" max="99" name="edadu" value=""  required>
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-sm-12 ">
                              </div>
                              
                              <!--  <div class="input-group mb-3 col-sm-12">
                                 <input name="file" accept="image/jpeg, image/png" type="file" name="foto" id="foto" class="btn btn-secondary" />
                                 
                              </div> -->
                              <div class="col-sm-3 "></div>
                              <label for="inputEmail3" class="col-sm-3 col-form-label">Estado:</label>
                              <div class="col-sm-6 ">
                                 <select class="form-control btn btn-outline-secondary" id="estadou" name="estadou" >
                                    <option value="1">Activo</option>
                                    <option value="0">Dar de Baja</option>
                                 </select>
                              </div>
                              
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
                          <span class="btn btn-outline-primary btn-sm fa fa-thumbs-o-down float-left"  onclick="eliminarMio()"></span>
               <br>
               <div class="modal-footer">
                  <button type="button" class="btn btn-primary"    id="btnActualizarDatos" data-dismiss="modal" onclick="actualizaDatos()">Guardar Cambios</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>



               </div>
            </div>
         </div>
      </div>
      <!--  -->
      <script type="text/javascript">
      $(document).ready(function() {

      mostrarDatos();

      });
      </script>
      <script>
      $('#modalCrear').on('shown.bs.modal', function () {
      $('#nombre').trigger('focus')
      });
      </script>
      <script>
      
      function readURL(input) {
      if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function (e) {
      $('#blah').attr('src', e.target.result);
      $("#eliminafoto").prop("disabled", false);
      }
      
      reader.readAsDataURL(input.files[0]);
      }
      }
      
      
      $("#foto").change(function(){
      readURL(this);
      });
      </script>
      
      <script>
      function elimina(){
      document.getElementById("foto").value = "";
      document.getElementById("blah").src="../img/RegisterUser.png";
      document.getElementById("eliminafoto").disabled = true;
      }
      </script>


<!-- NAVEGADOR FULLSCREEM -->
      <script type="text/javascript">
        
function toggleFullScreen() {
  if ((document.fullScreenElement && document.fullScreenElement !== null) ||    
   (!document.mozFullScreen && !document.webkitIsFullScreen)) {
    if (document.documentElement.requestFullScreen) {  
      document.documentElement.requestFullScreen();  
    } else if (document.documentElement.mozRequestFullScreen) {  
      document.documentElement.mozRequestFullScreen();  
    } else if (document.documentElement.webkitRequestFullScreen) {  
      document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
    }  
  } else {  
    if (document.cancelFullScreen) {  
      document.cancelFullScreen();  
    } else if (document.mozCancelFullScreen) {  
      document.mozCancelFullScreen();  
    } else if (document.webkitCancelFullScreen) {  
      document.webkitCancelFullScreen();  
    }  
  }  
}
      </script>

<!--  -->
<!-- DESHABILITAR CLICK DERECHO -->

<!-- <script type='text/javascript'>
$(function(){
    $(document).bind("contextmenu",function(e){
        return false;
    });
});
</script> -->
<!--  -->




<!--       <script type="text/javascript">
         function limpiar() {
            document.getElementById("searchBox").value = "";
            
         }
      </script> -->

      
         

     

      <script type="text/javascript">
         function eliminarMio(argument) {
            a=document.getElementById("idu").value;
            eliminarDatos(a);
         }
      </script>
        

        
      
   </body>
</html>


<!-- MATRIX -->
<!-- https://mega.nz/#!pMgnRBLA!uk0pxW5tY4N7WRdzHwvOI64e5GSDyuZuGvC3lXMQLa8 -->

