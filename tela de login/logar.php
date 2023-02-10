<?php
//variáveis
$login = $_POST['email'];
$senha = $_POST['password'];

//echo "Email: $login<br>";
//echo "Senha: $senha<br>";
include "connect.php";

//fazendo a consulta do email no banco de dados
$sql = mysqli_query($link,"SELECT * FROM tb_login WHERE email='$login'");
while($line = mysqli_fetch_array($sql)) {
    $email = $line['email'];
    $senha_banco = $line['senha'];
    $id_banco = $line['id_login'];
}
//variavel para guardar a quantidade de linha na consulta
$contar = mysqli_num_rows($sql);
if($contar != 0) {
    if($senha != $senha_banco) {
        echo "Senha não corresponde ao registro";
    }else {
        SESSION_START();
        $_SESSION['login_user'] = $login;
        $_SESSION['senha_user'] = $senha;
        header('location: inicio.php');
    }
}else {
    echo "Nenhum registro foi localizado";
}

//echo "Email: $email<br>";
//echo "Senha: $senha<br>";

?>