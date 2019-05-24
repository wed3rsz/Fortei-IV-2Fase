<?php
include('assets/conexao/conexao.php');
error_reporting(0);
$p_nome = $_POST["pNome"];
$u_nome = $_POST["uNome"];
$senha = $_POST["senha"];
$participante = $_POST["participante"];
$matricula = $_POST["matricula"];
$cursos = $_POST["cursos"];
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
if ($botao == "cadastrar") {
	$selecao_cpf_fortei = "SELECT cpf FROM fortei WHERE cpf = '$cpf'";
	$resultado2_fortei = mysqli_query($conexao,$selecao_cpf_fortei);
	$linha = mysqli_fetch_assoc($resultado2_fortei);
	$cpf_fortei = $linha["cpf"];
	if ($cpf == $cpf_fortei){
		echo  "<script>
			window.alert('CPF IGUAIS!');
			window.location.href='cadastro.php';
			</script>";
	}
	//inserção
	else{
		$insert_fortei = "INSERT INTO fortei (p_nome,u_nome,senha,participante,matricula,cursos,email,data,telefone,cpf,rg,rua,uf,bairro,cidade,cep) VALUES ('$p_nome','$u_nome','$senha','$participante','$matricula','$cursos','$email','$data','$telefone','$cpf','$rg','$rua','$uf','$bairro','$cidade','$cep')";
		$resultado_fortei = mysqli_query($conexao,$insert_fortei);

		//
	//não pode inserir cpf iguais

		if(empty($resultado_fortei)){
			echo ("<script>
			window.alert('Erro na inserção!')
			window.location.href='cadastro.php';</script>");
		}else{
			echo ("<script>
			window.alert('Você foi cadastrado!')
			window.location.href='index.php';</script>");
			
		}
	}
}
//$cpf_slash = addslashes($cpf and $cpf_fortei);
?>