	<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">

    <h4 class="modal-title">Detalles</h4>
   </div>
   <div class="modal-body" id="personal_detalles2">

   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
   </div>
  </div>
 </div>
</div>



<div id="dataModal" class="modal fade">
 <div class="modal-dialog modal-lg">
  <div class="modal-content">
   <div class="modal-header">

    <h4 class="modal-title">Detalles</h4>
   </div>
   <div class="modal-body" id="personal_detalles">
    
   </div>
   <div class="modal-footer">
   
   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
   
   </div>
  </div>
 </div>
</div>
	
<!--NUEVO CODIGO BORRAR-->
<div id="dataModal3" class="modal fade">
 <div class="modal-dialog modal-lg">
  <div class="modal-content">
   <div class="modal-header">

    <h4 class="modal-title">Detalles</h4>
   </div>
   <div class="modal-body" id="personal_detalles3">
    ¿ESTÁS SEGURO DE BORRAR ESTE REGISTRO?
   </div>
   <div class="modal-footer">
          <span id="btnYes" class="btn confirm">SI BORRAR</span>	  
   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
   
   </div>
  </div>
 </div>
</div>

	<script type="text/javascript">
	


	$(document).ready(function(){
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


$("#enviarCARGAMASIVAM").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#CARGAMASIVAMform')[0]);

$.ajax({
    url: 'colaboradores/controlador.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
})
.done(function(data) {
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
			$("#reseteateCARGAMM").load(location.href + " #reseteateCARGAMM");
			$("#mensajeCARGAMASIVAM").html(data);
			}else{
			$("#mensajeCARGAMASIVAM").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});



$(document).on('click', '.view_dataVPCARGAMM', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"cargamasiva/VistaPreviacargamasivaMateriales.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeCARGAMASIVAM').html('cargando'); 
    },    
   success:function(data){
    $('#personal_detalles').html(data);
    $('#dataModal').modal('show');
   }
  });
 });



 $(document).on('click', '.view_databorraVPCARGAMM', function(){
  //$('#dataModal').modal();
  var borra_id_CARGAMM2 = $(this).attr("id");
  var borrarCARGAMM2 = "borrarCARGAMM2";
    //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR
  $.ajax({
   url:"colaboradores/controlador.php",
   method:"POST",
   data:{borra_id_CARGAMM2:borra_id_CARGAMM2,borrarCARGAMM2:borrarCARGAMM2},
   
    beforeSend:function(){  
    $('#mensajeCARGAMASIVAM').html('cargando'); 
    },    
   success:function(data){
			$('#dataModal3').modal('hide');
			$("#mensajeCARGAMASIVAM").html(data);			
			$("#reseteateCARGAMM").load(location.href + " #reseteateCARGAMM");
   }
  });
     //AGREGAR	
	});
  //AGREGAR	
 });

 



             function estiloColaborador(indice){
	                var estilos = [
	                    {texto:'#1e3a8a', fondo:'#e0f2fe'},
	                    {texto:'#6b21a8', fondo:'#f3e8ff'},
	                    {texto:'#0f766e', fondo:'#ccfbf1'},
	                    {texto:'#9a3412', fondo:'#ffedd5'},
	                    {texto:'#9f1239', fondo:'#ffe4e6'},
	                    {texto:'#0c4a6e', fondo:'#e0f2fe'}
	                ];
	                return estilos[indice % estilos.length];
	            }

	            $("#sel_depart").change(function(){
	                var deptid = $(this).val();

                $.ajax({
                    url: 'cargamasiva/GetCargaMM.php',
                    type: 'post',
                    data: {depart:deptid},
                    dataType: 'json',
                    success:function(response){
						

                        var len = response.length;

                       $("#sel_user").empty();
	                        $("#sel_user").append("<option value='0'>- Seleccione -</option>");
	                        for( var i = 0; i<len; i++){
	                            var id = response[i]['id'];
	                            var NOMBRE_1 = response[i]['NOMBRE_1'];
	                            var estilo = estiloColaborador(i);
	                            $("#sel_user").append("<option style='color:"+estilo.texto+"; background-color:"+estilo.fondo+"; font-weight:600;' value='"+id+"'>"+NOMBRE_1+"</option>");

                        }
                    }
                });
            });

 
 
 
            $("#sel_depart2").change(function(){
                var deptid = $(this).val();

                $.ajax({
                    url: 'cargamasiva/GetCargaMU.php',
                    type: 'post',
                    data: {depart:deptid},
                    dataType: 'json',
                    success:function(response){
						$("#reseteateU").load(location.href + " #reseteateU");

                        var len = response.length;

                             $("#sel_user2").empty();
	                        $("#sel_user2").append("<option value='0'>- Seleccione -</option>");
	                        for( var i = 0; i<len; i++){
	                            var id = response[i]['id'];
	                            var NOMBRE_1 = response[i]['NOMBRE_1'];
	                            var estilo = estiloColaborador(i);
	                            $("#sel_user2").append("<option style='color:"+estilo.texto+"; background-color:"+estilo.fondo+"; font-weight:600;' value='"+id+"'>"+NOMBRE_1+"</option>");

                        }
                    }
                });
            });
 
 
 
             $("#sel_depart3").change(function(){
                var deptid = $(this).val();

                $.ajax({
                    url: 'cargamasiva/GetCargaMP.php',
                    type: 'post',
                    data: {depart:deptid},
                    dataType: 'json',
                    success:function(response){
						$("#reseteateP").load(location.href + " #reseteateP");


                        var len = response.length;

                         $("#sel_user3").empty();
	                        $("#sel_user3").append("<option value='0'>- Seleccione -</option>");
	                        for( var i = 0; i<len; i++){
	                            var id = response[i]['id'];
	                            var NOMBRE_1 = response[i]['NOMBRE_1'];
	                            var estilo = estiloColaborador(i);
	                            $("#sel_user3").append("<option style='color:"+estilo.texto+"; background-color:"+estilo.fondo+"; font-weight:600;' value='"+id+"'>"+NOMBRE_1+"</option>");

                        }
                    }
                });
            });
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/*para borrar*/
 $(document).on('click', '.view_databorraVPCARGAUU', function(){
  //$('#dataModal').modal();
  var borra_id_uniforme = $(this).attr("id");
  var carga_borraraUniformes = "carga_borraraUniformes"; 

  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR
  
  $.ajax({
   url:"colaboradores/controlador.php",
   method:"POST",
   data:{borra_id_uniforme:borra_id_uniforme,carga_borraraUniformes:carga_borraraUniformes},
   
    beforeSend:function(){  
    $('#mensajeCARGAMASIVAU').html('cargando'); 
    },    
   success:function(data){
			$('#dataModal3').modal('hide');	   
			$("#mensajeCARGAMASIVAU").html(data);			
			$("#reseteateCARGAUM").load(location.href + " #reseteateCARGAUM");
   }
  });
   //AGREGAR	
	});
  //AGREGAR	  
 });








	
