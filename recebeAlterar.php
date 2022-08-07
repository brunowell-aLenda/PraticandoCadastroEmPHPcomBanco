<?php
include_once 'Conexao.php';

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
//$data = $_POST['datacadastro'];




//echo $nome.$descricao.$preco.$quantidade.$data;

$sql = "UPDATE PRODUTO SET NOME = '$nome', DESCRICAO = '$descricao', PRECO = $preco, QUANTIDADE = $quantidade  WHERE CODIGO=$codigo";

$res = mysqli_query($con, $sql);

if($res){
	echo "Editado";
}else{
	echo "Não Editado";}


?>