const btneliminar = document.getElementById('btneliminar');
function eliminar(id){
    fetch(`http://localhost/unan/backend/Eliminar.php?id=${id}`)
        .then(response => response.json())
        .then(res => resp(res))
        .catch(data => console.log(data))
}

const resp = (res)=>{
    console.log(res);
    $('#id').val('')
    location.reload();
}