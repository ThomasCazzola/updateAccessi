<?php
session_start();
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: antiquewhite;
            text-align: center;
        }
        #h1{
            font-size: 50px;
        }
        #totali{
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
        }
        #backLogin{
            font-size: 12px;
            font-style: oblique;
        }
    </style>
</head>
<body>
    <h1>Pagina segreta</h1>
    <br>
    <?php
        $sessione = $_SESSION['user_id'];

        
        $sql='SELECT contatore FROM utenti WHERE nomeUtente = "'.$sessione.'"';
        //echo $sql;
        if($result = mysqli_query($link, $sql));
        else{
            echo "Something went wrong";
        }
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        //
        //SELECT SUM(`contatore`) FROM utenti;
       
        echo "<p id='totali'>Accessi effettuati = ".$row['contatore']."</p>";
        
        //
        //Prendo la somma di tutti gli accessi
        $SQLsommaAccessi= 'SELECT SUM(contatore) AS value_sum FROM utenti';
        
        if($result2 = mysqli_query($link, $SQLsommaAccessi));
        else{
            echo "Something went wrong";
        }
        $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
        $sum = $row2['value_sum'];
        echo "<br>";
        echo "<p id='totali'>Accessi Totali effettuati = ".$sum."</p>";
    ?>
    <form method="post" action="backToLogin.php">
        <br>
        <p id="backLogin">torna al login</p>
        <input type="submit">
    </form>
</body>
</html>