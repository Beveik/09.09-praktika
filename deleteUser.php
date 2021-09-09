<?php require_once("connection.php"); ?>

<?php 

$ID = $_GET["ID"];
$vardas = $_GET["vardas"];
$pavarde = $_GET["pavarde"];
$slapyvardis = $_GET["slapyvardis"];
$slaptazodis = $_GET["slaptazodis"];
$teises_id = intval($_GET["teises_id"]);


//MEs galime daryt ka norim t.y vykdyti INSERT sql uzklausa
$sql = "DELETE FROM `vartotojai` WHERE `ID`=$ID";

if(mysqli_query($prisijungimas, $sql)) {

    echo '<div class="alert alert-success" role="alert">';
        echo "Vartotojas, kurio vardas: ".$vardas.", pavardė: ".$pavarde.", slapyvardis: ".$slapyvardis." ištrintas sėkmingai";        
    echo '</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">';
        echo "Kažkas negerai. Užklausa nesėkminga.";
    echo '</div>';    
}

?>