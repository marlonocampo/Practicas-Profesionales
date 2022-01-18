<?php
header('Access-Control-Allow-Origin: *');
include "conectar.php";

    try {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $fecha = $_POST['fecha'];
        $sexo = $_POST['sexo'];

        $sql = conectar()->prepare('insert into tabla1 (nombre,apellido,edad,fecha,sexo) values(:nombre,:apellido, :edad, :fecha, :sexo)');
        $sql->bindParam(':nombre',$nombre);
        $sql->bindParam(':apellido',$apellido);
        $sql->bindParam(':edad',$edad);
        $sql->bindParam(':fecha',$fecha);
        $sql->bindParam(':sexo',$sexo);
        $resul = $sql->execute();
        if ($resul){
            echo json_encode(['Ingresado con exito']);
        }
    }catch (PDOException $exception){
        echo 'error'.$exception;
    }
