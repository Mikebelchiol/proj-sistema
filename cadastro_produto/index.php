<?php
session_start();
    require_once("servidor.php");
    if (!empty($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);      
    }
?>
<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario de Cadastro</title>
</head>

<body>
    <div class="container">
       <div class="form-image">
         <img src="img/undraw_Science_re_mnnr.png" height="330px">
       </div>

       <div class="form">
         <form action="cadastrar.php" method="get" accept-charset="utf-8">
            <div class="form-header">
                <div class="title">
                    <h1>Cadastre o produto</h1>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <label for="prioridade">Prioridade</label>
                    <input type="text" name="prioridade" placeholder=" A, B ou C " required>
                </div>
                <div class="input-box">
                    <label for="reator">Reator</label>
                    <input type="text" name="reator" placeholder="N° do Reator" required>
                </div>
                <div class="input-box">
                    <label for="produto">Produto</label>
                    <input type="text" name="produto"  placeholder="Nome do produto" required>
                </div>
                <div class="input-box">
                    <label for="lote">Lote</label>
                    <input type="text"  name="lote"  placeholder="N° do Lote" required>
                </div>
                <div class="input-box">
                    <label for="roteiro">Roteiro</label>
                    <input type="text" name="roteiro"  placeholder="N° do Roteiro" required>
                </div>
                <div class="input-box">
                    <label for="op">OP</label>
                    <input type="text" name="op" placeholder="N° da OP" required>
                </div>
                <div class="input-box">
                    <label for="quantidade">Quantidade(Kg)</label>
                    <input type="text" name="quantidade" placeholder="00000000000..." required>
                </div>
                <div class="input-box">
                    <label for="supervisor de turno">Supervisor de turno</label>
                    <input type="text" name="supervisor" placeholder="Supervisor de turno" required>
                </div>
                <div class="input-box">
                    <label for="turno">Turno</label>
                    <input type="text" name="turno" placeholder="Turno A ou B" required>
                </div>
            </div>
           
            <div class="cadastrar-button">
                <button name="cadastrar">Cadastrar</button>
            </div>
        </form>
       </div>
    </div>
</body>

</html>