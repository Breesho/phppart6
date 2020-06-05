

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 </title>
</head>
<body>

<p>Faire une page index.php. 
    Tester sur cette page que tous les paramètres de cette URL existent  
    et les afficher : index.php?language=PHP&server=LAMP</p>


<a href="index.php?language=PHP&server=LAMP">Bonjour</a>

<?php if(isset($_GET['language']) AND isset($_GET['server'])) 
 {
    echo  '<br> Language : ' . $_GET['language'] . '<br> Serveur : ' . $_GET['server'];
 }
 else {
     echo "erreur" ;
 }
?>





</body>
</html>

