<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Produto</title>
</head>
<body>
<?php
include_once('Conexao.php');

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$descricao = $_POST['desc'];
$preco = $_POST['preco'];
$quantidade = $_POST['qtd'];
$data = $_POST['data'];

$precoAlterado .= substr($preco, 3);





$da .= substr($data, 6, 4);
$da .= "-";
$da .= substr($data, 3, 2);
$da .= "-";
$da .= substr($data, 0, 2);


$sql = "INSERT INTO PRODUTO	
	        (CODIGO, NOME, DESCRICAO, PRECO, QUANTIDADE, DATACADASTRO) VALUES
			($codigo, '$nome', '$descricao', $precoAlterado, $quantidade, '$da')";	
	$s = mysqli_query($con, $sql);	
	if($s){
		echo "Deu certo";
	}else{
		echo "Não Deu certo";		
	}
?>
</body>
</html>