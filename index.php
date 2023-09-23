<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" href content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Loja Eletronicos</title>
    <h1> Sistema de controle de Funcionários</h1>
    <p></p>
</head>
<body>
<h2>Dados dos Funcionários Para Registrar: <br></h2>
<form class="formulario" action="" method="get">
        Id vendedor: <input type="number" name="idVendedor" required> <br> <br>
        CPF do vendedor: <input type="text" name="cpf" required> <br> <br>
        Nome do Vendedor: <input type="text" name="nome" required> <br> <br> 
        <input class="meu-botao" type="submit" value="Registrar" name="enviar">
        <a href="loja_eletronicos_excluir.php" class="meu-botao">Exclusão</a>
        <a href="loja_eletronicos_atualiza.php" class="meu-botao">Editar</a> <p></p>
        <a href="loja_eletronicos_veDados.php" class="meu-botao">Ver Dados</a>
           
    </form>

<?php
include("conexao-banco.php");

if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());

}
if(isset($_GET['idVendedor']) || isset ($_GET['cpf']) || isset($_GET['nome'])):

$idVendedor = $_GET['idVendedor'];
$cpf = $_GET['cpf'];
$nome = $_GET['nome'];

$sql = "INSERT INTO vendedor (idVendedor, cpf, nome) VALUES ('{$idVendedor}', '{$cpf}', '{$nome}')";

if (mysqli_query($conexao, $sql)) {
    echo "Gravação feita com sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);


endif;
?>
</body>
</html>