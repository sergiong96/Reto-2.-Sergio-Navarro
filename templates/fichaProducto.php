<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Detalle de nuestros productos - Infórmate, compra, opina ">
    <meta name="keywords" content="detalle, precio, oferta, tecnología, ecommerce, opinion">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sergio Navarro González">
    <link rel="icon" type="image/x-icon" href="../static/img/icon/logo.ico">
    <link rel="stylesheet" href="../static/css/style.css">
    <script src="https://kit.fontawesome.com/903082a171.js" crossorigin="anonymous"></script> <!--Fonts Awesome-->
    <title>Ficha producto</title>
</head>

<body>
    <?php require("./partials/header.html"); ?>

    <?php require("./partials/navBar.html"); ?>

    <main id="heroDetail">

        <section id="imageMainInfo">
            <article id="image">
                <img id="bigImage" src="../static/img/detalleProducto/1.webp" alt="Imagen producto" title="Producto genérico">
                <div id="littleImages">
                    <img src="../static/img/detalleProducto/1.webp" alt="Imagen producto" title="Ver aumentado">
                    <img src="../static/img/detalleProducto/2.webp" alt="Imagen producto" title="Ver aumentado">
                    <img src="../static/img/detalleProducto/3.webp" alt="Imagen producto" title="Ver aumentado">
                    <img src="../static/img/detalleProducto/4.webp" alt="Imagen producto" title="Ver aumentado">
                    <img src="../static/img/detalleProducto/5.webp" alt="Imagen producto" title="Ver aumentado">
                </div>
            </article>

            <article id="mainInfo">
                <h3>Producto Samsung V-9</h3>
                <p>Descubre nuestro último producto, perfecto para tus necesidades. Con un diseño elegante y
                    características excepcionales, este artículo es ideal para una amplia gama de usos. Ya sea en casa,
                    en la oficina o al aire libre, este producto ofrece comodidad, estilo y rendimiento. ¡Obtén el tuyo
                    ahora y mejora tu vida cotidiana!</p>
                <div id="price">
                    <p><del>25.99€</del></p>
                    <p>12.99€</p>
                </div>

                <button type="button">Añadir al carrito</button>
            </article>
        </section>


        <section id="description">
            <h2>Características Destacadas:</h2>
            <ul>
                <li>Diseño versátil y atractivo que se adapta a diversas situaciones y preferencias.</li>
                <li>Funcionalidad avanzada para abordar una variedad de tareas y necesidades.</li>
                <li>Fácil de usar y configurar para que puedas comenzar rápidamente.</li>
                <li>Personalizable para satisfacer tus preferencias individuales y necesidades cambiantes.</li>
                <li>Duradero y confiable para un uso a largo plazo.</li>
                <li>Este producto es la elección perfecta para aquellos que buscan una solución versátil y de alta
                    calidad que se adapte a sus necesidades específicas. Con su diseño y funcionalidad excepcionales, es
                    una inversión que te facilitará la vida en una variedad de contextos.
                </li>
            </ul>

            <h2>Especificaciones técnicas</h2>
            <table>
                <tbody>
                    <tr>
                        <th>Tipo de dispositivo</th>
                        <td>Producto informático</td>

                    </tr>
                    <tr>
                        <th>Dimensiones</th>
                        <td>45.2cm*35.5cm</td>
                    </tr>
                    <tr>
                        <th>Peso</th>
                        <td>3.2kg</td>
                    </tr>
                    <tr>
                        <th>Conectividad</th>
                        <td>Hdmi, DisplayPort, VGA, USB</td>
                    </tr>
                    <tr>
                        <th>Color</th>
                        <td>Negro, Azul</td>
                    </tr>
                    <tr>
                        <th>Accesorios</th>
                        <td>Cables y paño de microfibra incluidos</td>
                    </tr>
                    <tr>
                        <th>Autonomía</th>
                        <td>8 horas</td>
                    </tr>
                </tbody>
            </table>

        </section>


        <section id="reviews">
            <h2>Reseñas de nuestros clientes</h3>

                <article id="globalMark">
                    <h2>4.5</h2>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                    <p>(125)</p>
                </article>

                <article id="progressMarks">
                    <div id="progress5">
                        <p>5</p><i class="fa-solid fa-star"></i>
                        <div><span></span></div>
                    </div>
                    <div id="progress4">
                        <p>4</p><i class="fa-solid fa-star"></i>
                        <div><span></span></div>
                    </div>

                    <div id="progress3">
                        <p>3</p><i class="fa-solid fa-star"></i>
                        <div><span></span></div>
                    </div>

                    <div id="progress2">
                        <p>2</p><i class="fa-solid fa-star"></i>
                        <div><span></span></div>
                    </div>
                    <div id="progress1">
                        <p>1</p><i class="fa-solid fa-star"></i>
                        <div><span></span></div>
                    </div>

                    <span id="addReview">
                        <button>Añadir Reseña</button>
                    </span>
                </article>

                <article id="userReviews">
                    <div class="review">
                        <div>
                            <p>Gran producto</p>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p>Muy satisfecho con el producto, excelente calidad y servicio</p>

                    </div>
                    <div class="review">
                        <div>
                            <p>Lo mejor que he comprado en mi vida</p>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p>Excelente producto a un precio increíble</p>
                    </div>
                    <div class="review">
                        <div>
                            <p>Producto excelente, envío no tanto</p>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <p>El producto llegó en perfectas condiciones, pero el repartidor se perdió</p>
                    </div>
                    <div class="review">
                        <div>
                            <p>Muy bien</p>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <p>Llegó antes de lo esperado</p>
                    </div>
                    <div class="review">
                        <div>
                            <p>Bueno</p>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>Todo bien, pero vino con un rasguño</p>
                    </div>
                    <div class="review">
                        <div>
                            <p>Envío rápido</p>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <p>Llegó a Rusia en 2 días, perfecto</p>
                    </div>

                </article>
        </section>

    </main>

    <?php require("./partials/footer.html"); ?>

    <script type="text/javascript" src="../static/js/app.js"></script>
</body>

</html>