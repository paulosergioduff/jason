<?php
include "control/core.php";
include "view/bootstrap.html";
//include "view/navbar.html";



?>

<body><hr>
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
<center>
  <h1>Configurando identidade</h1>
<h3>Seu usuário será configurado para: <?php echo $hostname; ?></h3>
<h5>Id atual: <?php echo $hostnameid; ?></h5>
<form action="jsoncard.php" method="POST">
  
<select name="id"><option value="<?php echo $hostname;?>"><?php echo $hostname;?></option></select>

 
<input type="submit" value="Configurar identidade" class="btn btn-large btn-primary" />
</form>

 
 
        
      </div>
 <hr>
</center>
<center>
 <h1>Configurando avatar</h1> 
    <form method="post" enctype="multipart/form-data" action="<?php echo $server; ?>/upload.php">
       Selecione uma imagem do computador: <input name="arquivo" type="file" value="Escolher imagem" />
	   <br />
       <input type="submit" value="Enviar foto" class="btn btn-large btn-primary" />
    </form> 
    </center>
</body>
</html>