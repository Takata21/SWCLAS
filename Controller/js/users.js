let btn_cargar = document.getElementById("btn_cargar_usuarios"),
    error_box = document.getElementById("error_box"),
    tabla = document.getElementById("tabla"),
    loader = document.getElementById("loader"),
    formulario2 = document.getElementById("formulario2")
formulario = document.getElementById("formulario")

let usuario_id,
    usuario_nombre,
    usuario_apellido,
    usuario_usuario,
    usuario_tipo,
    usuario_correo,
    usuario_pass = 211011



function cargarUsuarios() {
    tabla.innerHTML = '<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Usuario</th><th>permisos</th><th>Correo</th></tr>'
    let peticion = new XMLHttpRequest();
    peticion.open("GET", "Controller/php/usuarios.php");

    loader.classList.add("active");


    peticion.onload = function() {

        let datos = JSON.parse(peticion.responseText);

        if (datos.error) {
            error_box.classList.add('active')

        } else {

            for (let index = 0; index < datos.length; index++) {
                let elemento = document.createElement("tr");
                elemento.innerHTML += "<td>" + datos[index].id + "</td>";
                elemento.innerHTML += "<td>" + datos[index].nombre + "</td>";
                elemento.innerHTML += "<td>" + datos[index].apellido + "</td>";
                elemento.innerHTML += "<td>" + datos[index].usuario + "</td>";
                elemento.innerHTML += "<td>" + datos[index].tipo + "</td>";
                elemento.innerHTML += "<td>" + datos[index].correo + "</td>";
                document.getElementById("tabla").appendChild(elemento);
            }
        }

    };



    peticion.onreadystatechange = function() {
        if (peticion.readyState == 4 && peticion.status == 200) {
            loader.classList.remove("active");
        }
    };

    peticion.send();


}

function agregarUsuarios(e) {
    e.preventDefault()

    let peticion = new XMLHttpRequest()
    peticion.open("POST", "Controller/php/insertar_usuario.php");
    usuario_nombre = formulario.nombre.value.trim();
    usuario_apellido = formulario.apellido.value.trim();
    usuario_usuario = formulario.usuario.value.trim();
    usuario_correo = formulario.correo.value.trim();



    if (formulario_valido()) {
        error_box.classList.remove('active')
        let parametros = `nombre=${usuario_nombre}&apellido=${usuario_apellido}&usuario=${usuario_usuario}&email=${usuario_correo}&pass=${usuario_pass}`;

        peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        loader.classList.add('active');

        peticion.send(parametros);

        peticion.onload = function() {
            cargarUsuarios();
            formulario.nombre.value = '';
            formulario.apellido.value = '';
            formulario.usuario.value = '';
            formulario.correo.value = '';

        }

        peticion.onreadystatechange = function() {
            if (peticion.readyState == 4 && peticion.status == 200) {
                loader.classList.remove('active')
            }
        }



        console.log('ok')

    } else {
        error_box.classList.add('active')
        error_box.innerHTML = 'Por favor completa el formulario correctamente'
    }
}


function eliminarUsuarios(e) {
    e.preventDefault()
    let peticion = new XMLHttpRequest()
    peticion.open("POST", "Controller/php/eliminar_usuario.php")
    usuario_id = formulario2.id.value.trim();


    if (!usuario_id == "") {
        error_box.classList.remove('active')
        let parametros = `id=${usuario_id}`;
        peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        loader.classList.add('active');

        peticion.send(parametros);

        peticion.onload = function() {
            cargarUsuarios();
            formulario2.id.value = '';


        }

        peticion.onreadystatechange = function() {
            if (peticion.readyState == 4 && peticion.status == 200) {
                loader.classList.remove('active')
            }
        }

    } else {
        error_box.classList.add('active')
        error_box.innerHTML = 'Por favor completa el formulario correctamente'

    }

}
btn_cargar.addEventListener("click", function() {
    cargarUsuarios();
    // peticion.open('GET', 'http://www.json-generator.com/api/json/get/ceOoKzsaPS?indent=2')


});

formulario.addEventListener('submit', function(e) {
    agregarUsuarios(e);
})


formulario2.addEventListener('submit', function(e) {
    eliminarUsuarios(e)
})



function formulario_valido() {
    if (usuario_nombre == "") {
        return false
    } else if (usuario_apellido == "") {
        return false
    } else if (usuario_usuario == "") {
        return false
    } else if (usuario_correo == "") {
        return false
    }


    return true
}