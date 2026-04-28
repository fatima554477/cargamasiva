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
	
/*	var fileobj;
	function upload_file(e,name) {
	    e.preventDefault();
	    fileobj = e.dataTransfer.files[0];
	    ajax_file_upload1(fileobj,name);
	}
	 
	function file_explorer(name) {
	    document.getElementsByName(name)[0].click();
	    document.getElementsByName(name)[0].onchange = function() {
	        fileobj = document.getElementsByName(name)[0].files[0];
	        ajax_file_upload1(fileobj,name);
	    };
	}

	function ajax_file_upload1(file_obj,nombre) {
	    if(file_obj != undefined) {
	        var form_data = new FormData();                  
	        form_data.append(nombre, file_obj);
	        $.ajax({
	            type: 'POST',
	            url: 'colaboradores/controlador.php',
	            contentType: false,
	            processData: false,
	            data: form_data,
 beforeSend: function() {
$('#1'+nombre).html('<p style="color:green;">Cargando archivo!</p>');
$('#mensajeADJUNTOCOL').html('<p style="color:green;">Actualizado!</p>');
    },				
	            success:function(response) {
//alert(response);
if($.trim(response) == 2 ){

$('#1'+nombre).html('<p style="color:red;">Error, archivo diferente a PDF, JPG o GIF.</p>');
$('#'+nombre).val("");
}else{
$('#'+nombre).val(response);
$('#1'+nombre).html('<a target="_blank" href="includes/archivos/'+$.trim(response)+'">Visualizar!</a>');	
}

	            }
	        });
	    }
	}*/

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
                        for( var i = 0; i<len; i++){
                            var id = response[i]['id'];
                            var NOMBRE_1 = response[i]['NOMBRE_1'];

                            $("#sel_user").append("<option value='"+id+"'>"+NOMBRE_1+"</option>");

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

                        var len = response.length;

                        $("#sel_user2").empty();
                        for( var i = 0; i<len; i++){
                            var id = response[i]['id'];
                            var NOMBRE_1 = response[i]['NOMBRE_1'];

                            $("#sel_user2").append("<option value='"+id+"'>"+NOMBRE_1+"</option>");

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

                        var len = response.length;

                        $("#sel_user3").empty();
                        for( var i = 0; i<len; i++){
                            var id = response[i]['id'];
                            var NOMBRE_1 = response[i]['NOMBRE_1'];

                            $("#sel_user3").append("<option value='"+id+"'>"+NOMBRE_1+"</option>");

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