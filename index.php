
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Página Inicial - FORTEI IV</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<link rel="stylesheet" type="text/css" href="assets/style/index.css">
	<link rel="icon" href="assets/img/logo.png">
</head>
<body class="bg-light">

		<b><?php 
		include('header.php');
		?></b>

		<br>
		<!--Background em carousel, tecnologia-->
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="assets/img/background.jpg" alt="IMAGEM IFSC" width="1900" height="700">
					<div class="carousel-caption d-none d-md-block">
						<div class="caixinha">
							<h1 class="text-center">FORTEI 2019</h1>
							<p>Fórum de Tecnologia, Empreendedorismo e Inovação.</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="assets/img/background_2.jpg" alt="IMAGEM IFSC" width="1900" height="700">
					<div class="carousel-caption d-none d-md-block">
						<div class="caixinha">
							<h1>FORTEI 2019</h1>
							<p>Fórum de Tecnologia, Empreendedorismo e Inovação.</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="assets/img/background_3.jpg" alt="IMAGEM IFSC" width="1900" height="700">
					<div class="carousel-caption d-none d-md-block">
						<div class="caixinha">
							<h1>FORTEI 2019</h1>
							<p>Fórum de Tecnologia, Empreendedorismo e Inovação.</p>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Próximo</span>
			</a>
		</div>
		<!--Background em carousel, tecnologia-->
		<br>
		<hr class="mb-4">
		<br>
		<!--Texto sobre fortei-->
		<div class="container">
			<div id="fortei_text">
				<p class="text-center"><em>IFSC - CAMPUS LAGES</em></p>
				<p class="textinho">Entre 14 e 19 de maio, acontece o terceiro Fórum de Tecnologia, Empreendedorismo e Inovação (Fortei) do Câmpus Lages. O Fortei é uma iniciativa voltada aos alunos, professores e servidores do câmpus. Os interessados em participar devem realizar a inscrição, gratuita, até a próxima quarta, 9 de maio.</p>

				<p class="textinho">O evento conta com mostras, oficinas, palestras, gincanas e atividades semelhantes, busca a integração dos alunos e a socialização dos saberes para aprofundar o conhecimento. Um dos destaques é a palestra do professor Carlos Ramos, do Instituto Politécnico do Porto (Portugal), sobre Inovação e Empreendedorismo, que acontece no primeiro dia, no auditório do câmpus.</p>

				<p class="textinho">Segundo a coordenadora de Relações Externas do Câmpus Lages e organizadora do evento, Rita Timmermann Branco, o Fortei busca trazer novas perspectivas à produção científica, técnica e tecnológica nas áreas abrangidas pelos cursos do IFSC. “A finalidade é sensibilizar e envolver os futuros profissionais em relação às questões das suas áreas. Os estudantes da instituição terão uma oportunidade de perceber o universo do empreendedorismo, pesquisa e inovação tecnológica e ver o câmpus como um polo disseminador do conhecimento e impulsionador do desenvolvimento da região”, disse.</p>
				<br>
			</div>
		</div>
		<!--Texto sobre fortei-->
		<div id="inscrever"></div>
		<!--LINK-->
		<br>
		<br>
		<hr class="mb-4">
		<br>
		<!--Botão de inscrição-->
		<div id="inscrever_div" class="container">
			<h3 class="text-center">INSCREVA-SE</h3>
			<p class="text-center"><em class="text-center">Entre 14 e 19 de maio.</em></p>
			<p class="text-center"><em class="text-center">Faça sua inscrição no link abaixo!</em></p>
			<br>	
			<form method="post" action="cadastro.php">
				<div class="col-md">
					<button class="btn btn-block" type="submit">INSCREVA-SE AQUI</button>
				</div>
			</form>
		</div>
		<!--Botão de inscrição-->
		<br>
		<hr class="mb-4">
		<br>
		<!--Fotos IFSC em carousel-->
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="assets/img/ifsc_1.png" alt="IMAGEM IFSC" width="1900" height="900">
				</div>
				<div class="carousel-item">
					<img src="assets/img/ifsc_2.png" alt="IMAGEM IFSC" width="1900" height="900">
				</div>
				<div class="carousel-item">
					<img src="assets/img/ifsc_1.png" alt="IMAGEM IFSC" width="1900" height="900">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!--Fotos IFSC em carousel-->
		<hr class="mb-4">
	</div>
	<hr class="mb-4">
	<!-- Footer -->
	<footer>
		<?php
		include('footer.php')
		?>
	</footer>
</body>
</html>
