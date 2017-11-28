<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gym Tech</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>-->
        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		 <script>
			function addOnList() {
				inputGoals.value="";
				if(objEmagrecer.checked ==true){
					inputGoals.value += objEmagrecer.value+",";
				}
				if(objCrescer.checked ==true){
					inputGoals.value += objCrescer.value+",";
				}
			}
			function verificaVazio(){
				if (inputName.value=="" || inputName.value == null || inputName.value ==" " || inputGoals.value=="" || inputGoals.value == null || inputGoals.value ==" "){
					alert("preencha os campos corretamente!");
					return false;
				}else{
					return true;
				}
			}
			
		 </script>
    </head>
    <body data-spy="scroll" data-target="#navmenu">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!--Home page style-->
        <header id="main_menu" class="header">
            <div class="main_menu_bg navbar-fixed-top">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu wow fadeInUp" data-wow-duration="1s">
                            <nav class="navbar navbar-default" id="navmenu">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt=""/></a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="active"><a href="#home">Home</a></li>
                                            <li><a href="#domain">Inscreva-se</a></li>
					    <li><a href="#pricing">Calcule seu  IMC</a></li>	
					    <li><a href="#clients">Parceiros</a></li>	
                                            <li><a href="#service">Quem Somos?</a></li>
                                            <li><a href="#footer">Fale Conosco</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>	
                    </div>

                </div>

            </div>
        </header> <!--End of header -->



        <section id="home" class="home">
            <div class="home-overlay-fluid">
                <div class="container">
                    <div class="row">
                        <div class="main_slider_area">
                            <div class="slider">
                                <div class="kingle_slider wow fadeIn" data-wow-duration="2s">
                                   <b><h2>Bem-vindo a Gym Tech</h2></b>
                                  <b><h2>A sua academia inteligente!!</b></h2>
                                </div>
                                <!--<div class="single_slider">
                                  <b><h2>Bem-vindo a Gym Tech</h2></b>
                                    <b><h2>A sua academia inteligente</h2></b>
                                </div>
                                <div class="single_slider">
                                    <b><h2>Bem-vindo a Gym Tech</h2></b>
                                    <b><h2>A sua academia inteligente</h2></b>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of Banner Section -->


        <section id="register" class="register">
		    <div class="row text-center">	
                        <div class="single_register">
                            <a href="">Inscreva-se</a>
				<div "row text-center">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="domain" class="domainsearce">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
						<div class="main_somainsearrce">
							<div class="head_title text-center wow fadeInDown" data-wow-duration="1s">
								<h2>Queremos te conhecer =) </h2>
						<h2>Estamos crescendo!</h2>
						<p>A Gym Tech está em fase de expansão, </p>
						<p>e queremos saber algumas coisas sobre você.</p>
						<p></p>
						<p>Por favor preencha o formulário e nos ajude a crescer cada vez mais, quem tem a ganhar com isso é você ;)</p>
							</div>

							<div class="serceoption wow fadeIn" data-wow-duration="1.5s">
							<center>
							<!--inicio do form-->
								<form id="cadCustumer" method="POST" action="PHP/php_InsereRegistro.php" onSubmit="return verificaVazio()">
									<input type ="hidden" value="" id="inputGoals" name="inputGoals">
									<input type="text" placeholder="Digite seu nome" id="inputName" name="inputName"> <br>	
									<select id="inputIdade" name="inputIdade">
										<?php
											for ($n = 14; $n <= 100; $n++) {
												echo '<option value="'.$n.'">'.$n.'</option>';
											}
										?>
									</select> <br>
									<select id="inputBairro" name="inputBairro">
										<?php
											include("PHP/php_conexaoBanco.php");
											$conn = abrirConexao();
											$query = "SELECT * FROM neighborhood";
											$result = mysqli_query($conn, $query);
											while($row = mysqli_fetch_assoc($result)){
												echo "<option value=".$row['ID_neighborhood'].">".$row['descNeighborhood']."</option>";
											}
										?>
									</select> <br>
									<select id="inputSexo" name="inputSexo">
										<option value="masculino">Masculino</option>
										<option value="feminino">Faminino</option>
									</select> <br>
									<input type="checkbox" value="Perda de Peso" id="objEmagrecer"> Perda de Peso </input> <br>
									<input type="checkbox" value="Ganho de Massa" id="objCrescer"> Ganho de Massa </input> <br>
									<input type="submit" id="go" onClick="addOnList()"> </input>
								</form>
								<!--fim do form-->
								<center>
							</div>

							<div class="sercelist wow fadeIn" data-wow-duration="2s">
								<div class="single_dotcom_serce text-center">
									
									
								   
								 </div>    
							</div> <!-- End of sercelist -->

						</div>
					</div>
                </div>
            </div>
        </section>



        <section id="pricingtop" class="pricingtop">
            <div class="overlay">
                <div class="container">
                    <div class="main_pricingtop"></div>
                </div> 
            </div>
        </section>


                      <div class="abouts_area">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="single_about wow fadeInLeft" data-wow-duration="1.5s">
                                        <h3>Quem Somos?</h3>
                                      <p>Somos uma academia inteligente, criada com o propósito de democratizar o acesso à prática de atividade física de alto padrão, 100% tecnologica onde o tudo o que voce precisa esta dentro do seu smartphone</p>
                                    </div>
                                </div>
                                    <div class="single_about_right wow fadeInRight" data-wow-duration="1.5s">
                                        <div class="row">
                                                <div class="single_team text-center">
                                                    </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                                    </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                                    </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section><!-- End of Pricing Section -->




        <section id="clients" class="comments">
            <div class="overlay-fluid-block">
                <div class="container">
                    <div class="row">
                        <div class="main_comments wow fadeInUp" data-wow-duration="1.5s">
                            <div class="main_comments_content">
                                <div class="single_comments text-center">
                                    <p>“Comecei a fazer academia a mais ou menos uns dois anos, de início foi mais por uma questão de estética
			 e foi na Gym Tech onde me senti mais a vontade para começar a fazer exercícios.”  </p>
                                    <a href="">Antonella de Souza</a>
                                </div>
                                <div class="single_comments text-center">
                                    <p>“
			As aulas na Gym Tech são muito dinâmicas e eles desenvolvem um trabalho sério. 
			Desde a avaliação física, o aluno recebe informações importantes e é bem orientado para fazer os exercícios corretamente, 
			de maneira personalizada e o melhor os treinos ficam todos disponíveis no app.”  </p>
                                    <a href="">Heitor Silva</a>
                                </div>
                                <div class="single_comments text-center">
                                    <p>“O motivo que me leva a fazer musculação é o fato de fazer muito bem para a minha saúde. 
			Procurei a Gym Tech porque o atendimento individual é necessário para as minhas necessidades. 
			Para mim fazer exercícios é muito importante e aumenta minha disposição para as atividades do dia a dia.”  </p>
                                    <a href="">Marcos Bueno</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>

        <section id="service" class="service">
            <div class="container">
                <div class="row">
                    <div class="main_service text-center">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_service wow fadeIn" data-wow-duration=".6s">
                                <div class="single_service_icon icon_one">
                                    <a href=""><i class="fa fa-flash"></i></a>
                                </div>
                                <div class="single_service_deatels">
                                    <h4>Estamos sempre com você</h4>
                                    <p>Nossos perdoais estão sempre prontos para te atender.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_service wow fadeIn" data-wow-duration="1.2s">
                                <div class="single_service_icon icon_two">
                                    <a href=""><i class="fa fa-skype"></i></a>
                                </div>
                                <div class="single_service_deatels">
                                    <h4>Fale com uma nutricionista</h4>
                                    <p>Faça sua consulta com nutricionistas de plantão.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_service wow fadeIn" data-wow-duration="1.7s">
                                <div class="single_service_icon icon_three">
                                    <a href=""><i class="fa fa-arrows"></i></a>
                                </div>
                                <div class="single_service_deatels">
                                    <h4Fácil acesso></h4>
                                    <p>Em breve estaremos com mais unidades.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_service wow fadeIn" data-wow-duration="2s">
                                <div class="single_service_icon icon_four">
                                    <a href=""><i class="fa fa-comments"></i></a>
                                </div>
                                <div class="single_service_deatels">
                                    <h4>Suporte personalizado</h4>
                                    <p>Teve algum problema com o app? Converse com nossos analistas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of service Section -->



        <section id="footer" class="footer sections">
            <div class="container">
                <div class="row">
                    <div class="main_footer wow fadeInDown" data-wow-duration="2s">
                        <div class="col-sm-3 col-xs-12">
                            <div class="footer_logo">
                            </div>
                        </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

											
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="single_right_footer wow fadeIn" data-wow-duration="2s">
                                            <ul>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-sm-3 col-xs-12">
                            <div class="fo_bottom_socail wow fadeIn" data-wow-duration="2.3s">
                                <a href="#"><i class="fa fa-phone"> (11) 3204-2572</i></a>
                                <a href=""><i class="fa fa-envelope"></i> contato@gymtech.com</a>
                                <p>Avenida dos Bandeirantes, 830 - Vila Olimpia - SP</p>
                            </div>
                        </div> 
                    </div>
                </div>
				
				
				
				
                
            </div>
        </section><!-- End of footer3 section -->
		
		<footer id="coppyrights" class="coppyrights">
			<div class="container-fluid">
			<div class="row">
				<div class="coppyright">
		<p class="wow fadeInUp" data-wow-duration="2s">Gym Tech® <i></i> by <strong>
			 All Rights Reserved</p>
				</div>
			</div>
			</div>
		</footer>






        <!-- STRAT SCROLL TO TOP -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
