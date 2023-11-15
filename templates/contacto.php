<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Página de contacto de CheapShop">
    <meta name="keywords" content="contacto, ubicacion, horario, direccion, formulario de contacto">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Navarro González">
    <link rel="icon" type="image/x-icon" href="../static/img/icon/logo.ico">
    <link rel="stylesheet" href="../static/css/style.css">
    <script src="https://kit.fontawesome.com/903082a171.js" crossorigin="anonymous"></script> <!--Fonts Awesome-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script> <!--reCAPTCHA-->
    <title>Contacto</title>
</head>

<body>

    <?php require("./partials/header.html"); ?>

    <?php require("./partials/navBar.html"); ?>

    <main id="heroContact">
        <section id="contactHeader">
            <article id="containerH1">
                <h1>Contáctanos</h1>
                <p>¿Tienes alguna duda, comentario o sugerencia? Escríbenos y nos pondremos en contacto contigo en menos
                    de 24 horas.</p>
                <img src="../static/img/logo/logo.png" alt="Logo CheapShop">
            </article>
            <article id="contactFormContainer">
                <p>Los campos marcados con <span>*</span> son obligatorios</p>
                <form action="#" method="POST" id="contactForm">
                    <label for="nomb">Nombre<span>*</span></label>
                    <input type="text" id="nomb" name="nombre" required>

                    <label for="aped">Apellidos<span>*</span></label>
                    <input type="text" id="aped" name="apellido" required>

                    <label for="email">Correo electrónico<span>*</span></label>
                    <input type="email" id="email" name="email" required>

                    <label for="telf">Teléfono</label>
                    <input type="tel" id="telf" name="telefono">

                    <label for="motiv">Motivo</label>
                    <select name="motivo" id="motiv">
                        <option value="reclamacion">Reclamaciones</option>
                        <option value="duda" selected>Dudas sobre pagos o envíos</option>
                        <option value="negocio">Negocios</option>
                        <option value="otros">Otros motivos</option>
                    </select>

                    <label for="msg">Mensaje<span>*</span></label>
                    <textarea name="mensaje" id="msg" cols="30" rows="10" required></textarea>
                    <div class="g-recaptcha" data-sitekey="6Lfbh8QoAAAAAIccuNpYpZSbfn1DIFblGMR9Dmud"></div>
                    <button type="submit" name="submitMensaje">Enviar mensaje</button>
                </form>
            </article>
        </section>


        <section id="contactAndSchedule">
            <article id="contactInfo">
                <h3>Otros medios de contacto:</h3>
                <p><i class="fa-solid fa-location-pin"></i>Edificio I+D6, C. Severo Ochoa, 21, 29590 Málaga</p>
                <p><i class="fa-solid fa-phone"></i>952 04 78 08</p>
                <p><i class="fa-solid fa-envelope"></i>info@cheapshop.com</p>
            </article>

            <article id="schedule">
                <h3>Horario de atención al público:</h3>
                <table>
                    <tr>
                        <td>Lunes a viernes</td>
                        <td>8:00 - 18:00</td>
                    </tr>
                    <tr>
                        <td>Fines de semana</td>
                        <td>8:00 - 14:00</td>
                </table>
            </article>
        </section>

        
        <section id="location">
            <h3>Nos encontramos en:</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1598.7507090408424!2d-4.556811960356597!3d36.7345337949591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72f1836309d353%3A0xedc31e566ace3b82!2sAvanade%20Spain%20(M%C3%A1laga)!5e0!3m2!1ses!2ses!4v1697402211987!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

    </main>

    <?php require("./partials/footer.html"); ?>

    <script type="text/javascript" src="../static/js/app.js"></script>
</body>

</html>