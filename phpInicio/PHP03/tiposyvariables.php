<?php
$peli1 = "101 dalmatas";
$peli2 = "28 dias";

@$resultado = $peli1 + $peli2;

echo "<p>El resultado es de tipo ".gettype($resultado)."</p>";
echo "<p>Vale $resultado</p>";
?>