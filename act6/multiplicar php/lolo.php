<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="lolol.css">
</head>
<body><center>
<div id="general">
<?php

echo '<br>'; echo '<br>'; 
$tabla = $_POST['num1'];
$i = 1;


for ($i=1; $i <=10; $i++){
    echo '<br>';
    echo $i ;
    echo  "x" ;
    echo $tabla ;
    echo "=";
    echo $i*$tabla;
   
}

?>

</div></center>
</body>
</html>