$(document).on('click', '.view_dataVPCARGAUU', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"cargamasiva/VistaPreviacargamasivaUniformes.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeCARGAMASIVAU').html('cargando'); 
    },    
   success:function(data){
    $('#personal_detalles').html(data);
    $('#dataModal').modal('show');
   }
  });
 });
	
	
	





$("#enviarCARGAMASIVAU").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#CARGAMASIVAUform')[0]);

$.ajax({
    url: 'colaboradores/controlador.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
})
.done(function(data) {
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado')
		
		{	
			$("#reseteateCARGAUM").load(location.href + " #reseteateCARGAUM");
			$("#mensajeCARGAMASIVAU").html(data);
			}else{
			$("#mensajeCARGAMASIVAU").html(data);
		}
		
})
.fail(function() {
    console.log("detect error");
});
});














/*para borrar*/
 $(document).on('click', '.view_databorraVPCARGAPP', function(){
  //$('#dataModal').modal();
  var borra_id_P = $(this).attr("id");
  var carga_masiva_borraraP = "carga_masiva_borraraP";
  
  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR  
  
  $.ajax({
   url:"colaboradores/controlador.php",
   method:"POST",
   data:{borra_id_P:borra_id_P,carga_masiva_borraraP:carga_masiva_borraraP},
   
    beforeSend:function(){  
    $('#mensajeCARGAMASIVAP').html('cargando'); 
    },    
   success:function(data){
			$('#dataModal3').modal('hide');
			$("#mensajeCARGAMASIVAP").html(data);			
			$("#reseteateCARGAPP").load(location.href + " #reseteateCARGAPP");
   }
  });
   //AGREGAR	
	});
  //AGREGAR	  
 });



$(document).on('click', '.view_dataVPCARGAPP', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"cargamasiva/VistaPreviacargamasivaPolizas.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeCARGAMASIVAP').html('cargando'); 
    },    
   success:function(data){
    $('#personal_detalles').html(data);
    $('#dataModal').modal('show');
   }
  });
 });
 
 
 
 
 

$("#enviarCARGAMASIVAP").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#CARGAMASIVAPform')[0]);

$.ajax({
    url: 'colaboradores/controlador.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
})
.done(function(data) {
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado')
		
		{	
			$("#reseteateCARGAPP").load(location.href + " #reseteateCARGAPP");
			$("#mensajeCARGAMASIVAP").html(data);
			}else{
			$("#mensajeCARGAMASIVAP").html(data);
		}
})
.fail(function() {
    console.log("detect error");
});
});



	
	
			$('#target1').hide("linear");
			$('#target2').hide("linear");
			$('#target3').hide("linear");

			$('#targetVIDEO').hide("linear");
			
			$("#mostrar1").click(function(){
				$('#target1').show("swing");
		 	});
			$("#ocultar1").click(function(){
				$('#target1').hide("linear");
			});
			$("#mostrar2").click(function(){
				$('#target2').show("swing");
		 	});
			$("#ocultar2").click(function(){
				$('#target2').hide("linear");
			});
			$("#mostrar3").click(function(){
				$('#target3').show("swing");
		 	});
			$("#ocultar3").click(function(){
				$('#target3').hide("linear");
			});

			
			$("#mostrarVIDEO").click(function(){
				$('#targetVIDEO').show("swing");
		 	});
			$("#ocultarVIDEO").click(function(){
				$('#targetVIDEO').hide("linear");
			});

			$("#mostrartodos").click(function(){
				$('#target1').show("swing");
				$('#target2').show("swing");
				$('#target3').show("swing");

				$('#targetVIDEO').show("swing");
		 	});
			
			$("#ocultartodos").click(function(){
				$('#target1').hide("linear");
				$('#target2').hide("linear");	
				$('#target3').hide("linear");

				$('#targetVIDEO').hide("linear");
			});

		});
	</script>