<?php
include('assets/conexao/conexao.php');
error_reporting(0);
$p_nome = $_POST["pNome"];
$u_nome = $_POST["uNome"];
$participante = $_POST["participante"];
$matricula = $_POST["matricula"];
$email = $_POST["email"];
$data = $_POST["data"];
$telefone = $_POST["tel"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$rua = $_POST["rua"];
$uf = $_POST["uf"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$cep = $_POST["cep"];
$botao = $_POST["botao"];
if ($botao == cadastrar) {
	$selecao_cpf_fortei = "SELECT cpf FROM fortei WHERE cpf = '$cpf'";
	$resultado2_fortei = mysqli_query($conexao,$selecao_cpf_fortei);
	$linha = mysqli_fetch_assoc($resultado2_fortei);
	$cpf_fortei = $linha["cpf"];
	if ($cpf == $cpf_fortei){
		echo  "<script>alert('CPF iguais !');</script>";
	}
	//inserção
	else{
		$insert_fortei = "INSERT INTO fortei (p_nome,u_nome,participante,matricula,email,data,telefone,cpf,rg,rua,uf,bairro,cidade,cep) VALUES ('$p_nome','$u_nome','$participante','$matricula','$email','$data','$telefone','$cpf','$rg','$rua','$uf','$bairro','$cidade','$cep')";
		$resultado_fortei = mysqli_query($conexao,$insert_fortei);
	//não pode inserir cpf iguais

		if(!$resultado_fortei){
			echo  "<script>alert('Erro na inserção!');</script>";
		}else{
			echo  "<script>alert('Dados inseridos com sucesso!');</script>";
		}
	}
}
?>