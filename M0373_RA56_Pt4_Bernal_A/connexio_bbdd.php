<?php
$servername = "localhost";
$username = "phpbbdd";
$password = "ubuntu";
$dbname = "phpbbdd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  printf("Connexió errònia: %s\n" . $conn->connect_error);
  exit();
}
echo "Connexió exitosa";
?> 