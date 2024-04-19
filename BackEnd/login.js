// Define the function to send login data
async function sendLoginData(data) {
    data = JSON.stringify(data);
    console.log("Sending login data:", data); // Check the data being sent
    try {
        let res = await fetch("../BackEnd/login.php", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: data
        });
        if (!res.ok) {
            throw new Error("Failed to submit login form");
        }
        let phpRes = await res.json();
        if (phpRes.success !== true) {
            console.log("Login failed: " + phpRes.error); // Print error message in console
        } else {
            console.log("Login successful!"); // Print success message in console
            // Optionally, redirect the user to another page or perform other actions after successful login
        }
        console.log(phpRes);
    } catch (error) {
        console.error("Error sending login data:", error);
        // Handle any other errors that occur during the fetch operation
    }
}

// Select the login form
document.addEventListener("DOMContentLoaded", function() {
    let loginForm = document.querySelector("#loginForm");
    loginForm.addEventListener("submit", async function(event) {
        event.preventDefault(); // Prevent the default form submission behavior
        let email = document.querySelector("#loginEmail").value;
        let password = document.querySelector("#loginPassword").value;
        let formData = {
            email: email,
            password: password
        };
        sendLoginData(formData);
    });
});
