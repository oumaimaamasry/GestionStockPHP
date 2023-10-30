<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier article</title>
    <link rel="stylesheet" href="css/ajouter.css">
</head>

<body>

<?php

$base = new PDO('mysql:host=localhost; dbname=gestion_stock', 'root', '');
$stm_c = $base->prepare('select * from categorie');
$stm_f = $base->prepare('select * from fournisseur');
$stm_a = $base->prepare('select * from article where id_article = :id');

$stm_c->execute();
$stm_f->execute();
$stm_a->execute([':id'=>$_GET['id']]);

$tab_c = $stm_c->fetchAll();
$tab_f = $stm_f->fetchAll();
$tab_a = $stm_a->fetch();

?>

<form method = post action = "Confirmation_modification.php?id=<?=$tab_a['id_article']?>" enctype="multipart/form-data">

<div class = "rec_modifier">

<div class = "titre">
    <h1>&nbsp&nbsp
        Modification<br>des informations.</h1>
</div>
<table>
                <tr>
                    <td>Nom:</td>
                    <td><input style="height: 30px;" type = 'text' name = 'nom' class = "nom" value =<?=$tab_a['nom_article']?>></td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td><input style="height: 30px;" type = 'text' name = 'description' class = "description" value =<?=$tab_a['description']?>></td>
                </tr>
                <tr>
                    <td>Quantité:</td>
                    <td><input style="height: 30px;" type = 'number' name = 'quantite' class = "quantite" value =<?=$tab_a['nombre_en_stock']?>></td>
                </tr>
                <tr>
                    <td>Catégorie:</td>
                    <td>
                        <select style="height: 35px;width : 173px;" name = 'categorie' class = "categorie">
                        <option value="none" selected disabled hidden>Choisir une catégorie</option>
                            <?php
                            foreach($tab_c as $v)
                            echo '<option value ='. $v['id_categorie'].'>'.$v['nom_categorie']."</option>";
                            ?>
                       </select>
                    </td>
                </tr>
                <td>Fournisseur:</td>
                    <td>
                        <select style="height: 35px;width : 173px;" name = 'fournisseur' class = "fournisseur">
                        <option value="none" selected disabled hidden>Choisir un fournisseur</option>
                            <?php
                            foreach($tab_f as $v)
                            echo '<option value ='. $v['id_fournisseur'].'>'.$v['nom_fournisseur'].' '.$v['prenom_fournisseur']."</option>";
                            ?>
                       </select>
                    </td>
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

