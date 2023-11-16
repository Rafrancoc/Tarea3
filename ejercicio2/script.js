document.addEventListener("DOMContentLoaded", function () {
    var form = document.querySelector("form");
    form.addEventListener("submit", function (event) {
        var name = form.querySelector('[name="name"]').value;
        var phone = form.querySelector('[name="phone"]').value;
        var email = form.querySelector('[name="email"]').value;
        var message = form.querySelector('[name="message"]').value;
        if (name.trim() === "" || phone.trim() === "" || email.trim() === "" || message.trim() === "") {
            alert("Por favor, complete todos los campos.");
            event.preventDefault();
            return;
        }
        if (!/^\d{10}$/.test(phone)) {
            alert("Ingrese un número de teléfono válido (10 dígitos).");
            event.preventDefault();
            return;
        }
        if (!/\S+@\S+\.\S+/.test(email)) {
            alert("Ingrese un correo electrónico válido.");
            event.preventDefault();
            return;
        }
    });
});