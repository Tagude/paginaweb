<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Coca cola es la bebida más famosa del mundo.">
    <meta name="keywords" content="bebida, coca cola, refresco, bebida gaseosa">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        Inicio - Coca Cola
    </title>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c2fbd233d7.js" crossorigin="anonymous"></script>
</head>
    <body>
        <header>
            <div class="container">
            <a href="index.php" class="logo">    
                <img src ="img/logo.svg" class="logo">
            </a>
            <nav>
                <a href="#inicio">Inicio</a>
                <a href="#nosotros">Nosotros</a>
                <a href="#servicios">Servicios</a>
                <a href="#galeria">Galería</a>
                <a href="#contactanos">Contáctanos</a>
            </nav>
            <a href="#" class="hamb"><i class="fa-solid fa-bars"></i></a>
            </div>
        </header>
        <main>
            <section id="inicio">
                <img src="img/bannerprincipal.jpg">
                <div class="bloque-inicio">
                    <h1>Bienvenidos a Coca Cola</h1>
                    <p>La bebida más famosa del mundo, refrescante y deliciosa. 
                        Disfruta de su sabor único y comparte momentos inolvidables con Coca Cola.
                        Desde su creación, ha sido un símbolo de felicidad y unión en todo el mundo.
                    </p>
                    <a href="#nosotros" class="boton boton-rojo">Ver más</a>
                </div>
            </section>
            <section id="nosotros" class="seccion">
                <div class="container">
                    <p>En Coca Cola, nos dedicamos a ofrecer la mejor experiencia de bebida a nuestros consumidores. 
                        Con más de 130 años de historia, hemos evolucionado y crecido junto a nuestras comunidades.
                        Nuestra misión es refrescar al mundo, inspirar momentos de optimismo y felicidad,
                        y crear valor y hacer la diferencia.
                        Nos comprometemos a operar de manera sostenible, cuidando el medio ambiente y apoyando a
                        las comunidades donde operamos.
                    </p>
                </div>
            </section>
            <section id="servicios" class="seccion">
                <div class="container">
                    <div class="row">
                        <div class="columna columna-33 columna-mobile-100">
                            <div class="bloque-servicio">
                                <div class="bloque-img-servicio cuadrado-perfecto">
                                    <img src="img/servicio1.jpg">
                                </div>
                                <div class="bloque-contenido-servicio">
                                    <h3>Ventas</h3>
                                    <p>Venta y distribución de bebidas refrescantes.
                                        Nos aseguramos de que nuestros productos lleguen a todos los rincones del país,
                                        ofreciendo un servicio rápido y eficiente.
                                    </p>
                                    <a href="#" class="boton boton-blanco">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="columna columna-33 columna-mobile-100">
                            <div class="bloque-servicio">
                                <div class="bloque-img-servicio cuadrado-perfecto">
                                    <img src="img/servicio2.jpg">
                                </div>
                                <div class="bloque-contenido-servicio">
                                    <h3>Experiencias</h3>
                                    <p>Eventos y promociones especiales.
                                        Creamos experiencias únicas para nuestros consumidores,
                                        organizando eventos y promociones que resaltan la alegría de compartir Coca Cola.
                                    </p>
                                    <a href="#" class="boton boton-blanco">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="columna columna-33 columna-mobile-100">
                            <div class="bloque-servicio">
                                <div class="bloque-img-servicio cuadrado-perfecto">
                                    <img src="img/servicio3.jpg">
                                </div>
                                <div class="bloque-contenido-servicio">
                                    <h3>Soporte</h3>
                                    <p>Atención al cliente y soporte.
                                        Nuestro equipo está siempre disponible para atender las consultas y necesidades de nuestros consumidores,
                                        garantizando una experiencia satisfactoria con nuestros productos.
                                    </p>
                                    <a href="#" class="boton boton-blanco">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="galeria">
                <div class="container-fluid">
                    <div class="row">
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio1.jpg">
                                <h4>Imagen 1</h4>
                            </div>
                        </div>
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio2.jpg">
                                <h4>Imagen 2</h4>
                            </div>
                        </div>
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio3.jpg">
                                <h4>Imagen 3</h4>
                            </div>
                        </div>
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio4.jpg">
                                <h4>Imagen 4</h4>
                            </div>
                        </div>
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio5.jpg">
                                <h4>Imagen 5</h4>
                            </div>
                        </div>
                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="img/servicio6.jpg">
                                <h4>Imagen 6</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contactanos" class="seccion">
                <iframe width="520" height="400" frameborder="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;
                hl=en&amp;q=%20+(Colombia)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                <div class="container-fluid">
                    <div class="row">
                        <div class="columna columna-41  columna-mobile-100 empujar-58 empujar-mobile-0 sinpadding-mobile">
                            <form action="index.php" method="post">
                                <div class="form-block">
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="form-block">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-block">
                                    <textarea name="mensaje" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="form-block bloque-ultimo">
                                    <button type="submit" class="boton boton-negro" value="Enviar">
                                        Enviar
                                    </button>
                                </div>
                                <?php
                                if($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $nombre = ($_POST['nombre']);
                                    $email = ($_POST['email']);
                                    $mensaje = ($_POST['mensaje']);

                                    if(isset($nombre)){
                                        if(isset($email)){
                                            if(isset($mensaje)){
                                                $para = "tania.agudelomurillo@gmail.com"; // Aquí debes colocar el correo electrónico al que quieres enviar el mensaje.
                                                $asunto = "esto es una prueba";
                                                $cuerpo = $nombre."\n".$email."\n".$mensaje;
                                                $adicional = "From: noreply@example.com";

                                                mail($para,$asunto,$cuerpo,$adicional);
                                            ?>
                                            <?php
                                            } else {
                                                echo "<p>Error: El mensaje no puede estar vacío.</p>";
                                            }
                                        }
                                    }
                                }
                                ?>
                            </form>
                            <h2>Contáctanos</h2>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="columna columna-25 columna-mobile-100">
                        <img src="img/logo-blanco.png" class="logo-footer"> 
                        <p>Coca Cola siempre contigo, acompañándote en todos tus momentos.</p>
                    </div>
                    <div class="columna columna-25 columna-mobile-100">
                        <h3>
                            Información
                       <h3>
                            Temas relacionados
                       </h3>
                        <ul class="temas-relacionados">
                            <li><a href="#">Historia de Coca Cola</a></li>
                            <li><a href="#">Productos y sabores</a></li>
                            <li><a href="#">Compromiso social</a></li>
                            <li><a href="#">Innovaciones y sostenibilidad</a></li>
                        </ul>
                    </div>
                    <div class="columna columna-25 columna-mobile-100">
                           <h3>
                            Datos de contacto
                       </h3>
                        <ul class="datos-contacto">
                            <li><a href="#">Teléfono: 123-456-7890</a></li>
                            <li><a href="#">Dirección: Calle Falsa 123, Ciudad</a></li>
                            <li><a href="#">Email: contacto@coca-cola.com</a></li>
                            <li><a href="#">Horario: Lunes a Viernes, 9am - 5pm</a></li>
                        </ul>
                    </div>
                    <div class="columna columna-25 columna-mobile-100">
                        <h3>
                            Síguenos en redes sociales
                        </h3>
                        <ul class="redes-sociales">
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-square-x-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="barra-footer">
                &copy; 2023 Coca Cola. Todos los derechos reservados.
            </div>
        </footer>
        <script src="js/jquery.js"></script>
        <script src="js/funciones.js"></script>
    </body>
</html>