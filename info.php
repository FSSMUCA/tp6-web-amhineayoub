<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Informations PHP</title>
<style>
body { font-family: Arial; background: #f4f6f8; padding: 20px; }
.card { background: white; padding: 20px; border-radius: 10px; width: 400px; }
</style>
</head>
<body>


<div class="card">
<h2>Informations Générales</h2>


<?php
$etablissement = "Université Cadi Ayyad";
$module = "Programmation Web";
$annee = 2024;


$a = 10;
$b = 5;


$addition = $a + $b;
$multiplication = $a * $b;


echo "<p><strong>Établissement :</strong> $etablissement</p>";
echo "<p><strong>Module :</strong> $module</p>";
echo "<p><strong>Année :</strong> $annee</p>";
echo "<p>Nombre A = $a</p>";
echo "<p>Nombre B = $b</p>";
echo "<p>Addition : $addition</p>";
echo "<p>Multiplication : $multiplication</p>";
?>
</div>


</body>
</html>