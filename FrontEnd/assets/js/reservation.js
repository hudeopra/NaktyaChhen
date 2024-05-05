import { sendData } from './fetch.js';// Adjust the path if necessary

let submitButton = document.querySelector("#form-submit");
let path = "../../../NAKTYACHHEN/Backend/reservation.php";

submitButton.addEventListener("click", function(event){
    event.preventDefault();
    let date = document.querySelector("#dateBooking").value;
    let time = document.querySelector("#arrivalTimeBooking").value;
    let people = document.querySelector("#numberOfPeopleBooking").value;
    let tableNumber = document.querySelector("#tableNumberBooking").value;
    let description = document.querySelector("#notesBooking").value;

    if (date.trim() === "" || time.trim() === "" || people.trim() === "" || tableNumber.trim()==="" || description.trim()==="") {
        alert("Please fill out all required fields");
        return;
    }

    let formData = {
        date : date,
        time: time,
        people: people,
        tableNumber: tableNumber,
        description: description
    };
    
    sendData(formData, path);
    document.getElementById("bookingForm").reset();
});
