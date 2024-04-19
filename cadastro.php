<?php
 
$nome_cliente = $_POST['nome_cliente'];
$endereco = $_POST['endereco_cliente'];
$numero = $_POST['numero_endereco'];
$cpf = $_POST['numero_cpf'];
$cnpj = $_POST['numero_cnpj'];
$telefone = $_POST['numero_telefone'];
 
include 'conexao.php';
 
$insert = "INSERT INTO tb_cliente VALUES (NULL,'$nome_cliente','$endereco','$numero','$cpf','$cnpj','$telefone')";
 
$query = mysqli_query($conexao, $insert);
 
echo "Inserido com Sucesso";
 
 
?>