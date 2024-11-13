function validarFormulario() {
    let nombre = document.getElementById('nombre').value;
    let email = document.getElementById('email').value;
    let mensaje = document.getElementById('mensaje').value;

    if (nombre === "" || email === "" || mensaje === "") {
        alert("Todos los campos son obligatorios.");
        return false;
    }
    return true;
}

