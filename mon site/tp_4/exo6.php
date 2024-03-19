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

for ($i = 0; $i <50; $i++) {
    if($i%2 == 0){
    $A[] = $i;}
else{
    $B[] = $i;
}
}
$C = array($A , $B);
for($i=0; $i<count($C);$i++){
    for($j=0; $j <count($C[$i]); $j++){
     echo $C[$i][$j];
     echo"|";
    }
    echo "<br>";
}
/*foreach ($C as $ligne) {
    foreach ($ligne as $v) {
        echo"$v |";
    }
    echo "<br>";
}*/
?>



