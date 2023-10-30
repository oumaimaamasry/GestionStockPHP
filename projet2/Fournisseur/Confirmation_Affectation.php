<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/confirmation_aff.css">

    <title>Affecter article</title>
</head>
<body>

<?php

$base = new PDO('mysql:host=localhost; dbname=gestion_stock', 'root', '');
$stm = $base->prepare(
    'update article set id_fournisseur_fk = :idffk where id_article = :id'
);
$stm->execute([
                ':idffk'=>$_POST['fournisseur'],
                ':id'=>$_POST['article']
              ]
);
?>

<div class = "rec">
<center class ="fournisseur_aff">Article affecté. </center>
</div>
<a href = ../site/index.html>[Retour]</a>
</body>
</html>

