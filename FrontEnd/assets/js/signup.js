import { sendData } from './fetch.js';

let submitButton = document.querySelector("#form-submit");
let path = "../../../NAKTYACHHEN/Backend/signup.php";

submitButton.addEventListener("click", function(event){
    event.preventDefault();
    
    let email = document.querySelector("#signupEmail").value;
    let password = document.querySelector("#signupPassword").value;
    let confirmPassword = document.querySelector("#signupPasswordRe").value;
    let number = document.querySelector("#signupNumber").value;
    let name = document.querySelector("#signupName").value;

    if ( email.trim() === "" || password.trim() === "" || confirmPassword.trim() === "" || number.trim()==="" || name.trim()==="") {
        alert("Please fill out all required fields");
        return;
    }

    // Validate email format
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address");
        return;
    }

    // Validate password format
    let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$/;
    if (!passwordRegex.test(password)) {
        alert("Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character");
        return;
    }

    // Validate password and confirm password match
    if (password !== confirmPassword) {
        alert("Passwords do not match");
        return;
    }

    // Validate phone number format
    let phoneRegex = /^\d{10}$/;
    if (!phoneRegex.test(number)) {
        alert("Phone number must be 10 digits long");
        return;
    }
    
    let formData = {
       email:email,
       password:password,
       number:number,
       name:name
    };
    
   sendData(formData, path);
   document.getElementById("signupForm").reset();
   

});
