<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $N=50;
    $s=0;
    for($i=0;$i<$N;$i++){
        $T[$i]=$i+1;
    }
    for($i=0;$i<$N;$i++){
        $s+=$T[$i];
        echo"<h3>L'element T[$i]=$T[$i]</h3>";
    }
    echo"<h3>La somme est: $s</h3>";
    ?>
</body>
</html>