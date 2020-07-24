let btnAbrirmath = document.getElementById('btn-abrir-math'),
    formulario = document.getElementById('formulario'),
    btnAbriring = document.getElementById('btn-abrir-ing'),
    btnAbrirfsc = document.getElementById('btn-abrir-fsc'),
    overlay = document.getElementById('overlay'),
    popup = document.getElementById('popup'),
    btnCerrarPopup = document.getElementById('btn-cerrar-popup'),
    panelreservacion = document.getElementById('download-grid'),
    panelclases = document.getElementById('panelclases'),
    panelpagos = document.getElementById('panelclasespagas'),
    panelhorario = document.getElementById('horarios'),
    btnreservarClases = document.getElementById('btn-reservarClases'),
    btnclases = document.getElementById('btn-clases'),
    btnpagos = document.getElementById('btn-pagos'),
    btnhorarios = document.getElementById('btn-horarios'),
    btn_cargar_usuarios = document.getElementById('btn_cargar_usuarios'),
    btn_cargar_pagos = document.getElementById('btn_cargar_pagos');








function cargarUsuarios(id) {
    tabla.innerHTML = '<tr><th>ID</th><th>Materia</th><th>Estudiante</th><th>Profesor</th><th>Fecha</th><th>Duracion</th><th>Costo</th><th>Correo</th><th>Estado de pago</th></tr>'

    let peticion = new XMLHttpRequest()
    peticion.open("POST", "Controller/php/cargarclases.php");

    peticion.onload = function() {

        let datos = JSON.parse(peticion.responseText);

        if (datos.error) {
            error_box.classList.add('active')

        } else {

            for (let index = 0; index < datos.length; index++) {
                let elemento = document.createElement("tr");
                elemento.innerHTML += "<td>" + datos[index].id + "</td>";
                elemento.innerHTML += "<td>" + datos[index].materia + "</td>";
                elemento.innerHTML += "<td>" + datos[index].estudiante + "</td>";
                elemento.innerHTML += "<td>" + datos[index].profesor + "</td>";
                elemento.innerHTML += "<td>" + datos[index].fecha + "</td>";
                elemento.innerHTML += "<td>" + datos[index].tiempo + "</td>";
                elemento.innerHTML += "<td>" + "$" + datos[index].costo + "</td>";
                elemento.innerHTML += "<td>" + datos[index].correo_estudiante + "</td>";
                estado = datos[index].estado_pago;
                if (estado == "1") {
                    elemento.innerHTML += "<td>" + 'Pagado' + "</td>";

                } else {
                    elemento.innerHTML += "<td>" + 'Sin pagar' + "</td>";

                }
                document.getElementById("tabla").appendChild(elemento);
            }
        }

    };

    let parametros = `id=${id}`;
    peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    peticion.send(parametros);



}

function cargarPagos(id, estado) {
    tabla.innerHTML = '  <tr><th>ID</th><th>Materia</th><th>Estudiante</th><th>Profesor</th><th>Fecha</th><th>Duracion</th><th>Costo</th><th>Estado de pago</th><th>Correo</th></tr>'

    let peticion = new XMLHttpRequest()
    peticion.open("POST", "Controller/php/cargarpagos.php");

    peticion.onload = function() {

        let datos = JSON.parse(peticion.responseText);

        if (datos.error) {
            error_box.classList.add('active')

        } else {

            for (let index = 0; index < datos.length; index++) {
                let elemento = document.createElement("tr");
                elemento.innerHTML += "<td>" + datos[index].id + "</td>";
                elemento.innerHTML += "<td>" + datos[index].materia + "</td>";
                elemento.innerHTML += "<td>" + datos[index].estudiante + "</td>";
                elemento.innerHTML += "<td>" + datos[index].profesor + "</td>";
                elemento.innerHTML += "<td>" + datos[index].fecha + "</td>";
                elemento.innerHTML += "<td>" + datos[index].tiempo + "</td>";
                elemento.innerHTML += "<td>" + "$" + datos[index].costo + "</td>";
                elemento.innerHTML += "<td>" + datos[index].correo_estudiante + "</td>";
                estado = datos[index].estado_pago;
                if (estado == "1") {
                    elemento.innerHTML += "<td>" + 'Pagado' + "</td>";

                } else {
                    elemento.innerHTML += "<td>" + 'Sin pagar' + "</td>";

                }
                document.getElementById("tabla2").appendChild(elemento);
            }
        }

    };

    let parametros = `id=${id}&estado=${estado}`;
    peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    peticion.send(parametros);



}

