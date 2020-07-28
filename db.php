<?php

require_once("utilidades.php");


$server = "127.0.0.1";
$user = "root";
$pswd = "";
$db = "oncar";


//String de conexão

$conexao = mysqli_connect($server, $user, $pswd, $db);

if($conexao -> connect_errno){
    die($conexao -> connect_error);
}

//Guardar, modificar e eliminar

function NonQuery($sqlstr, $conexao){
    $result = mysqli_query($conexao, $sqlstr);
    return $conexao -> affected_rows;
}

//Select

function getRecords($sqlstr, $conexao){
    $result = mysqli_query($conexao, $sqlstr);
    $resultArray = array();

    foreach($result as $registros){
        $resultArray[] = $registros;
    }

    return $resultArray;

}