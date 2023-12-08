
// Email Validation :
function validationEmail() {
    let email = document.getElementById("email");
    let emailError = document.getElementById("email_error")
    if (!email.value.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)) {
        emailError.textContent = 'Please Enter a valid email address !';
        return false;
    }
    else {
        emailError.textContent = '';
        return true;
    }
}

// Password validation:

let createField = document.getElementById("password");
let createError = document.getElementById("error_pass");
function validationPass() {
    if (!createField.value.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[?!@#$%^&*])[A-Za-z\d@$!%*?&#]{8,}$/)) {
        createError.textContent = "Password is not valid! ";
        return false;
    } else {
        createError.textContent = "";
        return true
    }
}

// Password show and hide :
let showPass = document.getElementById("show_password");
let passwordField = document.getElementById("password");
showPass.addEventListener('click', function () {
    if (passwordField.type === "password") {
        showPass.classList.replace("fa-eye-slash", "fa-eye");
        return (passwordField.type = "text");
    }
    else {
        showPass.classList.replace("fa-eye", "fa-eye-slash")
        passwordField.type = "password"
    }
})
/// Submit:
var loginBottom = document.getElementById("Login");
loginBottom.addEventListener('click', function (event) {
    event.preventDefault();
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    // let validateEmail = validationEmail();
    // let validateEmail = validationPass()
    // Authentication:
    var user = {
        email: email,
        password: password
    };
    console.log(JSON.stringify(user));
    // Make a POST request using Fetch API
    // C:\xampp\htdocs\api\login_oop.php
    fetch('http://localhost/api/login_oop.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(user)
    })
        .then(response => {
            // Handle the response from the server, if needed
            if (response.ok) {
                window.location.href = "login.html"; // Redirect upon successful submission
            } else {
                // Handle error scenarios
                throw new Error('Network response was not ok.');
            }
        })
        .catch(error => {
            // Handle and display errors
            console.error('There was a problem with the fetch operation:', error);
            // You can display an error message on the page if needed
        });
})
