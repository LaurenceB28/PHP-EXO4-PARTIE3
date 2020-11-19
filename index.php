<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo4phpP3</title>
</head>
<body>
<h1>Les Hauts de France</h1>
    <p><?php
    // On crée notre array $Departemants
        $Departements = array (
            '02' => 'Aisne',
            '59' => 'Nord',
            '60' => 'Oise',
            '62' => 'Pas de Calais',
            '80' => 'Somme');
?>

<?php
$Departements['02'] = 'Aisne';
$Departements['59'] = 'Nord';
$Departements['60'] = 'Oise';
$Departements['62'] = 'Pas de Calais';
$Departements['80'] = 'Somme';

?>
</body>
</html>