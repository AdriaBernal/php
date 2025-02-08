<?php include 'cap.php'; ?>

<p style="color:gray; text-align:right;">Aquest fitxer és <?php echo basename(FILE); ?></p>

<p>Estàs utilitzant <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
<p>Avui és <?php echo date("l"); ?></p>

<?php include 'peu.php'; ?>