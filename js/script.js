// JavaScript code goes here
const showPasswordCheckbox = document.getElementById("showPassword");
const passwordInput = document.getElementById("password");
const confirmPwdInput = document.getElementById("confirm_password");

showPasswordCheckbox.addEventListener("change", function() {
    if (showPasswordCheckbox.checked) {
        passwordInput.type = "text";
        confirmPwdInput.type = "text";
    } else {
        passwordInput.type = "password";
        confirmPwdInput.type = "password";
    }
});


// ****************************************************************************************************





    

