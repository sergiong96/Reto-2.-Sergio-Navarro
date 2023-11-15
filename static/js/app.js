//VARIABLES
const indexButtons = document.querySelectorAll("#heroIndex .product .amount-div button");
const showElement = document.querySelector("#login #showRecover");
const inputsElementsLogin = document.querySelectorAll(".form_group .input_login");
const littleImagesProduct = document.querySelectorAll("#heroDetail #imageMainInfo #littleImages img");
const toBasketButton = document.querySelectorAll("#heroIndex .product button[data-button-type='toBasket']");
const submitLoginbtn = document.querySelector("#heroLogin #login #logInForm button[type='submit']");
const inputPassLogin = document.querySelector("#heroLogin #login #passW");
const loginButton = document.querySelector("#navBar #loginIcon a");
const closeSessionBtn = document.querySelector("#heroUser #exit button");



//EVENTOS
//Evento carrusel imágenes header
document.addEventListener("DOMContentLoaded", () => {
    headerSlider();
});

//Evento añadir al carrito
if (toBasketButton) {
    toBasketButton.forEach((button) => {
        button.addEventListener("click", (event) => {
            let target = event.currentTarget.getAttribute("data-target");
            increaseBasket(target);
        });
    });
}

//Evento mostrar div de recuperación de contraseña
if (showElement) {
    showElement.addEventListener("click", recoverPassForm);
}

// Eventos botones Index aumentar/disminuir cantidad
if (indexButtons) {
    indexButtons.forEach((button) => {
        button.addEventListener("click", (event) => {
            const action = event.currentTarget.getAttribute("data-action");
            const targetId = event.currentTarget.getAttribute("data-target");
            const targetInput = document.getElementById(targetId);

            if (action === "decrement") {
                decrement(targetInput);
            } else if (action === "increment") {
                increment(targetInput);
            }

        });
    });
}

//Efecto floating label del formulario de login
if (inputsElementsLogin) {
    inputsElementsLogin.forEach((inputElement) => {
        inputElement.addEventListener("focus", () => {
            const labelElement = inputElement.previousElementSibling;
            labelElement.classList.add("focused");
        });

        inputElement.addEventListener("blur", () => {
            const labelElement = inputElement.previousElementSibling;
            if (inputElement.value === "") {
                labelElement.classList.remove("focused");
            }
        });
    });
}

//Imagen pequeña se convierte en grande en detalle producto
if (littleImagesProduct) {
    littleImagesProduct.forEach((image) => {
        image.addEventListener("click", (event) => {
            let bigSRC = document.querySelector("#heroDetail #imageMainInfo #bigImage");
            let littleSRC = event.currentTarget.src;
            bigSRC.src = littleSRC;
        });
    });
}

//Evento para iniciar sesión
if (submitLoginbtn) {
    submitLoginbtn.addEventListener("click", () => {
        logIn();
    });
}

//Icono que dirige a login o a user.php en base a si existe una sesión iniciada o no
if (loginButton) {
    loginButton.addEventListener("click", () => {
        let userStorage = localStorage.getItem("sesionUser");

        if (userStorage !== null) {
            window.location.href = "./user.php";
        } else {
            window.location.href = "./login.php";
        }
    });
}

//Inicia sesión al pulsar enter sobre el input password
if (inputPassLogin) {
    inputPassLogin.addEventListener("keydown", (event) => {
        if (event.key === "Enter") {
            event.preventDefault();
            logIn();
        }
    });
}

//Botón cierre de sesión
if (closeSessionBtn) {
    closeSessionBtn.addEventListener("click", () => {
        localStorage.removeItem("sesionUser");
        window.location.href = "./index.php";
    });
}



//FUNCIONES
//Función para controlar el slider del header
function headerSlider() {
    const imagesSrc = ['../static/img/carrusel/c1.png', '../static/img/carrusel/c2.jpg', '../static/img/carrusel/c3.jpg', '../static/img/carrusel/c4.jpg'];
    const imageElement = document.getElementById("imgCarousel");
    let index = 0;

    setInterval(() => {
        imageElement.src = imagesSrc[index];
        index++;
        if (index === 4) {
            index = 0;
        }
    }, 4000);
}

//Aumenta el número flotante del carrito de la compra
function increaseBasket(target) {
    let amountOfProduct = parseInt(document.getElementById(target).value);
    let basketNumberElement = document.querySelector("#navBar #basketIcon input[type='text']");
    let actualAmount = amountOfProduct + parseInt(basketNumberElement.value);
    basketNumberElement.value = actualAmount;
    shoppingList(target, amountOfProduct);
}

//Añade el nombre del producto a la lista de la compra, si ya está, aumenta el valor del input asociado a ese producto
function shoppingList(target, amountOfProduct) {
    let shoppingListElement = document.querySelector("#navBar #basketIcon #shoppingList");
    let liElement = document.createElement("li");
    let inputElement = document.createElement("input");
    inputElement.type = "text";
    inputElement.setAttribute("readonly", "true");
    liElement.innerText = target;
    liElement.appendChild(inputElement);
    let exist = false;

    for (let element of shoppingListElement.childNodes) {
        if (element.innerText === target) {
            exist = true;
            let actualValue = parseInt(element.querySelector("input").value);
            let sumValue = actualValue + amountOfProduct;
            element.querySelector("input").value = sumValue;
        }
    }

    if (!exist) {
        shoppingListElement.appendChild(liElement);
        inputElement.value = amountOfProduct;
    }

    if (!shoppingListElement.classList.contains("active")) {
        shoppingListElement.classList.add("active");
    }
}

//Función aumentar cantidad productos Index
function increment(targetInput) {
    targetInput.value++;
}

//Función disminuir cantidad productos Index
function decrement(targetInput) {
    if (targetInput.value > 1) {
        targetInput.value--;
    }
}

//Función mostrar formulario para recuperar contraseña
function recoverPassForm() {
    let sectionShow = document.querySelector("#login #recoverPass");
    sectionShow.classList.toggle("active");
}

//Función para iniciar sesión
function logIn() {
    let user = document.querySelector("#heroLogin #login #logInForm input#usuario").value;
    let pass = document.querySelector("#heroLogin #login #logInForm input#passW").value;

    if (user === "user" && pass === "user") {
        let credentials = {
            id: "1",
            usuario: user
        };
        localStorage.setItem("sesionUser", JSON.stringify(credentials));
        window.location.href = "./user.php";
    }
}