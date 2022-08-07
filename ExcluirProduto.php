<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Excluir Produto</title>
</head>
<body>

	<?php
	
	require_once 'Conexao.php';
		$codigo = $_GET['id'];
		
		$sql = "DELETE FROM PRODUTO WHERE CODIGO = $codigo";
		
		mysqli_query($con, $sql);
		
		header('Location:ListarProduto.php');
		
    ?>

</body>
</html>