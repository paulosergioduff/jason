<?php

include "core.php";


?>
<br>
<?php

$user      = $_GET['user'];

 $contador = strlen($menssage);;
 $contadorcaminho = "data/" . "$protocolo";
   
$filename = "data/$protocolo";
$protocolonovo = $filename;


if (file_exists($filename)) {
    
    
    // abre o arquivo colocando o ponteiro de escrita no final
    $arquivo = fopen($protocolonovo, 'a+');
    if ($arquivo) {
        if (!fwrite($arquivo, $menssage))
            die('Não foi possível atualizar o arquivo.');
        echo "Mensagem enviada com sucesso Arquivo existente! Caracteres: $contador";
        fclose($arquivo);
        include "postal.php";
        }
        
             
        
    
    
} else {
    
    // abre o arquivo colocando o ponteiro de escrita no final
    $arquivo = fopen($protocolonovo, 'a+');
    if ($arquivo) {
        if (!fwrite($arquivo, $menssagenew))
            die('Não foi possível atualizar o arquivo.');
        echo 'Mensagem enviada com sucesso!';
        fclose($arquivo);
        include "postal.php";
    }
    
  
}
 

?>
<br>

