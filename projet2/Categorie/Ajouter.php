<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter catégorie</title>
    <link rel="stylesheet" href="css/ajouter.css">
</head>

<body>

<?php

$base = new PDO('mysql:host=localhost; dbname=gestion_stock', 'root', '');
$stm_c = $base->prepare('select * from categorie');
$stm_f = $base->prepare('select * from fournisseur');

$stm_c->execute();
$stm_f->execute();

$tab_c = $stm_c->fetchAll();
$tab_f = $stm_f->fetchAll();

?>

<form method = post action = "Confirmation_Ajout.php" enctype="multipart/form-data">

<div class = "rec">

<div class = "titre">
    <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        Saisie<br>des informations.</h1>
</div>
<table class = "nom-inputs">
                <tr>
                    <td>Nom:</td>
                    <td><input style="height: 30px;" type = 'text' name = 'nom' class = "nom"></td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td><input style="height: 30px;" type = 'text' name = 'description' class = "description"></td>
                </tr>
            </table>

            <div class = "boutons">
                    <input style="height: 50px; width : 100px;" type = 'submit' value = 'Ajouter'>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input style="height: 50px; width : 100px;" type = 'reset' value = 'Annuler'>
            </div>
</div>
</form>
</body>
</html>

