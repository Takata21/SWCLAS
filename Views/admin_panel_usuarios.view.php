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
                        <h1>Usuarios</h1>
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
                <!-- <div class="admin__contenido-informacion-table">
                    <div class="admin__contenido-informacion-table-head">
                        <h1>Usuarios</h1>
                    </div>
                    <table>
                        <tbody>
                            <tr>

                                <th>Usuario</th>
                                <th>Tipo</th>
                                <th>Imagen</th>
                                <th class="edit"><a href=""> <i class=" far fa-edit"></i></a></th>
                                <th class="delete"><a href=""> <i class=" far fa-trash-alt"></i></a></th>
                            </tr>

                            <tr>
                                <td>admin</td>
                                <td>Administrador</td>
                                <td>Admin.jpg</td>
                                <td>
                                    <form action="#" method="POST">
                                        <input style="display: none;" type="text" value="admin">
                                        <button class="btnedit" value="form_update" type="submit"></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="#" method="POST">
                                        <input style="display:none;" type="text" name="id" value="admin">
                                        <input style="display:none;" type="text" name="userimage" value="user.png">
                                        <button class="btndelete" name="btn" value="form_delete" type="submit"></button>
                                    </form>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="admin__contenido-informacion-opciones">
                    <div class="admin__contenido-informacion-opciones-container">
                        <form action="#" method="POST">
                            <button class="btn icon " name="btn" value="form_add" type="submit"><i class="fas fa-plus-circle"></i></button>
                        </form>
                        <form action="#" method="POST">
                            <button class="btn disabled icon icon-coding" name="btn" value="form_coding" type="submit" disabled=""><i class="fas fa-code"></i></button>
                        </form>
                        <form action="#" method="POST">
                            <button class="btn disabled icon icon-printer" name="btn" value="form_printer" type="submit" disabled=""><i class="fas fa-print"></i></button>
                        </form>
                        <form action="/">
                            <button class="btnexit icon icon-exit" type="submit"><i class="fas fa-sing-out-alt"></i></button>
                        </form>

                    </div>


                </div> -->

            </div>

        </div>

    </div>


</body>

</html>