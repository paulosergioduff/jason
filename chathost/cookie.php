<?php 
//configura cook
setcookie('status', 'lido');
// Pega o valor do Cookie 'usuario' definido anteriormente:
$valor1 = $_COOKIE['usuario']; // Fulano

// Pega o valor do Cookie 'nome' definido anteriormente:
$valor2 = $_COOKIE['color']; // Ciclano

print_r($_COOKIE);

echo $valor2;



?>