<?php 
include "conexion.php";
$conexion=conexion();

$sql="SELECT * from t_persona";
$result=$conexion->query($sql);

$tabla="";

while ($datos=$result->fetch_assoc()) {
	if ($datos['estado'] == 1) {
	    $estado= '<h6><span class="badgePropioActivo">ACTIVO</span></h6>';
	    

	} else {
	    $estado= '<h6> <span class="badgePropioBaja">&nbsp;&nbsp;BAJA &nbsp;</span> </h6>';
	    
	}

	$tabla=$tabla.'
	<tr data-toggle="modal" data-target="#modalActualizar" onclick="editaDatos('.$datos['id'].')">
	<td>'.$datos['id'].'</td>
	<td>'.$datos['nombre'].'</td>
	<td>'.$datos['paterno'].'</td>
	<td>'.$datos['materno'].'</td>
	<td>'.$datos['telefono'].'</td>
	<td>'.strval($datos['edad']).'</td>
	<td>'.$estado.'</td>
	<td>
	<span class="btn btn-outline-primary btn-sm fa fa-pencil"  data-toggle="modal" data-target="#modalActualizar" onclick="editaDatos('.$datos['id'].')"></span>
	
	<span class="btn btn-outline-primary btn-sm fa fa-thumbs-o-down" onclick="eliminarDatos('.$datos['id'].')"></span>

	</td>

	</tr>

	';


}

$conexion->close();
echo '<table id="myTable" class="table  table-bordered table-hover table-sm table-responsive-sm" style="width:100%">
<thead>
<tr>
<th>ID</th>
<th>NOMBRE</th>
<th>APELLIDO P</th>
<th>APELLIDO M</th>
<th>TELEFONO</th>
<th>EDAD</th>
<th>ESTADO</th>
<th>ACCIONES</th>
</tr>

</thead>

<tbody>'.$tabla.'
</tbody>




';
 ?>


<!--  Inicializando  dataTable  en español-->
<!-- <script type="text/javascript">
    $(document).ready(function() {
        $('#myTable').dataTable( {
            "language": {
                "url": "../librerias/dataTable/Spanish.json", 
                "searchPlaceholder": "Busque por Nombre, Apellidos, Telefono ,Estado",
            },
                
            "order": [[ 6, "asc" ]],
            "draw":  false,
            "lengthChange": false,


        } );
    } );

    


</script> -->

 <script>
           $(function () {
             $('#example1').DataTable()
            var bookTable = $('#myTable').DataTable({
                'language': { "url": "../librerias/dataTable/Spanish.json"},
               'paging'      : true,
               'lengthChange': false,
               'searching'   : true,
               'ordering'    : true,
               'info'        : true,
               'autoWidth'   : true
             })

             $('#searchBox').on('keyup', function(){
               bookTable.search(this.value).draw();
            });

           })
</script>


<script type="text/javascript">
 


                        $(document).ready(function() {
  $('#modalActualizar').on('shown.bs.modal', function() {
    $('#nombreu').trigger('focus');
  });
});
</script>




<!--  -->


