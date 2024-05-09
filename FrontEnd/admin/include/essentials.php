<?php


    // Function to check admin login status and redirect if necessary
    function adminLogin() {
        // Start the session to access session variables
        session_start();
        
        redirect()
    }



    // Function to redirect the user to a specified URL
    function redirect($url) {
        // Output a JavaScript snippet that sets the window location to the provided URL
        echo "
        <script>
            window.location.href = '$url';
        </script>
        ";
    }

    // Function to display an alert message using Bootstrap classes
    function alert($type, $msg) {
        // Determine the Bootstrap class for the alert based on the type ("success" or "danger")
        $bootstrap_class = ($type === "success") ? "alert-success" : "alert-danger";
        
        // Output the HTML for a Bootstrap alert component
        echo <<<alert
            <div class="custom-alert alert $bootstrap_class alert-dismissible fade show" role="alert">
                <strong>$msg!</strong>
                <!-- Close button for the alert -->
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        alert;
    }

?>
