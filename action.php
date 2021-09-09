<?php require_once("connection.php"); ?>

<?php 

echo '<table class="table table-striped">';
              
                
    $sql = "SELECT vartotojai.ID, vartotojai.vardas, vartotojai.pavarde, vartotojai.slapyvardis, vartotojai.registracijos_data, vartotojai.paskutinis_prisijungimas, vartotojai_teises.pavadinimas, vartotojai_teises.aprasymas 
    FROM `vartotojai` 
    LEFT JOIN vartotojai_teises ON vartotojai.teises_id = vartotojai_teises.ID 
    WHERE 1 
    ORDER BY vartotojai.ID DESC";

    $result = $prisijungimas->query($sql);

    while($vartotojai = mysqli_fetch_array($result)) {
        echo "<tr>";
            echo "<td>".$vartotojai["ID"]."</td>";
            echo "<td>".$vartotojai["vardas"]."</td>";
            echo "<td>".$vartotojai["pavarde"]."</td>";
            echo "<td>".$vartotojai["slapyvardis"]."</td>";
            echo "<td>".$vartotojai["registracijos_data"]."</td>";
            echo "<td>".$vartotojai["paskutinis_prisijungimas"]."</td>";
            echo "<td>".$vartotojai["aprasymas"]."</td>";
            echo "<td><button class='deleteUser' data-user-id='".$vartotojai["ID"]."'>Delete</button></td>";
        echo "</tr>";
    }
                
            

echo '</table>';

?>