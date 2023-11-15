<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Portal del usuario de CheapShop">
    <meta name="keywords" content="login, usuario, configuracion">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Navarro González">
    <link rel="icon" type="image/x-icon" href="../static/img/icon/logo.ico">
    <link rel="stylesheet" href="../static/css/style.css">
    <script src="https://kit.fontawesome.com/903082a171.js" crossorigin="anonymous"></script> <!--Fonts Awesome-->
    <title>Portal Usuario</title>
</head>

<body>

    <?php require("./partials/header.html"); ?>

    <?php require("./partials/navBar.html"); ?>

    <main id="heroUser">
        <h1>Bienvenido al área de Usuario</h1>

        <section id="userInfo">
            <div><a href="#">
                    <i class="fa-solid fa-circle-info"></i>
                    <p>Información personal</p>
                </a>
            </div>
        </section>


        <section id="orders">
            <div><a href="#">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <p>Ver historial de pedidos</p>
                </a>
            </div>
        </section>


        <section id="directions">
            <div><a href="#">
                    <i class="fa-solid fa-signs-post"></i>
                    <p>Direcciones de envío</p>
                </a>
            </div>
        </section>


        <section id="restitution">
            <div><a href="#">
                    <i class="fa-solid fa-rotate-left"></i>
                    <p>Devoluciones y reembolso</p>
                </a>
            </div>
        </section>


        <section id="wishList">
            <div><a href="#">
                    <i class="fa-solid fa-heart"></i>
                    <p>Lista de deseos</p>
                </a>
            </div>
        </section>


        <section id="configuration">
            <div><a href="#">
                    <i class="fa-solid fa-gears"></i>
                    <p>Ajustes de la cuenta</p>
                </a>
            </div>
        </section>
        
        <div id="exit"><button type="button">Cerrar sesión</button></div>
    </main>

    <?php require("./partials/footer.html"); ?>

    <script type="text/javascript" src="../static/js/app.js"></script>
</body>

</html>