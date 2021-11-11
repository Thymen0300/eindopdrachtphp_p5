<?php
include("/xampp/htdocs/programming/eindopdracht/core/header.php");
include("core/db_connect.php");
include("/xampp/htdocs/programming/eindopdracht/function/woorden.php");
// $db = new Database();
?>

<form action="" method="POST">
    <textarea style="height:300px; width:300px" name="zin" id="" placeholder="Type hier je zin"></textarea>
    <input name="verzend" type="submit" value="Verzenden">
</form>

<?php
$newFilter = new woorden();
$newFilterFunction = $newFilter->filterScheldWoorden();

echo "<hr>";
echo "<br>";
echo "Woorden die niet toegestaan zijn:";
echo "<br>";

$readWoorden =  new woorden();
$readWoordenFunctie = $readWoorden->readWoorden();

?>


<?php
include("/xampp/htdocs/programming/eindopdracht/core/footer.php")
?>