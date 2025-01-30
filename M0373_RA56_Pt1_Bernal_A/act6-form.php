<?php include 'cap.php';

echo '<h3>Aquest fitxer és '.basename(__FILE__).'</h3>';?>

<form action="act6-respostaform.php" method="POST">
    <label for="numeros">Introdueix números separats per comes:</label>
    <input type="text" name="numeros" required></input>  

    <input type="submit">
</form>

<?php include 'peu.php'; ?>