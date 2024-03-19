<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=100;
    $b=50;
    $c=150;
if($a>$b && $a>$c){
    $max=$a;
}
elseif($b>$a && $b>$c){
    $max=$a;
}
else{
    $max=$c;
}
echo"<h1> le max entre $a, $b, $c est: $max </h1>";
    ?>
    </body>
</html>