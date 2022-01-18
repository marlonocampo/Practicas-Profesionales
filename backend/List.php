<?php
include 'conectar.php';
header('Access-Control-Allow-Origin: *');
Listar();
function Listar(){
    $sql = conectar()->prepare('select * from tabla1');
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($resultado);
}