<?php require_once("connection.php"); ?>

<?php 

$vardas = $_GET["vardas"];
$pavarde = $_GET["pavarde"];
$slapyvardis = $_GET["slapyvardis"];
$slaptazodis = $_GET["slaptazodis"];
$teises_id = intval($_GET["teises_id"]);


//MEs galime daryt ka norim t.y vykdyti INSERT sql uzklausa
$sql = "INSERT INTO `vartotojai`(`vardas`, `pavarde`, `teises_id`, `slapyvardis`, `slaptazodis`,  `registracijos_data`, `paskutinis_prisijungimas`) 
            VALUES ('$vardas','$pavarde', $teises_id, '$slapyvardis','$slaptazodis',NOW(), NOW() )";

if(mysqli_query($prisijungimas, $sql)) {

    echo '<div class="alert alert-success" role="alert">';
        echo "Vartotojas, kurio vardas: ".$vardas.", pavardė: ".$pavarde.", slapyvardis: ".$slapyvardis." pridėtas sėkmingai";        
    echo '</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">';
        echo "Kažkas negerai. Užklausa nesėkminga.";
    echo '</div>';    
}

?>