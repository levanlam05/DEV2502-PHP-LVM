<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    $delta = $b * $b - 4 * $a * $c;

    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Phương trình có 2 nghiệm phân biệt:<br>";
        echo "x1 = " . $x1 . "<br>";
        echo "x2 = " . $x2;
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        echo "Phương trình có nghiệm kép:<br>";
        echo "x = " . $x;
    } else {
        echo "Phương trình vô nghiệm.";
    }
}
?>
</body>
</html>