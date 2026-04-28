<?php



	require "controlador.php";

//$conexion = NEW colaboradores();
$con = $conexion->db();

if(isset($_POST['depart'])){
   $departid = mysqli_real_escape_string($con,$_POST['depart']); // department id
}

$users_arr = array();

//if($departid > 0){
 $sql = "SELECT 01empresa.id as 01empresaid, USUARIO_CRM, NOMBRE_1,NOMBRE_2,APELLIDO_PATERNO, APELLIDO_MATERNO FROM 01empresa, 01informacionpersonal WHERE

 01informacionpersonal.IdRelacion = 01empresa.id and DEPARTAMENTO = '".$departid."' ";

    $result = mysqli_query($con,$sql);
    
    while( $row = mysqli_fetch_array($result) ){
        $userid = $row['01empresaid'];
        $NOMBRE_1 = $row['NOMBRE_1'];
        $NOMBRE_1 = $row['NOMBRE_2'];
           $APELLIDO_PATERNO = $row['APELLIDO_PATERNO'];
           $APELLIDO_MATERNO = $row['APELLIDO_MATERNO'];
		   
        $users_arr[] = array("id" => $userid, "NOMBRE_1" => $NOMBRE_1.' '.$NOMBRE_2.' '.$APELLIDO_PATERNO.' '. $APELLIDO_MATERNO );
    }
//}

// encoding array to json format
echo json_encode($users_arr);