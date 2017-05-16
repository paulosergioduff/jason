<?php 

include "control/core.php";
include "view/bootstrap.html";
include "view/navbar.html";

$conteudo= $_GET['menssage'];

$user      = $_GET['user'];

if ($devmod >= 1)

    { echo "<p>Console: $conteudo";
      echo "<p>$server/cpu.php?menssage=$conteudo&user=$user";  
}
echo '<div style ="display:none">';
echo "<p><iframe src='$server/cpu.php?menssage=$conteudo&user=$postid'></iframe>";
echo '</div>';

echo "<p>Mensagem enviada com sucesso!<br>


";

include "view/postal.php";

?>
