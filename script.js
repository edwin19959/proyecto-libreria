document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        const nombre = document.getElementById('nombre').value;
        const correo = document.getElementById('correo').value;
        const comentario = document.getElementById('comentario').value;

        if (!nombre || !correo || !comentario) {
            alert('Por favor, completa todos los campos.');
            event.preventDefault();
        } else if (!validateEmail(correo)) {
            alert('Por favor, ingresa un correo electrónico válido.');
            event.preventDefault();
        }
    });

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    }
});
