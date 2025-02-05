<?php include 'cap.php';?>
<?php include 'connexio_bbdd.php';?>
<br>
<?php
$sql = "SELECT * FROM `usuaris`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<b>id:</b> " . $row["id"]. " - <b>Usuari:</b> " . $row["usuari"]. " - <b>Correu:</b> " . $row["correu"]. " - <b>Nom:</b> " . $row["nom"]. " - <b>Cognoms:</b> " . $row["cognoms"]. " - <b>Contra:</b> " . $row["contra"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();?>
<?php include 'peu.php'; ?>