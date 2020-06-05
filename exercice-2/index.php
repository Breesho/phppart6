

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 </title>
</head>
<body>

<p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si 
c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean</p>


<a href=" index.php?lastname=Nemare&firstname=Jean&age=21">Clique</a>

<?php if(isset($_GET['age']) AND isset($_GET['firstname']) AND isset($_GET['firstname'] )) 
 {
    echo "Bonjour " . $_GET['lastname'] . ' ' . $_GET['firstname'] .' vous avez '. $_GET['age'] .' ans';
 }
 else {
     echo "erreur" ;
 }
?>





</body>
</html>
