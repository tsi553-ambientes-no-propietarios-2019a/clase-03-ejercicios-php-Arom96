<?php
/**
 * Problema propuesto:
 *
 * Implementar una función que muestre un título centrado en pantalla, 
 * y la llamaremos posteriormente dos veces.
*/

function titulo($title){
    echo"<h1 style=\"text-align:center\">";
    echo $title;
    echo"</h1>";
}
?>

<!DOCTYPE>
<html>
<head>
</head>
<body>
    <?php
    titulo("Hola Mundo");
    titulo("Esto Es PHP");
    ?>
</body>
</html>