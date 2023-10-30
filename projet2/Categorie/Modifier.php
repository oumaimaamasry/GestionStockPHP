<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier catégorie</title>
    <link rel="stylesheet" href="css/ajouter.css">
</head>

<body>

<?php

$base = new PDO('mysql:host=localhost; dbname=gestion_stock', 'root', '');
$stm_c = $base->prepare('select * from categorie where id_categorie = :id');

$stm_c->execute([':id'=>$_POST['categorie']]);

$tab_c = $stm_c->fetch();

?>

<form method = post action = "confirmation_modification.php?id=<?=$tab_c['id_categorie']?>" enctype="multipart/form-data">

<div class = "rec">

<div class = "titre">
    <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        Saisie<br>des informations.</h1>
</div>
<table class = "nom-inputs">
                <tr>
                    <td>Nom:</td>
                    <td><input style="height: 30px;" type = 'text' name = 'nom' class = "nom" value = <?=$tab_c['nom_categorie']?>></td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td><input style="height: 30px;" type = 'text' name = 'description' class = "description" value =<?=$tab_c['description']?>></td>
                </tr>
            </table>

            <div class = "boutons">
                    <input style="height: 50px; width : 100px;" type = 'submit' value = 'Modifier'>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input style="height: 50px; width : 100px;" type = 'reset' value = 'Annuler'>
            </div>
</div>
</form>
</body>
</html>

