<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter article</title>
    <link rel="stylesheet" href="css/ajouter.css">
</head>

<body>

<form method = post action = "Confirmation_Ajout.php" enctype="multipart/form-data">

<div class = "rec">

<div class = "titre">
    <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        Saisie<br>des informations.</h1>
</div>
<table class = "nom-inputs">
                <tr>
                    <td>Prénom:</td>
                    <td><input style="height: 30px;" type = 'text' name = 'prenom' class = "prenom"></td>
                </tr>
                <tr>
                    <td>Nom:</td>
                    <td><input style="height: 30px;" type = 'text' name = 'nom' class = "nom"></td>
                </tr>
                <tr>
                    <td>Téléphone:</td>
                    <td><input style="height: 30px;" type = 'text' name = 'telephone' class = "telephone"></td>
                </tr>
                <tr>
                    <td>Adresse:</td>
                    <td><input style="height: 30px;" type = 'text' name = 'adresse' class = "adresse"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input style="height: 30px;" type = 'email' name = 'email' class = "email"></td>
                </tr>
                <tr>
                    <td>Cin:</td>
                    <td><input style="height: 30px;" type = 'text' name = 'cin' class = "cin"></td>
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

