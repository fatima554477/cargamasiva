<div id="content">

			<hr/>
			 <strong> <P class="mb-0 text-uppercase">
<img src="includes/contraer51.png" id="mostrar60" style="cursor:pointer;"/>
<img src="includes/contraer61.png" id="ocultar60" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;AGREGAR NUEVO USUARIO</P><div  id="mensajeLISTADO2"></div></strong>
 
	        <div id="target60" style="display:block;"  class="content2">
        <div class="card">
          <div class="card-body">
		  <?php 
		  $get_id = isset($_GET['id'])?$_GET['id']:'';
			if($get_id ==true){
			?>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>">
    <button style="text-align:center" class="btn btn-sm btn-success px-5" type="button" value="nada_vacio">NUEVO USUARIO</button>
	</a>
			<?php } ?>
          <?php if($conexion->variablespermisos('','listado','guardar')=='si'){ ?>
   
	<form class="row g-3 needs-validation was-validated" novalidate="" id="LISTADOform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
					  
						
	<div class="col-md-4">
		<strong><label for="validationCustom02" class="form-label">USUARIO CRM:</label></strong><br></br>
		<?php
			if($get_id==true){?>
				<input type="text" class="form-control" id="validationCustom02" value="<?php echo $USUARIO_CRM; ?>" required="" disabled >
				<input type="hidden" value="<?php echo $USUARIO_CRM; ?>" required="" name="USUARIO_CRM"  value="<?php echo $USUARIO_CRM; ?>">		
		<?php 
			}else{ 
		?>					
				<input type="text" class="form-control" id="validationCustom02" value="<?php echo $USUARIO_CRM; ?>" required="" name="USUARIO_CRM" >
		<?php 
			}
		?>						  
		<div class="valid-feedback">Bien!</div>
	</div>
						
						
						
						
						
						
						
						
						
                        <div class="col-md-4">
                          <strong><label for="validationCustom02" class="form-label">CONTRASEÑA CRM:               <button class="btn btn-primary" type="button" onclick="genPass();">GENERA PASSWORD</button></label></strong>
						  
						  
                          <input type="text" class="form-control" id="CONTRASENIA_CRM" value="<?php echo $CONTRASENIA_CRM; ?>" required="" name="CONTRASENIA_CRM">
						  
						  
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
                        <div class="col-md-4">
                         <strong> <label for="validationCustom02" class="form-label">EMPRESA A LA QUE PERTENECE:</label></strong><br></br>
				 <span id="desplegadoreset">
	<?php
	$encabezado = '';
	$queryper = $conexion->lista_empresacolaborador();
	$encabezado = '<select class="form-select mb-3" aria-label="Default select example" id="id_empresa" required="" name="id_empresa">
	<option value="">SELECCIONA UNA OPCIÓN</option>';
	/*linea para multiples colores*/
	$fondos = array("fff0df","f4ffdf","dfffed","dffeff","dfe8ff","efdfff","ffdffd","efdfff","ffdfe9");
	$num = 0;
	/*linea para multiples colores*/	
	while($row1 = mysqli_fetch_array($queryper))
	{
	/*linea para multiples colores*/
	if($num==8){$num=0;}else{$num++;}
	/*linea para multiples colores*/		
	$select='';
	if($ide==$row1['id']){$select = "selected";};

	$option .= '<option style="background: #'./*linea para multiples colores*/$fondos[$num]./*linea para multiples colores*/'" '.$select.' value="'.$row1['id'].'">'.$row1['NFE_INFORMACION'].'</option>';
	}
	echo $encabezado.$option.'</select>';			
	?>
			</span>
                        </div>
						
     <div class="col-md-4"> 
        <strong><label for="validationCustom02" class="form-label">DEPARTAMENTO:</label></strong>  

        <span id="desplegadoreset">
            <?php
            $encabezado = '';
            $option = '';
            $queryper = $conexion->desplegables07('LISTADO_COLABORADORES','DEPARTAMENTO');
            
            // Almacenar y ordenar opciones
            $opciones = array();
            while($row1 = mysqli_fetch_array($queryper)) {
                $opciones[] = $row1;
            }
            usort($opciones, function($a, $b) {
                return strcasecmp($a['nombre_campo'], $b['nombre_campo']);
            });
            
            // Generar HTML
            $encabezado = '<select class="form-select mb-3" aria-label="Default select example" id="DEPARTAMENTO" required="" name="DEPARTAMENTO">
                           <option value="">SELECCIONA UNA OPCIÓN</option>';
            $fondos = array("fff0df","f4ffdf","dfffed","dffeff","dfe8ff","efdfff","ffdffd","efdfff","ffdfe9");
            $num = 0;
            
            foreach($opciones as $row1) {
                $num = ($num == 8) ? 0 : $num + 1;
                $select = ($DEPARTAMENTO == $row1['nombre_campo']) ? "selected" : "";
                $option .= '<option style="background: #'.$fondos[$num].'" '.$select.' value="'.$row1['nombre_campo'].'">'.strtoupper($row1['nombre_campo']).'</option>';
            }
            echo $encabezado.$option.'</select>';			
            ?>        
        </span>
                          <div class="valid-feedback">Bien!</div>
                        </div>           
                      
  
                        
	
						
<div class="col-md-4"> 
        <strong><label for="validationCustom02" class="form-label">PUESTO:</label></strong>  

        <span id="desplegadoreset">
            <?php
            $encabezado = '';
            $option = '';
            $queryper = $conexion->desplegables07('LISTADO_COLABORADORES','PUESTO');
            
            // Almacenar y ordenar opciones
            $opciones = array();
            while($row1 = mysqli_fetch_array($queryper)) {
                $opciones[] = $row1;
            }
            usort($opciones, function($a, $b) {
                return strcasecmp($a['nombre_campo'], $b['nombre_campo']);
            });
            
            // Generar HTML
            $encabezado = '<select class="form-select mb-3" aria-label="Default select example" id="PUESTO" required="" name="PUESTO">
                           <option value="">SELECCIONA UNA OPCIÓN</option>';
            $fondos = array("fff0df","f4ffdf","dfffed","dffeff","dfe8ff","efdfff","ffdffd","efdfff","ffdfe9");
            $num = 0;
            
            foreach($opciones as $row1) {
                $num = ($num == 8) ? 0 : $num + 1;
                $select = ($PUESTO == $row1['nombre_campo']) ? "selected" : "";
                $option .= '<option style="background: #'.$fondos[$num].'" '.$select.' value="'.$row1['nombre_campo'].'">'.strtoupper($row1['nombre_campo']).'</option>';
            }
            echo $encabezado.$option.'</select>';			
            ?>        
        </span>
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
						
						
						
						
                        <div class="col-md-4">
                         <strong> <label for="validationCustom02" class="form-label">CORREO PERSONAL:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $CORREO_1; ?>" required="" name="CORREO_1" STYLE="text-transform: NONE;">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
						                        <div class="col-md-4">
                         <strong> <label for="validationCustom02" class="form-label">CORREO LABORAL:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $CORREO_4; ?>" required="" name="CORREO_4" STYLE="text-transform: NONE;">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
						
						
                        <div class="col-md-4">
                          <strong><label for="validationCustom02" class="form-label">NOMBRE 1:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NOMBRE_1; ?>" required="" name="NOMBRE_1">
                          <div class="valid-feedback">Bien!</div>
                        </div>

						
                        <div class="col-md-4">
                          <strong><label for="validationCustom02" class="form-label">NOMBRE 2:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NOMBRE_2; ?>" required="" name="NOMBRE_2">
                          <div class="valid-feedback">Bien!</div>
                        </div>



                        <div class="col-md-4">
                          <strong><label for="validationCustom02" class="form-label">APELLIDO PATERNO :</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $APELLIDO_PATERNO; ?>" required="" name="APELLIDO_PATERNO">
                          <div class="valid-feedback">Bien!</div>
                        </div>						
 





                        <div class="col-md-4">
                        <strong>  <label for="validationCustom02" class="form-label">APELLIDO MATERNO :</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $APELLIDO_MATERNO; ?>" required="" name="APELLIDO_MATERNO">
                          <div class="valid-feedback">Bien!</div>
                        </div> 
                        


					<input type="hidden" value="listado2" name="listado">
					<input type="hidden" value=<?php echo $idrow; ?> name="idrow">
 
 
                         <div class="col-md-4">
                          <strong><label for="validationCustom02" class="form-label">STATUS DE CARGA DE INFORMACION:</label></strong>
						<div class="input-group">
                        <select class="form-select" name="STATUS_CARGA_INFORMACION" id="inputGroupSelect04" required="">
	<option ></option>


	<option <?php if($STATUS_CARGA_INFORMACION=='ANIMADOR_COORDINADOR'){ echo "selected"; } ?> value="ANIMADOR_COORDINADOR">ANIMADOR/COORDINADOR</option>
	
	<option <?php if($STATUS_CARGA_INFORMACION=='COLABORADOR'){ echo "selected"; } ?> value="COLABORADOR">COLABORADOR</option>


                        </select>
                      </div>
                        </div>
 
                        <div class="col-md-4">
                          <strong><label for="validationCustom02" class="form-label">PERMISO DE:</label></strong>
						  <span id="desplegadoreset">
	<?php
		$encabezado = '';
	$queryper = $conexion->lista_plantillas2();
	$encabezado = '<select class="form-select mb-3" aria-label="Default select example" id="PERMISOS" required="" name="PERMISOS">
	<option value="">SELECCIONA UNA OPCIÓN</option>';

	/*linea para multiples colores*/
	$fondos = array("fff0df","f4ffdf","dfffed","dffeff","dfe8ff","efdfff","ffdffd","efdfff","ffdfe9");
	$num = 0;
	/*linea para multiples colores*/
	
	while($row1 = mysqli_fetch_array($queryper))
	{

		/*linea para multiples colores*/
	if($num==8){$num=0;}else{$num++;}
	/*linea para multiples colores*/		
		
	$select='';
	if($PERMISOS==$row1['nombreplantilla']){$select = "selected";};

	$option2 .= '<option style="background: #'./*linea para multiples colores*/$fondos[$num]./*linea para multiples colores*/'" '.$select.' value="'.$row1['nombreplantilla'].'">'.$row1['nombreplantilla'].'</option>';
	}
	echo $encabezado.$option2.'</select>';			
	?>
			</span>
                      </div>
 
 
 
 
                 
                          
	<div style="float:left;" border="solid 1px #000;">



	<button class="btn btn-primary" type="button" id="enviarLISTADO">SOLO GUARDAR</button><div style="
    color: #f5f5f5;
    text-shadow: 1px 1px 1px #919191,
        1px 2px 1px #919191,
        1px 3px 1px #919191,
        1px 4px 1px #919191,
        1px 5px 1px #919191,
        1px 6px 1px #919191,
        1px 7px 1px #919191,
        1px 8px 1px #919191,
        1px 9px 1px #919191,
        1px 10px 1px #919191,
    1px 18px 6px rgba(16,16,16,0.4),
    1px 22px 10px rgba(16,16,16,0.2),
    1px 25px 35px rgba(16,16,16,0.2),
    1px 30px 60px rgba(16,16,16,0.4);
	@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 100; }
}"


 id="mensajeLISTADO"/>
 </div><div  style="float:right;">
	
	<button class="btn btn-primary" type="button" id="enviarLISTADOCorreo">GUARDAR Y ENVIAR CORREO</button>	
	<?php } ?>
	</div>
                         

    
</div>
	</div>
	</div>
                            
 
 
                         </form>  
						 
                          </div>
						   </div>
						 </div>
						 </div>