<?php


function getAllCar(){
    require("db.php");
    $sql = "SELECT * FROM carros";
    $result = getRecords($sql, $conexao);
    return $result;
}

function getCar($id){
    require("db.php");
    $sql = "SELECT * FROM carros WHERE id = $id";
    $result = getRecords($sql, $conexao);
    return $result;
}

function createCar($dados){
    require("db.php");
    $veiculo = $dados['veiculo'];
    $modelo = $dados['modelo'];
    $ano = $dados['ano'];
    $descricao = $dados['descricao'];
    $vendido = $dados['vendido'];
    $sql = "INSERT INTO carros 
    (veiculo, modelo, ano, descricao, vendido, created, updated) 
    VALUES ('$veiculo', '$modelo', $ano, '$descricao', $vendido, now(), now())";
    NonQuery($sql, $conexao);
    return "Carro adicionado com sucesso!";
}

function updateCar($id, $dados){
    require("db.php");
    $veiculo = $dados['veiculo'];
    $modelo = $dados['modelo'];
    $ano = $dados['ano'];
    $descricao = $dados['descricao'];
    $vendido = $dados['vendido'];
    $sql = "UPDATE carros SET veiculo='$veiculo', modelo ='$modelo', ano = $ano, descricao = '$descricao', vendido = $vendido, updated = now() WHERE id = $id";
    NonQuery($sql, $conexao);
    return "Carro atualizado com sucesso!";
}

function deleteCar($id){
    require("db.php");
    $sql = "DELETE FROM carros WHERE id = $id";
    NonQuery($sql, $conexao);
    return "Carro excluido com sucesso!";
}
