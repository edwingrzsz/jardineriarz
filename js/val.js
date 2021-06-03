function validarFormulario() {

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;


    if (password == null || password.length == 0 || /^\s+$/.test(password) || password === "") {
        alert('ERROR: Todos los campos deben ser completados');
        return false;
    }

    if (password.length < 8) {
        alert('ERROR: La contraseña debe contener al menos 8 caracteres, intenta nuevamente');
        return false;
    }

    if (!(/\S+@\S+\.\S+/.test(email))) {
        alert('ERROR: Debe escribir un correo válido');
        return false;
    }

    if (email === "edwing@gmail.com" && password === "edwingruiz12345") {
        location.href = "#";
        return true;
    }
    else
        alert('ERROR no son validas las credenciales');
    return false;

}