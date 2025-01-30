<?php include 'cap.php';
echo '<h3>Aquest fitxer és '.basename(__FILE__).'</h3>';

$entrada = htmlspecialchars($_POST['numeros']);

$vector = array_map('intval', explode(',', $entrada));

echo "<p>Vector original: </p>";
echo "<pre>"; print_r($vector); echo "</pre>";

$parells = array_filter($vector, function($num) {
    return $num % 2 == 0;
});

echo "<p>Vector de nombres parells:</p>";
echo "<pre>"; print_r($parells); echo "</pre>";
echo "<p>Total de nombres parells: " . count($parells) . "</p>";

include 'peu.php'; ?>