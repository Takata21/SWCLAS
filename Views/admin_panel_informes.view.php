<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Views/fontawesome/css/all.css">
    <link rel="stylesheet" href="Views/css/admin_panel.css">
    <link rel="stylesheet" href="Views/css/estilos-tabla.css">
    <title>Panel de administracion</title>

</head>

<body>

    <div class="admin__container">
        <div class="admin__menu">
            <div class="admin__menu_user">
                <img src="./Views/images/asistencia-icon.png" alt="">
                <p class="admin__user-name">Manuel Takata</p>
            </div>

            <div class="admin__menu-opciones">
                <a class="admin__menu-opciones-item " href="">Usuarios</a>
                <a class="admin__menu-opciones-item " href="">Estudiantes</a>
                <a class="admin__menu-opciones-item " href="">Profesores</a>
                <a class="admin__menu-opciones-item " href="">Materias</a>
                <a class="admin__menu-opciones-item " href="">informes</a>

            </div>
        </div>
        <div class="admin__contenido">
            <div class="admin__contenido-header">
                <div class="admin__contenido-header-fecha">
                    Lunes 18 de julio de 2020

                </div>
                <div class="admin__contenido-header-out">
                    <p>Manuel Takata</p>
                    <a href="#">Cerrar Secion</a>

                </div>
            </div>

            <div class="admin__contenido-informacion">
                <div class="contenedor">
                    <header>
                        <h1>Informes</h1>
                        <div>
                            <button id="btn_cargar_usuarios" class="btn active">Cargar Usuarios</button>
                        </div>
                    </header>
                    <main>
                        <form action="" method="" id="formulario" class="formulario">
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                            <input type="text" name="apellido" id="nombre" placeholder="Apellido">
                            <input type="text" name="usuario" id="edad" placeholder="Nombre Uusuario">
                            <input type="text" name="permisos" id="pais" placeholder="Permisos">
                            <input type="email" name="correo" id="correo" placeholder="Correo">
                            <button type="submit" class="btn">Agregar</button>
                        </form>
                        <div class="error_box" id="error_box">
                            <p>Se ha producido un error.</p>
                        </div>
                        <table id="tabla" class="tabla">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Usuario</th>
                                <th>permisos</th>
                                <th>Correo</th>
                            </tr>
                        </table>
                        <div class="loader" id="loader"></div>
                    </main>
                </div>
            </div>

        </div>

    </div>


</body>

</html>