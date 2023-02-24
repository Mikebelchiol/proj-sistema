<?php

require_once("servidor.php");

$consulta = "SELECT * FROM produtos";
$con = $conn->query($consulta) or die($conn->error);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <center>
    <h1>Produtos</h1>
    <table border="1">
        <tr>
            <th>Prioridade</th>
            <th>Reator</th>
            <th>Nome</th>
            <th>Lote</th>
            <th>Roteiro</th>
            <th>OP</th>
            <th>Quantidade</th>
            <th>Supervisor</th>
            <th>Turno</th>
        </tr>
        <?php while($dado = $con->fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["prioridade"]; ?></td>
            <td><?php echo $dado["reator"]; ?></td>
            <td><?php echo $dado["produto"]; ?></td>
            <td><?php echo $dado["lote"]; ?></td>
            <td><?php echo $dado["roteiro"]; ?></td>
            <td><?php echo $dado["op"]; ?></td>
            <td><?php echo $dado["quantidade"]; ?></td>
            <td><?php echo $dado["supervisor"]; ?></td>
            <td><?php echo $dado["turno"]; ?></td>
        </tr>
        <?php } ?>
    </table>
    </center>
</body>
</html>