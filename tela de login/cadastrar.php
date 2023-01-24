<?php
    require_once 'CLASSES/usuarios.php';
    $u = new Usuario;
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
        <h1>Cadastrar</h1>
            <form method="POST">
                <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
                <input type="email" name="email" placeholder="E-mail" maxlength="40">
                <input type="password" name="senha" placeholder="Senha" maxlength="15">
                <input type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
                <Button>Cadastrar</Button>
            </form>
    </div>
<?php
//verificar se clicou no botão
if(isset($_POST['nome']))
{
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confSenha']);
    //verificar se esta preenchido
    if(!empty($nome) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
    {
        $u->conectar("projeto_login", "localhost", "root", "");
        if ($u->msgErro == "") //se esta tudo ok
        {
            if ($senha == $confirmarSenha) 
            {
            
                if ($u->cadastrar($nome,$email,$senha))
                {
                    ?>
                    <div id="msg-sucesso">
                    Cadastrado com sucesso! Acesse para entrar!
                    </div>
                    <?php
                }
                else 
                {
                    ?>
                   <div class="msg-erro">
                   Email ja cadastrado!
                   </div>
                    <?php
                }
            }
            else 
            {
                ?>
                <div class="msg-erro">
                Senha e confirmar senha não correspondem!
                </div>
                 <?php
            }
        }
        else 
        {
            ?> 
            <div class="msg-erro">
            <?php   echo "Erro: ".$u->msgErro; ?>
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