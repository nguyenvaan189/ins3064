<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     <?php
    $x = $_GET["x"];
    $y = $_GET["y"];

    echo "x==y: " . ($x == $y ? "true" : "false") . "<br>";
    echo "x!=y: " . ($x != $y ? "true" : "false") . "<br>";
    echo "x>y: " . ($x > $y ? "true" : "false") . "<br>";
    echo "x<y: " . ($x < $y ? "true" : "false") . "<br>";
    echo "x>=y: " . ($x >= $y ? "true" : "false") . "<br>";
    echo "x<=y: " . ($x <= $y ? "true" : "false") . "<br>";
    ?>
</body>
</html>
