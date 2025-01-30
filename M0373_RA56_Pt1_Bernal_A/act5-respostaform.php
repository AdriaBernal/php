<?php include 'cap.php';
echo '<h3>Aquest fitxer és '.basename(__FILE__).'</h3>';

$nom = htmlspecialchars($_POST['nom']);
$edat = (int)$_POST['edat'];

print "<h2>Hola $nom!</h2>";
echo "<p>Tens $edat anys.</p>";

function felicitarAniversariEspelmes($edat) {
    $img="<img src='espelma.png width='50' height='100'>"
    echo "<p>🎂 Aquí tens les teves espelmes d'aniversari:</p>";
    echo "<div style='font-size: 24px;'>";
    for ($i = 0; $i < $edat; $i++) {
        echo $img;
    }
    echo "</div>";
}
felicitarAniversariEspelmes($edat);

include 'peu.php'; ?>