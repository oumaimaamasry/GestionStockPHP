<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier fournisseur</title>
    <link rel="stylesheet" href="css/ajouter.css">
</head>

<body>

<?php

$base = new PDO('mysql:host=localhost; dbname=gestion_stock', 'root', '');
$stm_f = $base->prepare('select * from fournisseur where id_fournisseur = :id');
$stm_f->execute([':id'=>$_POST['fournisseur']]);
$tab_f = $stm_f->fetch();

?>

<form method = post action = "Confirmation_Modification.php?id=<?=$tab_f['id_fournisseur']?>" enctype="multipart/form-data">

<div class = "rec">

<div class = "titre">
    <h1>&nbsp&nbsp
        Modification<br>des informations.</h1>
</div>
<table>
                <tr>
                    <td>Nom:</td>
                    <td><input style="height: 30px;" type = 'text' name = 'nom' class = "nom" value =<?=$tab_f['nom_fournisseur']?>></td>
                </tr>
                <tr>
                    <td>Prénom:</td>
                    <td><input style="height: 30px;" type = 'text' name = 'prenom' class = "prenom" value =<?=$tab_f['prenom_fournisseur']?>></td>
                </tr>
                <tr>
                    <td>Téléphone:</td>
                    <td><input style="height: 30px;" type = 'text' name = 'telephone' class = "telephone" value =<?=$tab_f['telephone']?>></td>
                </tr>
                <tr>
                    <td>Adresse:</td>
                    <td><input style="height: 30px;" type = 'text' name = 'adresse' class = "adresse" value =<?=$tab_f['adresse']?>></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input style="height: 30px;" type = 'email' name = 'email' class = "email" value =<?=$tab_f['email']?>></td>
                </tr>
                <tr>
                    <td>Cin:</td>
                    <td><input style="height: 30px;" type = 'text' name = 'cin' class = "cin" value =<?=$tab_f['cin']?>></td>
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

