<?php

require 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style2.css">
    <title>CADASTRE SEU VEICULO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h2>ESTACIONAMENTO PARQUE DONATELO</h2>
    </div>

<form action="./actioncadastrar.php" method="post">
    <label for="">VEICULO
        <input type="text" name="veiculo" id="veiculo">
    </label>
    <label for="">MODELO
        <input type="text" name="modelo" id="modelo">
    </label>
    <label for="">COR
        <input type="text" name="cor" id="cor">
    </label>
    <label for="">BLOCO
        <input type="number" name="bloco" id="bloco">
    </label>
    <label for="">PROPRIETÁRIO
        <input type="text" name="proprietario" id="proprietario">
    </label>
    <label for="">PLACA
        <input type="text" name="proprietário" id="proprietario">
    </label>

    <button>CADASTRAR</button>
</form>
    
</body>
</html>