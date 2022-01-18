<?php
header('Access-Control-Allow-Origin: *');
include "conectar.php";
Eliminar();
function Eliminar()
{
    try {
        $id = $_GET['id'];
        $sql = conectar()->prepare('DELETE FROM tabla1 where tabla1.id = :id');
        $sql->bindParam(':id', $id);
        $resul = $sql->execute();
        if ($resul){
            echo json_encode(['Eliminado correctamente']);
        }
    }catch (PDOException $exception){
        echo json_encode(['Error en eliminar'.$exception]);

    }

}

