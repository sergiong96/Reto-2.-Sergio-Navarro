<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Página de login y registro de CheapShop">
    <meta name="keywords" content="login, usuario, iniciar sesion, configuracion, registro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Navarro González">
    <link rel="icon" type="image/x-icon" href="../static/img/icon/logo.ico">
    <link rel="stylesheet" href="../static/css/style.css">
    <script src="https://kit.fontawesome.com/903082a171.js" crossorigin="anonymous"></script> <!--Fonts Awesome-->
    <title>Iniciar sesión/Registrarse</title>
</head>

<body>

    <?php require("./partials/header.html"); ?>

    <?php require("./partials/navBar.html"); ?>

    <main id="heroLogin">
        
        <section id="login">
            <h3>Iniciar sesión</h3>
            <form method="POST" id="logInForm">
                <div class="form_group">
                    <label for="usuario" class="label_login">Usuario</label>
                    <input type="text" id="usuario" name="usuario" class="input_login">
                </div>
                <div class="form_group">
                    <label for="passW" class="label_login">Contraseña</label>
                    <input type="password" id="passW" name="password" class="input_login">
                </div>
                <a href="#showRecover" id="showRecover">¿Has olvidado la contraseña?</a>
                <button type="submit" name="submitLogIn"><a href="#">Iniciar Sesión</a></button>
            </form>

            <article id="recoverPass">
                <form action="#" method="POST" id="recoverForm">
                    <label for="emailPass">Correo electrónico de recuperación</label>
                    <input type="email" id="emailPass" name="emailPass" placeholder="email@email.com">
                    <button type="submit" name="submitRecuperaPass"><a href="#">Recuperar Contraseña</a></button>
                </form>
            </article>
        </section>


        <section id="signIn">
            <h3>¿Aún no te has registrado? Hazlo aquí</h3>
            <form action="#" method="POST" id="signInForm">
                <div class="form_group">
                    <label for="nombre" class="label_login">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="input_login">
                </div>
                <div class="form_group">
                    <label for="ape" class="label_login">Apellidos</label>
                    <input type="text" id="ape" name="apellidos" class="input_login">
                </div>
                <div class="form_group">
                    <label for="user" class="label_login">Nombre de usuario</label>
                    <input type="text" id="user" name="nombreUsuario" class="input_login">
                </div>
                <div class="form_group">
                    <label for="emailR" class="label_login">Correo electrónico</label>
                    <input type="email" id="emailR" name="email" class="input_login">
                </div>
                <div class="form_group">
                    <label for="pass" class="label_login">Contraseña</label>
                    <input type="text" id="pass" name="password" class="input_login">
                </div>
                <div class="form_group">
                    <label for="dir" class="label_login">Dirección</label>
                    <input type="text" id="dir" name="direccion" class="input_login">
                </div>
                <button type="submit" name="submitSignIn"><a href="#">Registrarse</a></button>
            </form>
        </section>

    </main>

    <?php require("./partials/footer.html"); ?>

    <script type="text/javascript" src="../static/js/app.js"></script>
</body>

</html>