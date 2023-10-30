<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Toutes les catégories</title>
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
      
   <br><br><center><h1 class = "titre">Toutes les catégories.</h1></center>
   <center><a class = "retour" href = "../site/index.html">Retour</a><center><br><br>

   <?php


$base = new PDO('mysql:host=localhost; dbname=gestion_stock', 'root', '');
$stm_c = $base->prepare('select * from categorie');
$stm_c->execute();
$tab_c = $stm_c->fetchAll();

foreach($tab_c as $value)
{
    echo '<div class="col-lg-3 col-sm-6 col-md-3">
         <a href="#">
            <div class="box-img">';
            echo '<h4>'.$value['nom_categorie'].'</h4>';
               echo '<br><br><h3 style="color:white;">ID: '.$value['id_categorie'].
               '<br>Description '.$value['description'].'</h3>
            </div>
         </a>
      </div> ';
}
?>
   </body>
</html>