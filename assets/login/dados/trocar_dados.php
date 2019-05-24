<!DOCTYPE html>
<html>
<head>
	<title>Página de Usuário - FORTEI IV</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="icon" href="assets/img/logo.png">
	<style type="text/css">
	h1{
		margin-bottom: 61px;
		margin-top: 40px;
	}
	#atualizar{
		display: none;
	}
	.botao{
		margin: 10px;
	}
</style>
</head>
<body>
	<!--Barra de navegação-->
	<header>
		<?php 
		include ('header.php');
		?>
	</header>
	<!---->
	<?php
	error_reporting(0);
	session_start();
	include('../conexao.php');
	if ($_SESSION['logado'] == "logado"){
		$cpf = $_SESSION['cpf'];
			//seleçao
		$selecao = "SELECT * FROM fortei WHERE cpf = '$cpf'";
		$resultado = mysqli_query($conexao,$selecao);
		$row = mysqli_fetch_assoc($resultado);
		$_SESSION['p_nome'] = $row['p_nome'];
		$_SESSION['u_nome'] = $row['u_nome'];
		$_SESSION['participante'] = $row['participante'];
		$_SESSION['matricula'] = $row['matricula'];
		$_SESSION['cursos'] = $row['cursos'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['data'] = $row['data'];
		$_SESSION['telefone'] = $row['telefone'];
		$_SESSION['rg'] = $row['rg'];
		$_SESSION['rua'] = $row['rua'];
		$_SESSION['uf'] = $row['uf'];
		$_SESSION['bairro'] = $row['bairro'];
		$_SESSION['cidade'] = $row['cidade'];
		$_SESSION['cep'] = $row['cep'];
		if ($row["cpf"] == $cpf) {
			echo "<div class='container'>";
			echo "<h1>Seus dados</h1>";
			echo "<ul class='list-group'>";
			$array = array("p_nome","u_nome","participante","matricula","cursos","email","data","telefone","rg","rua","uf","bairro","cidade","cep");
			foreach ($row as $key => $n) {
				if ((!empty($n)) && ($key != "senha")) {
					echo "<li class='list-group-item'><span class='font-weight-bold'>$key: </span>$n</li>";
				}
			}
			echo "</ul>";
		}
		else{
			die("Cpf não encontrado");
		}
	}
	else{
		echo "<meta http-equiv='refresh' content='0; url=../index.php'/>";
	}
	?>
	<div class="row">
		<div class="col-sm-6 mb-3">
			<input type="button" id="botao" class="btn btn-primary" onclick="atualizar()" value="Altere_seus_dados">
		</div>
		<div class="col-sm-6 mb-3">
			<input type="button" id="botao2" class="btn btn-primary" onclick="atualizarF()" value="Cancelar" style="display: none;">
		</div>
	</div>
	<form method="post" id="atualizar" style="display: none;">
		<input type="hidden" name="act" id="deletar" value="">
		<a class="btn btn-danger botao" name="botaoRemover" value="Remover" href="deletar.php">REMOVER</a>
		<form method="post" autocomplete="off">
			<div class="row">
				<div class="col-md-12 order-md-1">
					<div class="py-5 text-center">
						<h2>Troque seus dados no FORTEI</h2>
						<br>
						<img src="../../img/IFSC.png" style="width:155px;">
						<br>
					</div>
					<form class="needs-validation" novalidate>

						<!--Nomes-->
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="p_nome">Primeiro nome</label>
								<input type="text" class="form-control" id="p_nome" value="<?php $p_nome = $_SESSION['p_nome']; echo $p_nome; ?>" name="atualizar[]" >
								<div class="invalid-feedback">
									O seu primeiro nome é necessário.
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="u_nome">Ultimo Nome</label>
								<input type="text" class="form-control" id="u_nome" value="<?php $u_nome = $_SESSION['u_nome']; echo $u_nome; ?>" name="atualizar[]" value="" >
								<div class="invalid-feedback">
									O seu ultimo nome é necessário.
								</div>
							</div>
						</div>
						<!--Nomes-->

						<!--Participante-->
						<div class="mb-3">
							<label for="participante">Tipo de participante</label>
							<select class="custom-select d-block w-100" name="atualizar[]" id="participante" onclick="mostrar();">
								<option value=""><?php $participante = $_SESSION['participante']; echo $participante; ?></option>
								<option value="">Escolha...</option>
								<option value="servidor">Servidor</option>
								<option value="aluno">Aluno</option>
								<option value="comunidade">Comunidade externa</option>
							</select>
							<div class="invalid-feedback">
								Escolha um tipo de participante válido.
							</div>
						</div>
						<!--Participante-->

						<!--Matricula-->
						<div class="mb-3">
							<div id="matricula">
								<label for="matricula">Numero de matricula</label>
								<input type="text" pattern="[0-9]+$" class="form-control" value="<?php $matricula = $_SESSION['matricula']; echo $matricula; ?>" name="atualizar[]">
								<div class="invalid-feedback">
									Insira um numero de matricula válido para prosseguir.
								</div>
							</div>
						</div>
						<!--Matricula-->

						<!--Cursos-->
						<div class="mb-3">
							<label for="cursos">Tipo de Cursos</label>
							<select class="custom-select d-block w-100" name="atualizar[]">
								<option value=""><?php $cursos = $_SESSION['cursos']; echo $cursos; ?></option>
								<option value="AutoCad">AutoCad</option>
								<option value="Programação_ubuntu">Programação - UBUNTU</option>
								<option value="ProgramaçãoWeb_html_css">Programação Web - HTML_CSS</option>
								<option value="Analises químicas">Analises químicas</option>
								<option value="Administração">Administração</option>
								<option value="Mecatronica">Mecatronica</option>
							</select>
							<div class="invalid-feedback">
								Escolha um tipo de curso válido.
							</div>
						</div>
						<!--Cursos-->

						<!--Email-->
						<div class="mb-3">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" value="<?php $email = $_SESSION['email']; echo $email; ?>" name="atualizar[]">
							<div class="invalid-feedback">
								Por favor, insira um email válido para prosseguir.
							</div>
						</div>
						<!--Email-->

						<!--Data Nascimento-->
						<div class="mb-3">
							<label for="dNascimento">Data Nascimento</label>
							<input type="date" min="1955-01-01" max="2019-01-01" class="form-control" id="data" value="<?php $data = $_SESSION['data']; echo $data; ?>" name="atualizar[]">
							<div class="invalid-feedback">
								Por favor, insira uma data de nascimento válida.
							</div>
						</div>
						<!--Data Nascimento-->

						<!--Telefone-->
						<div class="mb-3">
							<label for="tel">Telefone</label>
							<input type="tel" class="form-control" id="tel" value="<?php $telefone = $_SESSION['telefone']; echo $telefone; ?>" name="atualizar[]">
							<div class="invalid-feedback">
								Por favor, insira um email válido para prosseguir.
							</div>
						</div>
						<!--Telefone-->

						<!--RG-->
						<div class="mb-3">
							<label for="rg">RG</label>
							<input type="text" class="form-control" id="rg" value="<?php $rg = $_SESSION['rg']; echo $rg; ?>" name="atualizar[]">
							<div class="invalid-feedback">
								Por favor, insira um rg válido.
							</div>
						</div>
						<!--RG-->

						<!--CEP-->
						<div class="mb-3">
							<label for="cep">CEP</label>
							<input type="text" class="form-control" name="cep" id="cep" value="<?php $cep = $_SESSION['cep']; echo $cep; ?>" >
							<div class="invalid-feedback">
								CEP é necessário.
							</div>
						</div>
						<!--CEP-->

						<!--Linha que preenche com CEP-->
						<div class="row">

							<!--RUA-->
							<div class="col-sm-3 mb-3">
								<label for="rua">Rua</label>
								<input type="text" class="form-control" name="atualizar[]" id="rua" value="<?php $rua = $_SESSION['rua']; echo $rua; ?>" >
								<div class="invalid-feedback">
									Rua é necessária.
								</div>
							</div>
							<!--RUA-->

							<!--UF-->
							<div class="col-sm-3 mb-3">
								<label for="uf">UF</label>
								<select class="custom-select d-block w-100" id="uf" name="atualizar[]" >
									<option value=""><?php $uf = $_SESSION['uf']; echo $uf; ?></option>
									<option value="AC">AC</option>
									<option value="AL">AL</option>
									<option value="AP">AP</option>
									<option value="AM">AM</option>
									<option value="BA">BA</option>
									<option value="CE">CE</option>
									<option value="DF">DF</option>
									<option value="ES">ES</option>
									<option value="GO">GO</option>
									<option value="MA">MA</option>
									<option value="MT">MT</option>
									<option value="MS">MS</option>
									<option value="MG">MG</option>
									<option value="PA">PA</option>
									<option value="PB">PB</option>
									<option value="PR">PR</option>
									<option value="PE">PE</option>
									<option value="PI">PI</option>
									<option value="RJ">RJ</option>
									<option value="RN">RN</option>
									<option value="RS">RS</option>
									<option value="RO">RO</option>
									<option value="RR">RR</option>
									<option value="SC">SC</option>
									<option value="SP">SP</option>
									<option value="SE">SE</option>
									<option value="TO">TO</option>
								</select>
								<div class="invalid-feedback">
									Insira uma UF.
								</div>
							</div>
							<!--UF-->

							<!--BAIRRO-->
							<div class="col-sm-3 mb-3">
								<label for="bairro">Bairro</label>
								<input type="text" class="form-control" name="atualizar[]" id="bairro" value="<?php $bairro = $_SESSION['bairro']; echo $bairro; ?>" >
								<div class="invalid-feedback">
									Bairro é necessário.
								</div>
							</div>
							<!--BAIRRO-->

							<!--CIDADE-->
							<div class="col-sm-3 mb-3">
								<label for="cidade">Cidade</label>
								<input type="text" class="form-control" name="atualizar[]" id="cidade" value="<?php $cidade = $_SESSION['cidade']; echo $cidade; ?>">
								<div class="invalid-feedback">
									Cidade é necessária.
								</div>
							</div>
							<!--CIDADE-->

						</div>
						<!--Linha que preenche com CEP-->

						<hr class="mb-4">
						<div class="row">
							<div class="col-sm-12">
								<button class="btn btn-primary btn-lg btn-block" name="entrar" value="entrar" type="submit">Editar</button>
							</div>


							<br>
							<hr class="mb-4">
						</div>
						<hr class="mb-4">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
<?php
include('../conexao.php');
error_reporting(0);
$cpf = $_SESSION['cpf'];
if($_POST["entrar"] == "entrar") {
	$atualizar = $_POST['atualizar'];
	$sql = array("p_nome","u_nome","participante","matricula","cursos","email","data","telefone","rg","rua","uf","bairro","cidade","cep");
	foreach ($atualizar as $key => $n) {
		if(!empty($n)) {
			$update = "UPDATE fortei SET $sql[$key] = '$n' WHERE cpf = '$cpf'" or die (mysqli_error());
			$resultado = mysqli_query($conexao,$update);
		}
	}
	echo "<meta http-equiv='refresh' content='0; url=trocar_dados.php'/>";
}
?>
<script type="text/javascript">
	function atualizar() {
		var valor = document.getElementById("botao").value;
		if(valor === "Altere_seus_dados") {
			document.getElementById("atualizar").style.display = "block";
			document.getElementById("botao").style.display = "none";
			document.getElementById("botao2").style.display = "inline";
			window.alert('ALTERE SOMENTE OS DADOS NECESSÁRIOS!');
		}
	}
	function atualizarF() {
		var valor = document.getElementById("botao2").value;
		if(valor === "Cancelar") {
			document.getElementById("atualizar").style.display = "none";
			document.getElementById("botao").style.display = "inline";
			document.getElementById("botao2").style.display = "none";
			window.alert('VOCÊ VAI CANCELAR A MODIFICAÇÃO DOS DADOS!');
		}
	}
	function remover() {
		var i = confirm("A opção OK irá REMOVER seu cadastro!");
		if (i == true) {
			document.getElementById("deletar").value = "apagar";
		}
	}
</script>
<?php
include('../../../script.php');
?>
<footer class="text-center">
	<p class="mt-5 mb-3 text-muted">&copy; Guilherme Estevão & Wederson Medeiros</p>
	<p class="mt-5 mb-3 text-muted"><a href="../../../index.php" class="badge badge-primary">PÁGINA INICIAL</a></p>
</footer>

</body>
</html>