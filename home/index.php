<?php
//fazer a consulta antes de acessar a tela de inicio

include('../login/connect.php');

//criando sessão , armazenando as variaveis e fazendo a consulta do email e da senha do banco de dados  
SESSION_START();
@$log = $_SESSION['login_user'];
@$pass = $_SESSION['senha_user'];
$sql = mysqli_query($link,"SELECT * FROM tb_login WHERE email='$log'");
while ($line = mysqli_fetch_array($sql)) {
    $email = $line['email'];
    $senha = $line['senha'];
}
// se email for diferente de vazio e senha for diferente de vazio, esta conectado. se nao, voltar à tela de login
if($email != "" && $senha != "" ) {
    echo "Está conectado";
}else {
    header('location: ../login/');
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Início botão</title>
</head>
<body>
  <header class="cabecalho">
    <!--MENU INTERATIVO-->
         <nav class="dp-menu">
              <ul>
                    <li><a href="#">Início</a></li>
            <!--CQ--> <li><a href="#">CQ</a>
                         <ul>
                          <li><a href="#">Produtos</a></li>
                          <li><a href="#">Reenvase</a></li>
                          <li><a href="file:///C:/Users/estagio.ti/Desktop/Formulario%20de%20cadastro/index.html">Cadastrar Produto</a></li>
                          <li><a href="#">Feedbacks</a></li>
                         </ul>
                      </li>

       <!--produção--><li><a href="#">Produção</a>
                        <ul>
                          <li><a href="#">Produtos</a></li>
                          <li><a href="#">Reenvase</a></li>
                          <li><a href="#">Feedbacks</a></li>
                        </ul>
                      </li>

      <!--pesquisa--> <li><a href="#">Pesquisar</a>
                        <ul>
                          <li><a href="#">Lotes</a></li>
                          <li><a href="#">Op`s</a></li>
                          <li><a href="#">Roteiros</a></li>
                        </ul>
                      </li>
                    <li><a href="../home/logout.php">Sair</a></li>

    <!--BARRA DE PESQUISA-->                      
                      <div class="caixa-de-pesquisa">
                        <input type="text" class="texto-de-pesquisa" placeholder="pesquisar">
                        <a href="#" class="botao-de-pesquisa">
                            <img class="imagem-pesquisa" src="lupa.png" alt="lupa" 
                             height="15" width="15">
                        </a>
                      </div>
    <!--BARRA FIM-->
              </ul>
         </nav>
    <!--MENU FIM-->     
  </header>

  <!--CONTEUDO-->
  <main class="conteudo">
       <section class="conteudo-principal">
    

       </section>
  </main>

</body>
