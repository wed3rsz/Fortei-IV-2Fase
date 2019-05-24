<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - FORTEI IV</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="dados/assets/img/logo.png">
    <link href="login.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="container">
        <section class="hero is-success is-fullheight">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="column is-4 is-offset-4">
                        <img class="mb-4" src="../img/logo.png" alt="LOGOTIPO EXEMPLO" width="150" height="150">
                        <h1 class="h3 mb-3 font-weight-normal">Por favor, Entre na sua conta</h1>
                        <?php
                        if(isset($_SESSION['nao_autenticado'])):
                            ?>
                            <div class="notification is-danger">
                              <p>ERRO: Usuário ou senha não encontrados.</p>
                          </div>
                          <?php
                      endif;
                      unset($_SESSION['nao_autenticado']);
                      ?>
                      <div class="box">
                        <form action="login.php" method="POST" class="form-login">
                            <div class="field">
                                <div class="control">
                                    <input name="cpf" name="text" class="form-control" placeholder="Insira seu CPF" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="form-control" type="password" placeholder="Insira sua senha">
                                </div>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block" type="submit" value="entrar" name="entrar">Entrar</button>
                            <p class="mt-5 mb-3 text-muted">&copy; Guilherme Estevão & Wederson Medeiros</p>
                            <p class="mt-5 mb-3 text-muted"><a href="../../index.php" class="badge badge-primary">PÁGINA INICIAL</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>

</html>