btnpagos.addEventListener('click', function(e) {
    e.preventDefault();
    console.log('holapagos')
    e.preventDefault()
    panelpagos.classList.add('active');
    panelreservacion.classList.remove('active');
    console.log('hola2')
    panelclases.classList.remove('active');
    panelhorario.classList.remove('active');

})

btnhorarios.addEventListener('click', function(e) {
    e.preventDefault();
    console.log('holapagos')
    e.preventDefault()
    panelpagos.classList.remove('active');
    panelreservacion.classList.remove('active');
    console.log('hola2')
    panelclases.classList.remove('active');
    panelhorario.classList.add('active');

})


btn_cargar_usuarios.addEventListener('click', function() {
    id = formulario.id.value.trim();
    cargarUsuarios(id);

})


btn_cargar_pagos.addEventListener('click', function() {
    id = formulario.id.value.trim();
    estado = 1;
    cargarPagos(id, estado);

})





panelreservacion.classList.add('active');
let materia, profesor, mate, prof,
    nombre, correo, horas, fecha, id;

btnreservarClases.addEventListener('click', function(e) {
    e.preventDefault();
    e.preventDefault()
    panelpagos.classList.remove('active');
    panelreservacion.classList.add('active');
    panelclases.classList.remove('active');
    panelhorario.classList.remove('active');

})

btnclases.addEventListener('click', function(e) {
    e.preventDefault();
    panelreservacion.classList.remove('active');
    panelpagos.classList.remove('active');
    panelhorario.classList.remove('active')
    panelclases.classList.add('active');


})


function formulario_valido() {
    if (nombre == "") {
        return false
    } else if (correo == "") {
        return false
    } else if (horas == "") {
        return false
    } else if (fecha == "") {
        return false
    }


    return true
}

function agregarClase(e, materia, profesor) {
    e.preventDefault()

    let peticion = new XMLHttpRequest()
    peticion.open("POST", "Controller/php/class.php");
    id = formulario.id.value.trim();
    mate = materia;
    prof = profesor;
    nombre = formulario.nombre.value.trim();
    correo = formulario.correo.value.trim();
    horas = formulario.horas.value.trim();
    fecha = formulario.fecha.value.trim();
    console.log(fecha)


    if (formulario_valido()) {
        let parametros = `id=${id}&materia=${mate}&nombre=${nombre}&profesor=${prof}&fecha=${fecha}&tiempo=${horas}&correo=${correo}`;

        peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


        peticion.send(parametros);

        peticion.onload = function() {
            formulario.nombre.value = '';
            formulario.correo.value = '';
            formulario.horas.value = '';
            formulario.fecha.value = '';

        }

        peticion.onreadystatechange = function() {
            if (peticion.readyState == 4 && peticion.status == 200) {
                alert('Recuerda pagar');
                overlay.classList.remove('active');
                popup.classList.remove('active');
            }
        }



        console.log('ok')

    } else {
        error_box.classList.add('active')
        error_box.innerHTML = 'Por favor completa el formulario correctamente'
    }
}




formulario.addEventListener('submit', function(e) {
    agregarClase(e, materia, profesor);
})

btnAbrirmath.addEventListener('click', function() {
    overlay.classList.add('active');
    popup.classList.add('active');
    materia = 'Matematica'
    profesor = 'Humberto Gonzalez'
    console.log(materia)

});

btnAbriring.addEventListener('click', function() {
    overlay.classList.add('active');
    popup.classList.add('active');
    materia = 'Ingles'
    profesor = 'Juan Carlos Gonzalez'
    console.log(materia)
});


btnAbrirfsc.addEventListener('click', function() {
    overlay.classList.add('active');
    popup.classList.add('active');
    materia = 'Fisica'
    profesor = 'Alexis Gonzalez'
    console.log(materia)
});

btnCerrarPopup.addEventListener('click', function(e) {
    e.preventDefault();
    overlay.classList.remove('active');
    popup.classList.remove('active');
});