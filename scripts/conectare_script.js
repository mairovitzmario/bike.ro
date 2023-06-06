document.addEventListener("DOMContentLoaded", function() {
  const loginForm = document.getElementById("login-form");
  const signupForm = document.getElementById("signup-form");

  const signupLink = document.getElementById("signup-link");
  const loginLink = document.getElementById("login-link");

  function switchToSignupForm(event) {
    event.preventDefault();
    loginForm.style.display = "none";
    signupForm.style.display = "block";
  }

  function switchToLoginForm(event) {
    event.preventDefault();
    loginForm.style.display = "block";
    signupForm.style.display = "none";
  }

  signupLink.addEventListener("click", switchToSignupForm);
  loginLink.addEventListener("click", switchToLoginForm);
});


function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return (true)
  }
    return (false)
}


function validateLogin() {
  let emailText = document.getElementById("login-email").value;
  let passText = document.getElementById("login-parola").value;
  let errorElement = document.getElementById('login-error');
  if (/^\s+$/.test(emailText) || emailText=='' || /^\s+$/.test(passText) || passText=='') {
      errorElement.innerHTML = "Completați toate câmpurile.";
  }
  else if(ValidateEmail(emailText) == false)
    errorElement.innerHTML = "Email invalid.";
  else if(/\s/.test(passText))
    errorElement.innerHTML = "Parola nu poate conține spații.";
  else {
    errorElement.innerHTML = "";
    $("#login-form-form").submit(); 
  }
}

function validateSignup() {
  let emailText = document.getElementById("signup-email").value;
  let adresaText = document.getElementById('signup-adresa').value;
  let numeText = document.getElementById('signup-nume').value;
  let passText = document.getElementById("signup-parola").value;
  let errorElement = document.getElementById('signup-error');
  if (/^\s+$/.test(emailText) || emailText=='' || /^\s+$/.test(passText) || passText=='' ||
        /^\s+$/.test(adresaText) || adresaText=='' || /^\s+$/.test(numeText) || numeText=='' ) {
      errorElement.innerHTML = "Completați toate câmpurile.";
  }
  else if(ValidateEmail(emailText) == false)
    errorElement.innerHTML = "Email invalid.";
  else if(/\s/.test(passText))
    errorElement.innerHTML = "Parola nu poate conține spații.";
  else {
    errorElement.innerHTML = "";
    $("#signup-form-form").submit(); 
  }
}

function showPass(checkboxid) {
  x = document.getElementById(checkboxid);
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}