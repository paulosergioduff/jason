<?php
include "control/core.php";
include "view/bootstrap.html";
//include "view/navbar.html";
setcookie('id');
$pegaid = $_POST['id'];
setcookie('id', "$pegaid");

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
 <?php echo $postid ;?>
 <hr>
</center>


</body>
</html>