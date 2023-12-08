var button1 = document.getElementById("but1");

function validatename() {
  var nameInput = document.getElementById("username");
  var nameserror = document.getElementById("nameError");
}

function validateEmailAddress() {
  var emailInput = document.getElementById("email");
  var errorElement = document.getElementById("emailError");

  if (!emailInput.value.endsWith("@gmail.com")) {
    errorElement.textContent = "Please enter an email ending with @gmail.com.";
    errorElement.style.color = "red";
  } else {
    errorElement.textContent = "";
  }
}
function validatemobileAddress() {
  var mobileinput = document.getElementById("mobile");
  var erorrelments = document.getElementById("mobileError");

  if (mobileinput.value.length <= 9) {
    erorrelments.textContent = "Please enter 10 digits ";
    erorrelments.style.color = "red";
  } else {
    erorrelments.textContent = "";
  }
}
function validatepass() {
  var inputpass = document.getElementById("password");
  var erorrspass = document.getElementById("erorrpass");

  // var hascaptellater = /[A-Z]/.test(inputpass.value);
  // var hasnumber = /\d/.test(inputpass.value);

  if (inputpass.value.length < 6 || inputpass.value.length > 16) {
    erorrspass.textContent = " The Password should be between 6-18 characters";
    erorrspass.style.color = "red";
  } else {
    erorrspass.textContent = "";
  }
}
function validatepass2() {
  var inputpass2 = document.getElementById("confirm_password");
  var erorrspass2 = document.getElementById("erorrpass2");
  var inputpass = document.getElementById("password");

  if (inputpass2.value !== inputpass.value) {
    erorrspass2.textContent = " The Password should be between 6-18 characters";
    erorrspass2.style.color = "red";
  } else {
    erorrspass2.textContent = "";
  }
}
