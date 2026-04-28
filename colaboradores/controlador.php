<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

define('__ROOT1__', dirname(dirname(__FILE__)));
include_once (__ROOT1__."/includes/error_reporting.php");
include_once (__ROOT1__."/includes/class.epcinn.php");

$conexion = NEW colaboradores();
$conexionherramientas = new herramientas();


$listado = isset($_POST["listado"])?$_POST["listado"]:"";
$empresa = isset($_POST["empresa"])?$_POST["empresa"]:""; 
$ipersonal1 = isset($_POST["ipersonal1"])?$_POST["ipersonal1"]:"";
$dircasa11 = isset($_POST["dircasa11"])?$_POST["dircasa11"]:"";
$dircasa22 = isset($_POST["dircasa22"])?$_POST["dircasa22"]:"";
$F1CERCANO1 = isset($_POST["F1CERCANO1"])?$_POST["F1CERCANO1"]:"";
$F2CERCANO2 = isset($_POST["F2CERCANO2"])?$_POST["F2CERCANO2"]:"";
$F3CERCANO3 = isset($_POST["F3CERCANO3"])?$_POST["F3CERCANO3"]:"";
$F4CERCANO4 = isset($_POST["F4CERCANO4"])?$_POST["F4CERCANO4"]:"";
$habilidades1 = isset($_POST["habilidades1"])?$_POST["habilidades1"]:"";
$CMEASIGNADO1 = isset($_POST["CMEASIGNADO1"])?$_POST["CMEASIGNADO1"]:"";
$CMEASIGNADO2 = isset($_POST["CMEASIGNADO2"])?$_POST["CMEASIGNADO2"]:"";
$CMEASIGNADO3 = isset($_POST["CMEASIGNADO3"])?$_POST["CMEASIGNADO3"]:"";
$DATOS_COLABORADORES = isset($_POST["DATOS_COLABORADORES"])?$_POST["DATOS_COLABORADORES"]:"";
$DATOS_COLABORADORES1 = isset($_POST["DATOS_COLABORADORES1"])?$_POST["DATOS_COLABORADORES1"]:"";
$DATOS_coordina = isset($_POST["DATOS_coordina"])?$_POST["DATOS_coordina"]:"";
$ipersonalcoordina = isset($_POST["ipersonalcoordina"])?$_POST["ipersonalcoordina"]:"";
$iTempresarial = isset($_POST["iTempresarial"])?$_POST["iTempresarial"]:"";
$ICONTRASENAS = isset($_POST["ICONTRASENAS"])?$_POST["ICONTRASENAS"]:"";
$ICONTRASENAS2 = isset($_POST["ICONTRASENAS2"])?$_POST["ICONTRASENAS2"]:"";
$borrarContrasenia = isset($_POST["borrarContrasenia"])?$_POST["borrarContrasenia"]:"";
$IMATERIAL = isset($_POST["IMATERIAL"])?$_POST["IMATERIAL"]:"";
$IMATERIAL2 = isset($_POST["IMATERIAL2"])?$_POST["IMATERIAL2"]:"";
$borrarMEASIGNADO12 = isset($_POST["borrarMEASIGNADO12"])?$_POST["borrarMEASIGNADO12"]:"";
$iunifores = isset($_POST["iunifores"])?$_POST["iunifores"]:"";
$ipolias= isset($_POST["ipolias"])?$_POST["ipolias"]:"";
$IUNIFROME2  = isset($_POST["IUNIFROME2"])?$_POST["IUNIFROME2"]:"";
$borraraUniformes  = isset($_POST["borraraUniformes"])?$_POST["borraraUniformes"]:"";
$IPOLIZAS22 = isset($_POST["IPOLIZAS22"])?$_POST["IPOLIZAS22"]:"";
$borraraPolizas= isset($_POST["borraraPolizas"])?$_POST["borraraPolizas"]:"";
$IpUNIFORME = isset($_POST['IpUNIFORME'])?$_POST['IpUNIFORME']:'';
$ITEMPRESARIAL2 = isset($_POST['ITEMPRESARIAL2'])?$_POST['ITEMPRESARIAL2']:'';
$borraratempresarial = isset($_POST['borraratempresarial'])?$_POST['borraratempresarial']:'';
$IpPOLIZAS= isset($_POST["IpPOLIZAS"])?$_POST["IpPOLIZAS"]:""; 
$IpTEMPRESARIAL = isset($_POST["IpTEMPRESARIAL"])?$_POST["IpTEMPRESARIAL"]:"";
$IpMATERIAL = isset($_POST['IpMATERIAL'])?$_POST['IpMATERIAL']:'';
$iCONVENIOPRESTAMO = isset($_POST['iCONVENIOPRESTAMO'])?$_POST['iCONVENIOPRESTAMO']:'';
$iCONVENIOPRESTAMO2 = isset($_POST['iCONVENIOPRESTAMO2'])?$_POST['iCONVENIOPRESTAMO2']:'';
$IpCONVENIOPRESTAMO = isset($_POST['IpCONVENIOPRESTAMO'])?$_POST['IpCONVENIOPRESTAMO']:'';
$borraraCONVENIOP= isset($_POST['borraraCONVENIOP'])?$_POST['borraraCONVENIOP']:'';
$iCONVENIOPAGO = isset($_POST['iCONVENIOPAGO'])?$_POST['iCONVENIOPAGO']:'';
$borraraCONVENIOPAGO = isset($_POST['borraraCONVENIOPAGO'])?$_POST['borraraCONVENIOPAGO']:'';
$ICONVENIOPAGO22 =  isset($_POST['ICONVENIOPAGO22'])?$_POST['ICONVENIOPAGO22']:'';
$ihiddeninventario =  isset($_POST['ihiddeninventario'])?$_POST['ihiddeninventario']:'';
$IINVENTARIO2 =  isset($_POST['IINVENTARIO2'])?$_POST['IINVENTARIO2']:'';
$borrarInventario =  isset($_POST['borrarInventario'])?$_POST['borrarInventario']:'';
$IpINVENTARIO =  isset($_POST['IpINVENTARIO'])?$_POST['IpINVENTARIO']:'';
$ICARGAMASIVAM = isset($_POST["ICARGAMASIVAM"])?$_POST["ICARGAMASIVAM"]:"";
$icargamasivaU = isset($_POST["icargamasivaU"])?$_POST["icargamasivaU"]:"";
$ICARGAMASIVAP = isset($_POST["ICARGAMASIVAP"])?$_POST["ICARGAMASIVAP"]:"";
$ICATEGORIAS = isset($_POST["ICATEGORIAS"])?$_POST["ICATEGORIAS"]:"";
$borrarCATEGORIA = isset($_POST["borrarCATEGORIA"])?$_POST["borrarCATEGORIA"]:"";
$ICARGAMM2 = isset($_POST["ICARGAMM2"])?$_POST["ICARGAMM2"]:"";
$borrarCARGAMM2  = isset($_POST["borrarCARGAMM2"])?$_POST["borrarCARGAMM2"]:"";
$ICARGAMU2   = isset($_POST["ICARGAMU2"])?$_POST["ICARGAMU2"]:"";
$carga_borraraUniformes = isset($_POST["carga_borraraUniformes"])?$_POST["carga_borraraUniformes"]:"";
$IpCARGAMU22 = isset($_POST["IpCARGAMU22"])?$_POST["IpCARGAMU22"]:"";
$ICARGAMP222 = isset($_POST["ICARGAMP222"])?$_POST["ICARGAMP222"]:"";
$carga_masiva_borraraP = isset($_POST["carga_masiva_borraraP"])?$_POST["carga_masiva_borraraP"]:"";
$IpCARGAMP2 = isset($_POST["IpCARGAMP2"])?$_POST["IpCARGAMP2"]:"";
$validaDATOSBANCARIOS1 = isset($_POST["validaDATOSBANCARIOS1"])?$_POST["validaDATOSBANCARIOS1"]:"";
$ENVIARRdatosbancario1p = isset($_POST["ENVIARRdatosbancario1p"])?$_POST["ENVIARRdatosbancario1p"]:"";
$borra_datos_bancario1 = isset($_POST["borra_datos_bancario1"])?$_POST["borra_datos_bancario1"]:"";
$DAbancaPRO_ENVIAR_IMAIL = isset($_POST["DAbancaPRO_ENVIAR_IMAIL"])?$_POST["DAbancaPRO_ENVIAR_IMAIL"]:"";
$VALIDADIRECCIONEP1 = isset($_POST["VALIDADIRECCIONEP1"])?$_POST["VALIDADIRECCIONEP1"]:"";
$PDIRECCIONF_ENVIAR_IMAIL = isset($_POST["PDIRECCIONF_ENVIAR_IMAIL"])?$_POST["PDIRECCIONF_ENVIAR_IMAIL"]:"";

$borraCOLABORADOR = isset($_POST["borraCOLABORADOR"])?$_POST["borraCOLABORADOR"]:"";
$mandacorreo = isset($_POST["mandacorreo"])?$_POST["mandacorreo"]:"";
									


$pasarverID= isset($_POST["pasarverID"])?$_POST["pasarverID"]:"";
$pasarVER_text= isset($_POST["pasarVER_text"])?$_POST["pasarVER_text"]:"";

if($pasarverID!='' and ($pasarVER_text=='1' or $pasarVER_text=='2') ){


echo $conexion->PASAR_VER_ACTUALIZAR($pasarVER_text,$pasarverID);


}


$pasarD_text = isset($_POST['pasarD_text'])?$_POST['pasarD_text']:'';
if($pasarD_text =='si' or $pasarD_text =='no'){
$pasarDID = isset($_POST['pasarDID'])?$_POST['pasarDID']:'';
$conexion->datos_bancario_default($pasarDID,$pasarD_text);
}



elseif($validaDATOSBANCARIOS1 == 'validaDATOSBANCARIOS1' or $ENVIARRdatosbancario1p == 'ENVIARRdatosbancario1p'){
	
	if( $_FILES["FOTO_ESTADO_PROVEE"] == true){
$FOTO_ESTADO_PROVEE = $conexion->solocargar("FOTO_ESTADO_PROVEE");
}if($FOTO_ESTADO_PROVEE=='2' or $FOTO_ESTADO_PROVEE=='' or $FOTO_ESTADO_PROVEE=='1'){
	 $FOTO_ESTADO_PROVEE1 = '';
} 

$TIPO_DE_MONEDA_1 = isset($_POST["TIPO_DE_MONEDA_1"])?$_POST["TIPO_DE_MONEDA_1"]:"";
$INSTITUCION_FINANCIERA_1 = isset($_POST["INSTITUCION_FINANCIERA_1"])?$_POST["INSTITUCION_FINANCIERA_1"]:"";
$NUMERO_DE_CUENTA_DB_1 = isset($_POST["NUMERO_DE_CUENTA_DB_1"])?$_POST["NUMERO_DE_CUENTA_DB_1"]:"";
$NUMERO_CLABE_1 = isset($_POST["NUMERO_CLABE_1"])?$_POST["NUMERO_CLABE_1"]:"";
$NUMERO_DE_SUCURSAL_1 = isset($_POST["NUMERO_DE_SUCURSAL_1"])?$_POST["NUMERO_DE_SUCURSAL_1"]:"";
$NUMERO_IBAN_1 = isset($_POST["NUMERO_IBAN_1"])?$_POST["NUMERO_IBAN_1"]:"";
$NUMERO_CUENTA_SWIFT_1 = isset($_POST["NUMERO_CUENTA_SWIFT_1"])?$_POST["NUMERO_CUENTA_SWIFT_1"]:"";
$ULTIMA_CARGA_DATOBANCA = isset($_POST["ULTIMA_CARGA_DATOBANCA"])?$_POST["ULTIMA_CARGA_DATOBANCA"]:"";
$OBSERVACIONES_D = isset($_POST["OBSERVACIONES_D"])?$_POST["OBSERVACIONES_D"]:"";
$IPdatosbancario1p = isset($_POST["IPdatosbancario1p"])?$_POST["IPdatosbancario1p"]:"";


	echo $conexion->enviarDATOSBANCARIOS1($TIPO_DE_MONEDA_1 , $INSTITUCION_FINANCIERA_1 , $NUMERO_DE_CUENTA_DB_1 , $NUMERO_CLABE_1 ,$NUMERO_DE_SUCURSAL_1 , $NUMERO_IBAN_1 , $NUMERO_CUENTA_SWIFT_1, $FOTO_ESTADO_PROVEE,$ULTIMA_CARGA_DATOBANCA,$OBSERVACIONES_D,$ENVIARRdatosbancario1p,
	$IPdatosbancario1p );
	

}	

