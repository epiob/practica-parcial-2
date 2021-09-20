import fetch from 'node-fetch';

let funcion = function validar() {
    'use strict'

    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    alert('Ingresar todos los datos')
                } else {
                    alert('Datos ingresados correctamente')
                }

                form.classList.add('was-validated')
            }, false)
        })
}