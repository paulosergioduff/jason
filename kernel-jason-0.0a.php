	<?php

    ################### JASON CONTROLE #####################


// MVC
define('view', 'visual');
define('control','config');
define('model','dados');

// CONFIGURAÇÕES INICIAIS

define('protocolo','http'); // Configure para https se quer segurança SSL
define('bd_tipo','MySQL'); // Configura tipo de banco
define('DAO',''); // Configura conexão de Data Acces Object



    #######################################################



############# MYSQL CONTROLE ########################

$conn = null;

if ($conn == null) {
    $conn = mysqli_connect('localhost', 'root', 'root') or die(mysql_error());
    
    mysqli_select_db($conn, 'seguranca') or die(mysql_error());
}

#############################################################


########### ORIGINAL HOME ####################################

$pesquisa = (isset($_REQUEST['pesquisa'])) ? "nome = '{$_REQUEST['pesquisa']}'" : '1=1';
$select = mysqli_query($conn, "SELECT * FROM usuarios WHERE $pesquisa ") or die("Erro.:: " . mysqli_error($conn));

while ($dados = mysqli_fetch_array($select)) {
    $nome = htmlspecialchars($dados['nome']);
    echo "
				<tr>
					<td>{$nome}</td>
					<td align='center'>{$dados['idade']}</td>
					<td>{$dados['email']}</td>
				</tr>
				";
}

###################### index.php ###############################

    <?php
            if( isset($_REQUEST['entrar']) ){
                $email = addslashes($_REQUEST['email']);
                $senha = addslashes($_REQUEST['senha']);
                $verifica = mysqli_query($conn, " SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}' ")or die(mysql_error());

                if( mysqli_num_rows($verifica) > 0 ){
                    $_SESSION['login'] = $_REQUEST['email'];
                    header("Location: ?pag=seguranca.php");
                }
                else{
                    echo '
                          <div class="alert alert-error">
                            Falha ao logar.
                          </div>
                        ';
                }
            }

#################################################################            
              




################### CADASTRAR #################################

if (isset($_REQUEST['salvar'])) {
    
    if ($_REQUEST['hash'] != $_SESSION['_token']) {
        die("Fail <br>hash -> {$_REQUEST['hash']}<br>session -> {$_SESSION['_token']}");
    }
    
    foreach ($_REQUEST as $indice => $value) {
        $_REQUEST[$indice] = addslashes($_REQUEST[$indice]);
    }
    
    $insere = mysqli_query($conn, "INSERT INTO usuarios (nome, idade, email, senha) VALUES ('{$_REQUEST['nome']}','{$_REQUEST['idade']}','{$_REQUEST['email']}','{$_REQUEST['senha']}') ") or die('Erro.:: ' . mysqli_error($conn));
    
    ######## PROTEÇÃO CSRF #########################
    if ($insere) {
        $_SESSION['_token'] = hash('sha512', rand(100, 1000));
        header("Location: ?pag=home.php");
    } else {
        echo '
              <div class="alert alert-error">
                Falha ao cadastrar!
              </div>
            ';
        #################################################
    }
} ####################################################################

################## segunranca.php ########################

if(!$_GET){
            include 'home.php';
        }
        else{
            if( file_exists("{$_GET['pag']}") )
                include "{$_GET['pag']}";
            else
                echo 'A pagina nao existe.';
        }
##############################################################
?>
		</table>
