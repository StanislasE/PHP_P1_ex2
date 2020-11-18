<?php 
    $lastName = 'Etienne. ';
    $firstName = 'Stanislas. ';
    $age = 22; // Pour les nombres entiers, ne pas mettre de côtes
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 2</title>
</head>
<body>

<?php
    echo $lastName;
    echo $firstName;
    echo $age . ' ans';  // Le point sert à concaténer age et la chaîne de caractères
?>
    
</body>
</html>