elseif($DAbancaPRO_ENVIAR_IMAIL ==true){
$conexion2 = new herramientas();
$NOMBRE_1 = 'Peticion';
$EMAILnombre = array($DAbancaPRO_ENVIAR_IMAIL=>$NOMBRE_1);
$adjuntos = array(''=>'');
$Subject = 'DATOS SOLICITADOS';
/*nuevo*/
$array = isset($_POST['datosbancPRO'])?$_POST['datosbancPRO']:'';
if($array != ''){
$loopcuenta = count($array) - 1;$loopcuenta2 = count($array) - 2;
$or1='';
for($rrr=0;$rrr<=$loopcuenta;$rrr++){
	if($rrr<=$loopcuenta2){$or1 = ' or ';}else{$or1 = '';}
	$query1 .= ' id= '.$array[$rrr].$or1;
}
$query2 = str_replace('[object Object]','',$query1);
$query2 = "and (".$query2.") ";
}else{
	echo "SELECCIONA UNA CASILLA DEL LISTADO DE ABAJO."; exit;
}                                                                   
/*nuevo variables_informacionfiscal_logo*/                           



$MANDA_INFORMACION = $conexion->MANDA_INFORMACION('TIPO_DE_MONEDA_1,INSTITUCION_FINANCIERA_1,NUMERO_DE_CUENTA_DB_1,NUMERO_CLABE_1,NUMERO_DE_SUCURSAL_1,NUMERO_IBAN_1,NUMERO_CUENTA_SWIFT_1,FOTO_ESTADO_PROVEE',

'TIPO DE MONEDA ,NOMBRE DE LA INSTITUCIÓN FINANCIERA,NUMERO DE CUENTA,CLABE,NÚMERO DE SUCURSAL,NUMERO IBAN,NUMERO DE CUENTA SWIFT,FOTO DE ESTADO DE CUENTA', '01DATOSBANCARIOS',  " where idRelacion = '".$_SESSION['id']."' 
".$query2/*nuevo*/ );

$variables = 'FOTO_ESTADO_PROVEE, ';
// trim($variables, ',');

 $cadenacompleta =substr($variables, 0, -2);  
 
$adjuntos = $conexion->ADJUNTA_IMAGENES_EMAIL($cadenacompleta,'01DATOSBANCARIOS', " where idRelacion = '".$_SESSION['id']."' ".$query2 );

$html = $conexion->html2(' DATOS BANCARIOS',$MANDA_INFORMACION );
//$logo = 'ADJUNTAR_LOGO_INFORMACION_2023_05_31_07_45_49.jpg';
$idlogo = $conexion->variable_comborelacion1a();
$logo = $conexion->variables_informacionfiscal_logo($idlogo);
$embebida = array('../includes/archivos/'.$logo => 'ver');;
echo $conexion2->email($EMAILnombre, $html, $adjuntos, $embebida, $Subject);
}

elseif($borra_datos_bancario1 == 'borra_datos_bancario1'){
	$borra_id_bancaP = isset($_POST["borra_id_bancaP"])?$_POST["borra_id_bancaP"]:"";   
		
	echo $conexion->borra_datos_bancario1($borra_id_bancaP);
   	//include_once (__ROOT1__."/includes/crea_funciones.php");
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif($VALIDADIRECCIONEP1 == 'VALIDADIRECCIONEP1'){
	
$NOMBRE_COMERCIAL_EMPRESA = isset($_POST["NOMBRE_COMERCIAL_EMPRESA"])?$_POST["NOMBRE_COMERCIAL_EMPRESA"]:"";
$NOMBRE_FISCAL_RS_EMPRESA = isset($_POST["NOMBRE_FISCAL_RS_EMPRESA"])?$_POST["NOMBRE_FISCAL_RS_EMPRESA"]:"";

$FISICA_MORAL = isset($_POST["FISICA_MORAL"])?$_POST["FISICA_MORAL"]:"";
$REGIMEN_FISCAL_MTDP = isset($_POST["REGIMEN_FISCAL_MTDP"])?$_POST["REGIMEN_FISCAL_MTDP"]:"";
$RFC_MTDP = isset($_POST["RFC_MTDP"])?$_POST["RFC_MTDP"]:"";
$METODO_DE_PAGO = isset($_POST["METODO_DE_PAGO"])?$_POST["METODO_DE_PAGO"]:"";
$FORMADE_PAGO = isset($_POST["FORMADE_PAGO"])?$_POST["FORMADE_PAGO"]:"";
$USO_CFDI = isset($_POST["USO_CFDI"])?$_POST["USO_CFDI"]:"";
$DIRECCION_FISCAL_EMPRESA = isset($_POST["DIRECCION_FISCAL_EMPRESA"])?$_POST["DIRECCION_FISCAL_EMPRESA"]:"";
$EDIFICIO_EMPRESA = isset($_POST["EDIFICIO_EMPRESA"])?$_POST["EDIFICIO_EMPRESA"]:"";
$CALLE_EMPRESA = isset($_POST["CALLE_EMPRESA"])?$_POST["CALLE_EMPRESA"]:"";
$NUMERO_EXTERIOR_EMPRESA = isset($_POST["NUMERO_EXTERIOR_EMPRESA"])?$_POST["NUMERO_EXTERIOR_EMPRESA"]:"";
$NUMERO_INTERIOR_EMPRESA = isset($_POST["NUMERO_INTERIOR_EMPRESA"])?$_POST["NUMERO_INTERIOR_EMPRESA"]:"";
$NUMERO_OFICINA_EMPRESA = isset($_POST["NUMERO_OFICINA_EMPRESA"])?$_POST["NUMERO_OFICINA_EMPRESA"]:"";
$COLONIA_EMPRESA = isset($_POST["COLONIA_EMPRESA"])?$_POST["COLONIA_EMPRESA"]:"";
$ALCALDIA_EMPRESA = isset($_POST["ALCALDIA_EMPRESA"])?$_POST["ALCALDIA_EMPRESA"]:"";
$C_EMPRESA = isset($_POST["C_EMPRESA"])?$_POST["C_EMPRESA"]:"";
$CIUDAD_EMPRESA = isset($_POST["CIUDAD_EMPRESA"])?$_POST["CIUDAD_EMPRESA"]:"";
$ESTADO_EMPRESA = isset($_POST["ESTADO_EMPRESA"])?$_POST["ESTADO_EMPRESA"]:"";
$PAIS_EMPRESA = isset($_POST["PAIS_EMPRESA"])?$_POST["PAIS_EMPRESA"]:"";

$UBICACION_MAPA_1 = isset($_POST["UBICACION_MAPA_1"])?$_POST["UBICACION_MAPA_1"]:"";
$TELEFONO_1_EMPRESA = isset($_POST["TELEFONO_1_EMPRESA"])?$_POST["TELEFONO_1_EMPRESA"]:"";
$TELEFONO_2_EMPRESA = isset($_POST["TELEFONO_2_EMPRESA"])?$_POST["TELEFONO_2_EMPRESA"]:"";
$WHATSAPEMPRESA_1 = isset($_POST["WHATSAPEMPRESA_1"])?$_POST["WHATSAPEMPRESA_1"]:"";
$IMAIL_EMPRESA = isset($_POST["IMAIL_EMPRESA"])?$_POST["IMAIL_EMPRESA"]:"";
$PAGINA_WEB_EMPRESA = isset($_POST["PAGINA_WEB_EMPRESA"])?$_POST["PAGINA_WEB_EMPRESA"]:"";
$NOMBRE_APEMPRESA = isset($_POST["NOMBRE_APEMPRESA"])?$_POST["NOMBRE_APEMPRESA"]:"";
	if( $RFC_MTDP =="" ){
	echo "<P style='color:red; font-size:18px;'>FAVOR DE LLENAR EL CAMPO RFC</p>";	
	}else{
 
	echo $conexion->DATOSFISCALES ($NOMBRE_COMERCIAL_EMPRESA , $NOMBRE_FISCAL_RS_EMPRESA ,$RFC_MTDP , $REGIMEN_FISCAL_MTDP , $METODO_DE_PAGO , $FORMADE_PAGO , $USO_CFDI ,$FISICA_MORAL,$DIRECCION_FISCAL_EMPRESA , $EDIFICIO_EMPRESA , $CALLE_EMPRESA , $NUMERO_EXTERIOR_EMPRESA , $NUMERO_INTERIOR_EMPRESA , $NUMERO_OFICINA_EMPRESA , $COLONIA_EMPRESA , $ALCALDIA_EMPRESA , $C_EMPRESA , $CIUDAD_EMPRESA , $ESTADO_EMPRESA , $PAIS_EMPRESA  , $UBICACION_MAPA_1 , $TELEFONO_1_EMPRESA , $TELEFONO_2_EMPRESA , $WHATSAPEMPRESA_1 , $IMAIL_EMPRESA , $PAGINA_WEB_EMPRESA , $NOMBRE_APEMPRESA );
}	
}	

/*PARA ENVIAR EMAIL*/
elseif($PDIRECCIONF_ENVIAR_IMAIL ==true){
$conexion2 = new herramientas();
$NOMBRE_1 = 'Peticion';
$EMAILnombre = array($PDIRECCIONF_ENVIAR_IMAIL=>$NOMBRE_1);
$adjuntos = array(''=>'');
$Subject = 'DATOS SOLICITADOS';

$MANDA_INFORMACION = $conexion->MANDA_INFORMACION(
'NOMBRE_COMERCIAL_EMPRESA,NOMBRE_FISCAL_RS_EMPRESA,FISICA_MORAL,REGIMEN_FISCAL_MTDP,RFC_MTDP,METODO_DE_PAGO,FORMADE_PAGO, USO_CFDI,EDIFICIO_EMPRESA,CALLE_EMPRESA,NUMERO_EXTERIOR_EMPRESA , NUMERO_INTERIOR_EMPRESA , 
NUMERO_OFICINA_EMPRESA,COLONIA_EMPRESA , ALCALDIA_EMPRESA , C_EMPRESA , 
CIUDAD_EMPRESA,ESTADO_EMPRESA , PAIS_EMPRESA , UBICACION_MAPA_1,TELEFONO_1_EMPRESA,TELEFONO_2_EMPRESA, WHATSAPEMPRESA_1 , IMAIL_EMPRESA , PAGINA_WEB_EMPRESA,NOMBRE_APEMPRESA',

 'NOMBRE COMERCIAL DE LA EMPRESA ,
NOMBRE FISCAL DE LA EMPRESA,
FISICA O MORAL,
RÉGIMEN FISCAL,
RFC,
METODO DE PAGO,
FORMA DE PAGO,
USO DE CFDI, 
EDIFICIO,
CALLE,
NÚMERO EXTERIOR,
NÚMERO INTERIOR,
NÚMERO DE OFICINA,
COLONIA,
ALCALDÍA,
C.P.,
CIUDAD,
ESTADO,
PAÍS,
UBICACIÓN EN EL MAPA,
TELÉFONO 1,
TELÉFONO 2,
WHATSAPP,
EMAIL,
PAGINA WEB,
NOMBRE DE LA APP,
OBSERVACIONES','01DATOSFISCALESC',  " where idRelacion = '".$_SESSION['id']."' 
".$query2/*nuevo*/ );


$html = $conexion->html2(' INFORMACIÓN DE PRODUCTOS O SERVICIOS',$MANDA_INFORMACION );
//$logo = 'ADJUNTAR_LOGO_INFORMACION_2023_05_31_07_45_49.jpg';
$idlogo = $conexion->variable_comborelacion1a();
$logo = $conexion->variables_informacionfiscal_logo($idlogo);
$embebida = array('../includes/archivos/'.$logo => 'ver');
echo $conexion2->email($EMAILnombre, $html, $adjuntos, $embebida, $Subject);
}

 	



///////////////////////////////////////nuevo modulo/////////////////////////////////////////////////
$hDATOSCOLABORADOR = isset($_POST["hDATOSCOLABORADOR"])?$_POST["hDATOSCOLABORADOR"]:"";
$enviarDATOSCOLABORADOR = isset($_POST["enviarDATOSCOLABORADOR"])?$_POST["enviarDATOSCOLABORADOR"]:"";
$IpDATOSCOLABORADOR = isset($_POST["IpDATOSCOLABORADOR"])?$_POST["IpDATOSCOLABORADOR"]:"";
$borra_DATOSCOLABORADOR = isset($_POST["borra_DATOSCOLABORADOR"])?$_POST["borra_DATOSCOLABORADOR"]:"";
$EMAIL_DATOSCOLABORADOR = isset($_POST["EMAIL_DATOSCOLABORADOR"])?$_POST["EMAIL_DATOSCOLABORADOR"]:"";
$hnuevodocu = isset($_POST["hnuevodocu"])?$_POST["hnuevodocu"]:"";	
$enviarNUEVO = isset($_POST["enviarNUEVO"])?$_POST["enviarNUEVO"]:"";	
$BORRAREGISTRO_NUEVO = isset($_POST["BORRAREGISTRO_NUEVO"])?$_POST["BORRAREGISTRO_NUEVO"]:"";


if($hnuevodocu == 'hnuevodocu' or $enviarNUEVO=='enviarNUEVO'){

	
$nuevo_documento = isset($_POST["nuevo_documento"])?$_POST["nuevo_documento"]:"";
$hnuevodocu = isset($_POST["hnuevodocu"])?$_POST["hnuevodocu"]:""; 	
$IPNUEVO = isset($_POST["IPNUEVO"])?$_POST["IPNUEVO"]:""; 	
   echo $conexion->NUEVODOCU ($nuevo_documento , $hnuevodocu,$enviarNUEVO,$IPNUEVO);
   


 }	 
   elseif($BORRAREGISTRO_NUEVO == 'BORRAREGISTRO_NUEVO'){
	$borra_NUEVOD = isset($_POST["borra_NUEVOD"])?$_POST["borra_NUEVOD"]:"";
		
	echo $conexion->BORRAREGISTRO_NUEVO($borra_NUEVOD);
	 
	
  //include_once (__ROOT1__."/includes/crea_funciones.php");  
} 















//////////////////////////////nuevo modulo///////////////////////////////////////////////////////////////

  if($hDATOSCOLABORADOR == 'hDATOSCOLABORADOR' or $enviarDATOSCOLABORADOR=='enviarDATOSCOLABORADOR'){
	  
	
	  	   	   if( $_FILES["ADJUNTO_DATOSCOLABORADOR"] == true){
$ADJUNTO_DATOSCOLABORADOR = $conexion->solocargar("ADJUNTO_DATOSCOLABORADOR");
}if($ADJUNTO_DATOSCOLABORADOR=='2' or $ADJUNTO_DATOSCOLABORADOR=='' or $ADJUNTO_DATOSCOLABORADOR=='1'){
 $ADJUNTO_DATOSCOLABORADOR1 = "";	
}else{
 $ADJUNTO_DATOSCOLABORADOR1 = $ADJUNTO_DATOSCOLABORADOR;
}
	  
$DOCUMENTO_DATOSCOLABORADOR = isset($_POST["DOCUMENTO_DATOSCOLABORADOR"])?$_POST["DOCUMENTO_DATOSCOLABORADOR"]:"";
$OBSERVACIONES_DATOSCOLABORADOR = isset($_POST["OBSERVACIONES_DATOSCOLABORADOR"])?$_POST["OBSERVACIONES_DATOSCOLABORADOR"]:"";
$FECHA_DATOSCOLABORADOR = isset($_POST["FECHA_DATOSCOLABORADOR"])?$_POST["FECHA_DATOSCOLABORADOR"]:"";
$hDATOSCOLABORADOR = isset($_POST["hDATOSCOLABORADOR"])?$_POST["hDATOSCOLABORADOR"]:""; 


	  
	echo $conexion->DATOSCOLABORADOR( $DOCUMENTO_DATOSCOLABORADOR ,$ADJUNTO_DATOSCOLABORADOR, $OBSERVACIONES_DATOSCOLABORADOR , $FECHA_DATOSCOLABORADOR , $hDATOSCOLABORADOR,$IpDATOSCOLABORADOR,$enviarDATOSCOLABORADOR );

   
  
 }
elseif($EMAIL_DATOSCOLABORADOR ==true){
$conexion2 = new herramientas();
$NOMBRE_1 = 'Peticion';
$EMAILnombre = array($EMAIL_DATOSCOLABORADOR=>$NOMBRE_1);
$adjuntos = array(''=>'');
$Subject = 'DATOS SOLICITADOS';
/*nuevo*/
$array = isset($_POST['DATOSCOLABORADORe'])?$_POST['DATOSCOLABORADORe']:'';
if($array != ''){
$loopcuenta = count($array) - 1;$loopcuenta2 = count($array) - 2;
$or1='';
for($rrr=0;$rrr<=$loopcuenta;$rrr++){
	if($rrr<=$loopcuenta2){$or1 = ' or ';}else{$or1 = '';}
	$query1 .= ' id= '.$array[$rrr].$or1;
}
$query2 = str_replace('[object Object]','',$query1);
$query2 = "and (".$query2.") ";
}else{
	echo "SELECCIONA UNA CASILLA DEL LISTADO DE ABAJO."; exit;
} 
                                                                  
$MANDA_INFORMACION = $conexion->MANDA_INFORMACION('DOCUMENTO_DATOSCOLABORADOR, OBSERVACIONES_DATOSCOLABORADOR, FECHA_DATOSCOLABORADOR ',

'NOMBRE ,OBSERVACIONES,FECHA', '01DATOScolaborador',  " where idRelacion = '".$_SESSION['id'] ."' ".$query2/*nuevo*/ );

$variables = 'ADJUNTO_DATOSCOLABORADOR, ';
//DOCUMENTO_DATOSCOLABORADOR trim($variables, ',');

 $cadenacompleta =substr($variables, 0, -2);
 
$adjuntos = $conexion->ADJUNTA_IMAGENES_EMAIL($cadenacompleta,'01DATOScolaborador', " where idRelacion = '".$_SESSION['id'] ."' ".$query2 );

$html = $conexion->html2('FOTOS conexion',$MANDA_INFORMACION );
$logo = 'ADJUNTAR_LOGO_INFORMACION_2023_05_31_07_45_49.jpg';
//$idlogo = $conexion->variable_comborelacion1a();
//$logo = $conexion->variables_informacionfiscal_logo($idlogo);


$embebida = array('../includes/archivos/'.$logo => 'ver');
echo $conexion2->email($EMAILnombre, $html, $adjuntos, $embebida, $Subject,$smtp);
}  
	  
 if($borra_DATOSCOLABORADOR == 'borra_DATOSCOLABORADOR' ){

$borra_colaborador = isset($_POST["borra_colaborador"])?$_POST["borra_colaborador"]:"";
	echo $conexion->borra_DATOSCOLABORADOR( $borra_colaborador );
}	  
	//include_once (__ROOT1__."/includes/crea_funciones.php"); 












if($DATOS_COLABORADORES =='DATOS_COLABORADORES'){
	
$url = isset($_POST["url"])?$_POST["url"]:"";
$ESTATUS_CRM_ACTIVOBAJA = isset($_POST["ESTATUS_CRM_ACTIVOBAJA"])?$_POST["ESTATUS_CRM_ACTIVOBAJA"]:"";
$STATUS_CARGA_INFORMACION = isset($_POST["STATUS_CARGA_INFORMACION"])?$_POST["STATUS_CARGA_INFORMACION"]:"";

{
	echo $conexion->guardar_COORDINADOR2(  $url , $ESTATUS_CRM_ACTIVOBAJA , $STATUS_CARGA_INFORMACION , $DATOS_COLABORADORES);
	}
	
//include_once (__ROOT1__."/includes/crea_funciones.php");
}
elseif($DATOS_COLABORADORES1 == 'DATOS_COLABORADORES1'){
	echo "Ingresado";
}
elseif($DATOS_coordina == 'DATOS_coordina'){
	echo "Ingresado";
}
elseif($listado == 'listado' or $listado == 'listado2' ){
	
$USUARIO_CRM = isset($_POST["USUARIO_CRM"])?$_POST["USUARIO_CRM"]:"";
$CONTRASENIA_CRM = isset($_POST["CONTRASENIA_CRM"])?$_POST["CONTRASENIA_CRM"]:"";
$NIVEL_ACCESO_CRM = isset($_POST["NIVEL_ACCESO_CRM"])?$_POST["NIVEL_ACCESO_CRM"]:"";
$PUESTO = isset($_POST["PUESTO"])?$_POST["PUESTO"]:"";
$DEPARTAMENTO = isset($_POST["DEPARTAMENTO"])?$_POST["DEPARTAMENTO"]:"";
$CORREO_1 = isset($_POST["CORREO_1"])?$_POST["CORREO_1"]:"";
$CORREO_4 = isset($_POST["CORREO_4"])?$_POST["CORREO_4"]:"";
$NOMBRE_1 = isset($_POST["NOMBRE_1"])?$_POST["NOMBRE_1"]:"";
$NOMBRE_2 = isset($_POST["NOMBRE_2"])?$_POST["NOMBRE_2"]:"";
$APELLIDO_PATERNO = isset($_POST["APELLIDO_PATERNO"])?$_POST["APELLIDO_PATERNO"]:"";
$APELLIDO_MATERNO = isset($_POST["APELLIDO_MATERNO"])?$_POST["APELLIDO_MATERNO"]:"";
$listado = isset($_POST["listado"])?$_POST["listado"]:"";
$STATUS_CARGA_INFORMACION = isset($_POST["STATUS_CARGA_INFORMACION"])?$_POST["STATUS_CARGA_INFORMACION"]:"";
$PERMISOS = isset($_POST["PERMISOS"])?$_POST["PERMISOS"]:"";
$idrow = isset($_POST["idrow"])?$_POST["idrow"]:"";
$id_empresa = isset($_POST["id_empresa"])?$_POST["id_empresa"]:"";
$mandacorreo = isset($_POST["mandacorreo"])?$_POST["mandacorreo"]:"";

 
if($USUARIO_CRM =="" or $CONTRASENIA_CRM ==""  or $NOMBRE_1 =="" or $STATUS_CARGA_INFORMACION ==""){
	echo "<strong><P style='color:green; font-size:25px;'>FAVOR DE LLENAR TODOS LOS CAMPOS EN ROJO</P></strong>";
}else{



echo $conexion->guardar_listado($USUARIO_CRM , $CONTRASENIA_CRM , $NIVEL_ACCESO_CRM , $PUESTO , $DEPARTAMENTO , $CORREO_1 ,$CORREO_4, $NOMBRE_1 ,$NOMBRE_2, $APELLIDO_PATERNO , $APELLIDO_MATERNO , $listado , $STATUS_CARGA_INFORMACION, $PERMISOS,$id_empresa, $idrow,$mandacorreo );
	//echo "paso";
}

}
elseif($borraCOLABORADOR == 'borraCOLABORADOR'){
	$borra_id = isset($_POST["borra_id"])?$_POST["borra_id"]:"";   
		
	echo  $conexion->borraCOLABORADOR($borra_id);
 
}
elseif($empresa == 'empresa'){
	
$FECHA_INGRESO = isset($_POST["FECHA_INGRESO"])?$_POST["FECHA_INGRESO"]:"";
$NUMERO_COLABORADOR = isset($_POST["NUMERO_COLABORADOR"])?$_POST["NUMERO_COLABORADOR"]:"";
$NUMERO_REGISTRO_BIOMETRICO = isset($_POST["NUMERO_REGISTRO_BIOMETRICO"])?$_POST["NUMERO_REGISTRO_BIOMETRICO"]:"";
$CONTRASENIA_REGISTRO_BIOMETRICO = isset($_POST["CONTRASENIA_REGISTRO_BIOMETRICO"])?$_POST["CONTRASENIA_REGISTRO_BIOMETRICO"]:"";
$USUARIO_CRM = isset($_POST["USUARIO_CRM"])?$_POST["USUARIO_CRM"]:"";
$CONTRASENIA_CRM = isset($_POST["CONTRASENIA_CRM"])?$_POST["CONTRASENIA_CRM"]:"";
$NIVEL_ACCESO_CRM = isset($_POST["NIVEL_ACCESO_CRM"])?$_POST["NIVEL_ACCESO_CRM"]:"";
$PUESTO = isset($_POST["PUESTO"])?$_POST["PUESTO"]:"";
$DEPARTAMENTO = isset($_POST["DEPARTAMENTO"])?$_POST["DEPARTAMENTO"]:"";
$NUMERO_TARJETA_CREDITO = isset($_POST["NUMERO_TARJETA_CREDITO"])?$_POST["NUMERO_TARJETA_CREDITO"]:"";
$CORREO_1 = isset($_POST["CORREO_1"])?$_POST["CORREO_1"]:"";
$CORREO_2 = isset($_POST["CORREO_2"])?$_POST["CORREO_2"]:"";
$CORREO_3 = isset($_POST["CORREO_3"])?$_POST["CORREO_3"]:"";
$CORREO_4 = isset($_POST["CORREO_4"])?$_POST["CORREO_4"]:"";
$FECHA_SALIDA_EMPRESA = isset($_POST["FECHA_SALIDA_EMPRESA"])?$_POST["FECHA_SALIDA_EMPRESA"]:"";
$MOTIVO_SALIDA_EMPRESA = isset($_POST["MOTIVO_SALIDA_EMPRESA"])?$_POST["MOTIVO_SALIDA_EMPRESA"]:"";


$FECHA_INGRESO_IMSS = isset($_POST["FECHA_INGRESO_IMSS"])?$_POST["FECHA_INGRESO_IMSS"]:"";
$JEFE_DIRECTO_1 = isset($_POST["JEFE_DIRECTO_1"])?$_POST["JEFE_DIRECTO_1"]:"";
$JEFE_DIRECTO_2 = isset($_POST["JEFE_DIRECTO_2"])?$_POST["JEFE_DIRECTO_2"]:"";
$JEFE_DIRECTO_3 = isset($_POST["JEFE_DIRECTO_3"])?$_POST["JEFE_DIRECTO_3"]:"";
$AUTORIZA_1 = isset($_POST["AUTORIZA_1"])?$_POST["AUTORIZA_1"]:"";
$PERMISOS = isset($_POST["PERMISOS"])?$_POST["PERMISOS"]:"";
/*
if($FECHA_INGRESO  =='' OR  $NUMERO_COLABORADOR  =='' OR  $NUMERO_REGISTRO_BIOMETRICO  =='' OR  $CONTRASENIA_REGISTRO_BIOMETRICO  =='' OR  $USUARIO_CRM  =='' OR  $CONTRASENIA_CRM  =='' OR  $NIVEL_ACCESO_CRM  =='' OR  $PUESTO  =='' OR  $DEPARTAMENTO  =='' OR  $NUMERO_TARJETA_CREDITO  =='' OR  $CORREO_1  =='' OR  $CORREO_2  =='' OR  $CORREO_3  =='' OR  $FECHA_SALIDA_EMPRESA  =='' OR  $MOTIVO_SALIDA_EMPRESA  =='' OR  $empresa =='' ){
	echo "<P style='color:red; font-size:18px;'>FAVOR DE LLENAR TODOS LOS CAMPOS EN ROJO</p>";
}else{*/

/*FECHA_INGRESO_IMSS 
JEFE_DIRECTO_1
JEFE_DIRECTO_2
JEFE_DIRECTO_3*/
//include_once (__ROOT1__."/includes/crea_funciones.php");
echo $conexion->guardar_empresa( $FECHA_INGRESO , $NUMERO_COLABORADOR , $NUMERO_REGISTRO_BIOMETRICO , $CONTRASENIA_REGISTRO_BIOMETRICO , $USUARIO_CRM , $CONTRASENIA_CRM , $NIVEL_ACCESO_CRM , $PUESTO , $DEPARTAMENTO , $NUMERO_TARJETA_CREDITO , $CORREO_1 , $CORREO_2 , $CORREO_3 ,$CORREO_4, $FECHA_SALIDA_EMPRESA , $MOTIVO_SALIDA_EMPRESA, $FECHA_INGRESO_IMSS, $JEFE_DIRECTO_1, $JEFE_DIRECTO_2, $JEFE_DIRECTO_3, $PERMISOS );
/* $FECHA_INGRESO , $NUMERO_COLABORADOR , $NUMERO_REGISTRO_BIOMETRICO , $CONTRASENIA_REGISTRO_BIOMETRICO , $USUARIO_CRM , $CONTRASENIA_CRM , $NIVEL_ACCESO_CRM , $PUESTO , $DEPARTAMENTO , $NUMERO_TARJETA_CREDITO , $CORREO_1 , $CORREO_2 , $CORREO_3 , $FECHA_SALIDA_EMPRESA , $MOTIVO_SALIDA_EMPRESA, $FECHA_INGRESO_IMSS, $JEFE_DIRECTO_1, $JEFE_DIRECTO_2, $JEFE_DIRECTO_3,$PERMISOS*/	
//}

}
elseif($ipersonal1 == 'ipersonal1'){

$NOMBRE_1 = isset($_POST["NOMBRE_1"])?$_POST["NOMBRE_1"]:"";
$NOMBRE_2 = isset($_POST["NOMBRE_2"])?$_POST["NOMBRE_2"]:"";
$NOMBRE_3 = isset($_POST["NOMBRE_3"])?$_POST["NOMBRE_3"]:"";
$APELLIDO_MATERNO = isset($_POST["APELLIDO_MATERNO"])?$_POST["APELLIDO_MATERNO"]:"";
$APELLIDO_PATERNO = isset($_POST["APELLIDO_PATERNO"])?$_POST["APELLIDO_PATERNO"]:"";

$CORREO_1 = isset($_POST["CORREO_1"])?$_POST["CORREO_1"]:"";
$IPCORREO2 = isset($_POST["IPCORREO2"])?$_POST["IPCORREO2"]:"";

$FECHA_DE_NACIMIENTO = isset($_POST["FECHA_DE_NACIMIENTO"])?$_POST["FECHA_DE_NACIMIENTO"]:"";
$ANIOS = isset($_POST["ANIOS"])?$_POST["ANIOS"]:"";
$LUGAR_DE_NACIMIENTO_ESTADO_PROVINCIA = isset($_POST["LUGAR_DE_NACIMIENTO_ESTADO_PROVINCIA"])?$_POST["LUGAR_DE_NACIMIENTO_ESTADO_PROVINCIA"]:"";
$PAIS_DE_NACIMIENTO = isset($_POST["PAIS_DE_NACIMIENTO"])?$_POST["PAIS_DE_NACIMIENTO"]:"";
$ESTADO_CIVIL = isset($_POST["ESTADO_CIVIL"])?$_POST["ESTADO_CIVIL"]:"";
$NUMERO_DE_FAMILIARES_PADRES_HERMANOS = isset($_POST["NUMERO_DE_FAMILIARES_PADRES_HERMANOS"])?$_POST["NUMERO_DE_FAMILIARES_PADRES_HERMANOS"]:"";
$NUMERO_DE_FAMILIARES_ESPOSA_HIJOS = isset($_POST["NUMERO_DE_FAMILIARES_ESPOSA_HIJOS"])?$_POST["NUMERO_DE_FAMILIARES_ESPOSA_HIJOS"]:"";
$CELULAR_1 = isset($_POST["CELULAR_1"])?$_POST["CELULAR_1"]:"";
$CELULAR_2 = isset($_POST["CELULAR_2"])?$_POST["CELULAR_2"]:"";
$TELEFONO_DE_CASA_1 = isset($_POST["TELEFONO_DE_CASA_1"])?$_POST["TELEFONO_DE_CASA_1"]:"";
$TELEFONO_DE_CASA_2 = isset($_POST["TELEFONO_DE_CASA_2"])?$_POST["TELEFONO_DE_CASA_2"]:"";
$PORCENTAJE_DE_INGLES_HABLADO = isset($_POST["PORCENTAJE_DE_INGLES_HABLADO"])?$_POST["PORCENTAJE_DE_INGLES_HABLADO"]:"";
$PORCENTAJE_DE_INGLES_ESCRITO = isset($_POST["PORCENTAJE_DE_INGLES_ESCRITO"])?$_POST["PORCENTAJE_DE_INGLES_ESCRITO"]:"";
$DOMINIO_DE_OTRO_IDIOMA_Y_PORCENTAJE = isset($_POST["DOMINIO_DE_OTRO_IDIOMA_Y_PORCENTAJE"])?$_POST["DOMINIO_DE_OTRO_IDIOMA_Y_PORCENTAJE"]:"";
$BENEFICIARIO_Y_PORCENTAJE_1_PARA_SEGURO = isset($_POST["BENEFICIARIO_Y_PORCENTAJE_1_PARA_SEGURO"])?$_POST["BENEFICIARIO_Y_PORCENTAJE_1_PARA_SEGURO"]:"";
$BENEFICIARIO_Y_PORCENTAJE_2_PARA_SEGURO = isset($_POST["BENEFICIARIO_Y_PORCENTAJE_2_PARA_SEGURO"])?$_POST["BENEFICIARIO_Y_PORCENTAJE_2_PARA_SEGURO"]:"";
$BENEFICIARIO_YPORCENTAJE_3_PARA_SEGURO = isset($_POST["BENEFICIARIO_YPORCENTAJE_3_PARA_SEGURO"])?$_POST["BENEFICIARIO_YPORCENTAJE_3_PARA_SEGURO"]:"";
$TELEGRAM = isset($_POST["TELEGRAM"])?$_POST["TELEGRAM"]:"";
$TIPO_DE_SANGRE = isset($_POST["TIPO_DE_SANGRE"])?$_POST["TIPO_DE_SANGRE"]:"";
$AUTO = isset($_POST["AUTO"])?$_POST["AUTO"]:"";
$MARCA_DEL_AUTO = isset($_POST["MARCA_DEL_AUTO"])?$_POST["MARCA_DEL_AUTO"]:"";
$SUB_MARCA = isset($_POST["SUB_MARCA"])?$_POST["SUB_MARCA"]:"";
$MODELO = isset($_POST["MODELO"])?$_POST["MODELO"]:"";
$COLOR = isset($_POST["COLOR"])?$_POST["COLOR"]:"";
$PLACAS = isset($_POST["PLACAS"])?$_POST["PLACAS"]:""; 
$CORREO_1 = isset($_POST["CORREO_1"])?$_POST["CORREO_1"]:"";
$IPCORREO2 = isset($_POST["IPCORREO2"])?$_POST["IPCORREO2"]:"";

//include_once (__ROOT1__."/includes/crea_funciones.php");
//print_r($_POST);


/*if($NOMBRE_1 == "" or $APELLIDO_MATERNO == "" or  $APELLIDO_PATERNO == "" or  $FECHA_DE_NACIMIENTO == "" or  $ANIOS == "" or  $LUGAR_DE_NACIMIENTO_ESTADO_PROVINCIA == "" or  $PAIS_DE_NACIMIENTO == "" or  $ESTADO_CIVIL == "" or  $NUMERO_DE_FAMILIARES_PADRES_HERMANOS == "" or  $NUMERO_DE_FAMILIARES_ESPOSA_HIJOS == "" or  $CELULAR_1 == "" or  $TELEFONO_DE_CASA_1 == "" or $PORCENTAJE_DE_INGLES_HABLADO == "" or  $PORCENTAJE_DE_INGLES_ESCRITO == "" or  $BENEFICIARIO_Y_PORCENTAJE_1_PARA_SEGURO == "" or $TELEGRAM == "" or  $TIPO_DE_SANGRE == "" or  $AUTO ==  "" or  $ipersonal1 == ""){
	echo "<P id='ERROR'>FAVOR DE LLENAR TODOS LOS CAMPOS EN ROJO</p>";
}else{*/
	echo $conexion->guardar_IPERSONAL( $NOMBRE_1 , $NOMBRE_2 , $NOMBRE_3 , $APELLIDO_MATERNO , $APELLIDO_PATERNO ,  $CORREO_1, $IPCORREO2, $FECHA_DE_NACIMIENTO , $ANIOS , $LUGAR_DE_NACIMIENTO_ESTADO_PROVINCIA , $PAIS_DE_NACIMIENTO , $ESTADO_CIVIL , $NUMERO_DE_FAMILIARES_PADRES_HERMANOS , $NUMERO_DE_FAMILIARES_ESPOSA_HIJOS , $CELULAR_1 , $CELULAR_2 , $TELEFONO_DE_CASA_1 , $TELEFONO_DE_CASA_2 , $PORCENTAJE_DE_INGLES_HABLADO , $PORCENTAJE_DE_INGLES_ESCRITO , $DOMINIO_DE_OTRO_IDIOMA_Y_PORCENTAJE , $BENEFICIARIO_Y_PORCENTAJE_1_PARA_SEGURO , $BENEFICIARIO_Y_PORCENTAJE_2_PARA_SEGURO , $BENEFICIARIO_YPORCENTAJE_3_PARA_SEGURO , $TELEGRAM , $TIPO_DE_SANGRE , $AUTO , $MARCA_DEL_AUTO , $SUB_MARCA , $MODELO , $ipersonal1 , $COLOR , $PLACAS);
//}	
	
	
}
elseif($ipersonalcoordina == 'ipersonalcoordina'){
	//IPCORREO2,CELULAR_2,BENEFICIARIO_Y_PORCENTAJE_2_PARA_SEGURO,BENEFICIARIO_YPORCENTAJE_3_PARA_SEGURO
$ipersonalcoordina = isset($_POST["ipersonalcoordina"])?$_POST["ipersonalcoordina"]:"";
$NOMBRE_1 = isset($_POST["NOMBRE_1"])?$_POST["NOMBRE_1"]:"";
$NOMBRE_2 = isset($_POST["NOMBRE_2"])?$_POST["NOMBRE_2"]:"";
$NOMBRE_3 = isset($_POST["NOMBRE_3"])?$_POST["NOMBRE_3"]:"";
$APELLIDO_PATERNO = isset($_POST["APELLIDO_PATERNO"])?$_POST["APELLIDO_PATERNO"]:"";
$APELLIDO_MATERNO = isset($_POST["APELLIDO_MATERNO"])?$_POST["APELLIDO_MATERNO"]:"";
$CORREO_1 = isset($_POST["CORREO_1"])?$_POST["CORREO_1"]:"";
$IPCORREO2 = isset($_POST["IPCORREO2"])?$_POST["IPCORREO2"]:"";
$FECHA_DE_NACIMIENTO = isset($_POST["FECHA_DE_NACIMIENTO"])?$_POST["FECHA_DE_NACIMIENTO"]:"";
$ANIOS = isset($_POST["ANIOS"])?$_POST["ANIOS"]:"";
$CELULAR_1 = isset($_POST["CELULAR_1"])?$_POST["CELULAR_1"]:"";
$CELULAR_2 = isset($_POST["CELULAR_2"])?$_POST["CELULAR_2"]:"";
$TELEFONO_DE_CASA_1 = isset($_POST["TELEFONO_DE_CASA_1"])?$_POST["TELEFONO_DE_CASA_1"]:"";
$TELEFONO_DE_CASA_2 = isset($_POST["TELEFONO_DE_CASA_2"])?$_POST["TELEFONO_DE_CASA_2"]:"";
$PORCENTAJE_DE_INGLES_HABLADO = isset($_POST["PORCENTAJE_DE_INGLES_HABLADO"])?$_POST["PORCENTAJE_DE_INGLES_HABLADO"]:"";
$PORCENTAJE_DE_INGLES_ESCRITO = isset($_POST["PORCENTAJE_DE_INGLES_ESCRITO"])?$_POST["PORCENTAJE_DE_INGLES_ESCRITO"]:"";
$DOMINIO_DE_OTRO_IDIOMA_Y_PORCENTAJE = isset($_POST["DOMINIO_DE_OTRO_IDIOMA_Y_PORCENTAJE"])?$_POST["DOMINIO_DE_OTRO_IDIOMA_Y_PORCENTAJE"]:""; 

	/*if($ipersonalcoordina =="" or $NOMBRE_1 =="" or $APELLIDO_PATERNO =="" or $APELLIDO_MATERNO =="" or $CORREO_1 =="" or $FECHA_DE_NACIMIENTO =="" or $ANIOS =="" or $CELULAR_1 =="" or $TELEFONO_DE_CASA_1 =="" or $PORCENTAJE_DE_INGLES_HABLADO =="" or $PORCENTAJE_DE_INGLES_ESCRITO =="" or $DOMINIO_DE_OTRO_IDIOMA_Y_PORCENTAJE ==""){
	echo "<P id='ERROR'>FAVOR DE LLENAR TODOS LOS CAMPOS EN ROJO</p>";
}else{*/
	echo $conexion->guardar_IPERSONALcoordina($ipersonalcoordina , $NOMBRE_1 , $NOMBRE_2 , $NOMBRE_3 , $APELLIDO_PATERNO , $APELLIDO_MATERNO , $CORREO_1 , $IPCORREO2 , $FECHA_DE_NACIMIENTO , $ANIOS , $CELULAR_1 , $CELULAR_2 , $TELEFONO_DE_CASA_1 , $TELEFONO_DE_CASA_2 , $PORCENTAJE_DE_INGLES_HABLADO , $PORCENTAJE_DE_INGLES_ESCRITO , $DOMINIO_DE_OTRO_IDIOMA_Y_PORCENTAJE );
//}
//include_once (__ROOT1__."/includes/crea_funciones.php");
}
elseif($dircasa11 == 'dircasa11'){

$EDIFICIO = isset($_POST["EDIFICIO"])?$_POST["EDIFICIO"]:"";
$calledir1 = isset($_POST["calledir1"])?$_POST["calledir1"]:"";
$NUMERO_EXTERIOR = isset($_POST["NUMERO_EXTERIOR"])?$_POST["NUMERO_EXTERIOR"]:"";
$NUMERO_INTERIOR = isset($_POST["NUMERO_INTERIOR"])?$_POST["NUMERO_INTERIOR"]:"";
$NUMERO_INTERIOR_2 = isset($_POST["NUMERO_INTERIOR_2"])?$_POST["NUMERO_INTERIOR_2"]:"";
$COLONIA = isset($_POST["COLONIA"])?$_POST["COLONIA"]:"";
$ALCALDIA = isset($_POST["ALCALDIA"])?$_POST["ALCALDIA"]:"";
$C_P = isset($_POST["C_P"])?$_POST["C_P"]:"";
$CIUDAD = isset($_POST["CIUDAD"])?$_POST["CIUDAD"]:"";
$ESTADO = isset($_POST["ESTADO"])?$_POST["ESTADO"]:"";
$PAIS = isset($_POST["PAIS"])?$_POST["PAIS"]:"";
$dircasa11 = isset($_POST["dircasa11"])?$_POST["dircasa11"]:"";
$DIRECCION_DE_CASA_1_UBICACION_MAPA = isset($_POST["DIRECCION_DE_CASA_1_UBICACION_MAPA"])?$_POST["DIRECCION_DE_CASA_1_UBICACION_MAPA"]:"";

$AUTORIZA_1= isset($_POST["AUTORIZA_1"])?$_POST["AUTORIZA_1"]:"";


/*if($EDIFICIO =="" or $NUMERO_EXTERIOR =="" or $COLONIA =="" or $ALCALDIA =="" or $C_P =="" or $CIUDAD =="" or $ESTADO =="" or $PAIS =="" or $dircasa11 =="" or $DIRECCION_DE_CASA_1_UBICACION_MAPA ==""){
	echo "<P id='ERROR'>FAVOR DE LLENAR TODOS LOS CAMPOS EN ROJO</p>";
}else{*/
	echo $conexion->guardar_dircasa1 ($AUTORIZA_1,$EDIFICIO , $calledir1, $NUMERO_EXTERIOR , $NUMERO_INTERIOR , $NUMERO_INTERIOR_2 , $COLONIA , $ALCALDIA , $C_P , $CIUDAD , $ESTADO , $PAIS , $dircasa11 , $DIRECCION_DE_CASA_1_UBICACION_MAPA );	
//}
//include_once (__ROOT1__."/includes/crea_funciones.php");
	
}
elseif($dircasa22 =='dircasa22'){
	
$DIRECCION_CASA_2_EDIFICIO = isset($_POST["DIRECCION_CASA_2_EDIFICIO"])?$_POST["DIRECCION_CASA_2_EDIFICIO"]:"";
$calledir2 = isset($_POST["calledir2"])?$_POST["calledir2"]:"";
$DIRECCION_CASA_2_NUMERO_EXTERIOR = isset($_POST["DIRECCION_CASA_2_NUMERO_EXTERIOR"])?$_POST["DIRECCION_CASA_2_NUMERO_EXTERIOR"]:"";
$DIRECCION_CASA_2_INTERIOR = isset($_POST["DIRECCION_CASA_2_INTERIOR"])?$_POST["DIRECCION_CASA_2_INTERIOR"]:"";
$DIRECCION_CASA_INTERIOR_2 = isset($_POST["DIRECCION_CASA_INTERIOR_2"])?$_POST["DIRECCION_CASA_INTERIOR_2"]:"";
$DIRECCION_CASA_2_COLONIA = isset($_POST["DIRECCION_CASA_2_COLONIA"])?$_POST["DIRECCION_CASA_2_COLONIA"]:"";
$DIRECCION_CASA_2_ALCALDIA = isset($_POST["DIRECCION_CASA_2_ALCALDIA"])?$_POST["DIRECCION_CASA_2_ALCALDIA"]:"";
$DIRECCION_CASA_2_C_P = isset($_POST["DIRECCION_CASA_2_C_P"])?$_POST["DIRECCION_CASA_2_C_P"]:"";
$DIRECCION_CASA_2_CIUDAD = isset($_POST["DIRECCION_CASA_2_CIUDAD"])?$_POST["DIRECCION_CASA_2_CIUDAD"]:"";
$DIRECCION_CASA_2_ESTADO = isset($_POST["DIRECCION_CASA_2_ESTADO"])?$_POST["DIRECCION_CASA_2_ESTADO"]:"";
$DIRECCION_CASA_2_PAIS = isset($_POST["DIRECCION_CASA_2_PAIS"])?$_POST["DIRECCION_CASA_2_PAIS"]:"";
$dircasa22 = isset($_POST["dircasa22"])?$_POST["dircasa22"]:"";
$DIRECCION_DE_CASA_2__UBICACION_EN_EL_MAPA = isset($_POST["DIRECCION_DE_CASA_2__UBICACION_EN_EL_MAPA"])?$_POST["DIRECCION_DE_CASA_2__UBICACION_EN_EL_MAPA"]:"";
$AUTORIZA_2= isset($_POST["AUTORIZA_2"])?$_POST["AUTORIZA_2"]:"";



/*if($calledir2 =="" or  $DIRECCION_CASA_2_EDIFICIO =="" or $DIRECCION_CASA_2_NUMERO_EXTERIOR =="" or  $DIRECCION_CASA_2_COLONIA =="" or $DIRECCION_CASA_2_ALCALDIA =="" or $DIRECCION_CASA_2_C_P =="" or $DIRECCION_CASA_2_CIUDAD =="" or $DIRECCION_CASA_2_ESTADO =="" or $DIRECCION_CASA_2_PAIS =="" or $dircasa22 =="" or $DIRECCION_DE_CASA_2__UBICACION_EN_EL_MAPA ==""  ){
	echo "<P id='ERROR'>FAVOR DE LLENAR TODOS LOS CAMPOS EN ROJO</p>";
}else{*/

	echo $conexion->guardar_dircasa2( $AUTORIZA_2, $DIRECCION_CASA_2_EDIFICIO , $calledir2, $DIRECCION_CASA_2_NUMERO_EXTERIOR , $DIRECCION_CASA_2_INTERIOR , $DIRECCION_CASA_INTERIOR_2 , $DIRECCION_CASA_2_COLONIA , $DIRECCION_CASA_2_ALCALDIA , $DIRECCION_CASA_2_C_P , $DIRECCION_CASA_2_CIUDAD , $DIRECCION_CASA_2_ESTADO , $DIRECCION_CASA_2_PAIS , $dircasa22 , $DIRECCION_DE_CASA_2__UBICACION_EN_EL_MAPA );	
//}
	//include_once (__ROOT1__."/includes/crea_funciones.php");
}
elseif($F1CERCANO1 =='F1CERCANO1'){
	
	
$FAMILIAR_1_PARENTESCO = isset($_POST["FAMILIAR_1_PARENTESCO"])?$_POST["FAMILIAR_1_PARENTESCO"]:"";
$FAMILIAR_1_NOMBRE_1 = isset($_POST["FAMILIAR_1_NOMBRE_1"])?$_POST["FAMILIAR_1_NOMBRE_1"]:"";
$FAMILIAR_1_NOMBRE_2 = isset($_POST["FAMILIAR_1_NOMBRE_2"])?$_POST["FAMILIAR_1_NOMBRE_2"]:"";
$FAMILIAR_1_APELLIDO_MATERNO = isset($_POST["FAMILIAR_1_APELLIDO_MATERNO"])?$_POST["FAMILIAR_1_APELLIDO_MATERNO"]:"";
$FAMILIAR_1_APELLIDO_PATERNO = isset($_POST["FAMILIAR_1_APELLIDO_PATERNO"])?$_POST["FAMILIAR_1_APELLIDO_PATERNO"]:"";
$FAMILIAR_1_CELULAR_1 = isset($_POST["FAMILIAR_1_CELULAR_1"])?$_POST["FAMILIAR_1_CELULAR_1"]:"";
$FAMILIAR_1_CELULAR_2 = isset($_POST["FAMILIAR_1_CELULAR_2"])?$_POST["FAMILIAR_1_CELULAR_2"]:"";
$FAMILIAR_1_TELEFONO_DE_CASA_I = isset($_POST["FAMILIAR_1_TELEFONO_DE_CASA_I"])?$_POST["FAMILIAR_1_TELEFONO_DE_CASA_I"]:"";
$FAMILIAR_1_CORREO_ELECTRONICO = isset($_POST["FAMILIAR_1_CORREO_ELECTRONICO"])?$_POST["FAMILIAR_1_CORREO_ELECTRONICO"]:"";
$FAMILIAR_1_EDIFICIO = isset($_POST["FAMILIAR_1_EDIFICIO"])?$_POST["FAMILIAR_1_EDIFICIO"]:"";
$FAMILIAR_1_NUMERO_CALLE = isset($_POST["FAMILIAR_1_NUMERO_CALLE"])?$_POST["FAMILIAR_1_NUMERO_CALLE"]:"";
$FAMILIAR_1_NUMERO_EXTERIOR = isset($_POST["FAMILIAR_1_NUMERO_EXTERIOR"])?$_POST["FAMILIAR_1_NUMERO_EXTERIOR"]:"";
$FAMILIAR_1_NUMERO_INTERIOR = isset($_POST["FAMILIAR_1_NUMERO_INTERIOR"])?$_POST["FAMILIAR_1_NUMERO_INTERIOR"]:"";
$FAMILIAR_1_NUMER__INTERIOR_2 = isset($_POST["FAMILIAR_1_NUMER__INTERIOR_2"])?$_POST["FAMILIAR_1_NUMER__INTERIOR_2"]:"";
$FAMILIAR_1_COLONIA = isset($_POST["FAMILIAR_1_COLONIA"])?$_POST["FAMILIAR_1_COLONIA"]:"";
$FAMILIAR_1_ALCALDIA = isset($_POST["FAMILIAR_1_ALCALDIA"])?$_POST["FAMILIAR_1_ALCALDIA"]:"";
$FAMILIAR_1_C_P = isset($_POST["FAMILIAR_1_C_P"])?$_POST["FAMILIAR_1_C_P"]:"";
$FAMILIAR_1_CIUDAD = isset($_POST["FAMILIAR_1_CIUDAD"])?$_POST["FAMILIAR_1_CIUDAD"]:"";
$FAMILIAR_1_ESTADO = isset($_POST["FAMILIAR_1_ESTADO"])?$_POST["FAMILIAR_1_ESTADO"]:"";
$FAMILIAR_1_PAIS = isset($_POST["FAMILIAR_1_PAIS"])?$_POST["FAMILIAR_1_PAIS"]:"";
$F1CERCANO1 = isset($_POST["F1CERCANO1"])?$_POST["F1CERCANO1"]:"";
$FAMILIAR_1_UBICACION__EN_EL_MAPA = isset($_POST["FAMILIAR_1_UBICACION__EN_EL_MAPA"])?$_POST["FAMILIAR_1_UBICACION__EN_EL_MAPA"]:""; 

/*if($FAMILIAR_1_PARENTESCO =="" or $FAMILIAR_1_NOMBRE_1 =="" or $FAMILIAR_1_NOMBRE_2 =="" or $FAMILIAR_1_APELLIDO_MATERNO =="" or $FAMILIAR_1_APELLIDO_PATERNO =="" or $FAMILIAR_1_CELULAR_1 =="" or $FAMILIAR_1_CELULAR_2 =="" or $FAMILIAR_1_TELEFONO_DE_CASA_I =="" or $FAMILIAR_1_CORREO_ELECTRONICO =="" or $FAMILIAR_1_EDIFICIO =="" or $FAMILIAR_1_NUMERO_CALLE =="" or $FAMILIAR_1_NUMERO_EXTERIOR =="" or $FAMILIAR_1_NUMERO_INTERIOR =="" or $FAMILIAR_1_NUMER__INTERIOR_2 =="" or $FAMILIAR_1_COLONIA =="" or $FAMILIAR_1_ALCALDIA =="" or $FAMILIAR_1_C_P =="" or $FAMILIAR_1_CIUDAD =="" or $FAMILIAR_1_ESTADO =="" or $FAMILIAR_1_PAIS =="" or $F1CERCANO1 =="" or $FAMILIAR_1_UBICACION__EN_EL_MAPA =="" ){
	
	echo "<P id='ERROR'>FAVOR DE LLENAR TODOS LOS CAMPOS EN ROJO</p>";
}else{*/
	
	echo $conexion->guardar_f1cercano($FAMILIAR_1_PARENTESCO , $FAMILIAR_1_NOMBRE_1 , $FAMILIAR_1_NOMBRE_2 , $FAMILIAR_1_APELLIDO_MATERNO , $FAMILIAR_1_APELLIDO_PATERNO , $FAMILIAR_1_CELULAR_1 , $FAMILIAR_1_CELULAR_2 , $FAMILIAR_1_TELEFONO_DE_CASA_I , $FAMILIAR_1_CORREO_ELECTRONICO , $FAMILIAR_1_EDIFICIO , $FAMILIAR_1_NUMERO_CALLE , $FAMILIAR_1_NUMERO_EXTERIOR , $FAMILIAR_1_NUMERO_INTERIOR , $FAMILIAR_1_NUMER__INTERIOR_2 , $FAMILIAR_1_COLONIA , $FAMILIAR_1_ALCALDIA , $FAMILIAR_1_C_P , $FAMILIAR_1_CIUDAD , $FAMILIAR_1_ESTADO , $FAMILIAR_1_PAIS , $F1CERCANO1 , $FAMILIAR_1_UBICACION__EN_EL_MAPA );
//}
	
	
//include_once (__ROOT1__."/includes/crea_funciones.php");	
}
elseif($F2CERCANO2 == 'F2CERCANO2'){
$FAMILIAR2_PARENTESCO = isset($_POST["FAMILIAR2_PARENTESCO"])?$_POST["FAMILIAR2_PARENTESCO"]:"";
$FAMILIAR2_NOMBRE_1 = isset($_POST["FAMILIAR2_NOMBRE_1"])?$_POST["FAMILIAR2_NOMBRE_1"]:"";
$FAMILIAR2_NOMBRE_2 = isset($_POST["FAMILIAR2_NOMBRE_2"])?$_POST["FAMILIAR2_NOMBRE_2"]:"";
$FAMILIAR2_APELLIDO_MATERNO = isset($_POST["FAMILIAR2_APELLIDO_MATERNO"])?$_POST["FAMILIAR2_APELLIDO_MATERNO"]:"";
$FAMILIAR2_APELLIDO_PATERNO = isset($_POST["FAMILIAR2_APELLIDO_PATERNO"])?$_POST["FAMILIAR2_APELLIDO_PATERNO"]:"";
$FAMILIAR2_CELULAR_1 = isset($_POST["FAMILIAR2_CELULAR_1"])?$_POST["FAMILIAR2_CELULAR_1"]:"";
$FAMILIAR2_CELULAR_2 = isset($_POST["FAMILIAR2_CELULAR_2"])?$_POST["FAMILIAR2_CELULAR_2"]:"";
$FAMILIAR2_TELEFONO_DE_CASA_I = isset($_POST["FAMILIAR2_TELEFONO_DE_CASA_I"])?$_POST["FAMILIAR2_TELEFONO_DE_CASA_I"]:"";
$FAMILIAR2_CORREO_ELECTRONICO = isset($_POST["FAMILIAR2_CORREO_ELECTRONICO"])?$_POST["FAMILIAR2_CORREO_ELECTRONICO"]:"";
$FAMILIAR2_EDIFICIO = isset($_POST["FAMILIAR2_EDIFICIO"])?$_POST["FAMILIAR2_EDIFICIO"]:"";
$FAMILIAR2_CALLE = isset($_POST["FAMILIAR2_CALLE"])?$_POST["FAMILIAR2_CALLE"]:"";
$FAMILIAR2_NUMERO_EXTERIOR = isset($_POST["FAMILIAR2_NUMERO_EXTERIOR"])?$_POST["FAMILIAR2_NUMERO_EXTERIOR"]:"";
$FAMILIAR2_NUMERO_INTERIOR = isset($_POST["FAMILIAR2_NUMERO_INTERIOR"])?$_POST["FAMILIAR2_NUMERO_INTERIOR"]:"";
$FAMILIAR2_NUMER_INTERIOR_2 = isset($_POST["FAMILIAR2_NUMER_INTERIOR_2"])?$_POST["FAMILIAR2_NUMER_INTERIOR_2"]:"";
$FAMILIAR2_COLONIA = isset($_POST["FAMILIAR2_COLONIA"])?$_POST["FAMILIAR2_COLONIA"]:"";
$FAMILIAR2_ALCALDIA = isset($_POST["FAMILIAR2_ALCALDIA"])?$_POST["FAMILIAR2_ALCALDIA"]:"";
$FAMILIAR2_C_P = isset($_POST["FAMILIAR2_C_P"])?$_POST["FAMILIAR2_C_P"]:"";
$FAMILIAR2_CIUDAD = isset($_POST["FAMILIAR2_CIUDAD"])?$_POST["FAMILIAR2_CIUDAD"]:"";
$FAMILIAR2_ESTADO = isset($_POST["FAMILIAR2_ESTADO"])?$_POST["FAMILIAR2_ESTADO"]:"";
$FAMILIAR2_PAIS = isset($_POST["FAMILIAR2_PAIS"])?$_POST["FAMILIAR2_PAIS"]:"";
$F2CERCANO2 = isset($_POST["F2CERCANO2"])?$_POST["F2CERCANO2"]:"";
$FAMILIAR2_UBICACION_EN_EL_MAPA = isset($_POST["FAMILIAR2_UBICACION_EN_EL_MAPA"])?$_POST["FAMILIAR2_UBICACION_EN_EL_MAPA"]:""; 

/*
if($FAMILIAR2_PARENTESCO =="" or $FAMILIAR2_NOMBRE_1 =="" or $FAMILIAR2_NOMBRE_2 =="" or $FAMILIAR2_APELLIDO_MATERNO =="" or $FAMILIAR2_APELLIDO_PATERNO =="" or $FAMILIAR2_CELULAR_1 =="" or $FAMILIAR2_CELULAR_2 =="" or $FAMILIAR2_TELEFONO_DE_CASA_I =="" or $FAMILIAR2_CORREO_ELECTRONICO =="" or $FAMILIAR2_EDIFICIO =="" or $FAMILIAR2_CALLE =="" or $FAMILIAR2_NUMERO_EXTERIOR =="" or $FAMILIAR2_NUMERO_INTERIOR =="" or $FAMILIAR2_NUMER_INTERIOR_2 =="" or $FAMILIAR2_COLONIA =="" or $FAMILIAR2_ALCALDIA =="" or $FAMILIAR2_C_P =="" or $FAMILIAR2_CIUDAD =="" or $FAMILIAR2_ESTADO =="" or $FAMILIAR2_PAIS =="" or $F2CERCANO2 =="" or $FAMILIAR2_UBICACION_EN_EL_MAPA =="" ){
//include_once (__ROOT1__."/includes/crea_funciones.php");
	
	echo "<Pid='ERROR'>FAVOR DE LLENAR TODOS LOS CAMPOS EN ROJO</p>";
	
}else{*/
	
	echo $conexion->guardar_f2cercano( $FAMILIAR2_PARENTESCO , $FAMILIAR2_NOMBRE_1 , $FAMILIAR2_NOMBRE_2 , $FAMILIAR2_APELLIDO_MATERNO , $FAMILIAR2_APELLIDO_PATERNO , $FAMILIAR2_CELULAR_1 , $FAMILIAR2_CELULAR_2 , $FAMILIAR2_TELEFONO_DE_CASA_I , $FAMILIAR2_CORREO_ELECTRONICO , $FAMILIAR2_EDIFICIO , $FAMILIAR2_CALLE , $FAMILIAR2_NUMERO_EXTERIOR , $FAMILIAR2_NUMERO_INTERIOR , $FAMILIAR2_NUMER_INTERIOR_2 , $FAMILIAR2_COLONIA , $FAMILIAR2_ALCALDIA , $FAMILIAR2_C_P , $FAMILIAR2_CIUDAD , $FAMILIAR2_ESTADO , $FAMILIAR2_PAIS , $F2CERCANO2 , $FAMILIAR2_UBICACION_EN_EL_MAPA );
//}


	
}
elseif($F3CERCANO3 == 'F3CERCANO3'){
$FAMILIAR3_PARENTESCO = isset($_POST["FAMILIAR3_PARENTESCO"])?$_POST["FAMILIAR3_PARENTESCO"]:"";
$FAMILIAR3_NOMBRE_1 = isset($_POST["FAMILIAR3_NOMBRE_1"])?$_POST["FAMILIAR3_NOMBRE_1"]:"";
$FAMILIAR3_NOMBRE_2 = isset($_POST["FAMILIAR3_NOMBRE_2"])?$_POST["FAMILIAR3_NOMBRE_2"]:"";
$FAMILIAR3_APELLIDO_MATERNO = isset($_POST["FAMILIAR3_APELLIDO_MATERNO"])?$_POST["FAMILIAR3_APELLIDO_MATERNO"]:"";
$FAMILIAR3_APELLIDO_PATERNO = isset($_POST["FAMILIAR3_APELLIDO_PATERNO"])?$_POST["FAMILIAR3_APELLIDO_PATERNO"]:"";
$FAMILIAR3_CELULAR_1 = isset($_POST["FAMILIAR3_CELULAR_1"])?$_POST["FAMILIAR3_CELULAR_1"]:"";
$FAMILIAR3_CELULAR_2 = isset($_POST["FAMILIAR3_CELULAR_2"])?$_POST["FAMILIAR3_CELULAR_2"]:"";
$FAMILIAR3_TELEFONO_DE_CASA_I = isset($_POST["FAMILIAR3_TELEFONO_DE_CASA_I"])?$_POST["FAMILIAR3_TELEFONO_DE_CASA_I"]:"";
$FAMILIAR3_CORREO_ELECTRONICO = isset($_POST["FAMILIAR3_CORREO_ELECTRONICO"])?$_POST["FAMILIAR3_CORREO_ELECTRONICO"]:"";
$FAMILIAR3_EDIFICIO = isset($_POST["FAMILIAR3_EDIFICIO"])?$_POST["FAMILIAR3_EDIFICIO"]:"";
$FAMILIAR3_calle = isset($_POST["FAMILIAR3_calle"])?$_POST["FAMILIAR3_calle"]:"";
$FAMILIAR3_NUMERO_EXTERIOR = isset($_POST["FAMILIAR3_NUMERO_EXTERIOR"])?$_POST["FAMILIAR3_NUMERO_EXTERIOR"]:"";
$FAMILIAR3_NUMERO_INTERIOR = isset($_POST["FAMILIAR3_NUMERO_INTERIOR"])?$_POST["FAMILIAR3_NUMERO_INTERIOR"]:"";
$FAMILIAR3_NUMER_INTERIOR_2 = isset($_POST["FAMILIAR3_NUMER_INTERIOR_2"])?$_POST["FAMILIAR3_NUMER_INTERIOR_2"]:"";
$FAMILIAR3_COLONIA = isset($_POST["FAMILIAR3_COLONIA"])?$_POST["FAMILIAR3_COLONIA"]:"";
$FAMILIAR3_ALCALDIA = isset($_POST["FAMILIAR3_ALCALDIA"])?$_POST["FAMILIAR3_ALCALDIA"]:"";
$FAMILIAR3_C_P = isset($_POST["FAMILIAR3_C_P"])?$_POST["FAMILIAR3_C_P"]:"";
$FAMILIAR3_CIUDAD = isset($_POST["FAMILIAR3_CIUDAD"])?$_POST["FAMILIAR3_CIUDAD"]:"";
$FAMILIAR3_ESTADO = isset($_POST["FAMILIAR3_ESTADO"])?$_POST["FAMILIAR3_ESTADO"]:"";
$FAMILIAR3_PAIS = isset($_POST["FAMILIAR3_PAIS"])?$_POST["FAMILIAR3_PAIS"]:"";
$F3CERCANO3 = isset($_POST["F3CERCANO3"])?$_POST["F3CERCANO3"]:"";
$FAMILIAR3_UBICACION_EN_EL_MAPA = isset($_POST["FAMILIAR3_UBICACION_EN_EL_MAPA"])?$_POST["FAMILIAR3_UBICACION_EN_EL_MAPA"]:""; 

	/*if( $FAMILIAR3_PARENTESCO ==""  ){
	echo "<P style='color:red; font-size:18px;'>FAVOR DE LLENAR TODOS LOS CAMPOS EN ROJO</p>";
	}else{*/
	
	echo $conexion->guardar_f3cercano ($FAMILIAR3_PARENTESCO , $FAMILIAR3_NOMBRE_1 , $FAMILIAR3_NOMBRE_2 , $FAMILIAR3_APELLIDO_MATERNO , $FAMILIAR3_APELLIDO_PATERNO , $FAMILIAR3_CELULAR_1 , $FAMILIAR3_CELULAR_2 , $FAMILIAR3_TELEFONO_DE_CASA_I , $FAMILIAR3_CORREO_ELECTRONICO , $FAMILIAR3_EDIFICIO , $FAMILIAR3_calle , $FAMILIAR3_NUMERO_EXTERIOR , $FAMILIAR3_NUMERO_INTERIOR , $FAMILIAR3_NUMER_INTERIOR_2 , $FAMILIAR3_COLONIA , $FAMILIAR3_ALCALDIA , $FAMILIAR3_C_P , $FAMILIAR3_CIUDAD , $FAMILIAR3_ESTADO , $FAMILIAR3_PAIS , $F3CERCANO3 , $FAMILIAR3_UBICACION_EN_EL_MAPA );
	
	//}
//include_once (__ROOT1__."/includes/crea_funciones.php");
	
}
elseif($F4CERCANO4 == 'F4CERCANO4'){
$FAMILIAR4_PARENTESCO = isset($_POST["FAMILIAR4_PARENTESCO"])?$_POST["FAMILIAR4_PARENTESCO"]:"";
$FAMILIAR4_NOMBRE_1 = isset($_POST["FAMILIAR4_NOMBRE_1"])?$_POST["FAMILIAR4_NOMBRE_1"]:"";
$FAMILIAR4_NOMBRE_2 = isset($_POST["FAMILIAR4_NOMBRE_2"])?$_POST["FAMILIAR4_NOMBRE_2"]:"";
$FAMILIAR4_APELLIDO_MATERNO = isset($_POST["FAMILIAR4_APELLIDO_MATERNO"])?$_POST["FAMILIAR4_APELLIDO_MATERNO"]:"";
$FAMILIAR4_APELLIDO_PATERNO = isset($_POST["FAMILIAR4_APELLIDO_PATERNO"])?$_POST["FAMILIAR4_APELLIDO_PATERNO"]:"";
$FAMILIAR4_CELULAR_1 = isset($_POST["FAMILIAR4_CELULAR_1"])?$_POST["FAMILIAR4_CELULAR_1"]:"";
$FAMILIAR4_CELULAR_2 = isset($_POST["FAMILIAR4_CELULAR_2"])?$_POST["FAMILIAR4_CELULAR_2"]:"";
$FAMILIAR4_TELEFONO_DE_CASA_I = isset($_POST["FAMILIAR4_TELEFONO_DE_CASA_I"])?$_POST["FAMILIAR4_TELEFONO_DE_CASA_I"]:"";
$FAMILIAR4_CORREO_ELECTRONICO = isset($_POST["FAMILIAR4_CORREO_ELECTRONICO"])?$_POST["FAMILIAR4_CORREO_ELECTRONICO"]:"";
$FAMILIAR4_EDIFICIO = isset($_POST["FAMILIAR4_EDIFICIO"])?$_POST["FAMILIAR4_EDIFICIO"]:"";
$FAMILIAR4_CALLE = isset($_POST["FAMILIAR4_CALLE"])?$_POST["FAMILIAR4_CALLE"]:"";
$FAMILIAR4_NUMERO_EXTERIOR = isset($_POST["FAMILIAR4_NUMERO_EXTERIOR"])?$_POST["FAMILIAR4_NUMERO_EXTERIOR"]:"";
$FAMILIAR4_NUMERO_INTERIOR = isset($_POST["FAMILIAR4_NUMERO_INTERIOR"])?$_POST["FAMILIAR4_NUMERO_INTERIOR"]:"";
$FAMILIAR4_NUMER__INTERIOR_2 = isset($_POST["FAMILIAR4_NUMER__INTERIOR_2"])?$_POST["FAMILIAR4_NUMER__INTERIOR_2"]:"";
$FAMILIAR4_COLONIA = isset($_POST["FAMILIAR4_COLONIA"])?$_POST["FAMILIAR4_COLONIA"]:"";
$FAMILIAR4_ALCALDIA = isset($_POST["FAMILIAR4_ALCALDIA"])?$_POST["FAMILIAR4_ALCALDIA"]:"";
$FAMILIAR4_C_P = isset($_POST["FAMILIAR4_C_P"])?$_POST["FAMILIAR4_C_P"]:"";
$FAMILIAR4_CIUDAD = isset($_POST["FAMILIAR4_CIUDAD"])?$_POST["FAMILIAR4_CIUDAD"]:"";
$FAMILIAR4_ESTADO = isset($_POST["FAMILIAR4_ESTADO"])?$_POST["FAMILIAR4_ESTADO"]:"";
$FAMILIAR4_PAIS = isset($_POST["FAMILIAR4_PAIS"])?$_POST["FAMILIAR4_PAIS"]:"";
$F4CERCANO4 = isset($_POST["F4CERCANO4"])?$_POST["F4CERCANO4"]:"";
$FAMILIAR4_UBICACION_EN_EL_MAPA = isset($_POST["FAMILIAR4_UBICACION_EN_EL_MAPA"])?$_POST["FAMILIAR4_UBICACION_EN_EL_MAPA"]:""; 

	/*if($FAMILIAR4_PARENTESCO =="" or $FAMILIAR4_NOMBRE_1 =="" or $FAMILIAR4_NOMBRE_2 =="" or $FAMILIAR4_APELLIDO_MATERNO =="" or $FAMILIAR4_APELLIDO_PATERNO =="" or $FAMILIAR4_CELULAR_1 =="" or $FAMILIAR4_CELULAR_2 =="" or $FAMILIAR4_TELEFONO_DE_CASA_I =="" or $FAMILIAR4_CORREO_ELECTRONICO =="" or $FAMILIAR4_EDIFICIO =="" or $FAMILIAR4_CALLE =="" or $FAMILIAR4_NUMERO_EXTERIOR =="" or $FAMILIAR4_NUMERO_INTERIOR =="" or $FAMILIAR4_NUMER__INTERIOR_2 =="" or $FAMILIAR4_COLONIA =="" or $FAMILIAR4_ALCALDIA =="" or $FAMILIAR4_C_P =="" or $FAMILIAR4_CIUDAD =="" or $FAMILIAR4_ESTADO =="" or $FAMILIAR4_PAIS =="" or $F4CERCANO4 =="" or $FAMILIAR4_UBICACION_EN_EL_MAPA =="" ){
	echo "<P style='color:red; font-size:18px;'>FAVOR DE LLENAR TODOS LOS CAMPOS EN ROJO</p>";		
	}else{*/
	echo $conexion->guardar_f4cercano($FAMILIAR4_PARENTESCO , $FAMILIAR4_NOMBRE_1 , $FAMILIAR4_NOMBRE_2 , $FAMILIAR4_APELLIDO_MATERNO , $FAMILIAR4_APELLIDO_PATERNO , $FAMILIAR4_CELULAR_1 , $FAMILIAR4_CELULAR_2 , $FAMILIAR4_TELEFONO_DE_CASA_I , $FAMILIAR4_CORREO_ELECTRONICO , $FAMILIAR4_EDIFICIO , $FAMILIAR4_CALLE , $FAMILIAR4_NUMERO_EXTERIOR , $FAMILIAR4_NUMERO_INTERIOR , $FAMILIAR4_NUMER__INTERIOR_2 , $FAMILIAR4_COLONIA , $FAMILIAR4_ALCALDIA , $FAMILIAR4_C_P , $FAMILIAR4_CIUDAD , $FAMILIAR4_ESTADO , $FAMILIAR4_PAIS , $F4CERCANO4 , $FAMILIAR4_UBICACION_EN_EL_MAPA );
	//}
	
//include_once (__ROOT1__."/includes/crea_funciones.php");	
}
elseif($habilidades1 == 'habilidades1'){
$LUNES = isset($_POST["LUNES"])?1:0;
$LHORARIOS = isset($_POST["LHORARIOS"])?$_POST["LHORARIOS"]:"";
$LOBSERBACIONES = isset($_POST["LOBSERBACIONES"])?$_POST["LOBSERBACIONES"]:"";
$MARTES = isset($_POST["MARTES"])?1:0;
$MAHORARIOS = isset($_POST["MAHORARIOS"])?$_POST["MAHORARIOS"]:"";
$MAOBSERBACIONES = isset($_POST["MAOBSERBACIONES"])?$_POST["MAOBSERBACIONES"]:"";
$MIERCOLES = isset($_POST["MIERCOLES"])?1:0;
$MIHORARIOS = isset($_POST["MIHORARIOS"])?$_POST["MIHORARIOS"]:"";
$MIOBSERBACIONES = isset($_POST["MIOBSERBACIONES"])?$_POST["MIOBSERBACIONES"]:"";
$JUEVES = isset($_POST["JUEVES"])?1:0;
$JHORARIOS = isset($_POST["JHORARIOS"])?$_POST["JHORARIOS"]:"";
$JOBSERBACIONES = isset($_POST["JOBSERBACIONES"])?$_POST["JOBSERBACIONES"]:"";
$VIERNES = isset($_POST["VIERNES"])?1:0;
$VHORARIOS = isset($_POST["VHORARIOS"])?$_POST["VHORARIOS"]:"";
$VOBSERBACIONES = isset($_POST["VOBSERBACIONES"])?$_POST["VOBSERBACIONES"]:"";
$SABADO = isset($_POST["SABADO"])?1:0;
$SHORARIOS = isset($_POST["SHORARIOS"])?$_POST["SHORARIOS"]:"";
$SOBSERBACIONES = isset($_POST["SOBSERBACIONES"])?$_POST["SOBSERBACIONES"]:"";
$DOMINGO = isset($_POST["DOMINGO"])?1:0;
$DHORARIOS = isset($_POST["DHORARIOS"])?$_POST["DHORARIOS"]:"";
$DOBSERBACIONES = isset($_POST["DOBSERBACIONES"])?$_POST["DOBSERBACIONES"]:"";
$FIESTA_MEXICANA = isset($_POST["FIESTA_MEXICANA"])?1:0;
$EFIESTA_MEXICANA = isset($_POST["EFIESTA_MEXICANA"])?$_POST["EFIESTA_MEXICANA"]:"";
$OFIESTA_MEXICANA = isset($_POST["OFIESTA_MEXICANA"])?$_POST["OFIESTA_MEXICANA"]:"";
$JEOPARDY = isset($_POST["JEOPARDY"])?1:0;
$EJEOPARDY = isset($_POST["EJEOPARDY"])?$_POST["EJEOPARDY"]:"";
$OJEOPARDY = isset($_POST["OJEOPARDY"])?$_POST["OJEOPARDY"]:"";
$RALLYS = isset($_POST["RALLYS"])?1:0;
$ERALLYS = isset($_POST["ERALLYS"])?$_POST["ERALLYS"]:"";
$ORALLYS = isset($_POST["ORALLYS"])?$_POST["ORALLYS"]:"";
$a100_MEXICANOS_DIJIERON = isset($_POST["a100_MEXICANOS_DIJIERON"])?1:0;
$E100_MEXICANOS_DIJIERON = isset($_POST["E100_MEXICANOS_DIJIERON"])?$_POST["E100_MEXICANOS_DIJIERON"]:"";
$O100_MEXICANOS_DIJIERON = isset($_POST["O100_MEXICANOS_DIJIERON"])?$_POST["O100_MEXICANOS_DIJIERON"]:"";
$NOCHE_DE_LAS_ESTRELLAS = isset($_POST["NOCHE_DE_LAS_ESTRELLAS"])?1:0;
$ENOCHE_DE_LAS_ESTRELLAS = isset($_POST["ENOCHE_DE_LAS_ESTRELLAS"])?$_POST["ENOCHE_DE_LAS_ESTRELLAS"]:"";
$ONOCHE_DE_LAS_ESTRELLAS = isset($_POST["ONOCHE_DE_LAS_ESTRELLAS"])?$_POST["ONOCHE_DE_LAS_ESTRELLAS"]:"";
$HANDS_UP = isset($_POST["HANDS_UP"])?1:0;
$EHANDS_UP = isset($_POST["EHANDS_UP"])?$_POST["EHANDS_UP"]:"";
$OHANDS_UP = isset($_POST["OHANDS_UP"])?$_POST["OHANDS_UP"]:"";
$CALAMAR = isset($_POST["CALAMAR"])?1:0;
$ECALAMAR = isset($_POST["ECALAMAR"])?$_POST["ECALAMAR"]:"";
$OCALAMAR = isset($_POST["OCALAMAR"])?$_POST["OCALAMAR"]:"";
$CRUCERO = isset($_POST["CRUCERO"])?1:0;
$ECRUCERO = isset($_POST["ECRUCERO"])?$_POST["ECRUCERO"]:"";
$OCRUCERO = isset($_POST["OCRUCERO"])?$_POST["OCRUCERO"]:"";
$MAESTRO_DE_CEREMONIAS = isset($_POST["MAESTRO_DE_CEREMONIAS"])?1:0;
$EMAESTRO_DE_CEREMONIAS = isset($_POST["EMAESTRO_DE_CEREMONIAS"])?$_POST["EMAESTRO_DE_CEREMONIAS"]:"";
$OMAESTRO_DE_CEREMONIAS = isset($_POST["OMAESTRO_DE_CEREMONIAS"])?$_POST["OMAESTRO_DE_CEREMONIAS"]:"";
$CASINO = isset($_POST["CASINO"])?1:0;
$ECASINO = isset($_POST["ECASINO"])?$_POST["ECASINO"]:"";
$OCASINO = isset($_POST["OCASINO"])?$_POST["OCASINO"]:"";
$CUBILETE = isset($_POST["CUBILETE"])?1:0;
$ECUBILETE = isset($_POST["ECUBILETE"])?$_POST["ECUBILETE"]:"";
$OCUBILETE = isset($_POST["OCUBILETE"])?$_POST["OCUBILETE"]:"";
$CRABS = isset($_POST["CRABS"])?1:0;
$ECRABS = isset($_POST["ECRABS"])?$_POST["ECRABS"]:"";
$OCRABS = isset($_POST["OCRABS"])?$_POST["OCRABS"]:"";
$RULETA = isset($_POST["RULETA"])?1:0;
$ERULETA = isset($_POST["ERULETA"])?$_POST["ERULETA"]:"";
$ORULETA = isset($_POST["ORULETA"])?$_POST["ORULETA"]:"";
$BLACK_JACK = isset($_POST["BLACK_JACK"])?1:0;
$EBLACK_JACK = isset($_POST["EBLACK_JACK"])?$_POST["EBLACK_JACK"]:"";
$OBLACK_JACK = isset($_POST["OBLACK_JACK"])?$_POST["OBLACK_JACK"]:"";
$INFLABLES = isset($_POST["INFLABLES"])?1:0;
$EINFLABLES = isset($_POST["EINFLABLES"])?$_POST["EINFLABLES"]:"";
$OINFLABLES = isset($_POST["OINFLABLES"])?$_POST["OINFLABLES"]:"";
$AAA = isset($_POST["AAA"])?$_POST["AAA"]:"";
$AAAA = isset($_POST["AAAA"])?1:0;
$EAAAA = isset($_POST["EAAAA"])?$_POST["EAAAA"]:"";
$OAAAA = isset($_POST["OAAAA"])?$_POST["OAAAA"]:"";
$BBB = isset($_POST["BBB"])?$_POST["BBB"]:"";
$BBBB = isset($_POST["BBBB"])?1:0;
$EBBB = isset($_POST["EBBB"])?$_POST["EBBB"]:"";
$OBBB = isset($_POST["OBBB"])?$_POST["OBBB"]:"";
$CCC = isset($_POST["CCC"])?$_POST["CCC"]:"";
$CCCC = isset($_POST["CCCC"])?1:0;
$ECCC = isset($_POST["ECCC"])?$_POST["ECCC"]:"";
$OCCC = isset($_POST["OCCC"])?$_POST["OCCC"]:"";

$DDDD = isset($_POST["DDDD"])?1:0;
$DDD = isset($_POST["DDD"])?$_POST["DDD"]:"";
$EDDD = isset($_POST["EDDD"])?$_POST["EDDD"]:"";
$ODDD = isset($_POST["ODDD"])?$_POST["ODDD"]:"";
$EEE = isset($_POST["EEE"])?$_POST["EEE"]:"";
$EEEEE = isset($_POST["EEEEE"])?1:0;
$EEEE = isset($_POST["EEEE"])?$_POST["EEEE"]:"";
$OEEE = isset($_POST["OEEE"])?$_POST["OEEE"]:"";
$FFF = isset($_POST["FFF"])?$_POST["FFF"]:"";
$FFFF = isset($_POST["FFFF"])?1:0;
$EFFF = isset($_POST["EFFF"])?$_POST["EFFF"]:"";
$OFFF = isset($_POST["OFFF"])?$_POST["OFFF"]:"";
$GGG = isset($_POST["GGG"])?$_POST["GGG"]:"";
$GGGG = isset($_POST["GGGG"])?1:0;
$EGGG = isset($_POST["EGGG"])?$_POST["EGGG"]:"";
$OGGG = isset($_POST["OGGG"])?$_POST["OGGG"]:"";
$OBSERVACIONES = isset($_POST["OBSERVACIONES"])?$_POST["OBSERVACIONES"]:"";
$habilidades1 = isset($_POST["habilidades1"])?$_POST["habilidades1"]:""; 

	echo $conexion->guardar_habilidades(  $LUNES , $LHORARIOS , $LOBSERBACIONES , $MARTES , $MAHORARIOS , $MAOBSERBACIONES , $MIERCOLES , $MIHORARIOS , $MIOBSERBACIONES , $JUEVES , $JHORARIOS , $JOBSERBACIONES , $VIERNES , $VHORARIOS , $VOBSERBACIONES , $SABADO , $SHORARIOS , $SOBSERBACIONES , $DOMINGO , $DHORARIOS , $DOBSERBACIONES , $FIESTA_MEXICANA , $EFIESTA_MEXICANA , $OFIESTA_MEXICANA , $JEOPARDY , $EJEOPARDY , $OJEOPARDY , $RALLYS , $ERALLYS , $ORALLYS , $a100_MEXICANOS_DIJIERON , $E100_MEXICANOS_DIJIERON , $O100_MEXICANOS_DIJIERON , $NOCHE_DE_LAS_ESTRELLAS , $ENOCHE_DE_LAS_ESTRELLAS , $ONOCHE_DE_LAS_ESTRELLAS , $HANDS_UP , $EHANDS_UP , $OHANDS_UP , $CALAMAR , $ECALAMAR , $OCALAMAR , $CRUCERO , $ECRUCERO , $OCRUCERO , $MAESTRO_DE_CEREMONIAS , $EMAESTRO_DE_CEREMONIAS , $OMAESTRO_DE_CEREMONIAS , $CASINO , $ECASINO , $OCASINO , $CUBILETE , $ECUBILETE , $OCUBILETE , $CRABS , $ECRABS , $OCRABS , $RULETA , $ERULETA , $ORULETA , $BLACK_JACK , $EBLACK_JACK , $OBLACK_JACK , $INFLABLES , $EINFLABLES , $OINFLABLES , $AAA , $AAAA , $EAAAA , $OAAAA , $BBB , $BBBB , $EBBB , $OBBB , $CCC , $CCCC , $ECCC , $OCCC , $DDD, $DDDD , $EDDD , $ODDD , $EEE , $EEEEE , $EEEE , $OEEE , $FFF , $FFFF , $EFFF , $OFFF , $GGG , $GGGG , $EGGG , $OGGG , $OBSERVACIONES , $habilidades1  );
//include_once (__ROOT1__."/includes/crea_funciones.php");	
}
elseif($CMEASIGNADO1 == 'CMEASIGNADO1'){

$COMPUTADORA_MARCA = isset($_POST["COMPUTADORA_MARCA"])?$_POST["COMPUTADORA_MARCA"]:"";
$COMPUTADORA_NO_DE_CEL = isset($_POST["COMPUTADORA_NO_DE_CEL"])?$_POST["COMPUTADORA_NO_DE_CEL"]:"";
$COMPUTADORA_MODELO = isset($_POST["COMPUTADORA_MODELO"])?$_POST["COMPUTADORA_MODELO"]:"";
$COMPUTADORA_MODELO_2 = isset($_POST["COMPUTADORA_MODELO_2"])?$_POST["COMPUTADORA_MODELO_2"]:"";
$COMPUTADORA_NUMERO_DE_SERIE = isset($_POST["COMPUTADORA_NUMERO_DE_SERIE"])?$_POST["COMPUTADORA_NUMERO_DE_SERIE"]:"";
$PANTALLA_MARCA = isset($_POST["PANTALLA_MARCA"])?$_POST["PANTALLA_MARCA"]:"";
$PANTALLA_NO_DE_CEL = isset($_POST["PANTALLA_NO_DE_CEL"])?$_POST["PANTALLA_NO_DE_CEL"]:"";
$PANTALLA_MODELO = isset($_POST["PANTALLA_MODELO"])?$_POST["PANTALLA_MODELO"]:"";
$PANTALLA_MODELO_2 = isset($_POST["PANTALLA_MODELO_2"])?$_POST["PANTALLA_MODELO_2"]:"";
$PANTALLA_NUMERO_DE_SERIE = isset($_POST["PANTALLA_NUMERO_DE_SERIE"])?$_POST["PANTALLA_NUMERO_DE_SERIE"]:"";
$MOUSE_MARCA = isset($_POST["MOUSE_MARCA"])?$_POST["MOUSE_MARCA"]:"";
$MOUSE_NO_DE_CEL = isset($_POST["MOUSE_NO_DE_CEL"])?$_POST["MOUSE_NO_DE_CEL"]:"";
$MOUSE_MODELO = isset($_POST["MOUSE_MODELO"])?$_POST["MOUSE_MODELO"]:"";
$MOUSE_MODELO_2 = isset($_POST["MOUSE_MODELO_2"])?$_POST["MOUSE_MODELO_2"]:"";
$MOUSE_NUMERO_DE_SERIE = isset($_POST["MOUSE_NUMERO_DE_SERIE"])?$_POST["MOUSE_NUMERO_DE_SERIE"]:"";
$DISCO_EXTERNO_MARCA = isset($_POST["DISCO_EXTERNO_MARCA"])?$_POST["DISCO_EXTERNO_MARCA"]:"";
$DISCO_EXTERNO_NO_DE_CEL = isset($_POST["DISCO_EXTERNO_NO_DE_CEL"])?$_POST["DISCO_EXTERNO_NO_DE_CEL"]:"";
$DISCO_EXTERNO_MODELO = isset($_POST["DISCO_EXTERNO_MODELO"])?$_POST["DISCO_EXTERNO_MODELO"]:"";
$DISCO_EXTERNO_MODELO_2 = isset($_POST["DISCO_EXTERNO_MODELO_2"])?$_POST["DISCO_EXTERNO_MODELO_2"]:"";
$DISCO_EXTERNO_NUMERO_DE_SERIE = isset($_POST["DISCO_EXTERNO_NUMERO_DE_SERIE"])?$_POST["DISCO_EXTERNO_NUMERO_DE_SERIE"]:"";
$MATERIAL_EQUIPO_ASIGNADO_OTRO_MARCA = isset($_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_MARCA"])?$_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_MARCA"]:"";
$MATERIAL_EQUIPO_ASIGNADO_OTRO_NO_DE_CEL = isset($_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_NO_DE_CEL"])?$_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_NO_DE_CEL"]:"";
$MATERIAL_EQUIPO_ASIGNADO_OTRO_MODELO = isset($_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_MODELO"])?$_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_MODELO"]:"";
$MATERIAL_EQUIPO_ASIGNADO_OTRO_MODELO_2 = isset($_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_MODELO_2"])?$_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_MODELO_2"]:"";
$MATERIAL_EQUIPO_ASIGNADO_OTRO_NUMERO_DE_SERIE = isset($_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_NUMERO_DE_SERIE"])?$_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_NUMERO_DE_SERIE"]:"";
$MATERIAL_EQUIPO_ASIGNADO_OTRO_2_MARCA = isset($_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_2_MARCA"])?$_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_2_MARCA"]:"";
$MATERIAL_EQUIPO_ASIGNADO_OTRO_2_NO_DE_CEL = isset($_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_2_NO_DE_CEL"])?$_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_2_NO_DE_CEL"]:"";
$MATERIAL_EQUIPO_ASIGNADO_OTRO_2_MODELO = isset($_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_2_MODELO"])?$_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_2_MODELO"]:"";
$MATERIAL_EQUIPO_ASIGNADO_OTRO_2_MODELO_2 = isset($_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_2_MODELO_2"])?$_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_2_MODELO_2"]:"";
$MATERIAL_EQUIPO_ASIGNADO_OTRO_2_NUMERO_DE_SERIE = isset($_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_2_NUMERO_DE_SERIE"])?$_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_2_NUMERO_DE_SERIE"]:"";
$TELEFONO_CELULAR_MARCA = isset($_POST["TELEFONO_CELULAR_MARCA"])?$_POST["TELEFONO_CELULAR_MARCA"]:"";
$TELEFONO_CELULAR_NO_DE_CEL = isset($_POST["TELEFONO_CELULAR_NO_DE_CEL"])?$_POST["TELEFONO_CELULAR_NO_DE_CEL"]:"";
$TELEFONO_CELULAR_MODELO = isset($_POST["TELEFONO_CELULAR_MODELO"])?$_POST["TELEFONO_CELULAR_MODELO"]:"";
$TELEFONO_CELULAR_MODELO_2 = isset($_POST["TELEFONO_CELULAR_MODELO_2"])?$_POST["TELEFONO_CELULAR_MODELO_2"]:"";
$TELEFONO_CELULAR_NUMERO_DE_SERIE = isset($_POST["TELEFONO_CELULAR_NUMERO_DE_SERIE"])?$_POST["TELEFONO_CELULAR_NUMERO_DE_SERIE"]:"";
$DIADEMA_MARCA = isset($_POST["DIADEMA_MARCA"])?$_POST["DIADEMA_MARCA"]:"";
$DIADEMA_NO_DE_CEL = isset($_POST["DIADEMA_NO_DE_CEL"])?$_POST["DIADEMA_NO_DE_CEL"]:"";
$DIADEMA_MODELO = isset($_POST["DIADEMA_MODELO"])?$_POST["DIADEMA_MODELO"]:"";
$DIADEMA_MODELO_2 = isset($_POST["DIADEMA_MODELO_2"])?$_POST["DIADEMA_MODELO_2"]:"";
$DIADEMA_NUMERO_DE_SERIE = isset($_POST["DIADEMA_NUMERO_DE_SERIE"])?$_POST["DIADEMA_NUMERO_DE_SERIE"]:"";
$VRIM_MARCA = isset($_POST["VRIM_MARCA"])?$_POST["VRIM_MARCA"]:"";
$VRIM_NO_DE_CEL = isset($_POST["VRIM_NO_DE_CEL"])?$_POST["VRIM_NO_DE_CEL"]:"";
$VRIM_MODELO = isset($_POST["VRIM_MODELO"])?$_POST["VRIM_MODELO"]:"";
$VRIM_MODELO2 = isset($_POST["VRIM_MODELO2"])?$_POST["VRIM_MODELO2"]:"";
$VRIM_NUMERO_DE_SERIE = isset($_POST["VRIM_NUMERO_DE_SERIE"])?$_POST["VRIM_NUMERO_DE_SERIE"]:"";
$SEGURO_CONTRA_ACCIDENTES_MARCA = isset($_POST["SEGURO_CONTRA_ACCIDENTES_MARCA"])?$_POST["SEGURO_CONTRA_ACCIDENTES_MARCA"]:"";
$SEGURO_CONTRA_ACCIDENTES_NO_DE_CEL = isset($_POST["SEGURO_CONTRA_ACCIDENTES_NO_DE_CEL"])?$_POST["SEGURO_CONTRA_ACCIDENTES_NO_DE_CEL"]:"";
$SEGURO_CONTRA_ACCIDENTES_MODELO = isset($_POST["SEGURO_CONTRA_ACCIDENTES_MODELO"])?$_POST["SEGURO_CONTRA_ACCIDENTES_MODELO"]:"";
$SEGURO_CONTRA_ACCIDENTES_MODELO_2 = isset($_POST["SEGURO_CONTRA_ACCIDENTES_MODELO_2"])?$_POST["SEGURO_CONTRA_ACCIDENTES_MODELO_2"]:"";
$SEGURO_CONTRA_ACCIDENTES_NUMERO_DE_SERIE = isset($_POST["SEGURO_CONTRA_ACCIDENTES_NUMERO_DE_SERIE"])?$_POST["SEGURO_CONTRA_ACCIDENTES_NUMERO_DE_SERIE"]:"";
$SEGURO_DE_VIDA_MARCA = isset($_POST["SEGURO_DE_VIDA_MARCA"])?$_POST["SEGURO_DE_VIDA_MARCA"]:"";
$SEGURO_DE_VIDA_NO_DE_CEL = isset($_POST["SEGURO_DE_VIDA_NO_DE_CEL"])?$_POST["SEGURO_DE_VIDA_NO_DE_CEL"]:"";
$SEGURO_DE_VIDA_MODELO = isset($_POST["SEGURO_DE_VIDA_MODELO"])?$_POST["SEGURO_DE_VIDA_MODELO"]:"";
$SEGURO_DE_VIDA_MODELO_2 = isset($_POST["SEGURO_DE_VIDA_MODELO_2"])?$_POST["SEGURO_DE_VIDA_MODELO_2"]:"";
$SEGURO_DE_VIDA_NUMERO_DE_SERIE = isset($_POST["SEGURO_DE_VIDA_NUMERO_DE_SERIE"])?$_POST["SEGURO_DE_VIDA_NUMERO_DE_SERIE"]:"";
$SEGURO_DE_GASTOS_MEDICOS_MAYORES_MARCA = isset($_POST["SEGURO_DE_GASTOS_MEDICOS_MAYORES_MARCA"])?$_POST["SEGURO_DE_GASTOS_MEDICOS_MAYORES_MARCA"]:"";
$SEGURO_DE_GASTOS_MEDICOS_NO_DE_CEL = isset($_POST["SEGURO_DE_GASTOS_MEDICOS_NO_DE_CEL"])?$_POST["SEGURO_DE_GASTOS_MEDICOS_NO_DE_CEL"]:"";
$SEGURO_DE_GASTOS_MEDICOS_MODELO = isset($_POST["SEGURO_DE_GASTOS_MEDICOS_MODELO"])?$_POST["SEGURO_DE_GASTOS_MEDICOS_MODELO"]:"";
$SEGURO_DE_GASTOS_MEDICOS_MODELO_2 = isset($_POST["SEGURO_DE_GASTOS_MEDICOS_MODELO_2"])?$_POST["SEGURO_DE_GASTOS_MEDICOS_MODELO_2"]:"";
$SEGURO_DE_GASTOS_MEDICOS_NUMERO_DE_SERIE = isset($_POST["SEGURO_DE_GASTOS_MEDICOS_NUMERO_DE_SERIE"])?$_POST["SEGURO_DE_GASTOS_MEDICOS_NUMERO_DE_SERIE"]:"";
$TARJETA_DE_VALES_DE_DESPENSA_MARCA = isset($_POST["TARJETA_DE_VALES_DE_DESPENSA_MARCA"])?$_POST["TARJETA_DE_VALES_DE_DESPENSA_MARCA"]:"";
$TARJETA_DE_VALES_DE_DESPENSA_NO_DE_CEL = isset($_POST["TARJETA_DE_VALES_DE_DESPENSA_NO_DE_CEL"])?$_POST["TARJETA_DE_VALES_DE_DESPENSA_NO_DE_CEL"]:"";
$TARJETA_DE_VALES_DE_DESPENSA_MODELO = isset($_POST["TARJETA_DE_VALES_DE_DESPENSA_MODELO"])?$_POST["TARJETA_DE_VALES_DE_DESPENSA_MODELO"]:"";
$TARJETA_DE_VALES_DE_DESPENSA_MODELO_2 = isset($_POST["TARJETA_DE_VALES_DE_DESPENSA_MODELO_2"])?$_POST["TARJETA_DE_VALES_DE_DESPENSA_MODELO_2"]:"";
$TARJETA_DE_VALES_DE_DESPENSA_NUMERO_DE_SERIE = isset($_POST["TARJETA_DE_VALES_DE_DESPENSA_NUMERO_DE_SERIE"])?$_POST["TARJETA_DE_VALES_DE_DESPENSA_NUMERO_DE_SERIE"]:"";
$TARJETA_VALES_GASOLINA_MARCA = isset($_POST["TARJETA_VALES_GASOLINA_MARCA"])?$_POST["TARJETA_VALES_GASOLINA_MARCA"]:"";
$TARJETA_VALES_GASOLINA_NO_DE_CEL = isset($_POST["TARJETA_VALES_GASOLINA_NO_DE_CEL"])?$_POST["TARJETA_VALES_GASOLINA_NO_DE_CEL"]:"";
$TARJETA_VALES_GASOLINA_MODELO = isset($_POST["TARJETA_VALES_GASOLINA_MODELO"])?$_POST["TARJETA_VALES_GASOLINA_MODELO"]:"";
$TARJETA_VALES_GASOLINA_MODELO_2 = isset($_POST["TARJETA_VALES_GASOLINA_MODELO_2"])?$_POST["TARJETA_VALES_GASOLINA_MODELO_2"]:"";
$TARJETA_VALES_GASOLINA_NUMERO_DE_SERIE = isset($_POST["TARJETA_VALES_GASOLINA_NUMERO_DE_SERIE"])?$_POST["TARJETA_VALES_GASOLINA_NUMERO_DE_SERIE"]:"";
$COMPUTADORA_FECHA_DE_ENTREGA = isset($_POST["COMPUTADORA_FECHA_DE_ENTREGA"])?$_POST["COMPUTADORA_FECHA_DE_ENTREGA"]:"";
$COMPUTADORA_FECHA_DE_DEVOLUCION = isset($_POST["COMPUTADORA_FECHA_DE_DEVOLUCION"])?$_POST["COMPUTADORA_FECHA_DE_DEVOLUCION"]:"";
$COMPUTADORA_OBSERVACIONES = isset($_POST["COMPUTADORA_OBSERVACIONES"])?$_POST["COMPUTADORA_OBSERVACIONES"]:"";
$PANTALLA_FECHA_DE_ENTREGA = isset($_POST["PANTALLA_FECHA_DE_ENTREGA"])?$_POST["PANTALLA_FECHA_DE_ENTREGA"]:"";
$PANTALLA_FECHA_DE_DEVOLUCION = isset($_POST["PANTALLA_FECHA_DE_DEVOLUCION"])?$_POST["PANTALLA_FECHA_DE_DEVOLUCION"]:"";
$PANTALLA_OBSERVACIONES = isset($_POST["PANTALLA_OBSERVACIONES"])?$_POST["PANTALLA_OBSERVACIONES"]:"";
$MOUSE_FECHA_DE_ENTREGA = isset($_POST["MOUSE_FECHA_DE_ENTREGA"])?$_POST["MOUSE_FECHA_DE_ENTREGA"]:"";
$MOUSE_FECHA_DE_DEVOLUCION = isset($_POST["MOUSE_FECHA_DE_DEVOLUCION"])?$_POST["MOUSE_FECHA_DE_DEVOLUCION"]:"";
$MOUSE_OBSERVACIONES = isset($_POST["MOUSE_OBSERVACIONES"])?$_POST["MOUSE_OBSERVACIONES"]:"";
$DISCO_EXTERNO_FECHA_DE_ENTREGA = isset($_POST["DISCO_EXTERNO_FECHA_DE_ENTREGA"])?$_POST["DISCO_EXTERNO_FECHA_DE_ENTREGA"]:"";
$DISCO_EXTERNO_FECHA_DE_DEVOLUCION = isset($_POST["DISCO_EXTERNO_FECHA_DE_DEVOLUCION"])?$_POST["DISCO_EXTERNO_FECHA_DE_DEVOLUCION"]:"";
$DISCO_EXTERNO_OBSERVACIONES = isset($_POST["DISCO_EXTERNO_OBSERVACIONES"])?$_POST["DISCO_EXTERNO_OBSERVACIONES"]:"";
$MATERIAL_EQUIPO_ASIGNADO_OTRO_FECHA_DE_ENTREGA = isset($_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_FECHA_DE_ENTREGA"])?$_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_FECHA_DE_ENTREGA"]:"";
$MATERIAL_EQUIPO_ASIGNADO_OTRO_FECHA_DE_DEVOLUCION = isset($_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_FECHA_DE_DEVOLUCION"])?$_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_FECHA_DE_DEVOLUCION"]:"";
$MATERIAL_EQUIPO_ASIGNADO_OTRO_OBSERVACIONES = isset($_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_OBSERVACIONES"])?$_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_OBSERVACIONES"]:"";
$MATERIAL_EQUIPO_ASIGNADO_OTRO_FECHA_DE_ENTREGA_2 = isset($_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_FECHA_DE_ENTREGA_2"])?$_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_FECHA_DE_ENTREGA_2"]:"";
$MATERIAL_EQUIPO_ASIGNADO_OTRO_FECHA_DE_DEVOLUCION_2 = isset($_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_FECHA_DE_DEVOLUCION_2"])?$_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_FECHA_DE_DEVOLUCION_2"]:"";
$MATERIAL_EQUIPO_ASIGNADO_OTRO_OBSERVACIONES_2 = isset($_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_OBSERVACIONES_2"])?$_POST["MATERIAL_EQUIPO_ASIGNADO_OTRO_OBSERVACIONES_2"]:"";
$TELEFONO_CELULAR_FECHA_DE_ENTREGA = isset($_POST["TELEFONO_CELULAR_FECHA_DE_ENTREGA"])?$_POST["TELEFONO_CELULAR_FECHA_DE_ENTREGA"]:"";
$TELEFONO_CELULAR_FECHA_DE_DEVOLUCION = isset($_POST["TELEFONO_CELULAR_FECHA_DE_DEVOLUCION"])?$_POST["TELEFONO_CELULAR_FECHA_DE_DEVOLUCION"]:"";
$TELEFONO_CELULAR_OBSERVACIONES = isset($_POST["TELEFONO_CELULAR_OBSERVACIONES"])?$_POST["TELEFONO_CELULAR_OBSERVACIONES"]:"";
$DIADEMA_FECHA_DE_ENTREGA = isset($_POST["DIADEMA_FECHA_DE_ENTREGA"])?$_POST["DIADEMA_FECHA_DE_ENTREGA"]:"";
$DIADEMA_FECHA_DE_DEVOLUCION = isset($_POST["DIADEMA_FECHA_DE_DEVOLUCION"])?$_POST["DIADEMA_FECHA_DE_DEVOLUCION"]:"";
$DIADEMA_OBSERVACIONES = isset($_POST["DIADEMA_OBSERVACIONES"])?$_POST["DIADEMA_OBSERVACIONES"]:"";
$VRIM_FECHA_DE_ENTREGA = isset($_POST["VRIM_FECHA_DE_ENTREGA"])?$_POST["VRIM_FECHA_DE_ENTREGA"]:"";
$VRIM_FECHA_DE_DEVOLUCION = isset($_POST["VRIM_FECHA_DE_DEVOLUCION"])?$_POST["VRIM_FECHA_DE_DEVOLUCION"]:"";
$VRIM_OBSERVACIONES = isset($_POST["VRIM_OBSERVACIONES"])?$_POST["VRIM_OBSERVACIONES"]:"";
$SEGURO_CONTRA_ACCIDENTES_FECHA_DE_ENTREGA = isset($_POST["SEGURO_CONTRA_ACCIDENTES_FECHA_DE_ENTREGA"])?$_POST["SEGURO_CONTRA_ACCIDENTES_FECHA_DE_ENTREGA"]:"";
$SEGURO_CONTRA_ACCIDENTES_FECHA_DE_DEVOLUCION = isset($_POST["SEGURO_CONTRA_ACCIDENTES_FECHA_DE_DEVOLUCION"])?$_POST["SEGURO_CONTRA_ACCIDENTES_FECHA_DE_DEVOLUCION"]:"";
$SEGURO_CONTRA_ACCIDENTES_OBSERVACIONES = isset($_POST["SEGURO_CONTRA_ACCIDENTES_OBSERVACIONES"])?$_POST["SEGURO_CONTRA_ACCIDENTES_OBSERVACIONES"]:"";
$SEGURO_DE_VIDA_FECHA_DE_ENTREGA = isset($_POST["SEGURO_DE_VIDA_FECHA_DE_ENTREGA"])?$_POST["SEGURO_DE_VIDA_FECHA_DE_ENTREGA"]:"";
$SEGURO_DE_VIDA_FECHA_DE_DEVOLUCION = isset($_POST["SEGURO_DE_VIDA_FECHA_DE_DEVOLUCION"])?$_POST["SEGURO_DE_VIDA_FECHA_DE_DEVOLUCION"]:"";
$SEGURO_DE_VIDA_OBSERVACIONES = isset($_POST["SEGURO_DE_VIDA_OBSERVACIONES"])?$_POST["SEGURO_DE_VIDA_OBSERVACIONES"]:"";
$SEGURO_DE_GASTOS_MEDICOS_FECHA_DE_ENTREGA = isset($_POST["SEGURO_DE_GASTOS_MEDICOS_FECHA_DE_ENTREGA"])?$_POST["SEGURO_DE_GASTOS_MEDICOS_FECHA_DE_ENTREGA"]:"";
$SEGURO_DE_GASTOS_MEDICOS_FECHA_DE_DEVOLUCION = isset($_POST["SEGURO_DE_GASTOS_MEDICOS_FECHA_DE_DEVOLUCION"])?$_POST["SEGURO_DE_GASTOS_MEDICOS_FECHA_DE_DEVOLUCION"]:"";
$SEGURO_DE_GASTOS_MEDICOS_OBSERVACIONES = isset($_POST["SEGURO_DE_GASTOS_MEDICOS_OBSERVACIONES"])?$_POST["SEGURO_DE_GASTOS_MEDICOS_OBSERVACIONES"]:"";
$TARJETA_DE_VALES_DE_DESPENSA_FECHA_DE_ENTREGA = isset($_POST["TARJETA_DE_VALES_DE_DESPENSA_FECHA_DE_ENTREGA"])?$_POST["TARJETA_DE_VALES_DE_DESPENSA_FECHA_DE_ENTREGA"]:"";
$TARJETA_DE_VALES_DE_DESPENSA_FECHA_DE_DEVOLUCION = isset($_POST["TARJETA_DE_VALES_DE_DESPENSA_FECHA_DE_DEVOLUCION"])?$_POST["TARJETA_DE_VALES_DE_DESPENSA_FECHA_DE_DEVOLUCION"]:"";
$TARJETA_DE_VALES_DE_DESPENSA_OBSERVACIONES = isset($_POST["TARJETA_DE_VALES_DE_DESPENSA_OBSERVACIONES"])?$_POST["TARJETA_DE_VALES_DE_DESPENSA_OBSERVACIONES"]:"";
$TARJETA_DE_VALES_GASOLINA_FECHA_DE_ENTREGA = isset($_POST["TARJETA_DE_VALES_GASOLINA_FECHA_DE_ENTREGA"])?$_POST["TARJETA_DE_VALES_GASOLINA_FECHA_DE_ENTREGA"]:"";
$TARJETA_DE_VALES_GASOLINA_FECHA_DE_DEVOLUCION = isset($_POST["TARJETA_DE_VALES_GASOLINA_FECHA_DE_DEVOLUCION"])?$_POST["TARJETA_DE_VALES_GASOLINA_FECHA_DE_DEVOLUCION"]:"";
$TARJETA_DE_VALES_GASOLINA_OBSERVACIONES = isset($_POST["TARJETA_DE_VALES_GASOLINA_OBSERVACIONES"])?$_POST["TARJETA_DE_VALES_GASOLINA_OBSERVACIONES"]:"";
$CMEASIGNADO1 = isset($_POST["CMEASIGNADO1"])?$_POST["CMEASIGNADO1"]:""; 

	/*if($COMPUTADORA_MARCA ==""){
	echo "<P id='ERROR'>FAVOR DE LLENAR TODOS LOS CAMPOS EN ROJO</p>";
	}else{*/
	echo $conexion->guardar_MEASIGNADO1($COMPUTADORA_MARCA , $COMPUTADORA_NO_DE_CEL , $COMPUTADORA_MODELO , $COMPUTADORA_MODELO_2 , $COMPUTADORA_NUMERO_DE_SERIE , $PANTALLA_MARCA , $PANTALLA_NO_DE_CEL , $PANTALLA_MODELO , $PANTALLA_MODELO_2 , $PANTALLA_NUMERO_DE_SERIE , $MOUSE_MARCA , $MOUSE_NO_DE_CEL , $MOUSE_MODELO , $MOUSE_MODELO_2 , $MOUSE_NUMERO_DE_SERIE , $DISCO_EXTERNO_MARCA , $DISCO_EXTERNO_NO_DE_CEL , $DISCO_EXTERNO_MODELO , $DISCO_EXTERNO_MODELO_2 , $DISCO_EXTERNO_NUMERO_DE_SERIE , $MATERIAL_EQUIPO_ASIGNADO_OTRO_MARCA , $MATERIAL_EQUIPO_ASIGNADO_OTRO_NO_DE_CEL , $MATERIAL_EQUIPO_ASIGNADO_OTRO_MODELO , $MATERIAL_EQUIPO_ASIGNADO_OTRO_MODELO_2 , $MATERIAL_EQUIPO_ASIGNADO_OTRO_NUMERO_DE_SERIE , $MATERIAL_EQUIPO_ASIGNADO_OTRO_2_MARCA , $MATERIAL_EQUIPO_ASIGNADO_OTRO_2_NO_DE_CEL , $MATERIAL_EQUIPO_ASIGNADO_OTRO_2_MODELO , $MATERIAL_EQUIPO_ASIGNADO_OTRO_2_MODELO_2 , $MATERIAL_EQUIPO_ASIGNADO_OTRO_2_NUMERO_DE_SERIE , $TELEFONO_CELULAR_MARCA , $TELEFONO_CELULAR_NO_DE_CEL , $TELEFONO_CELULAR_MODELO , $TELEFONO_CELULAR_MODELO_2 , $TELEFONO_CELULAR_NUMERO_DE_SERIE , $DIADEMA_MARCA , $DIADEMA_NO_DE_CEL , $DIADEMA_MODELO , $DIADEMA_MODELO_2 , $DIADEMA_NUMERO_DE_SERIE , $VRIM_MARCA , $VRIM_NO_DE_CEL , $VRIM_MODELO, $VRIM_MODELO2 , $VRIM_NUMERO_DE_SERIE , $SEGURO_CONTRA_ACCIDENTES_MARCA , $SEGURO_CONTRA_ACCIDENTES_NO_DE_CEL , $SEGURO_CONTRA_ACCIDENTES_MODELO , $SEGURO_CONTRA_ACCIDENTES_MODELO_2 , $SEGURO_CONTRA_ACCIDENTES_NUMERO_DE_SERIE , $SEGURO_DE_VIDA_MARCA , $SEGURO_DE_VIDA_NO_DE_CEL , $SEGURO_DE_VIDA_MODELO , $SEGURO_DE_VIDA_MODELO_2 , $SEGURO_DE_VIDA_NUMERO_DE_SERIE , $SEGURO_DE_GASTOS_MEDICOS_MAYORES_MARCA , $SEGURO_DE_GASTOS_MEDICOS_NO_DE_CEL , $SEGURO_DE_GASTOS_MEDICOS_MODELO , $SEGURO_DE_GASTOS_MEDICOS_MODELO_2 , $SEGURO_DE_GASTOS_MEDICOS_NUMERO_DE_SERIE , $TARJETA_DE_VALES_DE_DESPENSA_MARCA , $TARJETA_DE_VALES_DE_DESPENSA_NO_DE_CEL , $TARJETA_DE_VALES_DE_DESPENSA_MODELO , $TARJETA_DE_VALES_DE_DESPENSA_MODELO_2 , $TARJETA_DE_VALES_DE_DESPENSA_NUMERO_DE_SERIE , $TARJETA_VALES_GASOLINA_MARCA , $TARJETA_VALES_GASOLINA_NO_DE_CEL , $TARJETA_VALES_GASOLINA_MODELO , $TARJETA_VALES_GASOLINA_MODELO_2 , $TARJETA_VALES_GASOLINA_NUMERO_DE_SERIE , $COMPUTADORA_FECHA_DE_ENTREGA , $COMPUTADORA_FECHA_DE_DEVOLUCION , $COMPUTADORA_OBSERVACIONES , $PANTALLA_FECHA_DE_ENTREGA , $PANTALLA_FECHA_DE_DEVOLUCION , $PANTALLA_OBSERVACIONES , $MOUSE_FECHA_DE_ENTREGA , $MOUSE_FECHA_DE_DEVOLUCION , $MOUSE_OBSERVACIONES , $DISCO_EXTERNO_FECHA_DE_ENTREGA , $DISCO_EXTERNO_FECHA_DE_DEVOLUCION , $DISCO_EXTERNO_OBSERVACIONES , $MATERIAL_EQUIPO_ASIGNADO_OTRO_FECHA_DE_ENTREGA , $MATERIAL_EQUIPO_ASIGNADO_OTRO_FECHA_DE_DEVOLUCION , $MATERIAL_EQUIPO_ASIGNADO_OTRO_OBSERVACIONES , $MATERIAL_EQUIPO_ASIGNADO_OTRO_FECHA_DE_ENTREGA_2 , $MATERIAL_EQUIPO_ASIGNADO_OTRO_FECHA_DE_DEVOLUCION_2 , $MATERIAL_EQUIPO_ASIGNADO_OTRO_OBSERVACIONES_2 , $TELEFONO_CELULAR_FECHA_DE_ENTREGA , $TELEFONO_CELULAR_FECHA_DE_DEVOLUCION , $TELEFONO_CELULAR_OBSERVACIONES , $DIADEMA_FECHA_DE_ENTREGA , $DIADEMA_FECHA_DE_DEVOLUCION , $DIADEMA_OBSERVACIONES , $VRIM_FECHA_DE_ENTREGA , $VRIM_FECHA_DE_DEVOLUCION , $VRIM_OBSERVACIONES , $SEGURO_CONTRA_ACCIDENTES_FECHA_DE_ENTREGA , $SEGURO_CONTRA_ACCIDENTES_FECHA_DE_DEVOLUCION , $SEGURO_CONTRA_ACCIDENTES_OBSERVACIONES , $SEGURO_DE_VIDA_FECHA_DE_ENTREGA , $SEGURO_DE_VIDA_FECHA_DE_DEVOLUCION , $SEGURO_DE_VIDA_OBSERVACIONES , $SEGURO_DE_GASTOS_MEDICOS_FECHA_DE_ENTREGA , $SEGURO_DE_GASTOS_MEDICOS_FECHA_DE_DEVOLUCION , $SEGURO_DE_GASTOS_MEDICOS_OBSERVACIONES , $TARJETA_DE_VALES_DE_DESPENSA_FECHA_DE_ENTREGA , $TARJETA_DE_VALES_DE_DESPENSA_FECHA_DE_DEVOLUCION , $TARJETA_DE_VALES_DE_DESPENSA_OBSERVACIONES , $TARJETA_DE_VALES_GASOLINA_FECHA_DE_ENTREGA , $TARJETA_DE_VALES_GASOLINA_FECHA_DE_DEVOLUCION , $TARJETA_DE_VALES_GASOLINA_OBSERVACIONES , $CMEASIGNADO1);
	
	//}
	
//include_once (__ROOT1__."/includes/crea_funciones.php");	
}
elseif($CMEASIGNADO2 =='CMEASIGNADO2'){
	
$TALLA_CAMISA_MARCA = isset($_POST["TALLA_CAMISA_MARCA"])?$_POST["TALLA_CAMISA_MARCA"]:"";
$TALLA_CAMISA_NO_DE_CEL = isset($_POST["TALLA_CAMISA_NO_DE_CEL"])?$_POST["TALLA_CAMISA_NO_DE_CEL"]:"";
$TALLA_CAMISA_MODELO = isset($_POST["TALLA_CAMISA_MODELO"])?$_POST["TALLA_CAMISA_MODELO"]:"";
$TALLA_CAMISA_MODELO_2 = isset($_POST["TALLA_CAMISA_MODELO_2"])?$_POST["TALLA_CAMISA_MODELO_2"]:"";
$TALLA_CAMISA_NUMERO_DE_SERIE = isset($_POST["TALLA_CAMISA_NUMERO_DE_SERIE"])?$_POST["TALLA_CAMISA_NUMERO_DE_SERIE"]:"";
$TALLA_PLAYERA_POLO_MARCA = isset($_POST["TALLA_PLAYERA_POLO_MARCA"])?$_POST["TALLA_PLAYERA_POLO_MARCA"]:"";
$TALLA_PLAYERA_NO_DE_CEL = isset($_POST["TALLA_PLAYERA_NO_DE_CEL"])?$_POST["TALLA_PLAYERA_NO_DE_CEL"]:"";
$TALLA_PLAYERA_MODELO = isset($_POST["TALLA_PLAYERA_MODELO"])?$_POST["TALLA_PLAYERA_MODELO"]:"";
$TALLA_PLAYERA_MODELO_2 = isset($_POST["TALLA_PLAYERA_MODELO_2"])?$_POST["TALLA_PLAYERA_MODELO_2"]:"";
$TALLA_PLAYERA_NUMERO_DE_SERIE = isset($_POST["TALLA_PLAYERA_NUMERO_DE_SERIE"])?$_POST["TALLA_PLAYERA_NUMERO_DE_SERIE"]:"";
$TALLA_PLAYERA_MARCA = isset($_POST["TALLA_PLAYERA_MARCA"])?$_POST["TALLA_PLAYERA_MARCA"]:"";
$TALLA_PANTALON_MARCA = isset($_POST["TALLA_PANTALON_MARCA"])?$_POST["TALLA_PANTALON_MARCA"]:"";
$TALLA_PANTALON_NO_DE_CEL = isset($_POST["TALLA_PANTALON_NO_DE_CEL"])?$_POST["TALLA_PANTALON_NO_DE_CEL"]:"";
$TALLA_PANTALON_MODELO = isset($_POST["TALLA_PANTALON_MODELO"])?$_POST["TALLA_PANTALON_MODELO"]:"";
$TALLA_PANTALON_MODELO_2 = isset($_POST["TALLA_PANTALON_MODELO_2"])?$_POST["TALLA_PANTALON_MODELO_2"]:"";
$TALLA_PANTALON_NUMERO_DE_SERIE = isset($_POST["TALLA_PANTALON_NUMERO_DE_SERIE"])?$_POST["TALLA_PANTALON_NUMERO_DE_SERIE"]:"";
$TALLA_CHAMARRA_MARCA = isset($_POST["TALLA_CHAMARRA_MARCA"])?$_POST["TALLA_CHAMARRA_MARCA"]:"";
$TALLA_CHAMARRA_NO_DE_CEL = isset($_POST["TALLA_CHAMARRA_NO_DE_CEL"])?$_POST["TALLA_CHAMARRA_NO_DE_CEL"]:"";
$TALLA_CHAMARRA_MODELO = isset($_POST["TALLA_CHAMARRA_MODELO"])?$_POST["TALLA_CHAMARRA_MODELO"]:"";
$TALLA_CHAMARRA_MODELO_2 = isset($_POST["TALLA_CHAMARRA_MODELO_2"])?$_POST["TALLA_CHAMARRA_MODELO_2"]:"";
$TALLA_CHAMARRA_NUMERO_DE_SERIE = isset($_POST["TALLA_CHAMARRA_NUMERO_DE_SERIE"])?$_POST["TALLA_CHAMARRA_NUMERO_DE_SERIE"]:"";
$TALLA_CHALECO_MARCA = isset($_POST["TALLA_CHALECO_MARCA"])?$_POST["TALLA_CHALECO_MARCA"]:"";
$TALLA_CHALECO_NO_DE_CEL = isset($_POST["TALLA_CHALECO_NO_DE_CEL"])?$_POST["TALLA_CHALECO_NO_DE_CEL"]:"";
$TALLA_CHALECO_MODELO = isset($_POST["TALLA_CHALECO_MODELO"])?$_POST["TALLA_CHALECO_MODELO"]:"";
$TALLA_CHALECO_MODELO_2 = isset($_POST["TALLA_CHALECO_MODELO_2"])?$_POST["TALLA_CHALECO_MODELO_2"]:"";
$TALLA_CHALECO_NUMERO_DE_SERIE = isset($_POST["TALLA_CHALECO_NUMERO_DE_SERIE"])?$_POST["TALLA_CHALECO_NUMERO_DE_SERIE"]:"";
$TALLA_TENIS_MARCA = isset($_POST["TALLA_TENIS_MARCA"])?$_POST["TALLA_TENIS_MARCA"]:"";
$TALLA_TENIS_NO_DE_CEL = isset($_POST["TALLA_TENIS_NO_DE_CEL"])?$_POST["TALLA_TENIS_NO_DE_CEL"]:"";
$TALLA_TENIS_MODELO = isset($_POST["TALLA_TENIS_MODELO"])?$_POST["TALLA_TENIS_MODELO"]:"";
$TALLA_TENIS_MODELO_2 = isset($_POST["TALLA_TENIS_MODELO_2"])?$_POST["TALLA_TENIS_MODELO_2"]:"";
$TALLA_TENIS_NUMERO_DE_SERIE = isset($_POST["TALLA_TENIS_NUMERO_DE_SERIE"])?$_POST["TALLA_TENIS_NUMERO_DE_SERIE"]:"";
$GORRA_MARCA = isset($_POST["GORRA_MARCA"])?$_POST["GORRA_MARCA"]:"";
$GORRA_NO_DE_CEL = isset($_POST["GORRA_NO_DE_CEL"])?$_POST["GORRA_NO_DE_CEL"]:"";
$GORRA_MODELO = isset($_POST["GORRA_MODELO"])?$_POST["GORRA_MODELO"]:"";
$GORRA_MODELO_2 = isset($_POST["GORRA_MODELO_2"])?$_POST["GORRA_MODELO_2"]:"";
$GORRA_NUMERO_DE_SERIE = isset($_POST["GORRA_NUMERO_DE_SERIE"])?$_POST["GORRA_NUMERO_DE_SERIE"]:"";
$MALETA_GRANDE_MARCA = isset($_POST["MALETA_GRANDE_MARCA"])?$_POST["MALETA_GRANDE_MARCA"]:"";
$MALETA_GRANDE_NO_DE_CEL = isset($_POST["MALETA_GRANDE_NO_DE_CEL"])?$_POST["MALETA_GRANDE_NO_DE_CEL"]:"";
$MALETA_GRANDE_MODELO = isset($_POST["MALETA_GRANDE_MODELO"])?$_POST["MALETA_GRANDE_MODELO"]:"";
$MALETA_GRANDE_MODELO_2 = isset($_POST["MALETA_GRANDE_MODELO_2"])?$_POST["MALETA_GRANDE_MODELO_2"]:"";
$MALETA_GRANDE_NUMERO_DE_SERIE = isset($_POST["MALETA_GRANDE_NUMERO_DE_SERIE"])?$_POST["MALETA_GRANDE_NUMERO_DE_SERIE"]:"";
$MALETA_MEDIANA_MARCA = isset($_POST["MALETA_MEDIANA_MARCA"])?$_POST["MALETA_MEDIANA_MARCA"]:"";
$MALETA_MEDIANA_NO_DE_CEL = isset($_POST["MALETA_MEDIANA_NO_DE_CEL"])?$_POST["MALETA_MEDIANA_NO_DE_CEL"]:"";
$MALETA_MEDIANA_MODELO = isset($_POST["MALETA_MEDIANA_MODELO"])?$_POST["MALETA_MEDIANA_MODELO"]:"";
$MALETA_MEDIANA_MODELO_2 = isset($_POST["MALETA_MEDIANA_MODELO_2"])?$_POST["MALETA_MEDIANA_MODELO_2"]:"";
$MALETA_MEDIANA_NUMERO_DE_SERIE = isset($_POST["MALETA_MEDIANA_NUMERO_DE_SERIE"])?$_POST["MALETA_MEDIANA_NUMERO_DE_SERIE"]:"";
$MALETA_CHICA_MARCA = isset($_POST["MALETA_CHICA_MARCA"])?$_POST["MALETA_CHICA_MARCA"]:"";
$MALETA_CHICA_NO_DE_CEL = isset($_POST["MALETA_CHICA_NO_DE_CEL"])?$_POST["MALETA_CHICA_NO_DE_CEL"]:"";
$MALETA_CHICA_MODELO = isset($_POST["MALETA_CHICA_MODELO"])?$_POST["MALETA_CHICA_MODELO"]:"";
$MALETA_CHICA_MODELO_2 = isset($_POST["MALETA_CHICA_MODELO_2"])?$_POST["MALETA_CHICA_MODELO_2"]:"";
$MALETA_CHICA_NUMERO_DE_SERIE = isset($_POST["MALETA_CHICA_NUMERO_DE_SERIE"])?$_POST["MALETA_CHICA_NUMERO_DE_SERIE"]:"";
$BACK_PACK_MARCA = isset($_POST["BACK_PACK_MARCA"])?$_POST["BACK_PACK_MARCA"]:"";
$BACK_PACK_NO_DE_CEL = isset($_POST["BACK_PACK_NO_DE_CEL"])?$_POST["BACK_PACK_NO_DE_CEL"]:"";
$BACK_PACK_MODELO = isset($_POST["BACK_PACK_MODELO"])?$_POST["BACK_PACK_MODELO"]:"";
$BACK_PACK_MODELO_2 = isset($_POST["BACK_PACK_MODELO_2"])?$_POST["BACK_PACK_MODELO_2"]:"";
$BACK_PACK_NUMERO_DE_SERIE = isset($_POST["BACK_PACK_NUMERO_DE_SERIE"])?$_POST["BACK_PACK_NUMERO_DE_SERIE"]:"";
$OTROS_MARCA = isset($_POST["OTROS_MARCA"])?$_POST["OTROS_MARCA"]:"";
$OTROS_NO_DE_CEL = isset($_POST["OTROS_NO_DE_CEL"])?$_POST["OTROS_NO_DE_CEL"]:"";
$OTROS_MODELO = isset($_POST["OTROS_MODELO"])?$_POST["OTROS_MODELO"]:"";
$OTROS_MODELO_2 = isset($_POST["OTROS_MODELO_2"])?$_POST["OTROS_MODELO_2"]:"";
$OTROS_NUMERO_DE_SERIE = isset($_POST["OTROS_NUMERO_DE_SERIE"])?$_POST["OTROS_NUMERO_DE_SERIE"]:"";
$OTROS_2_MARCA = isset($_POST["OTROS_2_MARCA"])?$_POST["OTROS_2_MARCA"]:"";
$OTROS_2_NO_DE_CEL = isset($_POST["OTROS_2_NO_DE_CEL"])?$_POST["OTROS_2_NO_DE_CEL"]:"";
$OTROS_2_MODELO = isset($_POST["OTROS_2_MODELO"])?$_POST["OTROS_2_MODELO"]:"";
$OTROS_2_MODELO_2 = isset($_POST["OTROS_2_MODELO_2"])?$_POST["OTROS_2_MODELO_2"]:"";
$OTROS_2_NUMERO_DE_SERIE = isset($_POST["OTROS_2_NUMERO_DE_SERIE"])?$_POST["OTROS_2_NUMERO_DE_SERIE"]:"";
$OTROS_3_MARCA = isset($_POST["OTROS_3_MARCA"])?$_POST["OTROS_3_MARCA"]:"";
$OTROS_3_NO_DE_CEL = isset($_POST["OTROS_3_NO_DE_CEL"])?$_POST["OTROS_3_NO_DE_CEL"]:"";
$OTROS_3_MODELO = isset($_POST["OTROS_3_MODELO"])?$_POST["OTROS_3_MODELO"]:"";
$OTROS_3_MODELO_2 = isset($_POST["OTROS_3_MODELO_2"])?$_POST["OTROS_3_MODELO_2"]:"";
$OTROS_3_NUMERO_DE_SERIE = isset($_POST["OTROS_3_NUMERO_DE_SERIE"])?$_POST["OTROS_3_NUMERO_DE_SERIE"]:"";
$OTROS_4_MARCA = isset($_POST["OTROS_4_MARCA"])?$_POST["OTROS_4_MARCA"]:"";
$OTROS_4_NO_DE_CEL = isset($_POST["OTROS_4_NO_DE_CEL"])?$_POST["OTROS_4_NO_DE_CEL"]:"";
$OTROS_4_MODELO = isset($_POST["OTROS_4_MODELO"])?$_POST["OTROS_4_MODELO"]:"";
$OTROS_4_MODELO_2 = isset($_POST["OTROS_4_MODELO_2"])?$_POST["OTROS_4_MODELO_2"]:"";
$OTROS_4_NUMERO_DE_SERIE = isset($_POST["OTROS_4_NUMERO_DE_SERIE"])?$_POST["OTROS_4_NUMERO_DE_SERIE"]:"";
$TALLA_CAMISA_FECHA_DE_ENTREGA = isset($_POST["TALLA_CAMISA_FECHA_DE_ENTREGA"])?$_POST["TALLA_CAMISA_FECHA_DE_ENTREGA"]:"";
$TALLA_CAMISA_FECHA_DE_DEVOLUCION = isset($_POST["TALLA_CAMISA_FECHA_DE_DEVOLUCION"])?$_POST["TALLA_CAMISA_FECHA_DE_DEVOLUCION"]:"";
$TALLA_CAMISA_OBSERVACIONES = isset($_POST["TALLA_CAMISA_OBSERVACIONES"])?$_POST["TALLA_CAMISA_OBSERVACIONES"]:"";
$TALLA_PLAYERA_FECHA_DE_ENTREGA = isset($_POST["TALLA_PLAYERA_FECHA_DE_ENTREGA"])?$_POST["TALLA_PLAYERA_FECHA_DE_ENTREGA"]:"";
$TALLA_PLAYERA_FECHA_DE_DEVOLUCION = isset($_POST["TALLA_PLAYERA_FECHA_DE_DEVOLUCION"])?$_POST["TALLA_PLAYERA_FECHA_DE_DEVOLUCION"]:"";
$TALLA_PLAYERA_OBSERVACIONES = isset($_POST["TALLA_PLAYERA_OBSERVACIONES"])?$_POST["TALLA_PLAYERA_OBSERVACIONES"]:"";


$PLAYERA_FECHA_polo_ENTREGA = isset($_POST["PLAYERA_FECHA_polo_ENTREGA"])?$_POST["PLAYERA_FECHA_polo_ENTREGA"]:"";
$PLAYERA_FECHA_polo_DEVOLUCION = isset($_POST["PLAYERA_FECHA_polo_DEVOLUCION"])?$_POST["PLAYERA_FECHA_polo_DEVOLUCION"]:"";
$PLAYERA_polo_OBSERVACIONES = isset($_POST["PLAYERA_polo_OBSERVACIONES"])?$_POST["PLAYERA_polo_OBSERVACIONES"]:"";


$TALLA_PANTALON_FECHA_DE_ENTREGA = isset($_POST["TALLA_PANTALON_FECHA_DE_ENTREGA"])?$_POST["TALLA_PANTALON_FECHA_DE_ENTREGA"]:"";
$TALLA_PANTALON_FECHA_DE_DEVOLUCION = isset($_POST["TALLA_PANTALON_FECHA_DE_DEVOLUCION"])?$_POST["TALLA_PANTALON_FECHA_DE_DEVOLUCION"]:"";
$TALLA_PANTALON_OBSERVACIONES = isset($_POST["TALLA_PANTALON_OBSERVACIONES"])?$_POST["TALLA_PANTALON_OBSERVACIONES"]:"";
$TALLA_CHAMARRA_FECHA_DE_ENTREGA = isset($_POST["TALLA_CHAMARRA_FECHA_DE_ENTREGA"])?$_POST["TALLA_CHAMARRA_FECHA_DE_ENTREGA"]:"";
$TALLA_CHAMARRA_FECHA_DE_DEVOLUCION = isset($_POST["TALLA_CHAMARRA_FECHA_DE_DEVOLUCION"])?$_POST["TALLA_CHAMARRA_FECHA_DE_DEVOLUCION"]:"";
$TALLA_CHAMARRA_OBSERVACIONES = isset($_POST["TALLA_CHAMARRA_OBSERVACIONES"])?$_POST["TALLA_CHAMARRA_OBSERVACIONES"]:"";
$TALLA_CHALECO_FECHA_DE_ENTREGA = isset($_POST["TALLA_CHALECO_FECHA_DE_ENTREGA"])?$_POST["TALLA_CHALECO_FECHA_DE_ENTREGA"]:"";
$TALLA_CHALECO_FECHA_DE_DEVOLUCION = isset($_POST["TALLA_CHALECO_FECHA_DE_DEVOLUCION"])?$_POST["TALLA_CHALECO_FECHA_DE_DEVOLUCION"]:"";
$TALLA_CHALECO_OBSERVACIONES = isset($_POST["TALLA_CHALECO_OBSERVACIONES"])?$_POST["TALLA_CHALECO_OBSERVACIONES"]:"";
$TALLA_TENIS_FECHA_DE_ENTREGA = isset($_POST["TALLA_TENIS_FECHA_DE_ENTREGA"])?$_POST["TALLA_TENIS_FECHA_DE_ENTREGA"]:"";
$TALLA_TENIS_FECHA_DE_DEVOLUCION = isset($_POST["TALLA_TENIS_FECHA_DE_DEVOLUCION"])?$_POST["TALLA_TENIS_FECHA_DE_DEVOLUCION"]:"";
$TALLA_TENIS_OBSERVACIONES = isset($_POST["TALLA_TENIS_OBSERVACIONES"])?$_POST["TALLA_TENIS_OBSERVACIONES"]:"";
$GORRA_FECHA_DE_ENTREGA = isset($_POST["GORRA_FECHA_DE_ENTREGA"])?$_POST["GORRA_FECHA_DE_ENTREGA"]:"";
$GORRA_FECHA_DE_DEVOLUCION = isset($_POST["GORRA_FECHA_DE_DEVOLUCION"])?$_POST["GORRA_FECHA_DE_DEVOLUCION"]:"";
$GORRA_OBSERVACIONES = isset($_POST["GORRA_OBSERVACIONES"])?$_POST["GORRA_OBSERVACIONES"]:"";
$MALETA_GRANDE_FECHA_DE_ENTREGA = isset($_POST["MALETA_GRANDE_FECHA_DE_ENTREGA"])?$_POST["MALETA_GRANDE_FECHA_DE_ENTREGA"]:"";
$MALETA_GRANDE_FECHA_DE_DEVOLUCION = isset($_POST["MALETA_GRANDE_FECHA_DE_DEVOLUCION"])?$_POST["MALETA_GRANDE_FECHA_DE_DEVOLUCION"]:"";
$MALETA_GRANDE_OBSERVACIONES = isset($_POST["MALETA_GRANDE_OBSERVACIONES"])?$_POST["MALETA_GRANDE_OBSERVACIONES"]:"";
$MALETA_MEDIANA_FECHA_DE_ENTREGA = isset($_POST["MALETA_MEDIANA_FECHA_DE_ENTREGA"])?$_POST["MALETA_MEDIANA_FECHA_DE_ENTREGA"]:"";
$MALETA_MEDIANA_FECHA_DE_DEVOLUCION = isset($_POST["MALETA_MEDIANA_FECHA_DE_DEVOLUCION"])?$_POST["MALETA_MEDIANA_FECHA_DE_DEVOLUCION"]:"";
$MALETA_MEDIANA_OBSERVACIONES = isset($_POST["MALETA_MEDIANA_OBSERVACIONES"])?$_POST["MALETA_MEDIANA_OBSERVACIONES"]:"";
$MALETA_CHICA_FECHA_DE_ENTREGA = isset($_POST["MALETA_CHICA_FECHA_DE_ENTREGA"])?$_POST["MALETA_CHICA_FECHA_DE_ENTREGA"]:"";
$MALETA_CHICA_FECHA_DE_DEVOLUCION = isset($_POST["MALETA_CHICA_FECHA_DE_DEVOLUCION"])?$_POST["MALETA_CHICA_FECHA_DE_DEVOLUCION"]:"";
$MALETA_CHICA_OBSERVACIONES = isset($_POST["MALETA_CHICA_OBSERVACIONES"])?$_POST["MALETA_CHICA_OBSERVACIONES"]:"";
$BACK_PACK_FECHA_DE_ENTREGA = isset($_POST["BACK_PACK_FECHA_DE_ENTREGA"])?$_POST["BACK_PACK_FECHA_DE_ENTREGA"]:"";
$BACK_PACK_FECHA_DE_DEVOLUCION = isset($_POST["BACK_PACK_FECHA_DE_DEVOLUCION"])?$_POST["BACK_PACK_FECHA_DE_DEVOLUCION"]:"";
$BACK_PACK_OBSERVACIONES = isset($_POST["BACK_PACK_OBSERVACIONES"])?$_POST["BACK_PACK_OBSERVACIONES"]:"";
$OTROS_FECHA_DE_ENTREGA = isset($_POST["OTROS_FECHA_DE_ENTREGA"])?$_POST["OTROS_FECHA_DE_ENTREGA"]:"";
$OTROS_FECHA_DE_DEVOLUCION = isset($_POST["OTROS_FECHA_DE_DEVOLUCION"])?$_POST["OTROS_FECHA_DE_DEVOLUCION"]:"";
$OTROS_OBSERVACIONES = isset($_POST["OTROS_OBSERVACIONES"])?$_POST["OTROS_OBSERVACIONES"]:"";
$OTROS_2_FECHA_DE_ENTREGA = isset($_POST["OTROS_2_FECHA_DE_ENTREGA"])?$_POST["OTROS_2_FECHA_DE_ENTREGA"]:"";
$OTROS_2_FECHA_DE_DEVOLUCION = isset($_POST["OTROS_2_FECHA_DE_DEVOLUCION"])?$_POST["OTROS_2_FECHA_DE_DEVOLUCION"]:"";
$OTROS_2_OBSERVACIONES = isset($_POST["OTROS_2_OBSERVACIONES"])?$_POST["OTROS_2_OBSERVACIONES"]:"";
$OTROS_3_FECHA_DE_ENTREGA = isset($_POST["OTROS_3_FECHA_DE_ENTREGA"])?$_POST["OTROS_3_FECHA_DE_ENTREGA"]:"";
$OTROS_3_FECHA_DE_DEVOLUCION = isset($_POST["OTROS_3_FECHA_DE_DEVOLUCION"])?$_POST["OTROS_3_FECHA_DE_DEVOLUCION"]:"";
$OTROS_3_OBSERVACIONES = isset($_POST["OTROS_3_OBSERVACIONES"])?$_POST["OTROS_3_OBSERVACIONES"]:"";
$OTROS_4_FECHA_DE_ENTREGA = isset($_POST["OTROS_4_FECHA_DE_ENTREGA"])?$_POST["OTROS_4_FECHA_DE_ENTREGA"]:"";
$OTROS_4_FECHA_DE_DEVOLUCION = isset($_POST["OTROS_4_FECHA_DE_DEVOLUCION"])?$_POST["OTROS_4_FECHA_DE_DEVOLUCION"]:"";
$OTROS_4_OBSERVACIONES = isset($_POST["OTROS_4_OBSERVACIONES"])?$_POST["OTROS_4_OBSERVACIONES"]:"";
$CMEASIGNADO2 = isset($_POST["CMEASIGNADO2"])?$_POST["CMEASIGNADO2"]:""; 	
	/**/
	

	echo $conexion->guardar_MEASIGNADO2($TALLA_CAMISA_MARCA , $TALLA_CAMISA_NO_DE_CEL , $TALLA_CAMISA_MODELO , $TALLA_CAMISA_MODELO_2 , $TALLA_CAMISA_NUMERO_DE_SERIE , $TALLA_PLAYERA_POLO_MARCA , $TALLA_PLAYERA_NO_DE_CEL , $TALLA_PLAYERA_MODELO , $TALLA_PLAYERA_MODELO_2 , $TALLA_PLAYERA_NUMERO_DE_SERIE , $TALLA_PLAYERA_MARCA , $TALLA_PANTALON_MARCA , $TALLA_PANTALON_NO_DE_CEL , $TALLA_PANTALON_MODELO , $TALLA_PANTALON_MODELO_2 , $TALLA_PANTALON_NUMERO_DE_SERIE , $TALLA_CHAMARRA_MARCA , $TALLA_CHAMARRA_NO_DE_CEL , $TALLA_CHAMARRA_MODELO , $TALLA_CHAMARRA_MODELO_2 , $TALLA_CHAMARRA_NUMERO_DE_SERIE , $TALLA_CHALECO_MARCA , $TALLA_CHALECO_NO_DE_CEL , $TALLA_CHALECO_MODELO , $TALLA_CHALECO_MODELO_2 , $TALLA_CHALECO_NUMERO_DE_SERIE , $TALLA_TENIS_MARCA , $TALLA_TENIS_NO_DE_CEL , $TALLA_TENIS_MODELO , $TALLA_TENIS_MODELO_2 , $TALLA_TENIS_NUMERO_DE_SERIE , $GORRA_MARCA , $GORRA_NO_DE_CEL , $GORRA_MODELO , $GORRA_MODELO_2 , $GORRA_NUMERO_DE_SERIE , $MALETA_GRANDE_MARCA , $MALETA_GRANDE_NO_DE_CEL , $MALETA_GRANDE_MODELO , $MALETA_GRANDE_MODELO_2 , $MALETA_GRANDE_NUMERO_DE_SERIE , $MALETA_MEDIANA_MARCA , $MALETA_MEDIANA_NO_DE_CEL , $MALETA_MEDIANA_MODELO , $MALETA_MEDIANA_MODELO_2 , $MALETA_MEDIANA_NUMERO_DE_SERIE , $MALETA_CHICA_MARCA , $MALETA_CHICA_NO_DE_CEL , $MALETA_CHICA_MODELO , $MALETA_CHICA_MODELO_2 , $MALETA_CHICA_NUMERO_DE_SERIE , $BACK_PACK_MARCA , $BACK_PACK_NO_DE_CEL , $BACK_PACK_MODELO , $BACK_PACK_MODELO_2 , $BACK_PACK_NUMERO_DE_SERIE , $OTROS_MARCA , $OTROS_NO_DE_CEL , $OTROS_MODELO , $OTROS_MODELO_2 , $OTROS_NUMERO_DE_SERIE , $OTROS_2_MARCA , $OTROS_2_NO_DE_CEL , $OTROS_2_MODELO , $OTROS_2_MODELO_2 , $OTROS_2_NUMERO_DE_SERIE , $OTROS_3_MARCA , $OTROS_3_NO_DE_CEL , $OTROS_3_MODELO , $OTROS_3_MODELO_2 , $OTROS_3_NUMERO_DE_SERIE , $OTROS_4_MARCA , $OTROS_4_NO_DE_CEL , $OTROS_4_MODELO , $OTROS_4_MODELO_2 , $OTROS_4_NUMERO_DE_SERIE , $TALLA_CAMISA_FECHA_DE_ENTREGA , $TALLA_CAMISA_FECHA_DE_DEVOLUCION , $TALLA_CAMISA_OBSERVACIONES , $TALLA_PLAYERA_FECHA_DE_ENTREGA , $TALLA_PLAYERA_FECHA_DE_DEVOLUCION , $TALLA_PLAYERA_OBSERVACIONES , $PLAYERA_FECHA_polo_ENTREGA, $PLAYERA_FECHA_polo_DEVOLUCION, $PLAYERA_polo_OBSERVACIONES, $TALLA_PANTALON_FECHA_DE_ENTREGA , $TALLA_PANTALON_FECHA_DE_DEVOLUCION , $TALLA_PANTALON_OBSERVACIONES , $TALLA_CHAMARRA_FECHA_DE_ENTREGA , $TALLA_CHAMARRA_FECHA_DE_DEVOLUCION , $TALLA_CHAMARRA_OBSERVACIONES , $TALLA_CHALECO_FECHA_DE_ENTREGA , $TALLA_CHALECO_FECHA_DE_DEVOLUCION , $TALLA_CHALECO_OBSERVACIONES , $TALLA_TENIS_FECHA_DE_ENTREGA , $TALLA_TENIS_FECHA_DE_DEVOLUCION , $TALLA_TENIS_OBSERVACIONES , $GORRA_FECHA_DE_ENTREGA , $GORRA_FECHA_DE_DEVOLUCION , $GORRA_OBSERVACIONES , $MALETA_GRANDE_FECHA_DE_ENTREGA , $MALETA_GRANDE_FECHA_DE_DEVOLUCION , $MALETA_GRANDE_OBSERVACIONES , $MALETA_MEDIANA_FECHA_DE_ENTREGA , $MALETA_MEDIANA_FECHA_DE_DEVOLUCION , $MALETA_MEDIANA_OBSERVACIONES , $MALETA_CHICA_FECHA_DE_ENTREGA , $MALETA_CHICA_FECHA_DE_DEVOLUCION , $MALETA_CHICA_OBSERVACIONES , $BACK_PACK_FECHA_DE_ENTREGA , $BACK_PACK_FECHA_DE_DEVOLUCION , $BACK_PACK_OBSERVACIONES , $OTROS_FECHA_DE_ENTREGA , $OTROS_FECHA_DE_DEVOLUCION , $OTROS_OBSERVACIONES , $OTROS_2_FECHA_DE_ENTREGA , $OTROS_2_FECHA_DE_DEVOLUCION , $OTROS_2_OBSERVACIONES , $OTROS_3_FECHA_DE_ENTREGA , $OTROS_3_FECHA_DE_DEVOLUCION , $OTROS_3_OBSERVACIONES , $OTROS_4_FECHA_DE_ENTREGA , $OTROS_4_FECHA_DE_DEVOLUCION , $OTROS_4_OBSERVACIONES , $CMEASIGNADO2);

	
}
elseif($CMEASIGNADO3 =='CMEASIGNADO3'){

$A_TALLA = isset($_POST["A_TALLA"])?$_POST["A_TALLA"]:"";
$A_FECHA_DE_ENTREGA = isset($_POST["A_FECHA_DE_ENTREGA"])?$_POST["A_FECHA_DE_ENTREGA"]:"";
$A_FECHA_DE_DEVOLUCION = isset($_POST["A_FECHA_DE_DEVOLUCION"])?$_POST["A_FECHA_DE_DEVOLUCION"]:"";
$A_OBSERVACIONES = isset($_POST["A_OBSERVACIONES"])?$_POST["A_OBSERVACIONES"]:"";
$B_TALLA = isset($_POST["B_TALLA"])?$_POST["B_TALLA"]:"";
$B_FECHA_DE_ENTREGA = isset($_POST["B_FECHA_DE_ENTREGA"])?$_POST["B_FECHA_DE_ENTREGA"]:"";
$B_FECHA_DE_DEVOLUCION = isset($_POST["B_FECHA_DE_DEVOLUCION"])?$_POST["B_FECHA_DE_DEVOLUCION"]:"";
$DANIEL_OBSERVACIONES = isset($_POST["DANIEL_OBSERVACIONES"])?$_POST["DANIEL_OBSERVACIONES"]:"";
$DANIEL_TALLA = isset($_POST["DANIEL_TALLA"])?$_POST["DANIEL_TALLA"]:"";
$C_FECHA_DE_ENTREGA = isset($_POST["C_FECHA_DE_ENTREGA"])?$_POST["C_FECHA_DE_ENTREGA"]:"";
$C_FECHA_DE_DEVOLUCION = isset($_POST["C_FECHA_DE_DEVOLUCION"])?$_POST["C_FECHA_DE_DEVOLUCION"]:"";
$C_OBSERVACIONES = isset($_POST["C_OBSERVACIONES"])?$_POST["C_OBSERVACIONES"]:"";
$D_TALLA = isset($_POST["D_TALLA"])?$_POST["D_TALLA"]:"";
$D_FECHA_DE_ENTREGA = isset($_POST["D_FECHA_DE_ENTREGA"])?$_POST["D_FECHA_DE_ENTREGA"]:"";
$D_FECHA_DE_DEVOLUCION = isset($_POST["D_FECHA_DE_DEVOLUCION"])?$_POST["D_FECHA_DE_DEVOLUCION"]:"";
$D_OBSERVACIONES = isset($_POST["D_OBSERVACIONES"])?$_POST["D_OBSERVACIONES"]:"";
$E_TALLA = isset($_POST["E_TALLA"])?$_POST["E_TALLA"]:"";
$E_FECHA_DE_ENTREGA = isset($_POST["E_FECHA_DE_ENTREGA"])?$_POST["E_FECHA_DE_ENTREGA"]:"";
$E_FECHA_DE_DEVOLUCION = isset($_POST["E_FECHA_DE_DEVOLUCION"])?$_POST["E_FECHA_DE_DEVOLUCION"]:"";
$E_OBSERVACIONES = isset($_POST["E_OBSERVACIONES"])?$_POST["E_OBSERVACIONES"]:"";
$F_TALLA = isset($_POST["F_TALLA"])?$_POST["F_TALLA"]:"";
$F_FECHA_DE_ENTREGA = isset($_POST["F_FECHA_DE_ENTREGA"])?$_POST["F_FECHA_DE_ENTREGA"]:"";
$F_FECHA_DE_DEVOLUCION = isset($_POST["F_FECHA_DE_DEVOLUCION"])?$_POST["F_FECHA_DE_DEVOLUCION"]:"";
$F_OBSERVACIONES = isset($_POST["F_OBSERVACIONES"])?$_POST["F_OBSERVACIONES"]:"";
$G_TALLA = isset($_POST["G_TALLA"])?$_POST["G_TALLA"]:"";
$G_FECHA_DE_ENTREGA = isset($_POST["G_FECHA_DE_ENTREGA"])?$_POST["G_FECHA_DE_ENTREGA"]:"";
$G_FECHA_DE_DEVOLUCION = isset($_POST["G_FECHA_DE_DEVOLUCION"])?$_POST["G_FECHA_DE_DEVOLUCION"]:"";
$G_OBSERVACIONES = isset($_POST["G_OBSERVACIONES"])?$_POST["G_OBSERVACIONES"]:"";
$CMEASIGNADO3 = isset($_POST["CMEASIGNADO3"])?$_POST["CMEASIGNADO3"]:"";

	//include_once (__ROOT1__."/includes/crea_funciones.php");
	echo $conexion->guardar_MEASIGNADO3 ($A_TALLA , $A_FECHA_DE_ENTREGA , $A_FECHA_DE_DEVOLUCION , $A_OBSERVACIONES , $B_TALLA , $B_FECHA_DE_ENTREGA , $B_FECHA_DE_DEVOLUCION , $DANIEL_OBSERVACIONES , $DANIEL_TALLA , $C_FECHA_DE_ENTREGA , $C_FECHA_DE_DEVOLUCION , $C_OBSERVACIONES , $D_TALLA , $D_FECHA_DE_ENTREGA , $D_FECHA_DE_DEVOLUCION , $D_OBSERVACIONES , $E_TALLA , $E_FECHA_DE_ENTREGA , $E_FECHA_DE_DEVOLUCION , $E_OBSERVACIONES , $F_TALLA , $F_FECHA_DE_ENTREGA , $F_FECHA_DE_DEVOLUCION , $F_OBSERVACIONES , $G_TALLA , $G_FECHA_DE_ENTREGA , $G_FECHA_DE_DEVOLUCION , $G_OBSERVACIONES , $CMEASIGNADO3 );

}
elseif($iTempresarial == 'iTempresarial' or $ITEMPRESARIAL2 == 'ITEMPRESARIAL2'){

$FECHA_ENTREGA_TARJETA = isset($_POST["FECHA_ENTREGA_TARJETA"])?$_POST["FECHA_ENTREGA_TARJETA"]:"";
$FECHA_DEVOLUCION_TARJETA = isset($_POST["FECHA_DEVOLUCION_TARJETA"])?$_POST["FECHA_DEVOLUCION_TARJETA"]:"";
$TTARJETA = isset($_POST["TTARJETA"])?$_POST["TTARJETA"]:"";
$TBANCO = isset($_POST["TBANCO"])?$_POST["TBANCO"]:"";
$T_TIPO_TARJETA = isset($_POST["T_TIPO_TARJETA"])?$_POST["T_TIPO_TARJETA"]:"";
$T_NUMERO_TARJETA = isset($_POST["T_NUMERO_TARJETA"])?$_POST["T_NUMERO_TARJETA"]:"";
$T_FECHA_VENCIMIENTO = isset($_POST["T_FECHA_VENCIMIENTO"])?$_POST["T_FECHA_VENCIMIENTO"]:"";
$T_CODIGO_SEGURIDAD = isset($_POST["T_CODIGO_SEGURIDAD"])?$_POST["T_CODIGO_SEGURIDAD"]:"";
$T_LIMITE_CREDITO = isset($_POST["T_LIMITE_CREDITO"])?$_POST["T_LIMITE_CREDITO"]:"";
$T_FECHA_CORTE = isset($_POST["T_FECHA_CORTE"])?$_POST["T_FECHA_CORTE"]:"";
$T_FECHA_LIMITE = isset($_POST["T_FECHA_LIMITE"])?$_POST["T_FECHA_LIMITE"]:"";
$T_NIP = isset($_POST["T_NIP"])?$_POST["T_NIP"]:"";
$T_USUARIO = isset($_POST["T_USUARIO"])?$_POST["T_USUARIO"]:"";
$T_CONTRASENA = isset($_POST["T_CONTRASENA"])?$_POST["T_CONTRASENA"]:"";
$T_TELEFONO_EXTRAVIO = isset($_POST["T_TELEFONO_EXTRAVIO"])?$_POST["T_TELEFONO_EXTRAVIO"]:"";
$T_TELEFONO_EXTRAVIO1 = isset($_POST["T_TELEFONO_EXTRAVIO1"])?$_POST["T_TELEFONO_EXTRAVIO1"]:"";
$T_TELEFONO_EXTRAVIO2 = isset($_POST["T_TELEFONO_EXTRAVIO2"])?$_POST["T_TELEFONO_EXTRAVIO2"]:"";
$T_TELEFONO_EXTRAVIO3 = isset($_POST["T_TELEFONO_EXTRAVIO3"])?$_POST["T_TELEFONO_EXTRAVIO3"]:"";
$T_DIRECCION_COMPLETA = isset($_POST["T_DIRECCION_COMPLETA"])?$_POST["T_DIRECCION_COMPLETA"]:"";
$T_TELEFONO_TARJETA = isset($_POST["T_TELEFONO_TARJETA"])?$_POST["T_TELEFONO_TARJETA"]:"";
$T_CORREO_ALTA = isset($_POST["T_CORREO_ALTA"])?$_POST["T_CORREO_ALTA"]:"";
$T_FECHA_BAJA = isset($_POST["T_FECHA_BAJA"])?$_POST["T_FECHA_BAJA"]:"";
$T_NUMERO_REPORTE = isset($_POST["T_NUMERO_REPORTE"])?$_POST["T_NUMERO_REPORTE"]:"";
$T_NOMBRE_OPERADOR = isset($_POST["T_NOMBRE_OPERADOR"])?$_POST["T_NOMBRE_OPERADOR"]:"";
$T_OBSERVACIONES_1 = isset($_POST["T_OBSERVACIONES_1"])?$_POST["T_OBSERVACIONES_1"]:"";
$T_OBSERVACIONES_2 = isset($_POST["T_OBSERVACIONES_2"])?$_POST["T_OBSERVACIONES_2"]:"";
$iTempresarial = isset($_POST["iTempresarial"])?$_POST["iTempresarial"]:""; 
$IpTEMPRESARIAL = isset($_POST["IpTEMPRESARIAL"])?$_POST["IpTEMPRESARIAL"]:""; 


echo $conexion->guardarTempresarial ( $FECHA_ENTREGA_TARJETA , $FECHA_DEVOLUCION_TARJETA , $TTARJETA , $TBANCO , $T_TIPO_TARJETA , $T_NUMERO_TARJETA , $T_FECHA_VENCIMIENTO , $T_CODIGO_SEGURIDAD , $T_LIMITE_CREDITO , $T_FECHA_CORTE , $T_FECHA_LIMITE , $T_NIP , $T_USUARIO , $T_CONTRASENA , $T_TELEFONO_EXTRAVIO ,$T_TELEFONO_EXTRAVIO1,$T_TELEFONO_EXTRAVIO2,$T_TELEFONO_EXTRAVIO3, $T_DIRECCION_COMPLETA , $T_TELEFONO_TARJETA , $T_CORREO_ALTA , $T_FECHA_BAJA , $T_NUMERO_REPORTE , $T_NOMBRE_OPERADOR , $T_OBSERVACIONES_1 , $T_OBSERVACIONES_2, $ITEMPRESARIAL2,$IpTEMPRESARIAL );
	
		/*$filepath = "/includes/class.epcinn.php/";
		$RUTAFILTRO = 'colaboradores'; 
		$claseactual = '/includes/class.epcinn.php';
		$tablesdb = '01Tempresarial';
		include_once (__ROOT1__."/includes/crea_funciones_filtro_completo.php"); */

}



elseif($borraratempresarial == 'borraratempresarial'){
	
$borra_id_tempresarial = isset($_POST["borra_id_tempresarial"])?$_POST["borra_id_tempresarial"]:"";	
	
	echo $conexion->borraTARJETAEMPRESARIAL($borra_id_tempresarial);
	
}
elseif($ICONTRASENAS == 'ICONTRASENAS' or $ICONTRASENAS2 == 'ICONTRASENAS2'  ){

$CONTRASENA_DE1 = isset($_POST["CONTRASENA_DE1"])?$_POST["CONTRASENA_DE1"]:"";
$C_USUARIO1 = isset($_POST["C_USUARIO1"])?$_POST["C_USUARIO1"]:"";
$CONTRASENA1 = isset($_POST["CONTRASENA1"])?$_POST["CONTRASENA1"]:"";
$C_OTRO1 = isset($_POST["C_OTRO1"])?$_POST["C_OTRO1"]:"";
$C_OBSERVACIONES1 = isset($_POST["C_OBSERVACIONES1"])?$_POST["C_OBSERVACIONES1"]:"";
$CONTRASENA_DE2 = isset($_POST["CONTRASENA_DE2"])?$_POST["CONTRASENA_DE2"]:"";
$C_USUARIO2 = isset($_POST["C_USUARIO2"])?$_POST["C_USUARIO2"]:"";
$CONTRASENA2 = isset($_POST["CONTRASENA2"])?$_POST["CONTRASENA2"]:"";
$C_OTRO2 = isset($_POST["C_OTRO2"])?$_POST["C_OTRO2"]:"";
$C_OBSERVACIONES2 = isset($_POST["C_OBSERVACIONES2"])?$_POST["C_OBSERVACIONES2"]:"";
$CONTRASENA_DE3 = isset($_POST["CONTRASENA_DE3"])?$_POST["CONTRASENA_DE3"]:"";
$C_USUARIO3 = isset($_POST["C_USUARIO3"])?$_POST["C_USUARIO3"]:"";
$CONTRASENA3 = isset($_POST["CONTRASENA3"])?$_POST["CONTRASENA3"]:"";
$C_OTRO3 = isset($_POST["C_OTRO3"])?$_POST["C_OTRO3"]:"";
$C_OBSERVACIONES3 = isset($_POST["C_OBSERVACIONES3"])?$_POST["C_OBSERVACIONES3"]:"";
$CONTRASENA_DE4 = isset($_POST["CONTRASENA_DE4"])?$_POST["CONTRASENA_DE4"]:"";
$C_USUARIO4 = isset($_POST["C_USUARIO4"])?$_POST["C_USUARIO4"]:"";
$CONTRASENA4 = isset($_POST["CONTRASENA4"])?$_POST["CONTRASENA4"]:"";
$C_OTRO4 = isset($_POST["C_OTRO4"])?$_POST["C_OTRO4"]:"";
$C_OBSERVACIONES4 = isset($_POST["C_OBSERVACIONES4"])?$_POST["C_OBSERVACIONES4"]:"";
$C_ENVIAR_IMAIL = isset($_POST["C_ENVIAR_IMAIL"])?$_POST["C_ENVIAR_IMAIL"]:"";
$IpCONTRASENA = isset($_POST["IpCONTRASENA"])?$_POST["IpCONTRASENA"]:"";
	
	/*if($CONTRASENA_DE1 =="" or $C_USUARIO1 =="" or $CONTRASENA1 =="" ){
	echo "<P id='ERROR'>FAVOR DE LLENAR TODOS LOS CAMPOS EN ROJO</p>";
	}else{*/

		echo $conexion->guardarcontrasenias ( $CONTRASENA_DE1 , $C_USUARIO1 , $CONTRASENA1 , $C_OTRO1 , $C_OBSERVACIONES1 , $IpCONTRASENA,$ICONTRASENAS2   );
	//}
	
/*if($C_ENVIAR_IMAIL !='' ){
	
	$html = $conexionherramientas->html('','Usuario: '.$USUARIO_CRM.' Password: '.$CONTRASENIA_CRM);
	
	$EMAILnombre = array($C_ENVIAR_IMAIL=>'usuario');
	$Subject = 'Favor de Completar el Formulario';
	
$conexionherramientas->email($C_ENVIAR_IMAIL, $html, $adjuntos, $embebida, $Subject );	
}*/
	
		//include_once (__ROOT1__."/includes/crea_funciones.php");	
}
elseif($borrarContrasenia == 'borrarContrasenia'){
$borra_id_contrasenia = isset($_POST["borra_id_contrasenia"])?$_POST["borra_id_contrasenia"]:"";	
	
	echo $conexion->borracontrasenias2($borra_id_contrasenia);
}
elseif($IMATERIAL =='IMATERIAL' OR $IMATERIAL2=='IMATERIAL2'){
	
$MA_ARTICULO = isset($_POST["MA_ARTICULO"])?$_POST["MA_ARTICULO"]:"";
$MA_CANTIDAD = isset($_POST["MA_CANTIDAD"])?$_POST["MA_CANTIDAD"]:"";
$MA_MARCA = isset($_POST["MA_MARCA"])?$_POST["MA_MARCA"]:"";
$MA_MODELO = isset($_POST["MA_MODELO"])?$_POST["MA_MODELO"]:"";
$MA_NUMERO_SERIE = isset($_POST["MA_NUMERO_SERIE"])?$_POST["MA_NUMERO_SERIE"]:"";
$MA_FECHA_ENTREGA = isset($_POST["MA_FECHA_ENTREGA"])?$_POST["MA_FECHA_ENTREGA"]:"";
$MA_FECHA_DEVOLUCION = isset($_POST["MA_FECHA_DEVOLUCION"])?$_POST["MA_FECHA_DEVOLUCION"]:"";
$MA_OBSERVACIONES = isset($_POST["MA_OBSERVACIONES"])?$_POST["MA_OBSERVACIONES"]:"";
$IMATERIAL = isset($_POST["IMATERIAL"])?$_POST["IMATERIAL"]:"";
$MA_ENVIAR_IMAIL = isset($_POST["MA_ENVIAR_IMAIL"])?$_POST["MA_ENVIAR_IMAIL"]:"";
$IpMATERIAL = isset($_POST["IpMATERIAL"])?$_POST["IpMATERIAL"]:"";

/*if($MA_ARTICULO =="" or $MA_CANTIDAD =="" or $MA_MARCA =="" or $MA_MODELO =="" or $MA_NUMERO_SERIE =="" or $MA_FECHA_ENTREGA =="" or $MA_FECHA_DEVOLUCION =="" or $MA_OBSERVACIONES ==""  ){
	echo "<P id='ERROR'>FAVOR DE LLENAR TODOS LOS CAMPOS EN ROJO</p>";
}else{*/
		echo $conexion->guardarMaterialEquipo  ( $MA_ARTICULO , $MA_CANTIDAD , $MA_MARCA , $MA_MODELO , $MA_NUMERO_SERIE , $MA_FECHA_ENTREGA , $MA_FECHA_DEVOLUCION , $MA_OBSERVACIONES , $MA_ENVIAR_IMAIL, $IMATERIAL2, $IpMATERIAL );		
//}	
	//include_once (__ROOT1__."/includes/crea_funciones.php");

}
elseif($borrarMEASIGNADO12 == 'borrarMEASIGNADO12'){
	
$borra_id_contrasenia = isset($_POST["borra_id_contrasenia"])?$_POST["borra_id_contrasenia"]:"";	
	
	echo $conexion->borraMaterialEquipo2($borra_id_contrasenia);
	
}
elseif($iunifores == 'iunifores' OR $IUNIFROME2 == 'IUNIFROME2'){
	//U_ENVIAR_IMAIL
$U_ARTICULO = isset($_POST["U_ARTICULO"])?$_POST["U_ARTICULO"]:"";
$U_CANTIDAD = isset($_POST["U_CANTIDAD"])?$_POST["U_CANTIDAD"]:"";
$U_TALLA = isset($_POST["U_TALLA"])?$_POST["U_TALLA"]:"";
$U_MARCA = isset($_POST["U_MARCA"])?$_POST["U_MARCA"]:"";
$U_FECHA_ENTREGA = isset($_POST["U_FECHA_ENTREGA"])?$_POST["U_FECHA_ENTREGA"]:"";
$iunifores = isset($_POST["iunifores"])?$_POST["iunifores"]:"";
$U_FECHA_DEVOLUCION = isset($_POST["U_FECHA_DEVOLUCION"])?$_POST["U_FECHA_DEVOLUCION"]:"";
$U_OBSERVACIONES = isset($_POST["U_OBSERVACIONES"])?$_POST["U_OBSERVACIONES"]:"";
$U_ENVIAR_IMAIL = isset($_POST["U_ENVIAR_IMAIL"])?$_POST["U_ENVIAR_IMAIL"]:"";
 $IpUNIFORME = isset($_POST["IpUNIFORME"])?$_POST["IpUNIFORME"]:"";

/*if( $U_ARTICULO =="" or $U_CANTIDAD =="" or $U_TALLA =="" or $U_MARCA =="" or $U_FECHA_ENTREGA =="" or $U_FECHA_DEVOLUCION =="" ){
//print_r($_POST);	
		echo "<P id='ERROR'>FAVOR DE LLENAR TODOS LOS CAMPOS EN ROJO</p>";
	
}else{*/
	echo $conexion->guardarUNIFORMES($U_ARTICULO , $U_CANTIDAD , $U_TALLA , $U_MARCA , $U_FECHA_ENTREGA , $iunifores , $U_FECHA_DEVOLUCION , $U_OBSERVACIONES , $U_ENVIAR_IMAIL, $IUNIFROME2, $IpUNIFORME );
//}
	//include_once (__ROOT1__."/includes/crea_funciones.php");
}elseif($borraraUniformes =='borraraUniformes'){
	
$borra_id_uniforme = isset($_POST["borra_id_uniforme"])?$_POST["borra_id_uniforme"]:"";

	echo $conexion->borrauniformes2($borra_id_uniforme);

}
elseif($ipolias=='ipolias' or $IPOLIZAS22=='IPOLIZAS22'){
$PD_TIPO_DOCUMENTO = isset($_POST["PD_TIPO_DOCUMENTO"])?$_POST["PD_TIPO_DOCUMENTO"]:"";
$PD_FECHA_ENTREGA = isset($_POST["PD_FECHA_ENTREGA"])?$_POST["PD_FECHA_ENTREGA"]:"";
$PD_FECHA_INICIO = isset($_POST["PD_FECHA_INICIO"])?$_POST["PD_FECHA_INICIO"]:"";
$PD_FECHA_FINAL = isset($_POST["PD_FECHA_FINAL"])?$_POST["PD_FECHA_FINAL"]:"";
$PD_EMPRESA = isset($_POST["PD_EMPRESA"])?$_POST["PD_EMPRESA"]:"";
$PD_TELEFONO_EMERGENCIA = isset($_POST["PD_TELEFONO_EMERGENCIA"])?$_POST["PD_TELEFONO_EMERGENCIA"]:"";
$PD_OBSERVACIONES = isset($_POST["PD_OBSERVACIONES"])?$_POST["PD_OBSERVACIONES"]:"";
$ipolias = isset($_POST["ipolias"])?$_POST["ipolias"]:"";
$PD_ENVIAR_IMAIL = isset($_POST["PD_ENVIAR_IMAIL"])?$_POST["PD_ENVIAR_IMAIL"]:""; 
$IpPOLIZAS= isset($_POST["IpPOLIZAS"])?$_POST["IpPOLIZAS"]:""; 
$IPOLIZAS22= isset($_POST["IPOLIZAS22"])?$_POST["IPOLIZAS22"]:"";

	//print_r($_POST);
 
	echo $conexion->guardarPOLIZAS ( $PD_TIPO_DOCUMENTO , $PD_FECHA_ENTREGA , $PD_FECHA_INICIO , $PD_FECHA_FINAL , $PD_EMPRESA , $PD_TELEFONO_EMERGENCIA , $PD_OBSERVACIONES , $ipolias , $PD_ENVIAR_IMAIL, $IPOLIZAS22, $IpPOLIZAS );

		//include_once (__ROOT1__."/includes/crea_funciones.php");
}
elseif($borraraPolizas == 'borraraPolizas'){
	
	$borra_id_polizas = isset($_POST["borra_id_polizas"])?$_POST["borra_id_polizas"]:"";	
	
	echo $conexion->borraPolizas2($borra_id_polizas);
	
}
elseif($iCONVENIOPRESTAMO == 'iCONVENIOPRESTAMO' or $iCONVENIOPRESTAMO2 == 'iCONVENIOPRESTAMO2'){
	
$CP_FECHA_SOLICITUD = isset($_POST["CP_FECHA_SOLICITUD"])?$_POST["CP_FECHA_SOLICITUD"]:"";
$CP_MONTO_SOLICITADO = isset($_POST["CP_MONTO_SOLICITADO"])?$_POST["CP_MONTO_SOLICITADO"]:"";
$CP_AUTORIZADO_POR = isset($_POST["CP_AUTORIZADO_POR"])?$_POST["CP_AUTORIZADO_POR"]:"";
$CP_CONDICIONES_PAGO = isset($_POST["CP_CONDICIONES_PAGO"])?$_POST["CP_CONDICIONES_PAGO"]:"";
$CP_DESCUENTO_QUINCENA = isset($_POST["CP_DESCUENTO_QUINCENA"])?$_POST["CP_DESCUENTO_QUINCENA"]:"";
$CP_FECHA_AUTORIZACION = isset($_POST["CP_FECHA_AUTORIZACION"])?$_POST["CP_FECHA_AUTORIZACION"]:"";
$CP_FECHA_DEPOSITO = isset($_POST["CP_FECHA_DEPOSITO"])?$_POST["CP_FECHA_DEPOSITO"]:"";
$CP_ENVIAR_IMAIL = isset($_POST["CP_ENVIAR_IMAIL"])?$_POST["CP_ENVIAR_IMAIL"]:"";
$iCONVENIOPRESTAMO = isset($_POST["iCONVENIOPRESTAMO"])?$_POST["iCONVENIOPRESTAMO"]:""; 
$IpCONVENIOPRESTAMO = isset($_POST['IpCONVENIOPRESTAMO'])?$_POST['IpCONVENIOPRESTAMO']:'';
$CP_REPARTO_UTILIDADES = isset($_POST["CP_REPARTO_UTILIDADES"])?1:0; 
$CP_BONO = isset($_POST["CP_BONO"])?1:0; 
$CP_AGUINALDO = isset($_POST["CP_AGUINALDO"])?1:0; 
$CP_NOMINA_MENSUAL = isset($_POST["CP_NOMINA_MENSUAL"])?1:0; 
$CP_NOMINA_QUINCENAL = isset($_POST["CP_NOMINA_QUINCENAL"])?1:0;  


/*if($CP_FECHA_SOLICITUD =="" or $CP_MONTO_SOLICITADO ==""  or $CP_DESCUENTO_QUINCENA=="" ){
echo "<P id='ERROR'>FAVOR DE LLENAR TODOS LOS CAMPOS EN ROJO</p>";

}
else{*/
	echo $conexion->guardarCONVENIOPRESTAMO ($CP_FECHA_SOLICITUD , $CP_MONTO_SOLICITADO , $CP_AUTORIZADO_POR , $CP_CONDICIONES_PAGO , $CP_DESCUENTO_QUINCENA , $CP_FECHA_AUTORIZACION , $CP_FECHA_DEPOSITO , $CP_ENVIAR_IMAIL , $iCONVENIOPRESTAMO , $iCONVENIOPRESTAMO2, $IpCONVENIOPRESTAMO, $CP_REPARTO_UTILIDADES, $CP_BONO, $CP_AGUINALDO ,$CP_NOMINA_MENSUAL, $CP_NOMINA_QUINCENAL);	
//}
//print_r($_POST);
//include_once (__ROOT1__."/includes/crea_funciones.php");	
}
elseif($borraraCONVENIOP == 'borraraCONVENIOP'){
	
		
$borra_id_borraraCONVENIOP = isset($_POST["borra_id_borraraCONVENIOP"])?$_POST["borra_id_borraraCONVENIOP"]:"";	
	
	echo $conexion->borraCONVENIOPRESTAMO2($borra_id_borraraCONVENIOP);
	
	
}
elseif($iCONVENIOPAGO == 'iCONVENIOPAGO' OR $ICONVENIOPAGO22 =='ICONVENIOPAGO22'){
	//print_r($_POST);
$CP_FECHA_PAGO = isset($_POST["CP_FECHA_PAGO"])?$_POST["CP_FECHA_PAGO"]:"";
$CP_MONTO_PAGADO1 = isset($_POST["CP_MONTO_PAGADO1"])?$_POST["CP_MONTO_PAGADO1"]:"";
$CP_CONCEPTO = isset($_POST["CP_CONCEPTO"])?$_POST["CP_CONCEPTO"]:"";
$CP_NUMERO_EVENTO = isset($_POST["CP_NUMERO_EVENTO"])?$_POST["CP_NUMERO_EVENTO"]:"";
$CP_OBSERVACIONES = isset($_POST["CP_OBSERVACIONES"])?$_POST["CP_OBSERVACIONES"]:"";
$CP_MONTO_A_PAGAR1 = isset($_POST["CP_MONTO_A_PAGAR1"])?$_POST["CP_MONTO_A_PAGAR1"]:"";
$CP_TOTAL_PAGADO = isset($_POST["CP_TOTAL_PAGADO"])?$_POST["CP_TOTAL_PAGADO"]:"";
$CP_MONTO_A_PAGAR = isset($_POST["CP_MONTO_A_PAGAR"])?$_POST["CP_MONTO_A_PAGAR"]:"";
$iCONVENIOPAGO = isset($_POST["iCONVENIOPAGO"])?$_POST["iCONVENIOPAGO"]:"";
$CP_ENVIAR_IMAIL = isset($_POST["CP_ENVIAR_IMAIL"])?$_POST["CP_ENVIAR_IMAIL"]:""; 
$IpCONVENIOPAGO2 =  isset($_POST['IpCONVENIOPAGO2'])?$_POST['IpCONVENIOPAGO2']:'';



/*if($CP_FECHA_PAGO =="" or $CP_MONTO_PAGADO1 =="" or $CP_MONTO_A_PAGAR1 =="" or $CP_TOTAL_PAGADO =="" or $CP_CONCEPTO =="" or $CP_NUMERO_EVENTO ==""){
echo "<P id='ERROR'>FAVOR DE LLENAR TODOS LOS CAMPOS EN ROJO</p>";

}
else{*/
	echo $conexion->gardarconveniopago ( $CP_FECHA_PAGO , $CP_MONTO_PAGADO1 , $CP_CONCEPTO , $CP_NUMERO_EVENTO , $CP_OBSERVACIONES , $CP_MONTO_A_PAGAR1 , $CP_TOTAL_PAGADO , $CP_MONTO_A_PAGAR , $iCONVENIOPAGO , $CP_ENVIAR_IMAIL ,$ICONVENIOPAGO22, $IpCONVENIOPAGO2);
//}
	
//include_once (__ROOT1__."/includes/crea_funciones.php");	
}
elseif($borraraCONVENIOPAGO == 'borraraCONVENIOPAGO'){
	
	$borra_id_CONVENIOPAGO = isset($_POST["borra_id_CONVENIOPAGO"])?$_POST["borra_id_CONVENIOPAGO"]:"";	
	
	echo $conexion->borraCONVENIOPAGO2($borra_id_CONVENIOPAGO);	
	
}
elseif($ihiddeninventario =='ihiddeninventario' or $IINVENTARIO2 == 'IINVENTARIO2'){

$I_NUMERO = isset($_POST["I_NUMERO"])?$_POST["I_NUMERO"]:"";
$RE_CANTIDAD = isset($_POST["RE_CANTIDAD"])?$_POST["RE_CANTIDAD"]:"";
$I_SUB_CATEGORIA = isset($_POST["I_SUB_CATEGORIA"])?$_POST["I_SUB_CATEGORIA"]:"";
$I_ARTICULO = isset($_POST["I_ARTICULO"])?$_POST["I_ARTICULO"]:"";
$I_METROS = isset($_POST["I_METROS"])?$_POST["I_METROS"]:"";
$I_PIEZAS = isset($_POST["I_PIEZAS"])?$_POST["I_PIEZAS"]:"";
$I_LITROS = isset($_POST["I_LITROS"])?$_POST["I_LITROS"]:"";
$I_COLOR = isset($_POST["I_COLOR"])?$_POST["I_COLOR"]:"";
$I_MARCA = isset($_POST["I_MARCA"])?$_POST["I_MARCA"]:"";
$I_SUB_MARCA = isset($_POST["I_SUB_MARCA"])?$_POST["I_SUB_MARCA"]:"";
$I_MODELO = isset($_POST["I_MODELO"])?$_POST["I_MODELO"]:"";
$I_NUMERO_SERIE = isset($_POST["I_NUMERO_SERIE"])?$_POST["I_NUMERO_SERIE"]:"";
$I_CARACTERISTICAS1 = isset($_POST["I_CARACTERISTICAS1"])?$_POST["I_CARACTERISTICAS1"]:"";
$I_CARACTERISTICAS2 = isset($_POST["I_CARACTERISTICAS2"])?$_POST["I_CARACTERISTICAS2"]:"";
$I_CARACTERISTICAS3 = isset($_POST["I_CARACTERISTICAS3"])?$_POST["I_CARACTERISTICAS3"]:"";
$I_CARACTERISTICAS4 = isset($_POST["I_CARACTERISTICAS4"])?$_POST["I_CARACTERISTICAS4"]:"";
$I_CARACTERISTICAS5 = isset($_POST["I_CARACTERISTICAS5"])?$_POST["I_CARACTERISTICAS5"]:"";
$I_OBSERVACIONES = isset($_POST["I_OBSERVACIONES"])?$_POST["I_OBSERVACIONES"]:"";
$I_STATUS = isset($_POST["I_STATUS"])?$_POST["I_STATUS"]:"";
$I_SEVE = isset($_POST["I_SEVE"])?$_POST["I_SEVE"]:"";
$I_NOSEVE = isset($_POST["I_NOSEVE"])?$_POST["I_NOSEVE"]:"";
$I_BODEGA = isset($_POST["I_BODEGA"])?$_POST["I_BODEGA"]:"";
$I_CANTIDAD_BODEGA = isset($_POST["I_CANTIDAD_BODEGA"])?$_POST["I_CANTIDAD_BODEGA"]:"";
$I_CANTIDAD_REQUERIDA = isset($_POST["I_CANTIDAD_REQUERIDA"])?$_POST["I_CANTIDAD_REQUERIDA"]:"";
$I_CANTIDAD_DESPUES_SALIDA = isset($_POST["I_CANTIDAD_DESPUES_SALIDA"])?$_POST["I_CANTIDAD_DESPUES_SALIDA"]:"";
$I_SOLICITANTE = isset($_POST["I_SOLICITANTE"])?$_POST["I_SOLICITANTE"]:"";
$I_FECHA_DE_SOLICITUD = isset($_POST["I_FECHA_DE_SOLICITUD"])?$_POST["I_FECHA_DE_SOLICITUD"]:"";
$I_QUIEN_ENTREGA = isset($_POST["I_QUIEN_ENTREGA"])?$_POST["I_QUIEN_ENTREGA"]:"";
$I_QUIEN_RECIBE2 = isset($_POST["I_QUIEN_RECIBE2"])?$_POST["I_QUIEN_RECIBE2"]:"";
$I_FECHA_ENTREGA = isset($_POST["I_FECHA_ENTREGA"])?$_POST["I_FECHA_ENTREGA"]:"";
$I_HORA_ENTREGA = isset($_POST["I_HORA_ENTREGA"])?$_POST["I_HORA_ENTREGA"]:"";
$I_FECHA_DEVOLUCION = isset($_POST["I_FECHA_DEVOLUCION"])?$_POST["I_FECHA_DEVOLUCION"]:"";
$I_HORA_DEVOLUCION = isset($_POST["I_HORA_DEVOLUCION"])?$_POST["I_HORA_DEVOLUCION"]:"";
$I_QUIEN_DEVUELVE = isset($_POST["I_QUIEN_DEVUELVE"])?$_POST["I_QUIEN_DEVUELVE"]:"";
$I_QUIEN_RECIBE = isset($_POST["I_QUIEN_RECIBE"])?$_POST["I_QUIEN_RECIBE"]:"";
$I_NUMERO_EVENTO = isset($_POST["I_NUMERO_EVENTO"])?$_POST["I_NUMERO_EVENTO"]:"";
$I_TOTAL_DIAS = isset($_POST["I_TOTAL_DIAS"])?$_POST["I_TOTAL_DIAS"]:"";
$I_RAZON_SOCIAL_PROVEEDOR = isset($_POST["I_RAZON_SOCIAL_PROVEEDOR"])?$_POST["I_RAZON_SOCIAL_PROVEEDOR"]:"";
$I_NOMBRE_PROVEEDOR = isset($_POST["I_NOMBRE_PROVEEDOR"])?$_POST["I_NOMBRE_PROVEEDOR"]:"";
$I_TEL_PROVEEDOR = isset($_POST["I_TEL_PROVEEDOR"])?$_POST["I_TEL_PROVEEDOR"]:"";
$I_CEL_PROVEEDOR = isset($_POST["I_CEL_PROVEEDOR"])?$_POST["I_CEL_PROVEEDOR"]:"";
$I_DIRECCION_PROVEEDOR = isset($_POST["I_DIRECCION_PROVEEDOR"])?$_POST["I_DIRECCION_PROVEEDOR"]:"";
$I_PRECIO1 = isset($_POST["I_PRECIO1"])?$_POST["I_PRECIO1"]:"";
$I_PRECIO2 = isset($_POST["I_PRECIO2"])?$_POST["I_PRECIO2"]:"";
$I_FECHA_COMPRA = isset($_POST["I_FECHA_COMPRA"])?$_POST["I_FECHA_COMPRA"]:"";
$I_PAGADO_CON = isset($_POST["I_PAGADO_CON"])?$_POST["I_PAGADO_CON"]:"";
$I_FACTURA_A_NOMBRE = isset($_POST["I_FACTURA_A_NOMBRE"])?$_POST["I_FACTURA_A_NOMBRE"]:"";
$ihiddeninventario = isset($_POST["ihiddeninventario"])?$_POST["ihiddeninventario"]:"";
$IpINVENTARIO = isset($_POST["IpINVENTARIO"])?$_POST["IpINVENTARIO"]:"";
$I_FOTOS1 ='';$nombreimagen ='';

 $CODIGO_QR1 =''; $CODIGO_QR11 ='';

$I_FACTURA11=''; $I_FACTURA111='';


if( $_FILES["I_FACTURA1"] == true){
 $I_FACTURA11 = $conexion->solocargar("I_FACTURA1");
}	
//}
if($I_FACTURA11=='2' or $I_FACTURA11=='' or $I_FACTURA11=='1'){

}else{
 $I_FACTURA111 = $I_FACTURA11;
}



if( $_FILES["CODIGO_QR"] == true){
 $CODIGO_QR1 = $conexion->solocargar("CODIGO_QR");
}	
//}
if($CODIGO_QR1=='2' or $CODIGO_QR1=='' or $CODIGO_QR1=='1'){

}else{
 $CODIGO_QR11 = $CODIGO_QR1;
}



if( $_FILES["I_FOTOS"] == true){
 $I_FOTOS1 = $conexion->solocargar("I_FOTOS");
}	
//}
if($I_FOTOS1=='2' or $I_FOTOS1=='' or $I_FOTOS1=='1'){

}else{
 $I_FOTOS11 = $I_FOTOS1;
}

echo $conexion->guardarINVENTARIO( $I_NUMERO , $RE_CANTIDAD , $I_SUB_CATEGORIA , $I_ARTICULO , $I_METROS , $I_PIEZAS , $I_LITROS , $I_COLOR , $I_MARCA , $I_SUB_MARCA , $I_MODELO , $I_NUMERO_SERIE , $I_CARACTERISTICAS1 , $I_CARACTERISTICAS2 , $I_CARACTERISTICAS3 , $I_CARACTERISTICAS4 , $I_CARACTERISTICAS5 , $I_OBSERVACIONES , $I_STATUS , $I_SEVE , $I_NOSEVE , $I_BODEGA , $I_CANTIDAD_BODEGA , $I_CANTIDAD_REQUERIDA , $I_CANTIDAD_DESPUES_SALIDA , $I_SOLICITANTE , $I_FECHA_DE_SOLICITUD , $I_QUIEN_ENTREGA , $I_QUIEN_RECIBE2 , $I_FECHA_ENTREGA , $I_HORA_ENTREGA , $I_FECHA_DEVOLUCION , $I_HORA_DEVOLUCION , $I_QUIEN_DEVUELVE , $I_QUIEN_RECIBE , $I_NUMERO_EVENTO , $I_TOTAL_DIAS , $I_RAZON_SOCIAL_PROVEEDOR , $I_NOMBRE_PROVEEDOR , $I_TEL_PROVEEDOR , $I_CEL_PROVEEDOR , $I_DIRECCION_PROVEEDOR , $I_PRECIO1 ,$I_PRECIO2, $I_FECHA_COMPRA , $I_PAGADO_CON , $I_FACTURA_A_NOMBRE , $ihiddeninventario,$IpINVENTARIO , $IINVENTARIO2, $I_FOTOS11,$CODIGO_QR11, $I_FACTURA111 );

//print_r($_POST);
//print_r($_FILES);
//include_once (__ROOT1__."/includes/crea_funciones.php");
	
}
elseif($borrarInventario == 'borrarInventario'){
	$borra_id_Inventario = isset($_POST["borra_id_Inventario"])?$_POST["borra_id_Inventario"]:"";	
	echo $conexion->borraINVENTARIO2($borra_id_Inventario);
	
}
elseif($ICARGAMASIVAM =='ICARGAMASIVAM' OR $ICARGAMM2 == 'ICARGAMM2'){
	
$DEPARTAMENTO = isset($_POST["DEPARTAMENTO"])?$_POST["DEPARTAMENTO"]:"";
$CM_NO = isset($_POST["CM_NO"])?$_POST["CM_NO"]:"";
$CM_NOMBRE = isset($_POST["CM_NOMBRE"])?$_POST["CM_NOMBRE"]:"";
$CM_APELLIDO = isset($_POST["CM_APELLIDO"])?$_POST["CM_APELLIDO"]:"";
$CM_APELLIDOM = isset($_POST["CM_APELLIDOM"])?$_POST["CM_APELLIDOM"]:"";
$CM_ARTICULO = isset($_POST["CM_ARTICULO"])?$_POST["CM_ARTICULO"]:"";
$CM_CANTIDAD = isset($_POST["CM_CANTIDAD"])?$_POST["CM_CANTIDAD"]:"";
$CM_MARCA = isset($_POST["CM_MARCA"])?$_POST["CM_MARCA"]:"";
$CM_NODELO = isset($_POST["CM_NODELO"])?$_POST["CM_NODELO"]:"";
$CM_NO_SERIE = isset($_POST["CM_NO_SERIE"])?$_POST["CM_NO_SERIE"]:"";
$CM_FECHA_ENTREGA = isset($_POST["CM_FECHA_ENTREGA"])?$_POST["CM_FECHA_ENTREGA"]:"";
$CM_FECHA_DEVOLUCION = isset($_POST["CM_FECHA_DEVOLUCION"])?$_POST["CM_FECHA_DEVOLUCION"]:"";
$CM_OBSERVACIONES = isset($_POST["CM_OBSERVACIONES"])?$_POST["CM_OBSERVACIONES"]:"";
$ICARGAMM2 = isset($_POST["ICARGAMM2"])?$_POST["ICARGAMM2"]:""; 
$IpCARGAMM2  = isset($_POST["IpCARGAMM2"])?$_POST["IpCARGAMM2"]:""; 
	echo $conexion->guardarCARGAMASIVAM ($DEPARTAMENTO , $CM_NO , $CM_NOMBRE , $CM_APELLIDO , $CM_APELLIDOM , $CM_ARTICULO , $CM_CANTIDAD , $CM_MARCA , $CM_NODELO , $CM_NO_SERIE , $CM_FECHA_ENTREGA , $CM_FECHA_DEVOLUCION , $CM_OBSERVACIONES , $ICARGAMM2,$IpCARGAMM2 );
	
	//include_once (__ROOT1__."/includes/crea_funciones.php");
	
	}
elseif($borrarCARGAMM2 == 'borrarCARGAMM2'){
	$borra_id_CARGAMM2 = isset($_POST["borra_id_CARGAMM2"])?$_POST["borra_id_CARGAMM2"]:"";
	echo $conexion->borraCARGAMM2($borra_id_CARGAMM2);
	
}elseif($icargamasivaU=='icargamasivaU' OR $ICARGAMU2 == 'ICARGAMU2'){
	
$DEPARTAMENTO = isset($_POST["DEPARTAMENTO2"])?$_POST["DEPARTAMENTO2"]:"";
$CMU_NO = isset($_POST["CMU_NO"])?$_POST["CMU_NO"]:"";
$CMU_NOMBRE = isset($_POST["CMU_NOMBRE"])?$_POST["CMU_NOMBRE"]:"";
$CMU_APELLIDO = isset($_POST["CMU_APELLIDO"])?$_POST["CMU_APELLIDO"]:"";
$CMU_APELLIDOM = isset($_POST["CMU_APELLIDOM"])?$_POST["CMU_APELLIDOM"]:"";
$CMU_ARTICULO = isset($_POST["CMU_ARTICULO"])?$_POST["CMU_ARTICULO"]:"";
$CMU_CANTIDAD = isset($_POST["CMU_CANTIDAD"])?$_POST["CMU_CANTIDAD"]:"";
$CMU_TALLA = isset($_POST["CMU_TALLA"])?$_POST["CMU_TALLA"]:"";
$CMU_MARCA = isset($_POST["CMU_MARCA"])?$_POST["CMU_MARCA"]:"";
$CMU_FECHA_ENTREGA = isset($_POST["CMU_FECHA_ENTREGA"])?$_POST["CMU_FECHA_ENTREGA"]:"";
$CMU_FECHA_DEVOLUCION = isset($_POST["CMU_FECHA_DEVOLUCION"])?$_POST["CMU_FECHA_DEVOLUCION"]:"";
$CMU_OBSERVACIONES = isset($_POST["CMU_OBSERVACIONES"])?$_POST["CMU_OBSERVACIONES"]:"";
$icargamasivaU = isset($_POST["icargamasivaU"])?$_POST["icargamasivaU"]:""; 	
$IpCARGAMU2 = isset($_POST["IpCARGAMU2"])?$_POST["IpCARGAMU2"]:"";
//$CMU_FOTO = isset($_POST["CMU_FOTO"])?$_POST["CMU_FOTO"]:"";



if( $_FILES["CMU_FOTO"] == true){
 $CMU_FOTO = $conexion->solocargar("CMU_FOTO");
}	
//}
if($CMU_FOTO=='2' or $CMU_FOTO=='' or $CMU_FOTO=='1'){

}else{
 $CMU_FOTO1 = $CMU_FOTO;
}


	echo $conexion->guardarcargamasivau ( $DEPARTAMENTO , $CMU_NO , $CMU_NOMBRE , $CMU_APELLIDO , $CMU_APELLIDOM , $CMU_ARTICULO , $CMU_CANTIDAD , $CMU_TALLA , $CMU_MARCA , $CMU_FECHA_ENTREGA , $CMU_FECHA_DEVOLUCION , $CMU_OBSERVACIONES , $icargamasivaU, $CMU_FOTO1 , $IpCARGAMU2, $ICARGAMU2);
	
	//print_r($_POST);
	//include_once (__ROOT1__."/includes/crea_funciones.php");
	
	
	
}
elseif($ICARGAMASIVAP == 'ICARGAMASIVAP' OR $ICARGAMP222=='ICARGAMP222'){
		$DEPARTAMENTOP = isset($_POST["DEPARTAMENTO3"])?$_POST["DEPARTAMENTO3"]:"";
$CMD_NO = isset($_POST["CMD_NO"])?$_POST["CMD_NO"]:"";
$CMD_NOMBRE = isset($_POST["CMD_NOMBRE"])?$_POST["CMD_NOMBRE"]:"";
$CMD_APELLIDO = isset($_POST["CMD_APELLIDO"])?$_POST["CMD_APELLIDO"]:"";
$CMD_APELLIDOM = isset($_POST["CMD_APELLIDOM"])?$_POST["CMD_APELLIDOM"]:"";
$CMD_DOCUMENTO = isset($_POST["CMD_DOCUMENTO"])?$_POST["CMD_DOCUMENTO"]:"";
$CMD_FECHA_ENTREGA = isset($_POST["CMD_FECHA_ENTREGA"])?$_POST["CMD_FECHA_ENTREGA"]:"";
$CMD_FECHA_INICIO = isset($_POST["CMD_FECHA_INICIO"])?$_POST["CMD_FECHA_INICIO"]:"";
$CMD_EMPRESA_CONTRATO = isset($_POST["CMD_EMPRESA_CONTRATO"])?$_POST["CMD_EMPRESA_CONTRATO"]:"";
$CMD_TELEFONO_EMERGENCIA = isset($_POST["CMD_TELEFONO_EMERGENCIA"])?$_POST["CMD_TELEFONO_EMERGENCIA"]:"";
$CMD_OBSERVACIONES = isset($_POST["CMD_OBSERVACIONES"])?$_POST["CMD_OBSERVACIONES"]:"";
$ICARGAMASIVAP = isset($_POST["ICARGAMASIVAP"])?$_POST["ICARGAMASIVAP"]:"";
$inlineRadioOptions = isset($_POST["inlineRadioOptions"])?$_POST["inlineRadioOptions"]:""; 
$IpCARGAMP2 = isset($_POST["IpCARGAMP2"])?$_POST["IpCARGAMP2"]:"";

if( $_FILES["CMD_CARGA_POLIZA"] == true){
 $CMD_CARGA_POLIZA = $conexion->solocargar("CMD_CARGA_POLIZA");
}	
//}
if($CMD_CARGA_POLIZA=='2' or $CMD_CARGA_POLIZA=='' or $CMD_CARGA_POLIZA=='1'){

}else{
 $CMD_CARGA_POLIZA1 = $CMD_CARGA_POLIZA;
}



echo $conexion->guardarcargamasivap ($DEPARTAMENTOP , $CMD_NO , $CMD_NOMBRE , $CMD_APELLIDO , $CMD_APELLIDOM , $CMD_DOCUMENTO , $CMD_FECHA_ENTREGA , $CMD_FECHA_INICIO , $CMD_EMPRESA_CONTRATO , $CMD_TELEFONO_EMERGENCIA , $CMD_OBSERVACIONES , $ICARGAMASIVAP , $inlineRadioOptions, $ICARGAMP222,$IpCARGAMP2,$CMD_CARGA_POLIZA1);
		
	//print_r($_POST);
	//include_once (__ROOT1__."/includes/crea_funciones.php");
	
		}elseif($ICATEGORIAS=='ICATEGORIAS'){
			
$I_CATEGORIAS = isset($_POST["I_CATEGORIAS"])?$_POST["I_CATEGORIAS"]:"";
$ICATEGORIAS = isset($_POST["ICATEGORIAS"])?$_POST["ICATEGORIAS"]:""; 
			
			echo $conexion->guardarcategoriainventario ( $I_CATEGORIAS , $ICATEGORIAS );
	//include_once (__ROOT1__."/includes/crea_funciones.php");		
}

elseif($carga_masiva_borraraP == 'carga_masiva_borraraP'){
	$borra_id_P = isset($_POST["borra_id_P"])?$_POST["borra_id_P"]:"";
	
		
	echo $conexion->borraCARGAMpp2($borra_id_P);
	
	
}


elseif($borrarCATEGORIA=='borrarCATEGORIA'){
			
			$borra_id_CATEGORIA = ISSET($_POST['borra_id_CATEGORIA'])?$_POST['borra_id_CATEGORIA']:'';
echo $conexion->BORRAcategoriainventario ( $borra_id_CATEGORIA );
			
			
}
elseif($carga_borraraUniformes == 'carga_borraraUniformes'){
	
	
			$borra_id_uniforme = ISSET($_POST['borra_id_uniforme'])?$_POST['borra_id_uniforme']:'';
echo $conexion->borraCARGAuM2 ( $borra_id_uniforme );
		
	
}else{
//	print_r($_POST);
//print_r($_FILES);
//include_once (__ROOT1__."/includes/crea_funciones.php");
}


//enviarDATOSCOLABORADORES
if($_POST['DATOS_COLABORADORES']!='DATOS_COLABORADORES' AND 

($_FILES["F_ACTA_NACIMIENTO"] == true or $_FILES["F_COMPROBANTE_DOMICILIO"] == true or $_FILES["F_CONSTANCIA_SITUACION_FISCAL"] == true or $_FILES["F_RFC"] == true or $_FILES["F_CURP"] == true or $_FILES["F_ALTA_SEGURO_SOCIAL"] == true or $_FILES["F_INE_FRENTE"] == true or $_FILES["F_INE_REVERSO"] == true or $_FILES["F_FOTO_ESTADO_CUENTA_BANCARIO"] == true or $_FILES["F_DOCUMENTO_CREDITO_INFONAVIT"] == true or $_FILES["F_CARTA_DE_RECOMENDACION_1"] == true or $_FILES["F_CARTA_DE_RECOMENDACION_2"] == true or $_FILES["F_CARTA_DE_RECOMENDACION_3"] == true or $_FILES["F_CONSTANCIA_DE_CURSOS"] == true or $_FILES["F_CONSTANCIA_ESTUDIOS"] == true or $_FILES["F_CERTIFICADO_VACUNA_1"] == true or $_FILES["F_CERTIFICADO_VACUNA_2"] == true or $_FILES["F_CERTIFICADO_VACUNA_3"] == true or $_FILES["F_CERTIFICADO_VACUNA_4"] == true or $_FILES["F_CURRICULUM_VITAE"] == true or $_FILES["F_LICENCIA_CONDUCIR"] == true or $_FILES["F_PASAPORTE"] == true or $_FILES["F_VISA_AMERICANA"] == true or $_FILES["F_LICENCIA_DE_CONDUCIR"] == true or $_FILES["F_FM3_EN_CASO_DE_SER_EXTRANJERO"] == true or $_FILES["F_CARTILLA_LIBERADA"] == true or $_FILES["F_FOTO_ACTUAL"] == true or $_FILES["F_CONTRATO_LABORAL_EPC_1"] == true or $_FILES["F_CONTRATO_LABORAL_EPC_2"] == true or $_FILES["F_CONTRATO_LABORAL_EPC_3"] == true or $_FILES["F_CONTRATO_LABORAL_EPC_4"] == true or $_FILES["F_CONTRATO_LABORAL_EPC_5"] == true or $_FILES["F_CONTRATO_LABORAL_EPC_6"] == true or $_FILES["F_CONTRATO_LABORAL_EPC_7"] == true or $_FILES["F_CONTRATO_LABORAL_EPC_8"] == true or $_FILES["F_CONTRATO_CONF_ENTRADA_EPC"] == true or $_FILES["F_REGLAMENTO_FIRMADO"] == true or $_FILES["F_CODIGO_CONDUCTA_FIRMADO"] == true or $_FILES["F_POLITICAS_EMPRESA_FIRMADO"] == true or $_FILES["F_CARTA_RENUNCIA_1"] == true or $_FILES["F_CARTA_RENUNCIA_2"] == true or $_FILES["F_CALCULO_FINIQUITO_1"] == true or $_FILES["F_CALCULO_FINIQUITO_2"] == true or $_FILES["F_CALCULO_FINIQUITO_3"] == true or $_FILES["F_CONTRATO_CONF_SALIDA"] == true or $_FILES["F_DOCUMENTOS_LEGALES_1"] == true or $_FILES["F_DOCUMENTOS_LEGALES_2"] == true or $_FILES["F_DOCUMENTOS_LEGALES_3"] == true or $_FILES["F_DOCUMENTOS_LEGALES_4"] == true or $_FILES["F_OTROS_DOCUMENTOS_1"] == true or $_FILES["F_OTROS_DOCUMENTOS_2"] == true or $_FILES["F_OTROS_DOCUMENTOS_3"] == true or $_FILES["F_OTROS_DOCUMENTOS_4"] == true )

){
//	PRINT_R($_POST);
foreach($_FILES AS $ETQIETA => $VALOR){
	echo $conexion->cargar($ETQIETA,'01adjuntoscolaboradores');
}
}

$pasapersonal2_text = isset($_POST['pasapersonal2_text'])?$_POST['pasapersonal2_text']:'';
if($pasapersonal2_text==TRUE){
	$pasara1_personal2_id = isset($_POST['pasara1_personal2_id'])?$_POST['pasara1_personal2_id']:'';
	$conexion->guardar_checkbox($pasapersonal2_text,$pasara1_personal2_id);
}


if($_FILES["F_ALTA_SEGURO_SOCIAL_EPC"] == true ){
foreach($_FILES AS $ETQIETA => $VALOR){
	echo $conexion->cargar($ETQIETA,'01empresa','2');
}	
}

if( $IpMATERIAL == true and $_FILES["MA_CARGAR_CARTA"] == true ){

foreach($_FILES AS $ETQIETA => $VALOR){
	echo $conexion->cargar($ETQIETA,'01materialequipoa','3',$IpMATERIAL);

}	
}


if( $IpMATERIAL == false and $_FILES["MA_CARGAR_CARTA"] == true ){

foreach($_FILES AS $ETQIETA => $VALOR){
	echo $conexion->cargar($ETQIETA,'01materialequipoa');

}	
}
/**/


if($IpTEMPRESARIAL == true and ($_FILES["T_FOTO_TARJETA"] == true or $_FILES["T_FOTO_TARJETA_ATRAS"] == true or $_FILES["T_SUBIR_COMPROBABTE"] == true or $_FILES["T_SUBIR_INE"] == true or $_FILES["T_SUBIR_INE_ATRAS"] == true or $_FILES["T_SUBIR_ARCHIVO_RELACIONADO"] == true)){
foreach($_FILES AS $ETQIETA => $VALOR){
	echo $conexion->cargar($ETQIETA,'01Tempresarial','3',$IpTEMPRESARIAL);
}	
}



if($IpTEMPRESARIAL == false and ($_FILES["T_FOTO_TARJETA"] == true or $_FILES["T_FOTO_TARJETA_ATRAS"] == true or $_FILES["T_SUBIR_COMPROBABTE"] == true or $_FILES["T_SUBIR_INE"] == true or $_FILES["T_SUBIR_INE_ATRAS"] == true or $_FILES["T_SUBIR_ARCHIVO_RELACIONADO"] == true)){
foreach($_FILES AS $ETQIETA => $VALOR){
	echo $conexion->cargar($ETQIETA,'01Tempresarial');
}	
}


if($_FILES["JALAR_NUMERO_TARJETA"] == true ){
foreach($_FILES AS $ETQIETA => $VALOR){
	echo $conexion->cargar($ETQIETA,'01ComPendientes');
}	
}

if($IpUNIFORME == true AND ( $_FILES["U_FOTOS"] == true OR $_FILES["U_CARGAR_CARTA"] == true ) ){
	//print_r($_POST);print_r($_FILES);
	//$IpUNIFORME = isset($_POST['IpUNIFORME'])?$_POST['IpUNIFORME']:'';
foreach($_FILES AS $ETQIETA => $VALOR){
	echo $conexion->cargar($ETQIETA,'01uniformes','3',$IpUNIFORME);

}	
}

if($IpUNIFORME == false AND ($_FILES["U_FOTOS"] == true OR $_FILES["U_CARGAR_CARTA"] == true)){
foreach($_FILES AS $ETQIETA => $VALOR){
	echo $conexion->cargar($ETQIETA,'01uniformes');
}	
}


if($IpPOLIZAS == false and $_FILES["PD_CARGAR_DOCUMENTO"] == true  ){
	//echo $IpPOLIZAS;
foreach($_FILES AS $ETQIETA => $VALOR){
	echo $conexion->cargar($ETQIETA,'01polizasydocumentos');
}	
}

if($IpPOLIZAS == true and $_FILES["PD_CARGAR_DOCUMENTO"] == true  ){
	//echo $IpPOLIZAS;
foreach($_FILES AS $ETQIETA => $VALOR){
	echo $conexion->cargar($ETQIETA,'01polizasydocumentos','3',$IpPOLIZAS);
}	
}



if($IpCONVENIOPRESTAMO == true and ($_FILES["CP_CARGAR_CONVENIO"] == true or $_FILES["CP_CARGAR_FICHA"] == true)){
	//echo $IpPOLIZAS;
foreach($_FILES AS $ETQIETA => $VALOR){
	echo $conexion->cargar($ETQIETA,'01convenioprestamo','3',$IpCONVENIOPRESTAMO);
}	
}




if($IpINVENTARIO == true AND ( $_FILES["CODIGO_QR"] == true or $_FILES["I_FACTURA1"] == true or  $_FILES["I_FOTOS"] == true ) ){
	//print_r($_POST);print_r($_FILES);
	//$IpINVENTARIO = isset($_POST['IpINVENTARIO'])?$_POST['IpINVENTARIO']:'';
foreach($_FILES AS $ETQIETA => $VALOR){
	echo $conexion->cargar($ETQIETA,'01inventariofotos','4',$IpINVENTARIO);

}	
}

if($IpCARGAMU22 == true AND ( $_FILES["CMU_FOTO"] == true ) ){
	//print_r($_POST);print_r($_FILES);
	//$IpUNIFORME = isset($_POST['IpUNIFORME'])?$_POST['IpUNIFORME']:'';
foreach($_FILES AS $ETQIETA => $VALOR){
	echo $conexion->cargar($ETQIETA,'01CARGAMASIVAU','3',$IpCARGAMU22);

}	
}

//CMD_CARGA_POLIZA
if($IpCARGAMP2 == true AND ( $_FILES["CMD_CARGA_POLIZA"] == true ) ){
	//print_r($_POST);print_r($_FILES);
	//$IpUNIFORME = isset($_POST['IpUNIFORME'])?$_POST['IpUNIFORME']:'';
foreach($_FILES AS $ETQIETA => $VALOR){
	echo $conexion->cargar($ETQIETA,'01cargamasivap','3',$IpCARGAMP2);

}	
}











?>