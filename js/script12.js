var nombre = document.getElementById('nombre');
var password = document.getElementById('password');
var error = document.getElementById('error');
error.style.color = 'white';

function entrarFormulario(){
    console.log('Entrando al formulario.');

    var textError = [];

    if(nombre.value === null || nombre.value === ''){
        textError.push('Ingresa el nombre de usuario');
    }

    if(password.value === null || password.value === ''){
        textError.push('Ingresa la contraseña');
    }

    error.innerHTML = textError.join(', ');

    return false;

}