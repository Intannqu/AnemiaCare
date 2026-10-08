document.addEventListener("DOMContentLoaded", function () {

    const loginButton = document.getElementById("loginButton");
    const loginPopup = document.getElementById("loginPopup");
    const closeLogin = document.getElementById("closeLogin");

    if (loginButton) {
        loginButton.addEventListener("click", function () {
            loginPopup.style.display = "block";
        });
    }

    if (closeLogin) {
        closeLogin.addEventListener("click", function () {
            loginPopup.style.display = "none";
        });
    }

});
