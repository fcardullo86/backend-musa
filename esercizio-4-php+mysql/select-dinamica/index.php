      <?php require_once './connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 4 - PHP + Mysql</title>
    <style>
        tr {
            padding: 5px;
        }
    </style>
</head>
<body>

<?php

        $query = $db->query("SELECT id, nome, prezzo, quantita, categoria FROM prodotti");
        if(!$query) die('Impossibile caricare i dati');
        $rows = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Prezzo</th>
            <th>Quantità</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rows as $prodotto):
            [
                "id" => $id,
                "nome" =>$nome,
                "prezzo"=>$prezzo,
                "quantita"=>$quantità,
                "categoria"=>$categoria
                
            ] = $prodotto;
            ?>
        <tr>
            <td><?=$id?></td>
            <td><?=$nome?></td>
            <td><?=$prezzo?></td>
            <td><?=$quantità?></td>
            <td><?=$categoria?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</body>
</html>