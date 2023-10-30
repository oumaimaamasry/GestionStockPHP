<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affecter article</title>
</head>
<body>
<?php

echo '<center><table border 1>';

echo '<tr>';
echo '<th>Id</th>';
echo '<th>Nom</th>';
echo '<th>Description</th>';
echo '<th>Quantité</th>';
echo '<th>Image</th>';
echo '<th>Catégorie</th>';
echo '<th>Fournisseur courant</th>';
echo '<th>Affectation</th>';
echo '</tr>';

$base = new PDO('mysql:host=localhost; dbname=gestion_stock', 'root', '');
$stm_a = $base->prepare('select * from article');
$stm_a->execute();
$tab_a = $stm_a->fetchAll();

foreach($tab_a as $value)
{
    $stm_f = $base->prepare('select f.* from fournisseur f, article where '.$value['id_fournisseur_fk'].'= f.id_fournisseur');
    $stm_c = $base->prepare('select c.* from categorie c, article where '.$value['id_categorie_fk'].'= c.id_categorie');

    $stm_f->execute();
    $stm_c->execute();

    $tab_f = $stm_f->fetch();
    $tab_c = $stm_c->fetch();

    $i = $value['id_article'];
    echo '<tr><td>'.$value['id_article'].'</td>';
    echo '<td>'.$value['nom_article'].'</td>';
    echo '<td>'.$value['description'].'</td>';
    echo '<td>'.$value['nombre_en_stock'].'</td>';
    echo '<td>'.$value['image'].'</td>';
    echo '<td>'.$tab_c['nom_categorie'].'</td>';
    echo '<td>'.$tab_f['nom_fournisseur'].' '.$tab_f['prenom_fournisseur'].'</td>';
    echo "<td><a href = 'Saisie_Affectation.php?id=$i'>Affecter</a></td>"; 
}
echo '</table></center>';

echo '<br><center><a href = "Fournisseur.php">Retour</a></center>';
echo '<center><a href = "../index.html">Retour au menu</a></center>';
echo '</table>';
?>
    
</body>
</html>