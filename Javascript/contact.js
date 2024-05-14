import { sendData } from './fetch.js';
// Select the submit button
let submitButton = document.querySelector("#form-submit");
let path = "../php/contact.php";

submitButton.addEventListener("click", function (event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    let name = document.querySelector("#fullNameContact").value;
    let email = document.querySelector("#emailContact").value;
    let message = document.querySelector("#messageContact").value;

    // Check if any required fields are empty
    if (name.trim() === "" || email.trim() === "" || message.trim() === "") {
        alert("Please fill out all required fields");
        return;
    }
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address");
        return;
    }

    let formData = {
        name: name,
        email: email,
        message: message
    };

    sendData(formData, path);
    document.getElementById("contactForm").reset();

});