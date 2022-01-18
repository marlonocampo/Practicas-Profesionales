const tbody = document.querySelector('tbody')
let filas = ''
fetch('http://localhost/unan/backend/List.php')
    .then(response => response.json())
    .then(datos => listar(datos))
    .catch(data => console.log(data))

const listar = (datos) => {
    datos.map((dato) => {
        filas += `
        <tr>
            <td>${dato.id}</td>
            <td>${dato.nombre}</td>
            <td>${dato.apellido}</td>
            <td>${dato.edad}</td>
            <td>${dato.fecha}</td>
            <td>${dato.sexo}</td>
            <td>
            
            <a class="btn btn-primary" href="/backend/EditarVista.php?id=${dato.id}" role="button"> Editar </a> 
            <button class="btn btn-danger" id="btneliminar" onclick="eliminar(${dato.id})">Eliminar</button> 
            </td>
        </tr>
        `
        tbody.innerHTML = filas;
    })
//onclick="editar(${dato.id})"
}


