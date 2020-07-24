<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Views/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
            <a class="admin__menu-opciones-item" href="admin_panel_usuarios.php">Usuarios</a>
            <a class="admin__menu-opciones-item" href="admin_panel_estudiantes.php">Estudiantes</a>
            <a class="admin__menu-opciones-item" href="admin_panel_profesores">Profesores</a>
            <a class="admin__menu-opciones-item" href="admin_panel_materias.php">Clases</a>
            <a class="admin__menu-opciones-item" href="admin_panel_informes.php">informes</a>

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
                        <h1>Clases</h1>
                        <div>
                            <button id="btn_cargar_usuarios" class="btn active">Cargar Clases</button>
                        </div>
                    </header>
                    <main>
                        
                        <div class="error_box" id="error_box">
                            <p>Se ha producido un error.</p>
                        </div>
                        <table id="tabla" class="tabla">
                            <tr>
                                <th>ID</th>
                                <th>Materia</th>
                                <th>Estudiante</th>
                                <th>Profesor</th>
                                <th>Fecha</th>
                                <th>Duracion</th>
                                <th>Costo</th>
                            </tr>
                        </table>
                        <div class="loader" id="loader"></div>
                    </main>
                </div>
            </div>

        </div>

    </div>

<script src="Controller/js/class.js"></script>
</body>

</html>