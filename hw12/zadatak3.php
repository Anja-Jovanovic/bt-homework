<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<form action="zadatak3.php" method="get">

<label> Upisi broj </label>
<input type="number" name="broj">
<input type="submit" name="submit">

</form>

<?php

if(isset($_GET['broj'])){


$x=$_GET['broj'];

$y=1;
$sum=0;

while ($y<=$x) {
    $sum=$sum+$y;
    $y++;
}
echo "Zbir prvih $x prirodnih brojeva je $sum";

}

?>












</body>
</html>