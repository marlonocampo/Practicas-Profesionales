<?php
function conectar(){
    try {
        $conectar  = new PDO("mysql:host=localhost;dbname=unan", "root","");
        $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conectar;
    }catch (PDOException $exception){
        echo 'Error en la conexion '.$exception.'';
        return 'error'.$exception;
    }
}
