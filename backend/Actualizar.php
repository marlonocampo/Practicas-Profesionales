<?php
header('Access-Control-Allow-Origin: *');
include "conectar.php";
actualizar();
function actualizar(){
    try {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $fecha = $_POST['fecha'];
        $sexo = $_POST['sexo'];
        $sql = conectar()->prepare('update tabla1 set nombre=:nombre, apellido=:apellido, edad=:edad, fecha=:fecha, sexo=:sexo where id=:id');
        $sql->bindParam(':nombre', $nombre);
        $sql->bindParam(':apellido', $apellido);
        $sql->bindParam(':edad', $edad);
        $sql->bindParam(':fecha', $fecha);
        $sql->bindParam(':sexo', $sexo);
        $sql->bindParam(':id', $id);
        $resultado =  $sql->execute();
        if ($resultado){
            echo json_encode("Datos Actualizado!");
            Header("Location: /index.html");
        }
    }catch (PDOException $exception){
        echo json_encode("Error!".$exception);
    }
}