
<?php
include_once('conexao.php');


$nome = $_POST['nome'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$tipo = 2;


$sql = "INSERT INTO AGENDAMENTO	
	        (CPF,SENHA,NOME,TIPO) VALUES ('$cpf', '$senha', '$nome','$tipo') ";	
			
 	
			
			
			
	$s = mysqli_query($con, $sql);	
	if($s){
		echo "Deu certo";
	}else{
		echo "Não Deu certo";		
	}






?>

