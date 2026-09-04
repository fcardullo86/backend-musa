<?php
        if (empty($_POST["nome"]) ||
        empty($_POST["email"]) ||
        empty($_POST["telefono"])||
        empty($_POST["ora"]) ||
        empty($_POST["pizza"])) {
         
        header("Location:index.php");
        die;
        }

        $to = "admin@miosito.it";
        $subject = $_POST['nome'];
        $message = "

            Hai ricevuto una nuova prenotazione sul tuo sito

            Prenotazione di una {$_POST["pizza"]} del mittente:{$_POST['email']} per le ore: {$_POST['ora']}
            
        ";  
        $headers = "From: noreply@miosito.it\r\n";
        $headers .= "Cc: miosocio@email.it\r\n";

        if(mail($to, $subject, $message, $headers)) {
           header("Location: index.php?sent-email=success");
        }else{
            header("Location: index.php?sent-email=error");
        };
