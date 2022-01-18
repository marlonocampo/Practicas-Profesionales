    let submit = document.getElementById('formulario')
    submit.addEventListener('submit', (e) => {
        e.preventDefault();
        const datos = new FormData(submit);
        fetch(`http://localhost/unan/backend/Insertar.php`, {
            method: 'POST',
            body: datos
        })
            .then(response => response.json())
            .then(data => respuesta(data))
            .catch(error => console.log(error))
    })

    const respuesta = (datos) => {
        console.log(datos);
        location.reload();
    }