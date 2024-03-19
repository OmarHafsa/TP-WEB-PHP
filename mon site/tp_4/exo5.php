<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de nombres pairs</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>

<?php
// Création du tableau
$A = array();
$B = array();
$C = array();

for ($i = 1; $i <= 50; $i++) {
    if($i%2==0){
    $A[] = $i;}
else{
    $B[] = $i;
}
}
for ($i = 0; $i < 25; $i++) {
    $C[$i] =  $A[$i] + $B[$i];
}
?>
<table>
    <tr>
        <?php
        foreach ($A as $number) {
            echo "<td>$number</td>";
        }
        ?></tr>
        <tr>
        <?php
        foreach ($B as $number) {
            echo "<td>$number</td>";
        }
        ?></tr>
        <tr>
        <?php
        foreach ($C as $number) {
            echo "<td>$number</td>";
        }
        ?></tr>
</table>
</body>
</html>
