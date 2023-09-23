<?php
include("conexao-banco.php");

$consulta = "SELECT * FROM vendedor";
$conexao = $conexao->query($consulta) or die($conexao->error);

?>



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
<body class>
	<table border = "1" >
		<tr>
			<td>idVendedor</td>
			<td>CPF</td>
			<td>Nome</td>
		</tr>
		<?php while($dado = $conexao->fetch_array()){ ?>
		<tr>
			<td><?php echo $dado["idVendedor"];?></td>
			<td><?php echo $dado["cpf"];?></td>
			<td><?php echo $dado["nome"];?></td>
		</tr>
		<?php } ?>
		
	</table>
	<p></p>
	    <a href="index.php" class="meu-botao">Registrar</a>
        <a href="loja_eletronicos_excluir.php" class="meu-botao">Exclusão</a>
        <a href="loja_eletronicos_atualiza.php" class="meu-botao">Editar</a>
</body>
</html>