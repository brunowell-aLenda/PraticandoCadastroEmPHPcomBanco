<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Listar Produtos</title>
</head>

<body>
<?php
require_once 'Conexao.php';

$sql = "SELECT CODIGO,NOME,DESCRICAO,PRECO,QUANTIDADE, DATE_FORMAT(DATACADASTRO,'%d/%m/%Y') as DATA from produto;";
$resultado = mysqli_query($con, $sql); 
if($resultado){
	?>
	<table border="1px">
    	<tr>
        	<td>CODIGO</td>
            <td align="center">NOME</td>
            <td align="center">DESCRIÇÃO</td>
            <td align="center">PREÇO</td>
            <td align="center">QUANTIDADE</td>
            
            <td align="center">Data</td>            
            <td>Editar</td>
            <td align="center">Excluir</td>
            <?php
   while($linha = mysqli_fetch_assoc($resultado)){
	   ?>
        <tr>
			<td><?php echo $linha['CODIGO'];?></td>
            <td><?php echo $linha['NOME'];?></td>
            <td><?php echo $linha['DESCRICAO'];?></td>
            <td><?php echo $linha['PRECO'];?></td>
            <td><?php echo $linha['QUANTIDADE'];?></td>
			<td><?php echo $linha['DATA'];?></td>
            <td align="center"> <a href="AlterarProduto.php?id= <?php echo $linha['CODIGO'];?>"> <img src="alterar.png"> </a>  </td>
            <td align="center"> <a href="ExcluirProduto.php?id= <?php echo $linha['CODIGO'];?>"> <img src="lixeira.png"> </a>  </td>
		</tr>
		<?php
		
  
  }?>
  </table>
  <?php
}

?>
</body>
</html>