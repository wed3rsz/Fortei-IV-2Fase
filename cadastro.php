
<!doctype html>
<html lang="pt-br">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="autor" content="Guilherme & Wederson">
  <!--Bootstrap-->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <!--Fonte-->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <!--jQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--Bootstrap-->
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <!--jQuery-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <!--Bootstrap-->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="assets/style/style.css">
  <link rel="icon" href="assets/img/logo.png">
  <title>Cadastro - FORTEI IV</title>
</head>

<body class="bg-light">
  <div class="container">
    <!--Cabeçalho-->
    <header><b>
      <?php 
      include('header.php');
      ?>
    </b></header>
    <!--Cabeçalho-->

    <!--Título-->
    <div class="py-5 text-center">
      <h2>Cadastre-se no fortei</h2>
      <p class="lead">De 14 a 19 de Maio, no IFSC Câmpus Lages 
      Inscreva-se gratuitamente até 09/05 abaixo.</p>
      <img src="assets/img/IFSC.png" style="width:155px;">
    </div>
    <!--Título-->

    <form method="post" autocomplete="off" action="php.php">
      <div class="row">
        <div class="col-md-12 order-md-1">
          <form class="needs-validation" novalidate>

            <!--Nomes-->
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="primeiro_nome">Primeiro nome</label>
                <input type="text" class="form-control" id="primeiro_nome" placeholder="Primeiro Nome" name="pNome" required>
                <div class="invalid-feedback">
                  O seu primeiro nome é necessário.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="ultimo_nome">Ultimo Nome</label>
                <input type="text" class="form-control" id="ultimo_nome" placeholder="Ultimo nome" name="uNome" value="" required>
                <div class="invalid-feedback">
                  O seu ultimo nome é necessário.
                </div>
              </div>
            </div>
            <!--Nomes-->
            
            <!--Senha-->
            <div class="mb-3">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" placeholder="Senha" name="senha">
                <div class="invalid-feedback">
                  Insira uma senha válida para prosseguir.
                </div>
            </div>
            <!--Senha-->

            <!--Participante-->
            <div class="mb-3">
              <label for="participante">Tipo de participante</label>
              <select class="custom-select d-block w-100" name="participante" id="participante" onclick="mostrar();"required>
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
                <input type="text" pattern="[0-9]+$" class="form-control" placeholder="Matricula" name="matricula">
                <div class="invalid-feedback">
                  Insira um numero de matricula válido para prosseguir.
                </div>
              </div>
            </div>
            <!--Matricula-->

            <!--Cursos-->
            <div class="mb-3">
              <label for="cursos">Tipo de Cursos</label>
              <select class="custom-select d-block w-100" name="cursos" id="cursos" required>
                <option value="">Escolha...</option>
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
              <input type="email" class="form-control" id="email" placeholder="Email@email.com" name="email">
              <div class="invalid-feedback">
                Por favor, insira um email válido para prosseguir.
              </div>
            </div>
            <!--Email-->

            <!--Data Nascimento-->
            <div class="mb-3">
              <label for="dNascimento">Data Nascimento</label>
              <input type="date" min="1955-01-01" max="2019-01-01" class="form-control" id="data" placeholder="00/00/0000" name="data">
              <div class="invalid-feedback">
                Por favor, insira uma data de nascimento válida.
              </div>
            </div>
            <!--Data Nascimento-->

            <!--Telefone-->
            <div class="mb-3">
              <label for="tel">Telefone</label>
              <input type="tel" class="form-control" id="tel" placeholder="(00) 00000-0000" name="tel">
              <div class="invalid-feedback">
                Por favor, insira um email válido para prosseguir.
              </div>
            </div>
            <!--Telefone-->

            <!--CPF-->
            <div class="mb-3">
              <label for="cpf">CPF</label>
              <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00" name="cpf">
              <div class="invalid-feedback">
                Por favor, insira um cpf válido.
              </div>
            </div>
            <!--CPF-->

            <!--RG-->
            <div class="mb-3">
              <label for="rg">RG</label>
              <input type="text" class="form-control" id="rg" placeholder="0.000.000" name="rg">
              <div class="invalid-feedback">
                Por favor, insira um rg válido.
              </div>
            </div>
            <!--RG-->

            <!--CEP-->
            <div class="mb-3">
              <label for="cep">CEP</label>
              <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP" required>
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
                <input type="text" class="form-control" name="rua" id="rua" placeholder="Rua" required>
                <div class="invalid-feedback">
                  Rua é necessária.
                </div>
              </div>
              <!--RUA-->

              <!--UF-->
              <div class="col-sm-3 mb-3">
                <label for="uf">UF</label>
                <select class="custom-select d-block w-100" id="uf" name="uf" required>
                  <option value="">Escolha...</option>
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
                <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro" required>
                <div class="invalid-feedback">
                  Bairro é necessário.
                </div>
              </div>
              <!--BAIRRO-->

              <!--CIDADE-->
              <div class="col-sm-3 mb-3">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" required>
                <div class="invalid-feedback">
                  Cidade é necessária.
                </div>
              </div>
              <!--CIDADE-->
              
            </div>
            <!--Linha que preenche com CEP-->

            <hr class="mb-4">
            <div class="row">
            	<div class="col-sm mb-3">
            <button class="btn btn-primary btn-lg btn-block" name="botao" value="cadastrar" type="submit">Cadastrar</button>
        		</div>


            <br>
            <hr class="mb-4">
        	</div>
        	<hr class="mb-4">
          </div>
        </div>
      </div>
    </form>
    <footer>
      <?php 
      include('footer.php');
      ?>
    </footer>
    <?php
    include('php.php');
    include('script.php');
    ?>
  </body>
  </html>
