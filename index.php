<?php require_once("connection.php"); ?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>

    <?php require_once("includes.php"); ?>
</head>
<body>

    <div class="container">
        
        <button id="create"> Create New User </button>
        <div id="alert-space"></div>
        
        <div id="UserForm" class="d-none">
            
        
            <input  id="vardas" class="form-control" placeholder="Įveskite vardą" />
            <input id="pavarde" class="form-control" placeholder="Įveskite pavardę" />
            <input id="slapyvardis" class="form-control" placeholder="Įveskite slapyvardį" />
            <input id="slaptazodis" class="form-control" placeholder="Įveskite slaptažodį" />
            <input id="teises_id" class="form-control" placeholder="Įveskite teisės id" />
            <button id="createUser">Create</button>
        </div>
    

        <!-- <form action="index.php" method="POST">
            <button type="submit" name="submit">Show users</button> 
        </form> -->




        <button id="show"> Show Users AJAX</button>
        <div id="output"></div>

    <script src="script.js"></script>
</body>
</html>