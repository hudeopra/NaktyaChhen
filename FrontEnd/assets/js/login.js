import { sendData } from './fetch.js';



let submitButton = document.querySelector("#form-submit");
let path = "../../../NAKTYACHHEN/Backend/login.php";


submitButton.addEventListener("click", function(event){
    event.preventDefault();
    let email = document.querySelector("#loginEmail").value;
    let password = document.querySelector("#loginPassword").value;
  

    if ( email.trim() === "" || password.trim() === "") {
        alert("Please fill out all required fields");
        return;
    }

    let formData = {
        email:email,
        password:password
     };
    
    
    sendData(formData, path);
    document.getElementById("loginForm").reset();

});
