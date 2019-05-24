<?php
$ip = "10.151.0.31";
$usuario = "aluno23";
$senha = "aluno";
$banco = "aluno23";
$acentos="utf8";
$conexao = mysqli_connect($ip,$usuario,$senha);
$conexao_banco = mysqli_select_db($conexao,$banco);
$colecao = mysqli_set_charset($conexao, $acentos);
?>
