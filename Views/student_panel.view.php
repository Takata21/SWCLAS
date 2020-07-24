<?php
$id = $_GET['xml'];
?>
<?php?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Views/fontawesome/css/all.css">
    <link rel="stylesheet" href="Views/css/student.css">
    <link rel="stylesheet" href="Views/css/estilos-tabla.css">
    <link rel="stylesheet" href="Views/css/form.css">
    <title>Panel de Estudiante</title>

</head>

<body>
    <header class="header">





        <div class="u-wrapper">

            <div class="header-content">
                <a href="#" class="header-logo"></a>
                <!-- <img src="./static/images/logo-bookmark.svg" alt=""> -->
                <!-- <img src="./static/images/logo-bookmark white.svg" alt=""> -->
                <label for="open" class="menu-open"></label>



                <nav class="menu">
                    <div class="u-wrapper">

                        <ul>
                            <li>
                                <a href="" id="btn-reservarClases">Reservar Clase</a>
                            </li>
                            <li>
                                <a id="btn-clases" href="">Clases</a>
                            </li>


                            <li>
                                <a href="" id="btn-pagos">Pagos</a>
                            </li>


                            <li>
                                <a href="" id="btn-horarios">Horarios</a>
                            </li>
                            <li>
                                <a href="Controller/php/cerrar_sesion.php">Cerrar sesión</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    <div id="download-grid" class="download-grid">

        <div class="download-item">
            <img src="Views/images/calculadora.svg" alt="" width="105" height="100">
            <h3 class="uh3">
                Tomar clase de Matemática
            </h3>
            <p class="u-parrafo">
                $25 por hora
            </p>
            <button class="u-buttom fullWitho" id="btn-abrir-math">
                Tomar clase
            </button>
        </div>

        <div class="download-item">
            <img src="Views/images/inglaterra.svg" alt="" width="105" height="100">
            <h3 class="uh3">
                Tomar clase de Inglés
            </h3>
            <p class="u-parrafo">
                $25 por hora
            </p>
            <button class="u-buttom fullWitho" id="btn-abrir-ing">
                Tomar clase
            </button>
        </div>

        <div class="download-item">
            <img src="Views/images/atomo.svg" alt="" width="105" height="100">
            <h3 class="uh3">

                Tomar clase de Física
            </h3>
            <p class="u-parrafo">
                $25 por hora
            </p>
            <button class="u-buttom fullWitho" id="btn-abrir-fsc">
                Tomar clase
            </button>
        </div>
    </div>





    <div class="panelclases" id="panelclases">
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
                        <th>Correo</th>
                        <th>Estado de pago</th>
                    </tr>
                </table>
                <div class="loader" id="loader"></div>
            </main>
        </div>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="takata211011@gmail.com">
            <input type="hidden" name="lc" value="AL">
            <input type="hidden" name="item_name" value="Clases">
            <input type="hidden" name="button_subtype" value="services">
            <input type="hidden" name="no_note" value="0">
            <input type="hidden" name="currency_code" value="USD">
            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
            <table>
                <tr>
                    <td><input type="hidden" name="on0" value="Horas de clases">Horas de clases</td>
                </tr>
                <tr>
                    <td><select name="os0">
                            <option value="1 Hora">1 Hora $25,00 USD</option>
                            <option value="2 Horas">2 Horas $50,00 USD</option>
                            <option value="3 Horas">3 Horas $75,00 USD</option>
                            <option value="4 Horas">4 Horas $100,00 USD</option>
                            <option value="5 Horas">5 Horas $125,00 USD</option>
                        </select> </td>
                </tr>
            </table>
            <input type="hidden" name="option_select0" value="1 Hora">
            <input type="hidden" name="option_amount0" value="25.00">
            <input type="hidden" name="option_select1" value="2 Horas">
            <input type="hidden" name="option_amount1" value="50.00">
            <input type="hidden" name="option_select2" value="3 Horas">
            <input type="hidden" name="option_amount2" value="75.00">
            <input type="hidden" name="option_select3" value="4 Horas">
            <input type="hidden" name="option_amount3" value="100.00">
            <input type="hidden" name="option_select4" value="5 Horas">
            <input type="hidden" name="option_amount4" value="125.00">
            <input type="hidden" name="option_index" value="0">
            <input style="margin-left: 594px;" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
        </form>

    </div>




    <div class="panelclasespagas" id="panelclasespagas">
        <div class="contenedor">
            <header>
                <h1>Pagos</h1>
                <div>
                    <button id="btn_cargar_pagos" class="btn active">Cargar Pagos</button>
                </div>
            </header>
            <main>

                <div class="error_box" id="error_box">
                    <p>Se ha producido un error.</p>
                </div>
                <table id="tabla2" class="tabla">
                    <tr>
                        <th>ID</th>
                        <th>Materia</th>
                        <th>Estudiante</th>
                        <th>Profesor</th>
                        <th>Fecha</th>
                        <th>Duracion</th>
                        <th>Costo</th>
                        <th>Correo</th>
                        <th>Estado de pago</th>
                    </tr>
                </table>
                <div class="loader" id="loader"></div>
            </main>
        </div>
    </div>




    <div class="horarios" id="horarios">
        <div class="contenedor">
            <header>
                <h1>Horario</h1>
                <div>
                    <button id="btn_cargar_pagos" class="btn active">Cargar Horario</button>
                </div>
            </header>
            <main>

                <div class="error_box" id="error_box">
                    <p>Se ha producido un error.</p>
                </div>
                <table id="tabla2" class="tabla">
                    <tr>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miercoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                        <th>Sabado</th>
                        <th>Domingo</th>
                    </tr>
                </table>
                <div class="loader" id="loader"></div>
            </main>
        </div>
    </div>




    <div class="overlay" id="overlay">
        <div class="popup" id="popup">
            <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
            <h3>Reservar clase</h3>
            <h4>Introduce los dato para tu clase</h4>
            <form action="" method="" id="formulario" class="formularioc">
                <div class="contenedor-inputs">
                    <input type="hidden" disabled value="<?php echo $id ?>" name="id">
                    <input type="text" placeholder="Nombre Completo" name="nombre">
                    <input type="date" name="fecha">
                    <input type="email" placeholder="Correo" name="correo">
                    <input type="text" placeholder="Horas de clase" name="horas">
                </div>
                <input type="submit" class="btn-submit" value="Aceptar" id="btn-submit">
            </form>
        </div>
    </div>



    <script src="Controller/js/student_panel.js"></script>
</body>

</html>