<?php include 'cap.php';

echo '<h3>Aquest fitxer és '.basename(__FILE__).'</h3>';?>

<form action="act4-respostaform.php" method="POST">
<label for="nom">Nom:</label>
<input type="text" name="nom"></input>    

<label for="edat">Edat:</label>
<input type="text" name="edat"></input>  

        <input type="submit">
</form>

<?php include 'peu.php'; ?>