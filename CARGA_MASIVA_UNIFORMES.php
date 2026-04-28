<div id="content"> 


			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar2" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar2" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;CARGA MASIVA DE UNIFORMES</p><div  id="mensajeCARGAMASIVAU"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $ROWCARGAMASIVAU; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ROWCARGAMASIVAU; ?>%</div></div>
								</div></div></strong>
	       
                                <div id="target2" style="display:block;"  class="content2 scroll">
                             
			
			
			
			
			 						

			

            <div class="card">
              <div class="card-body">
              <div class="table-responsive">
              <?php if($conexion->variablespermisos('','CARGA_MASIVA_UNIFORMES','guardar')=='si'){ ?>
	<form class="row g-3 needs-validation was-validated" novalidate="" id="CARGAMASIVAUform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
   

     

              
              <center> <strong> <h6 scope="col">CARGA MASIVA DE UNIFORMES</h6></center></strong>
              <table   class="table table-striped table-bordered" style="width:100%" style="display:block;"  class="content2 scroll" >
				<tr>
					<td>  
				
					
						<div class="col-md-4">
                          <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="validationCustom02" class="form-label">DEPARTAMENTO:</label></strong>
                          <select class="form-select mb-3" aria-label="Default select example" required="" name="DEPARTAMENTO2" id="sel_depart2"> 
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
	
						
						
						
						
						
						
						
						
             </td>
			 </tr>
			</table> 
			 
			 
							<table class="table table-striped table-bordered" >
					

								<thead>
									<tr style="text-align: center;background:#c9e8e8">
									
										<th>NOMBRE COMPLETO</th>
										
										<th>ARTÍCULO</th>
										<th>CANTIDAD</th>
                                        <th>TALLA</th>
										<th>MARCA</th>
										<th>FOTO</th>
                                        <th>FECHA ENTREGA</th>
                                        <th>FECHA DEVOLUCIÓN</th>
                                        <th>OBSERVACIONES</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									
									

										
								
										<td>
										          <select class="form-control"  id="sel_user2" style="width: 250px;" name="CMU_NOMBRE">
            <option value="0">- Seleccione -</option>
          </select>
</td>
										
										
										<td><input style="width: 150px;" type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CMU_ARTICULO; ?>" name="CMU_ARTICULO"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CMU_CANTIDAD; ?>" name="CMU_CANTIDAD"></td>
                                        <td><input style="width: 150px;" type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CMU_TALLA; ?>" name="CMU_TALLA"></td>
										<td><input style="width: 150px;" type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CMU_MARCA; ?>" name="CMU_MARCA"></td>
                                        <td><input style="width: 150px;" type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $CMU_FOTO; ?>" name="CMU_FOTO"></td>
										<td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $CMU_FECHA_ENTREGA; ?>" name="CMU_FECHA_ENTREGA"></td>
                                        <td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $CMU_FECHA_DEVOLUCION; ?>" name="CMU_FECHA_DEVOLUCION"></td>
										<td><input style="width: 250px;"type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CMU_OBSERVACIONES; ?>" name="CMU_OBSERVACIONES"></td>
									</tr>
							
                                 
									
									</table>

                  <input name="icargamasivaU" type="hidden" value="icargamasivaU">
				  
				  
				  

                  <table class="table mb-0 table-striped">
      
           
               <tr>    
            <th>
         
	          <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarCARGAMASIVAU">GUARDAR</button>  <?php } ?> 
                
   </th>  
            
                
               
              
                  
               </tr>
               </table>     
					    </form>
                        <tbody>
                      
						</div>
					</div>

            </div>







			
			
			
			
	
<?php 
$querycontras = $conexion->listadoCARGAMASIVAu();

?>
    
   <br />  
   <div class="table-responsive">
    <div align="right">
    </div>
    <br />
    <div>
     <table class="table table-striped table-bordered" style="width:100%"    id="reseteateCARGAUM" name="reseteateCARGAUM">
		<tr style="background:#c9e8e8;text-align:center" >

       <th style="background:#c9e8e8" width="10%">No.</th>  
       <th style="background:#c9e8e8"width="20%">DEPARTAMENTO</th>  
       <th style="background:#c9e8e8"width="20%" COLSPAN="2">NOMBRE</th>  
       <th style="background:#c9e8e8"width="20%">ARTÍCULO</th>  
       <th style="background:#c9e8e8"width="20%">CANTIDAD</th>
       <th style="background:#c9e8e8"width="10%">TALLA</th>
       <th style="background:#c9e8e8"width="20%">MARCA</th>	
	   <th style="background:#c9e8e8"width="20%">FOTO</th>	
       <th style="background:#c9e8e8"width="20%">FECHA DE ENTREGA</th>	   
       <th style="background:#c9e8e8"width="20%">FECHA DEVOLUCIÓN</th>	
       <th style="background:#c9e8e8"width="20%">OBSERVACIONES</th>	

		</tr>   
      <?php
	  /*$MA_ARTICULO , $MA_CANTIDAD , $MA_MARCA , $MA_MODELO , $MA_NUMERO_SERIE , $MA_FECHA_ENTREGA , $MA_FECHA_DEVOLUCION , $MA_OBSERVACIONES*/
      while($row = mysqli_fetch_array($querycontras))
      {

			   if($row["CMU_FOTO"]!=""){$CMU_FOTO =  "<a target='_blank' href='includes/archivos/".$row["CMU_FOTO"]."'>Visualizar!</a>"; 
			   }	else{
				   
				   $CMU_FOTO = "";
				   
			   }

	$querycontrasnombre = $conexion->listadoCARGAMASIVAMnombre($row['CMU_NOMBRE']);
	
	$row4 = mysqli_fetch_array($querycontrasnombre);
	
      ?>

        
        <tr style='background:#f5f9fc;text-align:center'>

       <td><?php echo $row["id"]; ?></td>
       <td><?php echo $row["DEPARTAMENTO"]; ?></td>
       <td COLSPAN="2"><?php echo $row4["NOMBRE_1"].' '.$row4["APELLIDO_PATERNO"].' '.$row4["APELLIDO_MATERNO"]; ?></td>
       <td><?php echo $row["CMU_ARTICULO"]; ?></td>
       <td><?php echo $row["CMU_CANTIDAD"]; ?></td>
       <td><?php echo $row["CMU_TALLA"]; ?></td>
       <td><?php echo $row["CMU_MARCA"]; ?></td>
       <td><?php echo $CMU_FOTO; ?></td>	   
       <td><?php echo $row["CMU_FECHA_ENTREGA"];?></td>		   
       <td><?php echo $row["CMU_FECHA_DEVOLUCION"]; ?></td>	  
       <td><?php echo $row["CMU_OBSERVACIONES"]; ?></td>
		   
	   
			
 	  
	   
       <td>
       <?php if($conexion->variablespermisos('','CARGA_MASIVA_UNIFORMES','modificar')=='si'){ ?><input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataVPCARGAUU" />
        <?php } ?></td>
	   
	   
       <td>
       <?php if($conexion->variablespermisos('','CARGA_MASIVA_UNIFORMES','borrar')=='si'){ ?><input type="button" name="view_databorraVPCARGAUU" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_databorraVPCARGAUU" />
        <?php } ?></td>
	   
	   
      </tr>
      <?php
      }
      ?>
     </table>
    </div>
   </div>  
 			
			
			
















               </div> 
                </div>
			           	</div>