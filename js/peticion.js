$(obtener_registros());
function obtener_registros(dato)
{
	$.ajax({
		url : 'Consulta.php',
		type : 'POST',
		
		data : { datoenv: dato},
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	});
}


$(document).on('keyup', '#busqueda', function()  /*BUESCA DE UNA MANERA AUTOMATICA*/    
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});

$('input').on('click', function()     /*BUSCA POR MEDIO DEL BOTON DE DATOS*/ 
{
	var valorBusqueda=$('#busqueda').val(); 
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});