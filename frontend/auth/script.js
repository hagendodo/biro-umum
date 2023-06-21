function toggleForms() {
    var registerForm = document.getElementById("register-form");
    var loginForm = document.getElementById("login-form");
    var registerImage = document.querySelector(".image-regis");
    var loginImage = document.querySelector(".image-login");

    registerForm.classList.toggle("hidden");
    loginForm.classList.toggle("hidden");
    registerImage.classList.toggle("hidden");
    loginImage.classList.toggle("hidden");

    var informasiLink = document.getElementById("informasi-link");
    var modalOverlay = document.getElementById("information-overlay");
    var modalCloseButton = document.getElementById("information-closebtn");
    var container = document.getElementById("container");

    informasiLink.addEventListener("click", function (event) {
        event.preventDefault();
        modalOverlay.style.display = "flex";
        container.classList.add("overlay");
    });

    modalCloseButton.addEventListener("click", function () {
        modalOverlay.style.display = "none";
        container.classList.remove("overlay");
    });

}