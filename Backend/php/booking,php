<?php
// Include the connection file
include 'connection.php';
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $date = $_POST["date"]; // Assuming the form field is named "date"
    $arrivalTime = $_POST["arrivalTime"]; // Assuming the form field is named "arrivalTime"
    $numberOfPeople = $_POST["numberOfPeople"]; // Assuming the form field is named "numberOfPeople"
    $tableNumber = $_POST["tableNumber"]; // Assuming the form field is named "tableNumber"
    $notes = $_POST["notes"]; // Assuming the form field is named "notes"
    
    // Validate form data (You can add more validation as needed)
    if (empty($date) || empty($arrivalTime) || empty($numberOfPeople) || empty($tableNumber)) {
        echo "All fields are required";
        exit;
    }

    // Process the form data (For example, you can save it to a database)
    // Here, we're just echoing back the submitted data for demonstration purposes
    echo "Submitted date: " . $date . "<br>";
    echo "Submitted arrival time: " . $arrivalTime . "<br>";
    echo "Submitted number of people: " . $numberOfPeople . "<br>";
    echo "Submitted table number: " . $tableNumber . "<br>";
    echo "Submitted notes: " . $notes;
} else {
    // Handle the case where the form is not submitted
    echo "Form submission failed";
}
?>
