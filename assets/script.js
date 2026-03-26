document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("formReserva");
    const mensajes = document.getElementById("mensajes");

    form.addEventListener("submit", function (e) {

        mensajes.innerHTML = "";
        mensajes.className = "";

        let nombre = document.getElementById("nombre").value.trim();
        let contacto = document.getElementById("contacto").value.trim();
        let fecha = document.getElementById("fecha").value;
        let personas = document.getElementById("personas").value;
        let comentarios = document.getElementById("comentarios").value.trim();

        let errores = [];

        if (nombre === "") {
            errores.push("El nombre es obligatorio.");
        }

        if (contacto === "") {
            errores.push("El contacto es obligatorio.");
        }

        if (fecha === "") {
            errores.push("La fecha es obligatoria.");
        }

        if (personas === "" || personas <= 0) {
            errores.push("El número de personas debe ser mayor a cero.");
        }

        let hoy = new Date().toISOString().split("T")[0];
        if (fecha < hoy) {
            errores.push("La fecha no puede ser anterior a hoy.");
        }

        let regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!regexCorreo.test(contacto)) {
            errores.push("El contacto debe tener formato válido (ejemplo@correo.com).");
        }

        if (errores.length > 0) {
            e.preventDefault(); // SOLO bloquea si hay errores

            mensajes.classList.add("error");
            errores.forEach(function (error) {
                mensajes.innerHTML += "<p>" + error + "</p>";
            });

        } else {
            // DEJA QUE EL FORMULARIO SE ENVÍE A PHP

            mensajes.classList.add("exito");
            mensajes.innerHTML = `
                <h3>Reservación válida ✔</h3>
                <p>Enviando datos...</p>
            `;
        }

    });

});

