<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/confirmation_ajout.css">

    <title>Ajouter article</title>
</head>
<body>
<?php

$base = new PDO('mysql:host=localhost; dbname=gestion_stock', 'root', '');
$stm = $base->prepare(
    'insert into article
    (nom_article, description, nombre_en_stock, image, id_categorie_fk, id_fournisseur_fk)
    values (:nom, :description, :nombre_en_stock, :image, :id_c_fk, :id_f_fk)'
);
$stm->execute(
    [
        ':nom'=>$_POST['nom'],
        ':description'=>$_POST['description'],
        ':nombre_en_stock'=>$_POST['quantite'],
        ':image'=>file_get_contents($_FILES['image']['tmp_name']),
        ':id_c_fk'=>$_POST['categorie'],
        ':id_f_fk'=>$_POST['fournisseur']
    ]
);
?>

<div class = "rec">
<center>Article ajouté. </center>
</div>
<a href = ../site/index.html>[Retour]</a>
</body>
</html>