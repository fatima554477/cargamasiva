<?php

require "controlador.php";

$con = $conexion->db();
$departid = '';

if (isset($_POST['depart'])) {
    $departid = mysqli_real_escape_string($con, $_POST['depart']);
}

$users_arr = array();

$sql = "SELECT 01empresa.id AS empresa_id, USUARIO_CRM, NOMBRE_1, NOMBRE_2, APELLIDO_PATERNO, APELLIDO_MATERNO
        FROM 01empresa, 01informacionpersonal
        WHERE 01informacionpersonal.IdRelacion = 01empresa.id
        AND DEPARTAMENTO = '".$departid."' ";

$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
    $userid = $row['empresa_id'];
    $NOMBRE_1 = trim($row['NOMBRE_1']);
    $NOMBRE_2 = trim($row['NOMBRE_2']);
    $APELLIDO_PATERNO = trim($row['APELLIDO_PATERNO']);
    $APELLIDO_MATERNO = trim($row['APELLIDO_MATERNO']);

    $nombreCompleto = trim($NOMBRE_1.' '.$NOMBRE_2.' '.$APELLIDO_PATERNO.' '.$APELLIDO_MATERNO);
    $users_arr[] = array("id" => $userid, "NOMBRE_1" => $nombreCompleto);
}

echo json_encode($users_arr);