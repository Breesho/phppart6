

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 </title>
</head>
<body>

<p>Faire une page index.php. Tester sur cette page que tous 
   les paramètres de cette URL existent  et les afficher : index.php?building=12&room=101</p>


<a href="index.php?building=12&room=101">Bonjour</a>

<?php if(isset($_GET['building']) AND isset($_GET['room'])) 
 {
    echo  '<br> Building : ' . $_GET['building'] . '<br> Room : ' . $_GET['room'];
 }
 else {
     echo "erreur" ;
 }
?>





</body>
</html>

