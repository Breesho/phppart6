

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 </title>
</head>
<body>

<p>Faire une page index.php. Tester sur 
cette page que tous les paramètres de cette URL existent  
et les afficher : index.php?startDate=2/05/2016&endDate=27/11/2016</p>


<a href="index.php?startDate=02/05/2016&endDate=27/11/2016">Bonjour</a>

<?php if(isset($_GET['startDate']) AND isset($_GET['endDate'])) 
 {
    echo  '<br>Date de début : ' . $_GET['startDate'] . '<br> Date de Fin : ' . $_GET['endDate'];
 }
 else {
     echo "erreur" ;
 }
?>





</body>
</html>
