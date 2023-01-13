<?php
include('server.php');

echo "User Insert Database";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

echo "Firstname:".$firstname;
echo "Lastname:".$lastname;
echo "Email:".$email;

$sql = "INSERT INTO userlogin (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



?>