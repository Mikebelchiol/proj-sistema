<?php
require_once 'CLASSES/usuarios.php';
$u = new usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Login</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
    <div id="corpo-form">
        <h1>Entrar</h1>
            <form method="POST">
                <input type="email" placeholder="E-mail">
                <input type="password" placeholder="Senha">
                <Button>Entrar</Button>
                <a href="cadastrar.php">Ainda não é inscrito? <strong>Cadastre-se</strong></a>
            </form>
    </div>
<?php
if(isset($_POST['email']))
{
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    
    if(!empty($email) && !empty($senha))
    {
        $u->conectar("projeto_login", "localhost", "root", "");
        if ($u->msgErro == "")    
        {
            if ($u->logar($email,$senha));
            {
                header ("location: areaPrivada.php");
            }
          
        }
        else 
        {
            ?>
                <div class="msg-erro">
                    <?php echo "Erro: ".$u->msgErro; ?>
                </div>
            
            <?php   
        }
    }
    else 
    {
        ?>
        <div class="msg-erro">
            Preencha todos os campos!
        </div>
    
        <?php     
    }
}

?>
</body>
</html>
