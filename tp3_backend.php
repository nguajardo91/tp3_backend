<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>

<center><h1>Ejercicio 1</h1><br>
<?php

for ($i=1; $i <=100; $i++) { 
    echo "<p>$i</p>";
}
?>

<br><h1>Ejercicio 2</h1><br>
<?php

for ($i=100; $i >=1; $i--) { 
    echo "<p>$i</p>";
}
?>

<br><h1>Ejercicio 3</h1><br>
<?php

for ($i=2; $i <=100 ;$i=$i+2) { 
    echo "<p>$i</p>";
}

?>

<br><h1>Ejercicio 4</h1><br>
<?php
for ($i=1; $i <=100 ;$i=$i+2) { 
    echo "<p>$i</p>";
}

?>

<br><h1>Ejercicio 5</h1><br>
<?php
$suma = 0;

for ($i=0;$i<=20;$i++) { 
    $suma +=$i;
    echo "<p>$suma</p>";
}

?>

<br><h1>Ejercicio 6</h1><br>
<?php
$suma = 0;

for ($i=0; $i<=20 ; $i=$i+2) { 
    $suma +=$i;
    echo "<p>$suma</p>";
}

?>
    
</body>
</html>