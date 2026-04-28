<div id="content"> 


			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar3" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar3" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;CARGA MASIVA DE PÓLIZAS Y DOCUMENTOS</p><div  id="mensajeCARGAMASIVAP"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $ROWCARGAMASIVAP; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ROWCARGAMASIVAP; ?>%</div></div>
								</div></div></strong>
			   
		   
		   
                                <div id="target3" style="display:block;"  class="content2 scroll">
			
			
			
			
			
			 						

			
                                
            <div class="card">
              <div class="card-body">
              <div class="table-responsive">
              <?php if($conexion->variablespermisos('','CARGA_MASIVA_POLIZAS','guardar')=='si'){ ?>
		  <form class="row g-3 needs-validation was-validated" novalidate="" id="CARGAMASIVAPform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
             <hr>
            

			
              
              <center> <strong> <h6 scope="col">CARGA MASIVA DE PÓLIZAS Y DOCUMENTOS</h6></center></strong>
   
		                                              
              <table   class="table table-striped table-bordered" style="width:100%" style="display:block;"  class="content2 scroll" >
		
			  <tr>
					<td>
					





					<div class="col-md-4"   >
                         <strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="validationCustom02" class="form-label">DEPARTAMENTO:</label></strong>
                          <?php
$encabezado = '';
$option = '';
$queryper = $conexion->desplegables07('LISTADO_COLABORADORES','DEPARTAMENTO');

$opciones = array();
while($row1 = mysqli_fetch_array($queryper)) {
    $opciones[] = $row1;
}
usort($opciones, function($a, $b) {
    return strcasecmp($a['nombre_campo'], $b['nombre_campo']);
});

$encabezado = '<select class="form-select mb-3" aria-label="Default select example" id="sel_depart3" required="" name="DEPARTAMENTO3">'
           . '<option value="">SELECCIONA UNA OPCIÓN</option>';
$fondos = array("fff0df","f4ffdf","dfffed","dffeff","dfe8ff","efdfff","ffdffd","efdfff","ffdfe9");
$num = 0;

foreach($opciones as $row1) {
    $num = ($num == 8) ? 0 : $num + 1;
    $select = ($DEPARTAMENTO == $row1['nombre_campo']) ? "selected" : "";
    $option .= '<option style="background: #'.$fondos[$num].'" '.$select.' value="'.$row1['nombre_campo'].'">'.strtoupper($row1['nombre_campo']).'</option>';
}

echo $encabezado.$option.'</select>';
?>
	</div>
	






		   </td>
			 </tr>
			</table>
					
							<table class="table table-striped table-bordered" >
					

								<thead>
									<tr style="text-align: center;background:#c9e8e8">

										<th>NOMBRE COMPLETO</th>

										<th>TIPO DE DOCUMENTOS</th>
										<th>FECHA DE ENTREGA</th>
                                        <th>FECHA DE INICIO DE PÓLIZA</th>
										<th>EMPRESA A LA <br>QUE SE LE CONTRATÓ</th>
										<th>TELÉFONO DE <br>EMERGENCIA DE LA EMPRESA A LA <br>QUE SE LE CONTRATÓ</th>
                                        <th>OBSERVACIONES</th>
                                        <th>CARGA DE PÓLIZA</th>
                                     
									</tr>
								</thead>
								<tbody>
									<tr>
	
										
										<td>
										
          <select class="form-control"  id="sel_user3" style="width: 250px;" name="CMD_NOMBRE">
            <option value="0">- Seleccione -</option>
          </select>
										
										
										</td>

										
										
										<td><input style="width: 200px;" type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CMD_DOCUMENTO; ?>" name="CMD_DOCUMENTO"></td>
										<td><input style="width: 200px;" type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $CMD_FECHA_ENTREGA; ?>" name="CMD_FECHA_ENTREGA"></td>
                                        <td><input style="width: 200px;" type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $CMD_FECHA_INICIO; ?>" name="CMD_FECHA_INICIO"></td>
										<td><input style="width: 300px;" type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CMD_EMPRESA_CONTRATO; ?>" name="CMD_EMPRESA_CONTRATO"></td>
                                        <td><input style="width: 300px;"type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CMD_TELEFONO_EMERGENCIA; ?>" name="CMD_TELEFONO_EMERGENCIA"></td>
										<td><input style="width: 200px;"type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CMD_OBSERVACIONES; ?>" name="CMD_OBSERVACIONES"></td>
                                        <td><input style="width: 150px;" type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $CMD_CARGA_POLIZA; ?>" name="CMD_CARGA_POLIZA"></td>
										
									</tr>
								
									</table>
									
									
									
                  <input name="ICARGAMASIVAP" type="hidden" value="ICARGAMASIVAP">  
                  <table class="table mb-0 table-striped">
               <tr>
          
                   
            <th>

	   <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarCARGAMASIVAP">GUARDAR</button>
        </th><?php } ?>
                      
                  
    
                  
               </tr>
               </table>



			   
					    </form>
                        </tbody>	
                        
						</div>
					</div>
                  </div>








		
