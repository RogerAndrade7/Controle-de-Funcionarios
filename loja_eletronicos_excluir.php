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
<h2>Dados dos Funcionários Para Exclusão-  <br></h2>
<form class="formulario" action="" method="get">
        Id vendedor: <input type="number" name="idVendedor" required> <br> <br>
        <input class="meu-botao" type="submit" value="Excluir" name="enviar" >
        <a href="index.php" class="meu-botao">Registrar</a>
        <a href="loja_eletronicos_atualiza.php" class="meu-botao">Editar</a>
        <a href="loja_eletronicos_veDados.php" class="meu-botao">Ver Dados</a>
           
    <p></p>

    </form>

<?php
include("conexao-banco.php");

if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());

}
if(isset($_GET['idVendedor'])):

$idVendedor = $_GET['idVendedor'];


$sql = "DELETE FROM vendedor WHERE idVendedor='$idVendedor'";

if (mysqli_query($conexao, $sql)) {
    echo "Exclusão feita com sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);


endif;
?>
</body>
</html>