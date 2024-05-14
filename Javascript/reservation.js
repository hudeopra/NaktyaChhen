import { sendData } from './fetch.js';

let submitButton = document.querySelector("#form-submit");
let path = "../php/reservation.php";

submitButton.addEventListener("click", function(event){
    event.preventDefault();

    // Extract values from the form fields
    let name = document.querySelector("#res_fname").value;
    let email = document.querySelector("#res_email").value;
    let phoneNumber = document.querySelector("#res_phone").value;
    let date = document.querySelector("#dateBooking").value;
    let time = document.querySelector("#arrivalTimeBooking").value;
    let people = document.querySelector("#numberOfPeopleBooking").value;
    let tableNumber = document.querySelector("#tableNumberBooking").value;
    let description = document.querySelector("#notesBooking").value;

    // Check if any required field is empty
    // if (name.trim() === "" || email.trim() === "" || phoneNumber.trim() === "" || date.trim() === "" || time.trim() === "" || people.trim() === "" || tableNumber.trim() === "" || description.trim() === "") {
    //     alert("Please fill out all required fields");
    //     return;
    // }
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address");
        return;
    }
    let phoneRegex = /^\d{10}$/;
    if (!phoneRegex.test(phoneNumber)) {
        alert("Phone number must be 10 digits long");
        return;
    }

    // Construct formData object
    let formData = {
        name: name,
        email: email,
        phoneNumber: phoneNumber,
        date: date,
        time: time,
        people: people,
        tableNumber: tableNumber,
        description: description
    };
    
    // Send data to the server
    sendData(formData, path);
    
    // Reset the form after submission
    document.getElementById("bookingForm").reset();
});
