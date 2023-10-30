<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affecter article</title>
    <link rel="stylesheet" href="css/choix_aff.css">
</head>

<body>

<?php

$base = new PDO('mysql:host=localhost; dbname=gestion_stock', 'root', '');
$stm_f = $base->prepare('select * from fournisseur');
$stm_f->execute();
$tab_f = $stm_f->fetchAll();

$stm_a = $base->prepare('select * from article');
$stm_a->execute();
$tab_a = $stm_a->fetchAll();

?>

<form method = post action = "confirmation_affectation.php" enctype="multipart/form-data">

<div class = "rec">

<div class = "titre">
    <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        Saisie<br>des informations.</h1>
</div>
<table class = "nom-inputs">
                <tr>
                    <td>Fournisseur:</td>
                    <td>
                        <select style="height: 35px;width : 173px;" name = 'fournisseur' class = "fournisseur">
                        <option value="none" selected disabled hidden>Choisir un fournisseur:</option>
                            <?php
                            foreach($tab_f as $v)
                            echo '<option value ='. $v['id_fournisseur'].'>'.$v['nom_fournisseur'].' '.$v['prenom_fournisseur']."</option>";
                            ?>
                       </select>
                    </td>
                </tr>

                <tr>
                    <td>Article:</td>
                    <td>
                        <select style="height: 35px;width : 173px;" name = 'article' class = "article">
                        <option value="none" selected disabled hidden>Choisir un article:</option>
                            <?php
                            foreach($tab_a as $v)
                            echo '<option value ='. $v['id_article'].'>'.$v['nom_article'].'</option>';
                            ?>
                       </select>
                    </td>
                </tr>

            <div class = "boutons">
                    <input style="height: 50px; width : 100px;" type = 'submit' value = 'Confirmer'>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input style="height: 50px; width : 100px;" type = 'reset' value = 'Annuler'>
            </div>
</div>
</form>
</body>
</html>

