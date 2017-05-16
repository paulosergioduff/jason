<?php

$pegasinal = $_GET['sinal'];

include "control/core.php";

$arquivoi = "data/" . "$dia" . "$mes" . "$ano" . ".json";
$infoi    = $cabecalho . file_get_contents($arquivoi) . '
{
"nome": "jasonmask31x31", 
"fim" : "fim"
}


]}';


$arquivo = "$server" . "/data/" . "$dia" . "$mes" . "$ano" . ".json";
$info    = $cabecalho . file_get_contents($arquivo) . '
{
"nome": "jasonmask31x31", 
"fim" : "fim"
}


]}';

$externo = strlen($info);
$interno = strlen($infoi);

//echo "<p>Bytes externos: " . $externo;
//echo "<p>Bytes internos: " . $interno;

if ($externo > $interno)
         {


          echo "<p>Novam mensagem <a href='page.php?page=mensagens'><img src='http://apps.baudeineapp.de/myapplications/FabioWidmer/CydiaStore/unreadmail.png'></a><hr>Sinal: $pegasinal";

         
$filename = "data/$protocolo";
$protocolonovo = $filename;


    
    
    // abre o arquivo colocando o ponteiro de escrita no final
    $arquivo = fopen($protocolonovo, 'w+');
    if ($arquivo) {
        if (!fwrite($arquivo, $info))
            die('Não foi possível atualizar o arquivo.');
       // echo "<p>Mensagem enviada com sucesso Arquivo existente!";
        fclose($arquivo);
             }
        
 echo '
 <div style ="display:none">
 <p><audio controls autoplay>
  <source src="data/bellogg.ogg" type="audio/ogg">
</audio>
</div>

';

    }

  

    ?></div>