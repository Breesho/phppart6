

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 </title>
</head>
<body>

<p>Faire une page index.php. Tester sur cette page que tous
   les paramètres de cette URL existent  et les afficher : index.php?week=12</p>


<a href="index.php?week=12">Bonjour</a>

<?php if(isset($_GET['week'])) 
 {
    echo  '<br> Semaine : ' . $_GET['week'];
 }
 else {
     echo "erreur" ;
 }
?>





</body>
</html>

