<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pizze</title>
</head>

<body>
    <h2>Ordina una pizza</h2>
    <form action="./dati.php" method="POST">
        <input type="text" name="nome" placeholder="Inserisci il tuo nome">
        <input type="email" name="email" placeholder="Inserisci la tua email">
        <select name="pizza" id="pizza">
            <option value="">-- Seleziona --</option>
            <option value="margherita">Margherita</option>
            <option value="diavola">Diavola</option>
            <option value="capricciosa">Capricciosa</option>
        </select>
        <input type="number" name="telefono" placeholder="Inserisci il tuo numero di telefono">
        <select name="ora" id="ora">
            <option value="mattina">9:00-13:00</option>
            <option value="pomeriggio">14:00-18:00</option>
        </select>
        <button>Invia i dati</button>
    </form>

    <?php
    if (isset($_GET["sent-email"])) {
        $status = $_GET["sent-email"];
        if ($status === "succes") {
            echo "Email inviata con successo";
        } else {
            echo "Errore nell'invio del messaggio";
        }
    }
    ;

    ?>
</body>

</html>