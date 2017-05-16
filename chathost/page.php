<?php 

include "control/core.php";
include "view/bootstrap.html";
include "view/navbar.html";

$page= $_GET['page'];

     switch ($page) {
    case "mensagens":
        include "view/postal.php";
        break;
    case "dev":
        include "view/dev.php";
        break;
    case "download":
        include "control/downloadfile.php";
        break;
    case "upload":
        include "control/recebeUpload.php";
        break;        
    
}






?>
