<?php
header('Access-Control-Allow-Origin: *');
include 'conectar.php';
Editar();
function Editar()
{
    try {
        $id = $_GET['id'];
        $sql = conectar()->prepare('SELECT * FROM tabla1 where tabla1.id = :id');
        $sql->bindParam(':id',$id);
        $sql->execute();
        $resul = $sql->fetchAll(PDO::FETCH_ASSOC);
        if ($resul){
            echo json_encode($resul);
        }
    }catch (PDOException $exception){
        echo json_encode(['Error en econtrar datos']);
    }
}