<?php 
$querycontras = $conexion->listadoCARGAMASIVAP();

?>
    
   <br />  
   <div class="table-responsive">
    <div align="right">
    </div>
    <br />
    <div>
     <table  class="table table-striped table-bordered"  style="width:100%" id="reseteateCARGAPP" name="reseteateCARGAPP">
		<tr style="background:#c9e8e8;text-align:center" >

       <th style="background:#c9e8e8" width="10%">No.</th>  
       <th style="background:#c9e8e8"width="20%">DEPARTAMENTO</th>  
       <th style="background:#c9e8e8"width="20%" COLSPAN="2">NOMBRE</th>  
       <th style="background:#c9e8e8"width="20%">DOCUMENTO</th>  
       <th style="background:#c9e8e8"width="20%">FECHA DE ENTREGA</th>
       <th style="background:#c9e8e8"width="10%">FECHA DE INICIO</th>
       <th style="background:#c9e8e8"width="20%">EMPRESA QUE CONTRATO</th>	
	   <th style="background:#c9e8e8"width="20%">TELÉFONO DE EMERGENCIA</th>	
       <th style="background:#c9e8e8"width="20%">OBSERVACIONES</th>	   
       <th style="background:#c9e8e8"width="20%">CARGA PÓLIZA</th>	
   

		</tr>
      <?php
	  /*$MA_ARTICULO , $MA_CANTIDAD , $MA_MARCA , $MA_MODELO , $MA_NUMERO_SERIE , $MA_FECHA_ENTREGA , $MA_FECHA_DEVOLUCION , $MA_OBSERVACIONES*/
      while($row = mysqli_fetch_array($querycontras))
      {

			   if($row["CMD_CARGA_POLIZA"]!=""){$CMD_CARGA_POLIZA =  "<a target='_blank' href='includes/archivos/".$row["CMD_CARGA_POLIZA"]."'>Visualizar!</a>"; 
			   }	else{
				   
				   $CMD_CARGA_POLIZA = "";
				   
			   }

	$querycontrasnombre = $conexion->listadoCARGAMASIVAPnombre($row['CMD_NOMBRE']);
	
	$row4 = mysqli_fetch_array($querycontrasnombre);
      ?>

      <table class="table table-striped table-bordered" style="width:100%"  id="reseteateP" name="reseteateP">

       <td><?php echo $row["id"]; ?></td>
       <td><?php echo $row["DEPARTAMENTO"]; ?></td>
       <td COLSPAN="2"><?php echo $row4["NOMBRE_1"].' '.$row4["NOMBRE_2"].' '.$row4["APELLIDO_PATERNO"].' '.$row4["APELLIDO_MATERNO"]; ?></td>
       <td><?php echo $row["CMD_DOCUMENTO"]; ?></td>
       <td><?php echo $row["CMD_FECHA_ENTREGA"]; ?></td>
       <td><?php echo $row["CMD_FECHA_INICIO"]; ?></td>
       <td><?php echo $row["CMD_EMPRESA_CONTRATO"]; ?></td>
       <td><?php echo $row["CMD_TELEFONO_EMERGENCIA"]; ?></td>	   
       <td><?php echo $row["CMD_OBSERVACIONES"];?></td>		   
       <td><?php echo $CMD_CARGA_POLIZA;?></td>	        
	   
       <td>
       <?php if($conexion->variablespermisos('','CARGA_MASIVA_POLIZAS','modificar')=='si'){ ?><input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataVPCARGAPP" />
        <?php } ?></td>
      
	   
       <td><?php if($conexion->variablespermisos('','CARGA_MASIVA_POLIZAS','borrar')=='si'){ ?>
        <input type="button" name="view_databorraVPCARGAPP" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_databorraVPCARGAPP" />
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
              