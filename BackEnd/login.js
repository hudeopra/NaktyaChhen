document.getElementById("loginForm").addEventListener("submit", async function(event) {
    event.preventDefault(); // Prevent default form submission
    
    // Get the email and password values from the form
    let email = document.getElementById("loginEmail").value;
    let password = document.getElementById("loginPassword").value;
    
    // Create an object with the login data
    let loginData = {
        email: email,
        password: password
    };

    try {
        // Send login data to the login.php script using fetch
        let response = await fetch("../Backend/login.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(loginData)
        });
        
        // Parse the JSON response from the server
        let data = await response.json();
        
        // Check if login was successful
        if (data.success) {
            // Redirect the user to the dashboard or any other page
            window.location.href = "about.html";
        } else {
            // Display an error message
            alert(data.message);
        }
    } catch (error) {
        console.error("Error:", error);
        // Handle any errors that occur during the fetch operation
    }
});
