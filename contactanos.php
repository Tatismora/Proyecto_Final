<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terapia con Patitas | Contacto</title>
    <link rel="shortcur icon" href="./img/dog-solid-24.png" type="img/dog">
    <link rel="stylesheet" href="./CSS/normalize.css">
    <link rel="stylesheet" href="./CSS/contactostyle.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

</head>
<body>
    <header class="hero">
        <nav class="nav container">
            <div class="nav_logo">
                <h2 class="nav_title">Terapia con Patitas</h2>
            </div>
            <ul class="nav_link nav_link--menu">
                <li class="nav:items">
                    <a href="./index.html" class="nav_links">Inicio</a>
                </li>
        
                <li class="nav:items">
                    <a href="./Acerca_de.html" class="nav_links">Acerca de</a>
                </li>
                <li class="nav:items">
                    <a href="./contactanos.php" class="nav_links">Contacto</a>
                </li>

                <img src="./img/close.svg" class="nav_close">
            </ul>
            <div class="nav_menu"></div>
            <img src="./img/menu.svg" class="nav_img">
        </nav>

        <section class="form__container">
            <div class="info--form">
                <h2 class="hero_title">Contactanos</h2>
                <p class="form__paragraph">Estamos emocionados de conectar contigo. Si tienes preguntas, inquietudes o simplemente deseas aprender más sobre "Terapia con Patitas", no dudes en ponerte en contacto. Puedes completar el formulario. Tu interés y apoyo son cruciales para nuestra misión de brindar terapia y bienestar a través de nuestros pequeños amigos peludos. ¡Ansiamos escuchar de ti y trabajar juntos en esta noble causa!</p>
                <a href="#"> <i class="fa fa-phone"></i>310-453-2222</a>
                <a href="#"><i class="fa fa-envelope"></i>contacto@guardianespeludos.com</a>
                <a href="#"><i class="fa fa-map-marked"></i>Bogotá, Colombia</a>
            </div>
            <form method="post" autocomplete="off">
                <div class="form-group">
                    <div class="form-content">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" name="name" placeholder="Nombre">
                    </div>
                    <div class="form-content">
                        <label for="email">Correo</label>
                        <input type="email" id="email" name="email" placeholder="Correo">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-content">
                        <label for="direction">Direccion</label>
                        <input type="text" id="direction" name="direction" placeholder="Direccion">
                    </div>
                    <div class="form-content">
                        <label for="phone">Telefono</label>
                        <input type="tel" id="phone" name="phone" placeholder="Telefono">
                    </div>
                </div>

                <label for="message">Mensaje</label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
                <input class="cta" type="submit" name="contact" value="Enviar Mensaje">
            </form>
        </section>

        

    </header>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">Refugio animal Guardianes Peludos.</h2>
            </nav>
            <form class="footer__form">
                <h2 class="footer__newsletter">¡Únete a nuestra comunidad!</h2>
                <div class="footer__inputs">
                    <input type="email" placeholder="Email:" class="footer__input">
                    <input type="submit" placeholder="Registrate:" class="footer__submit">
                </div>
            </form>
        </section>
        

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="./img/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./img/twitter.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./img/youtube.svg" class="footer__img"></a>
            </div>
            <p>Correo electrónico: contacto@guardianespeludos.com</p>
            <h3 class="footer__copyright">Derechos resarvados &copy; Tatiana Mora</h3>
            
        </section>
    </footer>

<?php include("contacto.php") ?>
    

</body>
</html>