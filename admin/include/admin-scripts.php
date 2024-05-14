<script>
// Function to display an alert message using Bootstrap classes
function alert(type, msg) {
    // Determine the Bootstrap class for the alert based on the type ("success" or "danger")
    let bootstrap_class = (type === "success") ? "alert-success" : "alert-danger";
    
    // Create a new div element for the alert
    let element = document.createElement('div');
    
    // Output the HTML for a Bootstrap alert component
    element.innerHTML = `
        <div class="custom-alert alert ${bootstrap_class} alert-dismissible fade show" role="alert">
            <strong>${msg}</strong>
            <!-- Close button for the alert -->
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    `;
    
    // Append the alert element to the body
    document.body.appendChild(element);
}


</script>