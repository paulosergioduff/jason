<?php
include "control/core.php";
include "view/bootstrap.html";
?>
<hr>
<?php include "view/menu.php"; ?><hr>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">Live JSON</a><img src="img/jasonmask31x31.png">
          <div class="nav-collapse collapse">
            <ul class="nav">
             
            </ul></div><!--/.nav-collapse -->
        </div>
      </div>
    </div><br>
    <hr>

</hr>

        
<?php
/*
include "navbar.html";*/
// verifica se foi enviado um arquivo 
if (isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0) {
    
    echo "Você enviou o arquivo: <strong>" . $_FILES['arquivo']['name'] . "</strong><br />";
    echo "Este arquivo é do tipo: <strong>" . $_FILES['arquivo']['type'] . "</strong><br />";
    echo "Temporáriamente foi salvo em: <strong>" . $_FILES['arquivo']['tmp_name'] . "</strong><br />";
    echo "Seu tamanho é: <strong>" . $_FILES['arquivo']['size'] . "</strong> Bytes<br /><br />";
    
    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
    $nome        = $_FILES['arquivo']['name'];
    
    
    // Pega a extensao
    $extensao = strrchr($nome, '.');
    
    // Converte a extensao para mimusculo
    $extensao = strtolower($extensao);
    
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfilero as extesões permitidas e separo por ';'
    // Isso server apenas para eu poder pesquisar dentro desta String
    if (strstr('.jpg;', $extensao)) // outros formatos .jpeg;.gif;.png
        {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        $novoNome = $hostname /*md5(microtime())*/ . $extensao;
        
        // Concatena a pasta com o nome
        $destino = 'img/' . $novoNome;
        
        // tenta mover o arquivo para o destino
        if (@move_uploaded_file($arquivo_tmp, $destino)) {
            echo "Arquivo salvo com sucesso em : <strong>" . $destino . "</strong><br />";
            echo "<img src=\"" . $destino . "\" />";
        } else
            echo "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />";
    } else
        echo "Você poderá enviar apenas arquivos \"*.jpg;*.jpeg;*.gif;*.png\"<br />";
} else {
    echo "Você não enviou nenhum arquivo!";
}
?>


</body>
</html>