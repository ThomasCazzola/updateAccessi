<?php
require_once 'config.php';
session_start();
//
//Controllo se la sessione dell'utente è gia settata
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_id'] == $_POST['nome']) {
        //UPDATE `utenti` SET `contatore`=`contatore`+1 WHERE `nomeUtente`="piero"
        $sessione = $_SESSION['user_id'];
        //incrementa il contatore
        $sql = 'UPDATE `utenti` SET `contatore`=`contatore`+1 WHERE `nomeUtente` = "' . $sessione . '"';
        if ($result = mysqli_query($link, $sql));
        else {
            echo "Something went wrong";
        }
        header('Location: paginaSegreta.php');
    }
}

if (!empty($_POST['nome']) && !empty($_POST['password'])) {
    $sql = 'SELECT * FROM utenti where nomeUtente="' . $_POST["nome"] . '" AND password="' . md5($_POST["password"]) . '"';
    if ($result = mysqli_query($link, $sql));
    else {
        //echo "Errore!!!";
        header("Location: index.html");
    }
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $_SESSION['user_id'] = $_POST['nome'];

        //
        //Controllo se l'utente è demo
        if ($row['demo'] == 1) {
            //Se è demo controllo se ha già fatto almeno 10 accessi
            //Se si rimando alla login
            if ($row['contatore'] == 10) {
                header('Location: index.html');
            }
            //Altrimenti vai alla pagina segreta
            else {
                //incrementa il contatore
                $sql = 'UPDATE `utenti` SET `contatore`=`contatore`+1 WHERE `nomeUtente` = "' . $_POST['nome'] . '"';
                if ($result = mysqli_query($link, $sql));
                else {
                    echo "Something went wrong";
                }
                header('Location: paginaSegreta.php');
            }
        }
        //
        //Se non è demo va alla pagina segreta
        else {
            //incrementa il contatore
            $sql = 'UPDATE `utenti` SET `contatore`=`contatore`+1 WHERE `nomeUtente` = "' . $_POST['nome'] . '"';
            if ($result = mysqli_query($link, $sql));
            else {
                echo "Something went wrong";
            }
            header('Location: paginaSegreta.php');
        }
    } else {
        header('Location: index.html');
    }
}
