<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Alterar Produto</title>
</head>
<body>
<form action="recebeAlterar.php" method="POST">
<?php
include_once 'Conexao.php';
		$codigo = $_GET['id'];		
		$sql = "SELECT * FROM PRODUTO WHERE CODIGO = $codigo";
		$resultado = mysqli_query($con, $sql);
		
		if($resultado){
			
			?>
			
			<table border="0px">
    	<tr>
        	<td align="center">CODIGO</td>
            <td align="center">NOME</td>
            <td align="center">DESCRIÇÃO</td>
            <td align="center">PREÇO</td>
            <td align="center">QUANTIDADE</td>
            <td align="center">DATA</td>            
            
            <?php 
			
			while($row = mysqli_fetch_assoc($resultado)){
				?>
                
                 <tr>
			<td> <input readonly type="text" id="codigo" name="codigo" value="<?php echo $row['codigo'];?>"/>    </td>
            <td> <input type="text" id="nome" name="nome" value="<?php echo $row['nome'];?>"/>   </td>
            <td> <input type="text" id="descricao" name="descricao" value="<?php echo $row['descricao'];?>"/>    </td>
            <td> <input type="text" id="preco" name="preco" value="<?php echo $row['preco'];?>"/>   </td>
            <td> <input type="text" id="quantidade" name="quantidade" value="<?php echo $row['quantidade'];?>"/>   </td>
			<td> <input readonly type="text" id="datacadastro" name="datacadastro" value=" <?php echo $row['datacadastro'];?> " />  </td>
           
            <tr>
                <td> <input type="submit" value="Alterar"> </td>
            </tr>    


		        </tr>
		
		
		<?php      
			}
		}
?>
</form>
</body>
</html>