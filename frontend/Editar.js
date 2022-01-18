function editar(id){
    console.log(id);
    fetch(`http://localhost/unan/backend/EditarVista.php?id=${id}`)
        .then(response =>response.json())
        .then(reseditar => actualizar(reseditar))
        .catch(error => console.log(error))
}
const actualizar = (datos)=>{
    console.log(datos);
    window.location.href = '/backend/EditarVista.php';
}