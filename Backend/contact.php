<?php
include 'connection.php';
$name =$_POST['name'];
$email =$_POST['email'];
$message =$_POST['message'];

$stmt = $conn ->prepare("insert into contact(name,email,message) values(?,?,?)");
$stmt ->blind_param("sss", $name, $email, $message);
$stmt ->execute();
echo"Contact form submitted";
$stmt->close();
$conn->close();

?>
