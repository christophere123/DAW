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


 $nombre = $_POST['name'];
 $age = $_POST['age'];
 $number = $_POST['number'];
 
 echo"<table border='2'><br>";

 
 echo "<tr>";
 echo "<th>su nombre es $nombre</th>";
 echo "</tr>";

 echo "<tr>";
 echo "<th>su numero es $number</th>";
 echo "</tr>";

 echo "<tr>";
 echo "<th>su edad es $age</th> ";
 echo "</tr>";

?>

</div></center>
</body>
</html>
