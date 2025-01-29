<?php include 'cap.php';
echo '<h3>Aquest fitxer és '.basename(__FILE__).'</h3>';

$nom = htmlspecialchars($_POST['nom']);
$edat = (int)$_POST['edat'];

print "<h2>Hola $nom!</h2>";
echo "<p>Tens $edat anys.</p>";

if ($edat < 35) {
    echo "<p>Ets jove!</p>";
} else {
    echo "<p>Ja has de passar la ITV!</p>";
}

include 'peu.php'; ?>