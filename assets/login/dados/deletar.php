<?php
include("../conexao.php");
session_start();
error_reporting(0);
if ($_SESSION['logado'] == "logado"){
	$cpf = $_SESSION['cpf'];
	$deleta = "DELETE FROM fortei WHERE cpf = '$cpf'";
	$deletar = mysqli_query($conexao,$deleta);
	if($deleta == ""){
		echo "<script>
		window.alert('Houve um erro ao deletar!')
		</script>";
	}else{
		echo "<script>
		window.alert('Registro excluido com sucesso!')
		window.location.href='../index.php';
		</script>";
	}
}
?>