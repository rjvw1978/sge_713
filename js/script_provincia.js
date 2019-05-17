		$(function() {
			load(1);

		});

		//Funcion que se ejecuta al iniciar el form. Lista los paises en el div loader
		function load(page){
			var query=$("#q").val();
			var parametros = {"action":"ajax"};
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'ajax/listar_provincias.php',
				data: parametros,
				beforeSend: function(objeto){
					$("#loader").html("Cargando...");
				},
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$("#loader").html("");
				}
			})
		}

		$('#editProvinciaModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var name = button.data('name') 
		  $('#edit_name').val(name)
		  var id = button.data('id') 
		  $('#edit_id').val(id)
		})
		
		$('#deleteProvinciaModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('id') 
		  $('#delete_id').val(id)
		})
		
		$("#edit_provincia" ).submit(function( event ) {
			var parametros = $(this).serialize();
			$.ajax({
				type: "POST",
				url: "ajax/modificar_provincia.php",
				data: parametros,
				beforeSend: function(objeto){
					$("#resultados").html("Enviando...");
				},
				success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#editProvinciaModal').modal('hide');
				}
			});
			event.preventDefault();
		});
		
		
		$( "#add_provincia" ).submit(function( event ) {
			var parametros = $(this).serialize();
			$.ajax({
				type: "POST",
				url: "ajax/nuevo_provincia.php",
				data: parametros,
				beforeSend: function(objeto){
					$("#resultados").html("Enviando...");
				},
				success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#addProvinciaModal').modal('hide');
				}
			});
			event.preventDefault();
		});
		
		$( "#delete_provincia" ).submit(function( event ) {
			var parametros = $(this).serialize();
			$.ajax({
				type: "POST",
				url: "ajax/eliminar_provincia.php",
				data: parametros,
				beforeSend: function(objeto){
					$("#resultados").html("Enviando...");
				},
				success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#deleteProvinciaModal').modal('hide');
				}
			});
			event.preventDefault();
		});