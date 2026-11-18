<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q3</title>
</head>
<body>
<?php
function calculateArea($width, $length) {
    $area = $width * $length;

    return $area;
}
$width = 4;
$length = 2;

$result = calculateArea($width, $length);
echo "The area of a rectangle with a width of $width and $length is $result";
?>

</body>
</html>