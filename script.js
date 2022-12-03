let emailInputValue = document.getElementById("signup-email");
let passwordInputValue = document.getElementById("signup-passwordID");
let password2InputValue = document.querySelector("#signup-password2");
let initialMessage ="";
let emailErrorMessage="x Email address cannot be empty. Should be a non-empty value with format xyz@xyz.xyz";
let passwordErrorMessage="x Password should be at least 6 character long with 1 uppercase, 1 lowercase and 1 number";
let password2ErrorMessage="x Passwords do not match";

let emailError = document.createElement('p');
emailError.setAttribute("class", "warning");
document.getElementById("signup-email").after(emailError);

let passwordError = document.createElement('p');
passwordError.setAttribute("class", "warning");
// document.getElementById("signup-passwordID")[1].append(passwordError);
document.getElementById("signup-passwordID").after(passwordError);

let password2Error = document.createElement('p');
password2Error.setAttribute("class", "warning");
document.getElementById("signup-password2").after(password2Error);

function vaildateEmail() {
    let email = emailInputValue.value;
    let regex = /\S+@\S+\.\S+/;
    if (regex.test(email)) 
    { 
        errorEmail = initialMessage;
    } 
    else 
    {
        errorEmail = emailErrorMessage;
    }
    return errorEmail;
}

function vaildatePassword() {
    let password = passwordInputValue.value; 
    let regex = /[a-zA-z]+[0-9]/;  
    if (regex.test(password) && password.length >= 6) 
    {
        errorPassword = initialMessage;
    } 
    else 
    {
        errorPassword = passwordErrorMessage;
    }
    return errorPassword;
}

function vaildatePassword2() {
    let password2 = password2InputValue.value;
    let regex = /[a-zA-z]+[0-9]/; 
    if (regex.test(password2) && password2.length >= 6 && password2InputValue.value == passwordInputValue.value) 
    { 
        errorPassword2 = initialMessage;
    } 
    else {
        errorPassword2 = password2ErrorMessage;
    }
    return errorPassword2;
}

function validate() {
    let valid = true;
    let emailValidation = vaildateEmail();
    let passwordValidation = vaildatePassword();
    let password2Validation = vaildatePassword2();

    if (emailValidation !== initialMessage) {
        emailError.textContent = emailValidation;
        valid = false;
    }
    if (passwordValidation !== initialMessage) {
        passwordError.textContent = passwordValidation;
        valid = false;
    }
    if (password2Validation !== initialMessage) {
        password2Error.textContent = password2Validation;
        valid = false;
    }
    return valid;
};

emailInputValue.addEventListener("blur", () => {
    let validEmailMessage = vaildateEmail();
    if (validEmailMessage == initialMessage) {
        emailError.textContent = initialMessage;
    }
});

passwordInputValue.addEventListener("blur", () => {
    let validPasswordMessage = vaildatePassword();
    if (validPasswordMessage == initialMessage) {
        passwordError.textContent = initialMessage;
    }
});

password2InputValue.addEventListener("blur", () => {
    let validPassword2Message = vaildatePassword();
    if (validPassword2Message == initialMessage) {
        password2Error.textContent = initialMessage;
    }
});