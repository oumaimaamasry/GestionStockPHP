<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/confirmation_sup.css">

    <title>Supprimer fournisseur</title>
</head>
<body>

<?php

$base = new PDO('mysql:host=localhost; dbname=gestion_stock', 'root', '');
$stm = $base->prepare('delete from fournisseur where id_fournisseur = :id');
$stm->execute([':id'=>$_POST['fournisseur']]);
?>

<div class = "rec">
<center class ="fournisseur_edit">Fournisseur supprimé. </center>
</div>
<a href = ../site/index.html>[Retour]</a>
</body>
</html>