let btn_cargar = document.getElementById("btn_cargar_usuarios"),
    error_box = document.getElementById("error_box"),
    tabla = document.getElementById("tabla"),
    loader = document.getElementById("loader"),
    formulario2 = document.getElementById("formulario2")
formulario = document.getElementById("formulario")


cargarUsuarios();



function cargarUsuarios() {
    tabla.innerHTML = '<tr><th>ID</th><th>Materia</th><th>Estudiante</th><th>Profesor</th><th>Fecha</th><th>Duracion</th><th>Costo</th></tr>'
    let peticion = new XMLHttpRequest();
    peticion.open("GET", "Controller/php/clases.php");

    loader.classList.add("active");


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
                elemento.innerHTML += "<td>" + datos[index].tiempo + ' horas' + "</td>";
                elemento.innerHTML += "<td>" + '$ ' + datos[index].costo + "</td>";
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




btn_cargar.addEventListener("click", function() {
    cargarUsuarios();
    // peticion.open('GET', 'http://www.json-generator.com/api/json/get/ceOoKzsaPS?indent=2')


});