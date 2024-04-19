async function sendData(data){
    console.log("Sending data:", data); // Check the data being sent
    try{
        let res = await fetch("../../../../NaktyaChhen/Backend/contact.php", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    });
    if (res.status === 400) {
        // Handle 400 error here
        alert("Bad request: Please check your data and try again");
        return;
    }
        let phpRes = await res.json();
        if (phpRes.success != true) {
            alert("Problem while sending data to the database");
         }
         else{
            document.querySelector("#reservation-form").reset();
         }
        console.log(phpRes);
    }catch (e){
        
    }
    
}
// Select the submit button
let submitButton = document.querySelector("#form-submit");

submitButton.addEventListener("click", function(event){
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

    let formData = {
        name: name,
        email: email,
        message: message
    };

    sendData(formData);
    
});

