<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 </title>
</head>
<body>

<p>Faire une page index.php. Tester sur cette page que tous les paramètres
 de cette URL existent et les afficher : index.php?lastname=Nemare&firstname=Jean</p>


<a href="index.php?lastname=Félix&firstname=Noël">Bonjour</a>

<?php echo $_GET['lastname']?>
<?php echo $_GET['firstname']?>



</body>
</html>
