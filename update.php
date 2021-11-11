<?php
include("core/header.php");
include("core/db_connect.php");
include("/xampp/htdocs/programming/eindopdracht/function/woorden.php");

$db = new Database;


$updateScheldWoord = new woorden;
$updateScheldWoordFunctie = $updateScheldWoord->updateWoord();
?>

<form action="" method="POST">

<input type="text" name="updateWoord" placeholder="nieuw scheldwoord">
<input type="submit" name="updateSubmit" value="Update">

</form>




<?php
include("core/footer.php")
?>
