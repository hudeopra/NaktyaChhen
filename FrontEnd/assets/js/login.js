import { sendData } from './fetch.js';


const submitButton = document.querySelector("#form-submit");
const loginEmailInput = document.querySelector("#loginEmail");
const loginPasswordInput = document.querySelector("#loginPassword");


const path = "../../../NAKTYACHHEN/Backend/login.php";


let loggedIn = false;

submitButton.addEventListener("click", function(event) {
    event.preventDefault();

   
    const email = loginEmailInput.value;
    const password = loginPasswordInput.value;

  
    const storedEmail = localStorage.getItem('email');
    const storedPassword = localStorage.getItem('password');

    
    if (email === storedEmail && password === storedPassword) {
        loggedIn = true;
    }

    if (storedEmail && storedPassword) {
        console.log("Stored Email:", storedEmail);
        console.log("Stored Password:", storedPassword);
    } else {
        console.log("No data found in local storage.");
    }


    if (email.trim() === "" || password.trim() === "") {
        alert("Please fill out all required fields");
        return;
    }


    const formData = {
        email: email,
        password: password
    };

 
    if (loggedIn) {
        alert("Already signed in");
        document.getElementById("loginForm").reset();
    } else {
       
        sendData(formData, path)
            .then(response => {
                console.log(response); 
                if (response.status === 200) {
                    
                    localStorage.setItem('email', email);
                    localStorage.setItem('password', password);
                  
                    document.getElementById("loginForm").reset();
                }
            })
            .catch(error => {
                console.error(error); 
            });
    }
});
