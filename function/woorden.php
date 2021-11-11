<?php
class woorden
{
    public $scheldWoord;
    // Crund systeem
    public function createWoord()
    {
        if (isset($_POST['submit']) && isset($_POST['voegWoordToe']) && isset($_POST['voegNummerToe'])) {

            $woord = $_POST['voegWoordToe'];
            $nummer = $_POST["voegNummerToe"];

            $db = new Database;
            $liqry = $db->con->prepare("INSERT INTO `scheldwoorden`(`woord` , `gradatie`) VALUES ('$woord', '$nummer')");
            if ($liqry === false) {
                echo mysqli_error($db->con);
            } else {
                // $liqry->bind_param('s', $name);
                if ($liqry->execute()) {
                    echo "woord is toegevoegd";
                }
            }
            $liqry->close();
        } else {
            echo 'niks is toegevoegd';
        }
    }
    public function readWoorden()
    {
        $db = new Database;
        // $dbGetConn = $db->getConnection();
        $liqry = $db->con->prepare("SELECT woord FROM `scheldwoorden`");
        if ($liqry === false) {
            echo mysqli_error($db->con);
        } else {
            $liqry->bind_result($this->scheldWoord);
            if ($liqry->execute()) {
                $liqry->store_result();
                while ($liqry->fetch()) {
                    echo $this->scheldWoord;
?>
                    <a href="./delete.php?scheldwoord=<?php echo $this->scheldWoord ?>">Delete</a>
                    <a href="./update.php?scheldwoord=<?php echo $this->scheldWoord ?>">Update</a>
                    <br>
<?php
                }
            }
            $liqry->close();
        }
    }
    public function readWoordenDB()
    {
        $scheldWoordenArrayDB = array();
        $db = new Database;
        // $dbGetConn = $db->getConnection();
        $liqry = $db->con->prepare("SELECT woord FROM `scheldwoorden`");
        if ($liqry === false) {
            echo mysqli_error($db->con);
        } else {
            $liqry->bind_result($this->scheldWoord);
            if ($liqry->execute()) {
                $liqry->store_result();
                while ($liqry->fetch()) {
                    array_push($scheldWoordenArrayDB, $this->scheldWoord);
                }
            }
            $liqry->close();
        }
        return $scheldWoordenArrayDB;
    }
    public function updateWoord()
    {
        if (isset($_GET["scheldwoord"])) {
            $oudScheldWoord = $_GET["scheldwoord"];
            echo "huidig woord: ", $oudScheldWoord;
            echo "<br>";
            if (isset($_POST['updateWoord']) && isset($_POST['updateSubmit'])) {

                $nieuwWoord = $_POST["updateWoord"];
                // echo $nieuwWoord;

                $db = new Database;
                $liqry = $db->con->prepare("UPDATE `scheldwoorden` SET `woord`='$nieuwWoord' WHERE woord = '$oudScheldWoord'");
                if ($liqry === false) {
                    echo mysqli_error($db->con);
                } else {
                    if ($liqry->execute()) {
                        echo "niew woord: ", $nieuwWoord;
                    }
                }
                $liqry->close();
            } else {
                echo 'niks is veranderd';
            }
        }
    }
    public function deleteWoord()
    {
        if (isset($_GET["scheldwoord"])) {
            $db = new Database;
            $deleteWoord = $_GET["scheldwoord"];
            echo "<br>";
            // echo $deleteWoord;

            $deleteqry = $db->con->prepare("DELETE FROM `scheldwoorden` WHERE woord = '$deleteWoord'");
            if ($deleteqry === false) {
                echo mysqli_error($db->con);
            } else {
                if ($deleteqry->execute()) {
                    $deleteqry->store_result();
                    echo 'product verwijderd';
                }
            }
            $deleteqry->close();
        }
    }
    // scheldwoorden filter functie
    public function filterScheldWoorden()
    {
        // $submit = $_POST["verzend"];
        if (isset($_POST["zin"]) && $_POST["zin"] != "") {
            // echo "checken voor scheldwoord...";
            echo "<br>";
            $text = $_POST['zin'];
            // $scheldWoordenArray = array("tering", "gek");
            $explodeFunctie = explode(" ", $text);
            foreach ($explodeFunctie as $getal => $woord) {
                # code...
                if (in_array(strtolower($woord), $this->readWoordenDB())) {
                    $explodeFunctie[$getal] = "*****";
                    $implodeFunctie = implode(" ", $explodeFunctie);
                    echo $implodeFunctie;
                }
            }
            echo "<pre>";
            // var_dump($explodeFunctie);
        } else {
            echo "vul iets in!";
        }
    }
}
?>