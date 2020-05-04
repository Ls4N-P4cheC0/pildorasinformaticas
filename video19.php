<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pildoras informáticas - Video</title>
</head>
<body>

<?php

for($i=0;$i<20;$i+=2){

    echo "<p>Bucle For con incremento de 2 en 2: $i</p>";

}

echo "<br>Tabla de multiplicación<br>";

for($i=1; $i<=10;$i++){

    echo "9 x $i = " . $i*9 . "<br>";
}
echo "Fin del ciclo de incremento de 1<br>";

echo "<br>Tabla de división<br>";

for($i=10;$i>=-10;$i--){

    if($i==0){

        echo "No se puede diviir entre CERO<br>";
        continue;

    }

    echo " 9 / $i = " . 9/$i . "<br>";
}

?>



</body>
</html>