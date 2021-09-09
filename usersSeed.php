<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vartotojų generavimas</title>
</head>
<body>
    <form action="" method="get">
        <button type="submit" name="submit">Sukurti vartotojus</button>
    </form>
    <?php 

    require_once("connection.php");

    if(isset($_GET["submit"])) {
        for ($i=0; $i<200; $i++) {

            $vardas = "vardas".$i;
            $pavarde = "pavarde".$i;
            $slapyvardis = "slapyvardis".$i;
            $slaptazodis = "slaptazodis".$i;

            $teises_id = rand(1, 5);

            $sql = "INSERT INTO `vartotojai`(`vardas`, `pavarde`, `teises_id`, `slapyvardis`, `slaptazodis`,  `registracijos_data`, `paskutinis_prisijungimas`) 
            VALUES ('$vardas','$pavarde', $teises_id, '$slapyvardis','$slaptazodis',NOW(), NOW() )";

            if(mysqli_query($prisijungimas, $sql)) {
                echo "Vartotojas sukurtas sėkmingai";
                echo "<br>";
            } else {
                echo "Kažkas negerai";
                echo "<br>";
            }
        }
    }

?>
</body>
</html>