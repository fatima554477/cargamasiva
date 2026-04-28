<div id="content"> 


			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar1" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar1" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;CARGA MASIVA DE MATERIAL Y EQUIPO ASIGNADO</p><div  id="mensajeCARGAMASIVAM"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $ROWCARGAMASIVAM; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ROWCARGAMASIVAM; ?>%</div></div>
								</div></div></strong>
	       
		   
		   
		   
		   
            <div id="target1" style="display:block;"  class="content2 scroll">
			
    
			
			
			
			 						

			

        <div class="card">
          <div class="card-body">
		  <div class="table-responsive">
          <?php if($conexion->variablespermisos('','CARGA_MASIVA_MATERIALES','guardar')=='si'){ ?>
	<form class="row g-3 needs-validation was-validated" novalidate="" id="CARGAMASIVAMform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

			 
             <hr>
                

				                                               
                    <table   class="table table-striped table-bordered" style="width:100%" style="display:block;"  class="content2 scroll" >
              
              <center> <strong> <h6 scope="col">CARGA MASIVA DE MATERIAL Y EQUIPO  ASIGNADO</h6></center></strong>
			
				<tr>
					<td>  <div class="col-md-4">
                          <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label  for="validationCustom02" class="form-label">DEPARTAMENTO:</label></strong>
                          <select class="form-select mb-3" aria-label="Default select example" required="" name="DEPARTAMENTO" id="sel_depart"> 
 <option selected="">SELECCIONA UNA OPCIÓN</option>
 <option style="background: #c9e8e8" <?php if($DEPARTAMENTO == 'DIRECCION'){echo "selected";}; ?> value="DIRECCION">DIRECCIÓN</option>
 <option style="background: #a3e4d7" <?php if($DEPARTAMENTO == 'VENTAS'){echo "selected";}; ?> value="VENTAS">VENTAS</option>
 <option style="background: #e8f6f3" <?php if($DEPARTAMENTO == 'OPERACIONES'){echo "selected";}; ?> value="OPERACIONES">OPERACIONES</option>
 <option style="background: #fdf2e9" <?php if($DEPARTAMENTO == 'DISENO'){echo "selected";}; ?> value="DISENO">DISEÑO</option>
 <option style="background: #eaeded" <?php if($DEPARTAMENTO == 'VUELOS'){echo "selected";}; ?> value="VUELOS">VUELOS</option>
 <option style="background: #fdebd0" <?php if($DEPARTAMENTO == 'SISTEMAS'){echo "selected";}; ?> value="SISTEMAS">SISTEMAS</option>
 <option style="background: #ebdef0" <?php if($DEPARTAMENTO == 'BACK_STAGE'){echo "selected";}; ?> value="BACK_STAGE">BACK STAGE</option>
 <option style="background: #d6eaf8" <?php if($DEPARTAMENTO == 'ADMINISTRACION'){echo "selected";}; ?> value="ADMINISTRACION">ADMINISTRACION</option>
 <option style="background: #fef5e7" <?php if($DEPARTAMENTO == 'AUDITORIA'){echo "selected";}; ?> value="AUDITORIA">AUDITORIA</option>
 <option style="background: #ebedef" <?php if($DEPARTAMENTO == 'CONTABILIDAD'){echo "selected";}; ?> value="CONTABILIDAD">CONTABILIDAD</option>
 <option style="background: #fbeee6" <?php if($DEPARTAMENTO == 'CAPITAL_HUMANO'){echo "selected";}; ?> value="CAPITAL_HUMANO">CAPITAL HUMANO</option>
 <option style="background: #e8f6f3" <?php if($DEPARTAMENTO == 'RECEPCION'){echo "selected";}; ?> value="RECEPCION">RECEPCIÓN</option>
 <option style="background: #c9e8e8" <?php if($DEPARTAMENTO == 'LIMPIEZA'){echo "selected";}; ?> value="LIMPIEZA">LIMPIEZA</option>
    </select>
	</div>
	</td></tr>
                </table>
						



						<table class="table table-striped table-bordered" >
					

								<thead>
									<tr style="text-align: center;background:#c9e8e8">
										
										<th>NOMBRE COMPLETO</th>
										<th>ARTÍCULO</th>
										<th>CANTIDAD</th>
                                        <th>MARCA</th>
										<th>MODELO</th>
										<th>N0. DE SERIE</th>
                                        <th>FECHA ENTREGA</th>
                                        <th>FECHA DEVOLUCIÓN</th>
                                        <th>OBSERVACIONES</th>
									</tr>
                            
								</thead>
								<tbody>
								
									<tr>
									




 
										<td >
          <select class="form-control"  id="sel_user" style="width: 250px;" name="CM_NOMBRE">
            <option value="0">- Seleccione -</option>
          </select></td>



										

										<td><input style="width: 150px;" type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_ARTICULO; ?>" name="CM_ARTICULO"></td>
										<td><input style="width: 150px;" type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_CANTIDAD; ?>" name="CM_CANTIDAD"></td>
                                        <td><input style="width: 150px;px;" type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_MARCA; ?>" name="CM_MARCA"></td>
										<td><input style="width: 150px;px;" type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NODELO; ?>" name="CM_NODELO"></td>
                                        <td><input style="width: 150px;px;" type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NO_SERIE; ?>" name="CM_NO_SERIE"></td>
										<td><input style="width: 150px;px;" type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_FECHA_ENTREGA; ?>" name="CM_FECHA_ENTREGA"></td>
                                        <td><input style="width: 150px;px;" type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_FECHA_DEVOLUCION; ?>" name="CM_FECHA_DEVOLUCION"></td>
										<td><input style="width:300px;" type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_OBSERVACIONES; ?>" name="CM_OBSERVACIONES"></td>
									</tr>
		
                                    </table>
									
                  <input name="ICARGAMASIVAM" type="hidden" value="ICARGAMASIVAM">
                  <table class="table mb-0 table-striped">
               <tr>
          
            <th>
		
	          <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarCARGAMASIVAM">GUARDAR</button></th>  <?php } ?>  
                 
                 </tr> 
      
               </table>     
                   </form> 
                 
                      </div>	
						</div>
							</div>
							
							
							
							
							

			
			
<?php 
$querycontras = $conexion->listadoCARGAMASIVAM();

?>

   <br />  
   <div class="table-responsive">
    <div align="right">
    </div>
    <br />
    <div>
     <table class="table table-striped table-bordered" style="width:100%"  id="reseteateCARGAMM" name="reseteateCARGAMM">
  		<tr style="background:#c9e8e8;text-align:center" >

       <th style="background:#c9e8e8" width="10%">No.</th>  
       <th style="background:#c9e8e8"width="20%">DEPARTAMENTO</th>  
       <th style="background:#c9e8e8"width="20%">NOMBRE</th>  
       <th style="background:#c9e8e8"width="20%">ARTICULO</th>  
       <th style="background:#c9e8e8"width="20%">MARCA</th>
       <th style="background:#c9e8e8"width="10%">MODELO</th>
       <th style="background:#c9e8e8"width="20%">NÚMERO DE SERIE</th>	
       <th style="background:#c9e8e8"width="20%">FECHA DE ENTREGA</th>	   
       <th style="background:#c9e8e8"width="20%">FECHA DEVOLUCIÓN</th>	
       <th style="background:#c9e8e8"width="20%">OBSERVACIONES</th>	

		</tr style="background:#c9e8e8">
      <?php
	  /*$MA_ARTICULO , $MA_CANTIDAD , $MA_MARCA , $MA_MODELO , $MA_NUMERO_SERIE , $MA_FECHA_ENTREGA , $MA_FECHA_DEVOLUCION , $MA_OBSERVACIONES*/
      while($row = mysqli_fetch_array($querycontras))
      {
	$querycontrasnombre = $conexion->listadoCARGAMASIVAMnombre($row['CM_NOMBRE']);
	$row4 = mysqli_fetch_array($querycontrasnombre);
      ?>

    <tr style='background:#f5f9fc;text-align:center'>
       <td><?php echo $row["id"]; ?></td>
       <td><?php echo $row["DEPARTAMENTO"]; ?></td>
       <td><?php echo $row4["NOMBRE_1"].' '.$row4["APELLIDO_PATERNO"].' '.$row4["APELLIDO_MATERNO"]; ?></td>
       <td><?php echo $row["CM_ARTICULO"]; ?></td>
       <td><?php echo $row["CM_MARCA"]; ?></td>
       <td><?php echo $row["CM_NODELO"]; ?></td>
       <td><?php echo $row["CM_NO_SERIE"]; ?></td>	   
       <td><?php echo $row["CM_FECHA_ENTREGA"];?></td>		   
       <td><?php echo $row["CM_FECHA_DEVOLUCION"]; ?></td>	  
       <td><?php echo $row["CM_OBSERVACIONES"]; ?></td>	
	   
	   <?php if($conexion->variablespermisos('','CARGA_MASIVA_MATERIALES','modificar')=='si'){ ?>
       <td><input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataVPCARGAMM" /> <?php } ?></td>
	   
	   
	  <td>  
	   <?php if($conexion->variablespermisos('','CARGA_MASIVA_MATERIALES','borrar')=='si'){ ?>
       <input type="button" name="view_databorraVPCARGAMM" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_databorraVPCARGAMM" /></td>
	   <?php } ?>
	   
      </tr>
      <?php
      }
      ?>
     </table>
    </div>
   </div>  


							
							
							
							
							
							
                         </div>