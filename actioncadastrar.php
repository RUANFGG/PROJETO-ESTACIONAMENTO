<?php

require 'conexao.php';

$veiculo = filter_input(INPUT_POST, 'veiculo');
$modelo = filter_input(INPUT_POST, 'modelo');
$cor = filter_input(INPUT_POST, 'cor');
$bloco = filter_input(INPUT_POST, 'bloco');
$proprietario = filter_input(INPUT_POST, 'proprietario');

if ($veiculo && $modelo && $cor && $bloco && $proprietario) {
    $sql = $pdo->prepare("INSERT INTO estacionamento.donatelo (veiculo, modelo, cor, bloco, proprietario) VALUES (:veiculo, :modelo, :cor, :bloco, :proprietario)");
    $sql->bindValue(':veiculo', $veiculo);
    $sql->bindValue(':modelo', $modelo);
    $sql->bindValue(':cor', $cor);
    $sql->bindValue(':bloco', $bloco);
    $sql->bindValue(':proprietario', $proprietario);
    $sql->execute();

    header("Location: index.php");
    exit;
}else{
    header("Location: adiciona.php");
    exit;
}

?>