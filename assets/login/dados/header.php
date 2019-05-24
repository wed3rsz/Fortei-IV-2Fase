<?php
include('../conexao.php');
session_start();
$cpf = $_SESSION['cpf'];
$selecao_fortei = "SELECT * FROM fortei WHERE cpf = '$cpf'";
$resultado_fortei = mysqli_query($conexao,$selecao_fortei);
$linha = mysqli_fetch_assoc($resultado_fortei);  
$row = mysqli_num_rows($resultado_fortei);
$p_nome = $linha['p_nome'];
$u_nome = $linha['u_nome'];
?>


<nav class="navbar fixed-top navbar-expand-xl navbar-light bg-light navbarToggleExternalContent shadow pos-f-t" style="background-color: #fff; width: 100%; height: 122px;">

  <div class="container">
    <a class="navbar-brand" href="../../../index.php">
      <img src="assets/img/logo.png" width="35" height="35" class="d-inline-block align-top" alt="átomo para logo">&nbsp IV FORTEI<b></b></a><b>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="row">
          <div class="collapse navbar-collapse my-2 my-lg-0" id="navbarsExample06">
            <span class="navbar-text">
              Olá <?php echo "<b>" . $p_nome . "  " . $u_nome . "</b>";?>!
            </span>
            &nbsp
            &nbsp
            &nbsp
            &nbsp
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="btn btn-dark" href="logout.php" role="button">SAIR</a>
              </li>
            </ul>
            </div>
          </div>
        </div>
      </b></nav>