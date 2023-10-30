<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/confirmation_edt.css">

    <title>Modifier fournisseur</title>
</head>
<body>

<?php

$base = new PDO('mysql:host=localhost; dbname=gestion_stock', 'root', '');
$stm = $base->prepare(
    'update fournisseur set nom_fournisseur = :nom, prenom_fournisseur = :prenom,
    cin = :cin, adresse = :adresse, telephone = :telephone, email = :email 
    where id_fournisseur = :id'
);

$stm->execute(
    [
        ':id'=>$_GET['id'],
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
<center class ="fournisseur_edit">Fournisseur modifié(e). </center>
</div>
<a href = ../site/index.html>[Retour]</a>
</body>
</html>

