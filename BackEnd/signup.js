// Define the function to send signup data
async function sendSignupData(data) {
    data = JSON.stringify(data)
    console.log("Sending signup data:", data); // Check the data being sent
    try {
        let res = await fetch("../BackEnd/signup.php", { // Update the URL to point to signup.php in the same directory
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: data
        });
        if (!res.ok) {
            throw new Error("Failed to submit form");
        }
        let phpRes = await res.json();
        if (phpRes.success !== true) {
            alert("Problem while signing up: " + phpRes.error); // Display error message from PHP response
        } else {
            alert("Signup successful!");
            // Optionally, redirect the user to another page or perform other actions after successful signup
        }
        console.log(phpRes);
    } catch (error) {
        console.error("Error sending signup data:", error);
        // Handle any other errors that occur during the fetch operation
    }
}

// Select the submit button
document.addEventListener("DOMContentLoaded", function() {
    // Select the submit button and add event listener
    let submitButton = document.querySelector("#signupForm");
    submitButton.addEventListener("submit", async function(event) { // add async here
        // Prevent the default form submission behavior
        event.preventDefault();
        // Get form data
        let fullName = document.querySelector("#signupName").value;
        let email = document.querySelector("#signupEmail").value;
        let phoneNumber = document.querySelector("#signupPhoneNumber").value;
        let password = document.querySelector("#signupPasswordRe").value;
        let confirmPassword = document.querySelector("#signupPassword").value; // Fix this line

        // Check if any required fields are empty
        if (fullName.trim() === "" || email.trim() === "" || phoneNumber.trim() === "" || password.trim() === "" || confirmPassword.trim() === "") {
            console.log("Please fill out all required fields");
            return;
        }

        // Check if passwords match
        if (password !== confirmPassword) {
            console.log("Passwords do not match");
            return;
        }

        let formData = {
            fullName: fullName,
            email: email,
            phoneNumber: phoneNumber,
            password: password,
            confirmPassword: confirmPassword
        };
        sendSignupData(formData);
    }); // You are missing the closing parenthesis here
});
