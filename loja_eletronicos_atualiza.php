<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Loja Eletronicos</title>
    <h1> Sistema de controle de Funcionários - Loja Eletronicos</h1>
    <p></p>
</head>
<body>
<h2>Dados dos Funcionários Para Atualização - <br></h2>
<form class="formulario" action="" method="get">
<h3> Coloque o ID do Vendedor para localização do mesmo: <p></p> </h3>
        Id vendedor: <input type="number" name="idVendedor" required> <br> <br>
        <h3>Coloque os dados a serem alterados: <p></p></h3>
        CPF do vendedor: <input type="text" name="cpf" required> <br> <br>
        Nome do Vendedor: <input type="text" name="nome" required> <br> <br> 
        <input class="meu-botao" type="submit" value="Atualizar" name="enviar" >
        <a href="index.php" class="meu-botao">Registrar</a>
        <a href="loja_eletronicos_excluir.php" class="meu-botao">Exclusão</a> <p></p>
        <a href="loja_eletronicos_veDados.php" class="meu-botao">Ver Dados</a>
           
    <p></p>

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

$sql = "UPDATE vendedor SET cpf = '{$cpf}', nome = '{$nome}' WHERE (idVendedor = '$idVendedor');";

if (mysqli_query($conexao, $sql)) {
    echo "Atualização feita com sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);


endif;
?>
</body>
</html>