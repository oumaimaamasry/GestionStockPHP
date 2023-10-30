<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Tous les articles</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--bootstrap css-->
      <link rel="stylesheet" href="../chamb/css/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="../chamb/css/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="../chamb/css/style.css">
      <link rel="stylesheet" href="../chamb/css/bootstrap-select.min.css">
      <link rel="stylesheet" href="../chamb/css/slick.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="../chamb/css/responsive.css">
      <link rel="stylesheet" href="css/article.css">

   </head>
   <body>   
      
   <br><br><center><h1 class = "titre">Tous les articles.</h1></center>
   <center><a class = "retour" href = "../site/index.html">Retour</a><center><br><br>

   <?php

$base = new PDO('mysql:host=localhost; dbname=gestion_stock', 'root', '');
$stm_a = $base->prepare('select * from article');
$stm_a->execute();
$tab_a = $stm_a->fetchAll();

foreach($tab_a as $value)
{
    $stm_f = $base->prepare('select * from fournisseur, article where '.$value['id_fournisseur_fk'].'= id_fournisseur');
    $stm_c = $base->prepare('select * from categorie, article where '.$value['id_categorie_fk'].'= id_categorie');

    $stm_f->execute();
    $stm_c->execute();

    $tab_f = $stm_f->fetch();
    $tab_c = $stm_c->fetch();

    echo '<div class="col-lg-3 col-sm-6 col-md-3">
         <a href="#">
            <div class="box-img">';
            echo '<h4>'.$value['nom_article'].'</h4>';
            echo '<img src="data:image/png;base64,'.base64_encode($value['image']).'"/>';
               echo '<br><br><h3 style="color:white;">ID: '.$value['id_article'].
               '<br>Quantité: '.$value['nombre_en_stock'].'</h3>
            </div>
         </a>
      </div> ';
}
?>
   </body>
</html>