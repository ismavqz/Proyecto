
$(document).ready(function(){

	DesAct();
	DesEnviar();

	//al presionar una tecla se activa boton enviar
	$('input[type = "text"]').keypress(function(){
		$('#Botton').removeAttr('disabled','disabled');
	});

	//llamar variables del formulario a traves de un objeto
	$('#frm').submit(function(e){
		e.preventDefault(); 
		var datos = {
			'Nom'  : $('#nombre').val(),
			'Folio' : $('#Folio').val(),
			'Area' : $('#txtAreaAds').val(),
			'Fecha': $('#Fecha').val()
		};



		$.ajax({
			type  : 'POST',
			url   : 'Transporte.php',
			data  : datos,
			success: function(data){
				alert("Se envio correctamente");
				$('input[type = "text"').attr('disabled', 'disabled');
				DesEnviar();

			}
		});
	
			return false;

	});
	//deshabilitar boton enviar
	function DesEnviar(){
		
		$('#Botton').attr('disabled','disabled');

	}
	//deshabilitar boton Actualizar
	function DesAct(){
		$('#Act').attr('disabled','disabled');

	}
});
