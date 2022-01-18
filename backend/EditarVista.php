<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../frontend/bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Editar</title>
</head>
<body>
<?php
include('conectar.php');
header('Access-Control-Allow-Origin: *');
$idedit = $_GET['id'];
$resul =[];

    $sql = conectar()->prepare('SELECT * FROM tabla1 where tabla1.id = :id');
    $sql->bindParam(':id', $idedit);
    $sql->execute();
    $resul = $sql->fetchAll(PDO::FETCH_ASSOC);
    if (!$resul) {
        echo json_encode($resul);
    }
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <div class="h4">
                        Edit
                    </div>
                </div>
                <div class="card-body">
                    <form id="formulario" action="Actualizar.php" method="post">
                        <input id="id" type="hidden" name="id" value="<?php echo $resul[0]['id'] ?>" >
                        <div class="mb-1">
                            <label class="form-label">Nombre</label>
                            <input id="nombre" type="text" name="nombre" class="form-control"
                                   value="<?php echo $resul[0]['nombre'] ?>"
                            >
                        </div>
                        <div class="mb-1">
                            <label class="form-label">Apellido</label>
                            <input id="apellido" type="text" name="apellido" class="form-control"
                                   value="<?php echo $resul[0]['apellido'] ?>"
                            >
                        </div>
                        <div class="mb-1">
                            <label class="form-label">Edad</label>
                            <input id="edad" type="number" name="edad" class="form-control"
                                   value="<?php echo $resul[0]['edad'] ?>"
                            >
                        </div>
                        <div class="mb-1">
                            <label class="form-label">Date</label>
                            <input id="fecha" type="date" name="fecha" class="form-control"
                                   value="<?php echo $resul[0]['fecha'] ?>"
                            >
                        </div>
                        <div class="mb-1">
                            <label for="sexo" class="form-label">Date</label>
                            <select class="form-select" name="sexo" id="sexo">
                                <option selected value="">Seleccione Sexo</option>
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                            </select>
                        </div>
                        <button class="btn btn-primary" id="insertar" type="submit"> Actualizar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>