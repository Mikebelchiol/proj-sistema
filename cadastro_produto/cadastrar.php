<?php
session_start();
    require_once("servidor.php");
    if (isset($_GET['cadastrar'])) {
        if (!empty($_GET['prioridade']) || !empty($_GET['reator']) || !empty($_GET['produto']) || !empty($_GET['lote']) || !empty($_GET['roteiro']) || !empty($_GET['op']) || !empty($_GET['quantidade']) || !empty($_GET['supervisor']) || !empty($_GET['turno'])) {
            $prioridade = $_GET['prioridade'];
            $reator = $_GET['reator'];
            $produto = $_GET['produto'];
            $lote = $_GET['lote'];
            $roteiro = $_GET['roteiro'];
            $op = $_GET['op'];
            $quantidade = $_GET['quantidade'];
            $supervisor = $_GET['supervisor'];
            $turno = $_GET['turno'];

            $comando = "INSERT INTO produtos (prioridade, reator, produto, lote, roteiro, op, quantidade, supervisor, turno)
            VALUES ('$prioridade', '$reator', '$produto', '$lote', '$roteiro', '$op', '$quantidade', '$supervisor', '$turno')";
            $enviar = mysqli_query($conn, $comando);

            if ($enviar) {
                $_SESSION['mensagem']="Produto cadastrado";
                header("location:../cadastro_produto/");    
                exit;
            }else {
                $_SESSION['mensagem']="Erro ao cadastrar o produto";
                header("location:../cadastro_produto/");
                exit;
            }
        }
    }
?>