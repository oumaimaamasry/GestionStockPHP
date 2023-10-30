
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/confirmation_ajout.css">

    <title>Ajouter catégorie</title>
</head>
<body>
<?php

$base = new PDO('mysql:host=localhost; dbname=gestion_stock', 'root', '');
$stm = $base->prepare(
    'insert into categorie
    (nom_categorie, description) values (:nom, :des)'
);
$stm->execute(
    [
        ':nom'=>$_POST['nom'],
        ':des'=>$_POST['description']
    ]
);
?>

<div class = "rec">
<center>Catégorie ajoutée.</center>
</div>
<a href = ../site/index.html>[Retour]</a>
</body>
</html>