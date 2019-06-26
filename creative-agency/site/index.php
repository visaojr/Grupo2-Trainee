<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Innovate | Marketing Digital</title>

	<link rel="shortcut icon" href="innovate-logo.ico" type="image/x-icon" />

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- Custom innovate -->
	<link type="text/css" rel="stylesheet" href="css/innovate.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#ajax_form').submit(function(){
			var dados = jQuery( this ).serialize();

			jQuery.ajax({
				type: "POST",
				url: "action.php",
				data: dados,
				success: function( data )
				{
					$("#ajax_form").trigger('reset');
					alert( "Obrigado pelo contato!!" );
				}
			});
			
			return false;
		});
	});
	</script>
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background.png');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="img/logo.png" alt="logo">
							<img class="logo-alt" src="img/logo-alt.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Início</a></li>
					<li><a href="#about">Sobre</a></li>
					<li><a href="#portfolio">Portfólio</a></li>
					<li><a href="#service">Serviços</a></li>
					<li><a href="#team">Equipe</a></li>
					<li><a href="#contact">Contato</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">Somos a inovação que você precisa</h1>
							<p class="white-text">
								Com nossa metodologia, você aumenta em até 10X a receita gerada nas suas estratégias de
								Marketing Digital.
							</p>
							<div id="buttonStart">
								<a href="#contact"><button class="white-btn">Contrate já</button></a>
								<a href="#about"><button class="main-btn">Saiba mais</button></a>
							</div>
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Sobre nós</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-bullseye"></i>
						<h3>Missão</h3>
						<p>Desenvolver e fortalecer nossos clientes por meio do marketing digital, usando
							de criação de sites, divulgação em mídias sociais e gerenciamento de conteúdo.
						</p>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-eye"></i>
						<h3>Visão</h3>
						<p>Ser reconhecida como agência referencia em marketing digital no Médio Piracicaba e região.</p>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-send-o"></i>
						<h3>Valores</h3>
						<p>Ética, foco no cliente, compromisso, responsabilidade social e trabalho em equipe.</p>
					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->
		<div id="features" class="section bg-grey">

			<!-- Container -->
			<div class="container-fluid">

				<!-- Row -->
				<div id="whyChoseUs" class="row footerSecond">

					<!-- why choose us content -->
					<div class="col-md-6">
						<div class="section-header">
							<h2 class="title">Entre para o nosso time!</h2>
						</div>
						<p>A Innovate Marketing Digital é uma empresa com foco nas necessidades dos seus clientes. Criamos ferramentas personalizadas que tem baseadas no que há de mais inovador no mercado, por meio de parcerias com as mais completas ferramentas de gestão digital. 
							No nosso time você vai contar com:


						</p>
						<div class="feature">
							<i class="fa fa-check"></i>
							<p>Atendimento personalizado e especializado;</p>
						</div>
						<div class="feature">
							<i class="fa fa-check"></i>
							<p>Acesso à mais inovadora ferramenta de gestão de CRM Salesforce (Google);</p>
						</div>
						<div class="feature">
							<i class="fa fa-check"></i>
							<p>Monitoramento es sociais e marca com a plataforma Stilinge;</p>
						</div>
						<div class="feature">
							<i class="fa fa-check"></i>
							<p>Relatórios de performance;</p>
						</div>
						<div class="feature">
							<i class="fa fa-check"></i>
							<p>Criação de sites e hotsites (parceria Visão Jr.);</p>
						</div>
						<div class="feature">
							<i class="fa fa-check"></i>
							<p>Gerenciamento de mídias online (Google Display, SOS, etc);</p>
						</div>
					</div>
					<!-- /why choose us content -->

					<!-- About slider -->
					<div class="col-md-6">
						<div id="about-slider" class="owl-carousel owl-theme">
							<img class="img-responsive" src="./img/about1.jpg" alt="">
							<img class="img-responsive" src="./img/about2.jpg" alt="">
							<img class="img-responsive" src="./img/about1.jpg" alt="">
							<img class="img-responsive" src="./img/about2.jpg" alt="">
						</div>
					</div>
					<!-- /About slider -->

				</div>
				<!-- /Row -->

			</div>
			<!-- /Container -->

		</div>
		<!-- /Why Choose Us -->

	</div>
	<!-- /About -->


	<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container-fluid">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Portfólio</h2>
				</div>
				<!-- /Section header -->

				<div class="container">

					<!-- Row -->
					<div class="row">

						<!-- Work -->
						<div class="col-md-4 col-xs-6 work">
							<img class="img-responsive" alt="work1" src="./img/work1.jpg">
							<div class="overlay"></div>
							<div class="work-content">
								<span>Innovate</span>


								<a class="lightbox" href="./img/work1.jpg"><i class="fa fa-search"></i></a>

							</div>
						</div>
						<!-- /Work -->

						<!-- Work -->
						<div class="col-md-4 col-xs-6 work">
							<img class="img-responsive" alt="work2" src="./img/work2.jpg">
							<div class="overlay"></div>
							<div class="work-content">
								<span>Innovate</span>


								<a class="lightbox" href="./img/work2.jpg"><i class="fa fa-search"></i></a>

							</div>
						</div>
						<!-- /Work -->

						<!-- Work -->
						<div class="col-md-4 col-xs-6 work">
							<img class="img-responsive" src="./img/work3.jpg" alt="work3">
							<div class="overlay"></div>
							<div class="work-content">
								<span>Innovate</span>


								<a class="lightbox" href="./img/work3.jpg"><i class="fa fa-search"></i></a>

							</div>
						</div>
						<!-- /Work -->

						<!-- Work -->
						<div class="col-md-4 col-xs-6 work">
							<img class="img-responsive" src="./img/work4.jpg" alt="work4">
							<div class="overlay"></div>
							<div class="work-content">
								<span>Innovate</span>


								<a class="lightbox" href="./img/work4.jpg"><i class="fa fa-search"></i></a>

							</div>
						</div>
						<!-- /Work -->

						<!-- Work -->
						<div class="col-md-4 col-xs-6 work">
							<img class="img-responsive" src="./img/work5.jpg" alt="work5">
							<div class="overlay"></div>
							<div class="work-content">
								<span>Innovate</span>


								<a class="lightbox" href="./img/work5.jpg"><i class="fa fa-search"></i></a>

							</div>
						</div>
						<!-- /Work -->

						<!-- Work -->
						<div class="col-md-4 col-xs-6 work">
							<img class="img-responsive" src="./img/work6.jpg" alt="work6">
							<div class="overlay"></div>
							<div class="work-content">
								<span>Innovate</span>


								<a class="lightbox" href="./img/work6.jpg"><i class="fa fa-search"></i></a>

							</div>
						</div>
						<!-- /Work -->

					</div>
					<!-- /Row -->

				</div>
				<!-- /Container -->

			</div>
			<!-- /Portfolio -->

			<!-- Service -->
			<div id="service" class="section md-padding">

				<!-- Container -->
				<div class="container">

					<!-- Row -->
					<div class="row">

						<!-- Section header -->
						<div class="section-header text-center">
							<h2 class="title">Nossos Serviços</h2>
						</div>
						<!-- /Section header -->

						<!-- service -->
						<div class="col-md-4 col-sm-6">
							<div class="service">
								<i class="fa fa-pencil"></i>
								<h3>E-mail Marketing</h3>
								<p>O email marketing é a comunicação entre uma empresa e seus consumidores ou potenciais
									clientes, via email.<br><br></p>
							</div>
						</div>
						<!-- /service -->

						<!-- service -->
						<div class="col-md-4 col-sm-6">
							<div class="service">
								<i class="fa fa-rocket"></i>
								<h3>Design Gráfico</h3>
								<p>Nós oferecemos o processo de criação de artes visuais, identidade visual, dentre
									outros
									produtos baseados em imagens.<br><br></p>
							</div>
						</div>
						<!-- /service -->

						<!-- service -->
						<div class="col-md-4 col-sm-6">
							<div class="service">
								<i class="fa fa-cogs"></i>
								<h3>Desenvolvimento de Sites</h3>
								<p>Criação de sites para aumentar sua visibilidade e sistemas web para otimizar sua
									empresa.</p>
								<p><a href="http://visaojr.com.br" target="_blank">Redirecionar para parceiro.</a></p>
							</div>
						</div>
						<!-- /service -->

						<!-- service -->
						<div class="col-md-4 col-sm-6">
							<div class="service">
								<i class="fa fa-diamond"></i>
								<h3>Comunicação e Marketing</h3>
								<p>Processo de planejamento e execução desde a concepção, preço, promoção e distribuição
									de
									ideias, mercadorias e serviços para criar trocas que satisfaçam os objetivos
									individuais e
									organizacionais.</p>
							</div>
						</div>
						<!-- /service -->

						<!-- service -->
						<div class="col-md-4 col-sm-6">
							<div class="service">
								<i class="fa fa-mobile"></i>
								<h3>Gerenciamento de Sites e Redes Sociais</h3>
								<p>Controle das redes sociais realizando um gerenciamento de conteúdo por meio de um
									cronograma
									de postagem e gerenciamento de websites mantendo atualizações periódicas de suas
									informações.</p>
							</div>
						</div>
						<!-- /service -->

						<!-- service -->
						<div class="col-md-4 col-sm-6">
							<div class="service">
								<i class="fa fa-flask"></i>
								<h3>Brand Design</h3>
								<p>Construir e gerenciar marcas. Torná-las reconhecidas e relevantes para os seus
									públicos.
									Fazê-las presentes no mercado e seu imaginário. Elevá-las ao nível das relações
									emocionais e
									constituição de verdadeiras culturas.</p>
							</div>
						</div>
						<!-- /service -->

					</div>
					<!-- /Row -->

				</div>
				<!-- /Container -->

			</div>
			<!-- /Service -->


			<!-- Why Choose Us -->



			<!-- Numbers -->
			<div id="numbers" class="section sm-padding">

				<!-- Background Image -->
				<div class="bg-img" style="background-image: url('./img/background2.jpg');">
					<div class="overlay"></div>
				</div>
				<!-- /Background Image -->

				<!-- Container -->
				<div class="container">

					<!-- Row -->
					<div class="row">

						<!-- number -->
						<div class="col-sm-3 col-xs-6">
							<div class="number">
								<i class="fa fa-users"></i>
								<h3 class="white-text"><span class="counter">6</span></h3>
								<span class="white-text">CLIENTES SATISFEITOS</span>
							</div>
						</div>
						<!-- /number -->

						<!-- number -->
						<div class="col-sm-3 col-xs-6">
							<div class="number">
								<i class="fa fa-trophy"></i>
								<h3 class="white-text"><span class="counter">0</span></h3>
								<span class="white-text">PRÊMIOS</span>
							</div>
						</div>
						<!-- /number -->

						<!-- number -->
						<div class="col-sm-3 col-xs-6">
							<div class="number">
								<i class="fa fa-coffee"></i>
								<h3 class="white-text"><span class="counter">250</span>K</h3>
								<span class="white-text">COPOS DE CAFÉ</span>
							</div>
						</div>
						<!-- /number -->

						<!-- number -->
						<div class="col-sm-3 col-xs-6">
							<div class="number">
								<i class="fa fa-file"></i>
								<h3 class="white-text"><span class="counter">6</span></h3>
								<span class="white-text">PROJETOS ENTREGUES</span>
							</div>
						</div>
						<!-- /number -->

					</div>
					<!-- /Row -->

				</div>
				<!-- /Container -->

			</div>
			<!-- /Numbers -->



			<!-- Team -->
			<div id="team" class="section md-padding">

				<!-- Container -->
				<div class="container">

					<!-- Row -->
					<div class="row">

						<!-- Section header -->
						<div class="section-header text-center">
							<h2 class="title">Nossa Equipe</h2>
						</div>
						<!-- /Section header -->

						<!-- team -->
						<div class="col-sm-4">
							<div class="team">
								<div class="team-img">
									<img class="img-responsive" src="./img/Atilla1.3.jpg" alt="">
									<div class="overlay">
										<div class="team-social">
											<a href="https://www.facebook.com/atilla.teixeira"><i
													class="fa fa-facebook"></i></a>
											<a href="https://www.instagram.com/atilla.reis/?hl=pt-br"><i
													class="fa fa-instagram"></i></a>
											<a href="https://www.linkedin.com/in/atilla-teixeira-0573a9167/"><i
													class="fa fa-linkedin"></i></a>
										</div>
									</div>
								</div>
								<div class="team-content">
									<h3>Atilla Teixeira</h3>
									<span>Projetos</span>
								</div>
							</div>
						</div>
						<!-- /team -->

						<!-- team -->
						<div class="col-sm-4">
							<div class="team">
								<div class="team-img">
									<img class="img-responsive" src="./img/Artur1.3.jpg" alt="">
									<div class="overlay">
										<div class="team-social">
											<a href="https://www.facebook.com/arturoliveira.depaula"><i
													class="fa fa-facebook"></i></a>
											<a href="https://www.instagram.com/ar1urdepaula/?hl=pt-br"><i
													class="fa fa-instagram"></i></a>
											<a href="https://www.linkedin.com/in/artur-oliveira-de-paula-001758184/"><i
													class="fa fa-linkedin"></i></a>
										</div>
									</div>
								</div>
								<div class="team-content">
									<h3>Artur Oliveira</h3>
									<span>Projetos</span>
								</div>
							</div>
						</div>
						<!-- /team -->

						<!-- team -->
						<div class="col-sm-4">
							<div class="team">
								<div class="team-img">
									<img class="img-responsive" src="./img/Isabela1.3.jpg" alt="">
									<div class="overlay">
										<div class="team-social">
											<a href="https://www.facebook.com/imcandido"><i
													class="fa fa-facebook"></i></a>
											<a href="https://www.instagram.com/sonolent4/?hl=pt-br"><i
													class="fa fa-instagram"></i></a>
											<a href="https://www.linkedin.com/in/isabella-candido-953963183/"><i
													class="fa fa-linkedin"></i></a>
										</div>
									</div>
								</div>
								<div class="team-content">
									<h3>Isabella Candido</h3>
									<span>Marketing</span>
								</div>
							</div>
						</div>
						<!-- /team -->

						<!-- team -->
						<div class="col-sm-4">
							<div class="team">
								<div class="team-img">
									<img class="img-responsive" src="./img/Larissa1.3.jpg" alt="">
									<div class="overlay">
										<div class="team-social">
											<a href="https://www.facebook.com/larissa.dornelas.75"><i
													class="fa fa-facebook"></i></a>
											<a href="https://www.instagram.com/lari_dornelas/?hl=pt-br"><i
													class="fa fa-instagram"></i></a>
											<a href="https://www.linkedin.com/in/larissa-dornelas-17730b17a/"><i
													class="fa fa-linkedin"></i></a>
										</div>
									</div>
								</div>
								<div class="team-content">
									<h3>Larissa Dornelas</h3>
									<span>Qualidade</span>
								</div>
							</div>
						</div>
						<!-- /team -->

						<!-- team -->
						<div class="col-sm-4">
							<div class="team">
								<div class="team-img">
									<img class="img-responsive" src="./img/Jerald1.3.jpg" alt="">
									<div class="overlay">
										<div class="team-social">
											<a href="https://www.facebook.com/rafapinho19"><i
													class="fa fa-facebook"></i></a>
											<a href="https://www.instagram.com/rafaelvp_/"><i
													class="fa fa-instagram"></i></a>
											<a href="https://www.linkedin.com/in/rafael-valadares-pinho"><i
													class="fa fa-linkedin"></i></a>
										</div>
									</div>
								</div>
								<div class="team-content">
									<h3>Rafael Pinho</h3>
									<span>Gestao de Pessoas</span>
								</div>
							</div>
						</div>
						<!-- /team -->

					</div>
					<!-- /Row -->

				</div>
				<!-- /Container -->

			</div>
			<!-- /Team -->

		
			<!-- Contact -->
			<div id="contact" class="section md-padding" h>
				<div class="bg-img" style="background-image: url('./img/background.png');">
					<div class="overlay"></div>
				</div>


				<!-- Container -->
				<div class="container-fluid">

					<!-- Row -->
					<div class="row">

						<!-- Section-header -->
						<div class="section-header text-center">
							<h2 class="white-text">Receba nossos conteúdos exclusivos!</h2>
						</div>
						<!-- /Section-header -->

						<!-- contact -->
						<div class="col-sm-4">
							<div class="contact">
								<i class="fa fa-phone"></i>
								<h3 class="white-text">Telefone</h3>
								<p class="white-text">(31) 32258032</p>
							</div>
						</div>
						<!-- /contact -->

						<!-- contact -->
						<div class="col-sm-4">
							<div class="contact">
								<i class="fa fa-envelope"></i>
								<h3 class="white-text">Email</h3>
								<p class="white-text">contato@innovate.com.br</p>
							</div>
						</div>
						<!-- /contact -->

						<!-- contact -->
						<div class="col-sm-4">
							<div class="contact">
								<i class="fa fa-map-marker"></i>
								<h3 class="white-text">Endereço</h3>
								<p class="white-text"> Rua 36, 115 - Loanda, João Monlevade - MG, 35931-008</p>
							</div>
						</div>
						<!-- /contact -->

						<!-- contact form -->
						<div class="col-md-8 col-md-offset-2">
							<form action = "" id="ajax_form" method = "POST" class="contact-form">
								<input type="text" name="name" class="input" placeholder="Nome">
								<input type="email" name="email" class="input" placeholder="Email">
								<input type="submit" name="enviar" class="main-btn"/>							</form>
						</div>
						<!-- /contact form -->

					</div>
					<!-- /Row -->

				</div>
				<!-- /Container -->

			</div>
			<!-- /Contact -->


			<!-- Footer -->
			<footer id="footer" class="footerSecond">

				<!-- Container -->
				<div class="container-fluid footerFirst footerPadding">

					<!-- Row -->
					<div class="row footerFirst">

						<div class="col-md-12">

							<!-- footer logo -->
							<div class="footer-logo footerFirst">
								<a href="index.html"><img src="img/logo2.png" alt="logo2"></a>
							</div>
							<!-- /footer logo -->

							<!-- footer follow -->
							<ul class="footer-follow footerFirst">
								<li><a href="https://www.facebook.com/Innovate-2393200584034219/"><i
											class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/innovatemktd/"><i
											class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#contact"><i class="fa fa-envelope"></i></a></li>

							</ul>
							<!-- /footer follow -->

						</div>
						<div class="col-md-12">

						</div>

					</div>
					<!-- /Row -->

				</div>
				<!-- /Container -->

				<!-- Container -->
				<div class="container-fluid footerSecond footerPadding ">

					<!-- Row -->
					<div class="row">

						<div class="container col-md-offset-2">
							<div class="col-md-4">


							</div>
						</div>

												

						<div class="col-md-12">

							<!-- footer copyright -->
							<div class="footer-copyright">
								<p>Copyright © 2019. All Rights Reserved. Designed by <a
										href="http://innovate.ravapi.com" target="_blank">Innovate</a></p>
							</div>
							<!-- /footer copyright -->

						</div>
						<div class="col-md-12">

						</div>

					</div>
					<!-- /Row -->

				</div>
				<!-- /Container -->


			</footer>
			<!-- /Footer -->

			<!-- Back to top -->
			<div id="back-to-top"></div>
			<!-- /Back to top -->

			<!-- Preloader -->
			<div id="preloader">
				<div class="preloader">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<!-- /Preloader -->

			<!-- jQuery Plugins -->
			<script type="text/javascript" src="js/jquery.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>
			<script type="text/javascript" src="js/owl.carousel.min.js"></script>
			<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
			<script type="text/javascript" src="js/main.js"></script>

</body>

</html>