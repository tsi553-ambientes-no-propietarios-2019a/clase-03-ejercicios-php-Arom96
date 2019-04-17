<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */
?>

<!DOCTYPE>
<html>
<head>
</head>
<body>
<h1>Tabla Del 2</h1>
<?php  
$numero=2;
$i=0;
while ($i<=10) {
    echo "$numero x $i = ".$numero*$i."<br/>";
        $i++;
}
?>
</body>
</html>
