<?php
include("core/header.php");
include("core/db_connect.php");
include("/xampp/htdocs/programming/eindopdracht/function/woorden.php");
$db = new Database;
?>

<?php
$newWoordfunction = new woorden();
$newWoord = $newWoordfunction->createWoord();
?>


<form method="POST">
    <label for="inputWoord">voeg een scheldwoord toe</label>
    <input id="inputWoord" type="text" placeholder="type een woord" value="" name="voegWoordToe" id="">
    <input id="inputWoord" type="text" placeholder="type een nummer 1 t/m 3" value="" name="voegNummerToe" id="">
    <input type="submit" name="submit" value="toevoegen">
</form>

<?php
include("core/footer.php")
?>