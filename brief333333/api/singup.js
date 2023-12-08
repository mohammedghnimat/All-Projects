

// // User Name validation:/

// // Email Validation :
// function validationEmail() {
//     let email = document.getElementById("email");
//     let emailError = document.getElementById("email_error")
//     if (!email.value.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)) {
//         emailError.textContent = 'Please Enter a valid email address !';
//         return false;
//     }
//     else {
//         emailError.textContent = '';
//         return true;
//     }
// }

// // Passwords show and hide:
// let showPass = document.getElementById("show_password");
// let passwordField = document.getElementById("create-password");
// showPass.addEventListener('click', function () {
//     if (passwordField.type === "password") {
//         showPass.classList.replace("fa-eye-slash", "fa-eye");
//         return (passwordField.type = "text");
//     }
//     else {
//         showPass.classList.replace("fa-eye", "fa-eye-slash")
//         passwordField.type = "password"
//     }
// })
// let showCon = document.getElementById("confirm_password");
// let confirmField = document.getElementById("confirm-password")
// showCon.addEventListener('click', function () {
//     if (confirmField.type === "password") {
//         showCon.classList.replace("fa-eye-slash", "fa-eye");
//         return (confirmField.type = "text")
//     }
//     else {
//         showCon.classList.replace("fa-eye", "fa-eye-slash");
//         confirmField.type = "password"
//     }
// })
// Password validation:
// let createField = document.getElementById("password");
// let createError = document.getElementById("create_error");
// function validationCreate() {
//     if (!createField.value.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[?!@#$%^&*])[A-Za-z\d@$!%*?&#]{8,}$/)) {
//         createError.textContent = "Please enter atleast 8 character with number, symbol, small and capital letter !  ";
//         return false;
//     } else {
//         createError.textContent = "";
//         return true
//     }
// }


// Confirm Password :
// function checkPassword() {
//     let passworD = document.getElementById("password").value;
//     let cnfrmPassword = document.getElementById("confirm-password").value;
//     let errorCheck = document.getElementById("confirm_error");

//     if (passworD.length != 0) {
//         if (passworD === cnfrmPassword) {
//             errorCheck.textContent = "";
//             return true
//         }
//         else {
//             errorCheck.textContent = "Passwords don't match !"
//             return false
//         }
//     } else {
//         errorCheck.textContent = "Password is required !"
//         return false
//     }
// }
// Before submit :
// function loginPage() {
//     window.location.href = "login.html";
// }

var signBottom = document.getElementById("button");
signBottom.addEventListener("click", function (event) {
    let username = document.getElementById("username").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    //     event.preventDefault();
    //     validationName();
    //     validationEmail();
    //     validationCreate();
    //     checkPassword();
    //     

    //     if (validationName() && validationEmail() && validationCreate() && checkPassword()) {
    //         loginPage();
    //     }

    // Authentication:
    var user = {
        "username": username,
        "email": email,
        "password": password
    };
    console.log(JSON.stringify(user));
    // Make a POST request using Fetch API
    fetch('http://localhost/api/signup_oop.php', {
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
});
