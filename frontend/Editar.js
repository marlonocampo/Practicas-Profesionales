function editar(id){
    console.log(id);
    fetch(`http://localhost/unan/backend/Editar.php?id=${id}`)
        .then(response =>response.json())
        .then(reseditar => actualizar(reseditar))
        .catch(error => console.log(error))
}
const actualizar = (datos)=>{
    console.log(datos);
    let id = datos[0].id;
    let nombre = datos[0].nombre;
    let apellido = datos[0].apellido;
    let edad = datos[0].edad;
    let fecha = datos[0].fecha;
    let sexo = datos[0].sexo;

    document.getElementById('nombree').value = nombre;
    document.getElementById('apellidoe').value = apellido;
    document.getElementById('edade').value = edad;
    document.getElementById('fechae').value = fecha;
    document.getElementById('sexoe').value = sexo;
    document.getElementById('id').value = id;



    //window.location.href = '/backend/EditarVista.php';
}