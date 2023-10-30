<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/confirmation_ajout.css">

    <title>Modifier article</title>
</head>
<body>

<?php

$base = new PDO('mysql:host=localhost; dbname=gestion_stock', 'root', '');
$stm = $base->prepare(
    'update article set nom_article = :nom, description = :des, nombre_en_stock = :qte,
    id_categorie_fk = :idcfk, id_fournisseur_fk = :idffk 
    where id_article = :id'
);

$stm->execute(
    [
        ':id'=>$_GET['id'],
        ':nom'=>$_POST['nom'], ':des'=>$_POST['description'], ':qte'=>$_POST['quantite'],
        ':idcfk'=>$_POST['categorie'], ':idffk'=>$_POST['fournisseur']
    ]
);
?>


<div class = "rec">
<center>Article modifié. </center>
</div>
<a href = ../site/index.html>[Retour]</a>
</body>
</html>