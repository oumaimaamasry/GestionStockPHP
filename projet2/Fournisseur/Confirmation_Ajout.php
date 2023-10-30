<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/confirmation_ajt.css">

    <title>Ajouter fournisseur</title>
</head>
<body>
<?php

$base = new PDO('mysql:host=localhost; dbname=gestion_stock', 'root', '');
$stm = $base->prepare(
    'insert into fournisseur
    (nom_fournisseur, prenom_fournisseur, cin, adresse, telephone, email)
    values (:nom, :prenom, :cin, :adresse, :telephone, :email)'
);
$stm->execute(
    [
        ':nom'=>$_POST['nom'],
        ':prenom'=>$_POST['prenom'],
        ':cin'=>$_POST['cin'],
        ':adresse'=>$_POST['adresse'],
        ':telephone'=>$_POST['telephone'],
        ':email'=>$_POST['email']
    ]
);
?>

<div class = "rec">
<center>Fournisseur ajouté(e).</center>
</div>
<a href = ../site/index.html>[Retour]</a>
</body>
</html>