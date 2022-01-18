function Actualizar(){
    const act = document.getElementById('Actualizar');
    act.addEventListener('submit', e => {
        e.preventDefault();
        const datos = new FormData(act);
        fetch(`http://localhost/unan/backend/Actualizar.php`, {
            method: 'POST',
            body: datos
        })
            .then(response => response.json)
            .then(data => respac(data))
            .catch(error => console.log(error))
    })

    const respac = (datos) => {
        console.log(datos);
        location.reload()
    }

}