<?php

require_once("servidor.php");

$consulta = "SELECT * FROM produtos";
$con = $mysqli->query($consulta) or die($mysqli->error);
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
    <table>
        <tr>
            <td>Prioridade</td>
            <td>Reator</td>
            <td>Produto</td>
            <td>Lote</td>
            <td>Roteiro</td>
            <td>OP</td>
            <td>Quantidade</td>
            <td>Supervisor</td>
            <td>Turno</td>
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
</body>
</html>