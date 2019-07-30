// *************************************
// Mostar lista de registros
// ************************************
function mostrarDatos(){
$.ajax({
	url: '../php/mostrarDatos.php',
	success:function(r){
		$('#tablaDatos').html(r);

	}

});


}

// ***********************************
// Agregar Registro
// ***********************************

function agregarDatos(){
	

	if ($('#nombre').val()==""||$('#apellidoP').val()==""||$('#apellidoM').val()==""||$('#edad').val()==""||$('#telefono').val()=="") {
		swal("Debes completar los campos vacios", {
	      icon: "warning",
	    });

		return false;
	}else{
		if ($('#edad').val()<=3||$('#edad').val()>=80) {
			swal("Por favor; Ingrese una edad válida", {
	      icon: "warning",
	    });

		return false;


		}else{
	$.ajax({
	type:"POST",
	data:$('#frmAgregarDatos').serialize(),
	url: '../php/agregarDatos.php',

	success:function(r){
		
		if (r==1) {

		$('#frmAgregarDatos')[0].reset();
		mostrarDatos();

		swal("Buen Trabajo!", "Registro agregado con éxito!","success",
			{

			  buttons: false,
			  timer: 1500,
			});
		


		}else{
			swal("Poof! No se pudo agregar el registro", {
		      icon: "warning",
		    });
		}

	}

});
}

}
}

// *************************************
// Eliminar Registro
// *************************************
function eliminarDatos(idNombre){


	swal({
  title: "Estas Seguro?",
  text: "Una vez que elimines este registro, no sera recuperado",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})

.then((willDelete) => {
  if (willDelete) {

  		$.ajax({
		type: "POST",
		data: "id="+ idNombre,
		url: "../php/datosDelete.php",

		success:function(r){
			if (r==1) {
				mostrarDatos();

				swal("Buen Trabajo!", "Registro eliminado con éxito!","success",
					{
					  buttons: false,
					  timer: 3000,

					});
				 $(".swal-container.in").css('background-color', 'rgb(43, 165, 137)');

				}else{
					swal("Poof! No se pudo eliminar el registro", {
				      icon: "warning",
				    });
				}

			

		}
	});


    swal("Poof! Este registro fue dado de baja!", {
      icon: "success",
    });
  } else {
    swal("Proceso cancelado!");
  }
});
}

// ****************************************
// Funcion Editar Registro
// ****************************************

function editaDatos(id){
	$.ajax({
		type: "POST",
		data: "id="+ id,
		url: "../php/datosUpdate.php",

		success:function(r){

			datos=jQuery.parseJSON(r);
			$('#idu').val(datos['id']);
			$('#nombreu').val(datos['nombre']);
			$('#apellidoPu').val(datos['paterno']);
			$('#apellidoMu').val(datos['materno']);
			$('#telefonou').val(datos['telefono']);
			$('#edadu').val(datos['edad']);
			$('#estadou').val(datos['estado']);

		}
	});
	

}

function actualizaDatos(){
		$.ajax({
	type:"POST",
	data:$('#frmAgregarDatosU').serialize(),
	url: '../php/actualizarDatos.php',

	success:function(r){
		
		if (r==1) {

		mostrarDatos();

		swal("Buen Trabajo!", "Registro Actualizado con éxito!","success",
			{
			  buttons: false,
			  timer: 1500,
			});

		}else{
			swal("Poof! No se pudo actualizar el registro", {
		      icon: "warning",
		    });
		}

	}

});
	

}