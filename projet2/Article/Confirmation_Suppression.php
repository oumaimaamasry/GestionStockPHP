<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/confirmation_ajout.css">

    <title>Supprimer article</title>
</head>
<body>
<?php

$base = new PDO('mysql:host=localhost; dbname=gestion_stock', 'root', '');
$stm = $base->prepare('delete from article where id_article = :id');
$stm->execute([':id'=>$_GET['id']]);
?>

<div class = "rec">
<center>Article supprimé. </center>
</div>
<a href = ../site/index.html>[Retour]</a>
</body>
</html>