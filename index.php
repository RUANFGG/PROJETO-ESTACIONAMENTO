<?php
require 'conexao.php';
$lista = [];
$sql = $pdo->query("SELECT * FROM estacionamento.donatelo ");
if ($sql->rowCount()>0) {
    $lista = $sql->fetchAll(PDO:: FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTACIONAMENTO PARQUE DONATELO</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="header">
    <h2>ESTACIONAMENTO PARQUE DONATELO</h2>
    </div>

    <table border="1" width="100%">

    <tr>
        <td>ID</td>
        <td>VEICULO</td>
        <td>MODELO</td>
        <td>COR</td>
        <td>BLOCO</td>
        <td>PROPRIETÁRIO</td>
        <td>PLACA</td>
    </tr>

    <?php foreach ($lista as $atualizado): ?>

<tr>
    <td><?php echo $atualizado['id'] ?></td>
    <td><?php echo $atualizado['veiculo'] ?></td>
    <td><?php echo $atualizado['modelo'] ?></td>
    <td><?php echo $atualizado['cor'] ?></td>
    <td><?php echo $atualizado['bloco'] ?></td>
    <td><?php echo $atualizado['proprietario'] ?></td>
    <td><?php echo $atualizado['placa'] ?></td>
    <td>

    <?php endforeach; ?>

    </table><br><br>

    <a href="./cadastrar.php">ADICIONAR VEICULO</a>
    
</body>
</html>