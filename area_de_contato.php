<html>
    <head>
        <title> ÁREA DE CONTATO </title>
		<link rel="shortcut icon" href="mensagem.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<style>
	body {
	  font-family: 'Lato', sans-serif;
	  background: #7B68EE;
	}
	
	p{
	color: #000000;
	font-size: 22px;
	margin-left: 100px;
	margin-right: 100px;
	}
	
	.rodape{
	color: #000000;
	font-size: 18px;
	margin-left: 100px;
	margin-right: 100px;
	}
	
	.overlay {
	  height: 100%;
	  width: 0;
	  position: fixed;
	  z-index: 1;
	  top: 0;
	  left: 0;
	  background-color: rgb(0,0,0);
	  background-color: rgba(0,0,0, 0.9);
	  overflow-x: hidden;
	  transition: 0.5s;
	}

	.overlay-content {
	  position: relative;
	  top: 25%;
	  width: 100%;
	  text-align: center;
	  margin-top: 30px;
	}

	.overlay a {
	  padding: 8px;
	  text-decoration: none;
	  font-size: 36px;
	  color: #818181;
	  display: block;
	  transition: 0.3s;
	}

	.overlay a:hover, .overlay a:focus {
	  color: #f1f1f1;
	}

	.overlay .closebtn {
	  position: absolute;
	  top: 20px;
	  right: 45px;
	  font-size: 60px;
	}

	@media screen and (max-height: 450px) {
	  .overlay a {font-size: 20px}
	  .overlay .closebtn {
	  font-size: 40px;
	  top: 15px;
	  right: 35px;
	  }
	}
	</style>

	<style>
	* {box-sizing: border-box;}
	body {font-family: Verdana, sans-serif;}
	.mySlides {display: none;}
	img {vertical-align: middle;}

	/* Slideshow container */
	.slideshow-container {
	  max-width: 1000px;
	  position: relative;
	  margin: auto;
	}

	/* Caption text */
	.text {
	  color: #f2f2f2;
	  font-size: 15px;
	  padding: 8px 12px;
	  position: absolute;
	  bottom: 8px;
	  width: 100%;
	  text-align: center;
	}

	/* Number text (1/3 etc) */
	.numbertext {
	  color: #f2f2f2;
	  font-size: 12px;
	  padding: 8px 12px;
	  position: absolute;
	  top: 0;
	}

	/* The dots/bullets/indicators */
	.dot {
	  height: 15px;
	  width: 15px;
	  margin: 0 2px;
	  background-color: #bbb;
	  border-radius: 50%;
	  display: inline-block;
	  transition: background-color 0.6s ease;
	}

	.active {
	  background-color: #717171;
	}

	/* Fading animation */
	.fade {
	  -webkit-animation-name: fade;
	  -webkit-animation-duration: 1.5s;
	  animation-name: fade;
	  animation-duration: 1.5s;
	}

	@-webkit-keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}

	@keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}

	/* On smaller screens, decrease text size */
	@media only screen and (max-width: 300px) {
	  .text {font-size: 11px}
	}
	</style>
	
	<style>
	a[href^="tel:"] {
	  color: white;
	  text-decoration: none;
	  font-size: 25px;
	}
	</style>
	
	<style>
	/* ESTILIZAÇÃO DO CSS DO FORMULÁRIO DO SISTEMA  */

	#sistema_mensagem {
	width:400px;
	height:525px;
	background:	#9370DB;
	margin:0 auto;
	border: 5px solid #000;
	}

	.formulario {
	width:185px;
	position:relative;
	margin:0 auto;
	bottom:-40px;
	}

	.formulario h2 {
	font-size:25px;
	color:#000000;
	margin-top: 8px;
	margin-bottom: 25px;
	}

	.formulario input {
	width:140px;
	height:25px;
	margin-bottom:10px;
	-webkit-border-radius: 14px;
	-moz-border-radius: 14px;
	border-radius: 14px;
	border:1px solid #CC9900;
	cursor:pointer;
	background: none repeat scroll 0 0 #FFFFFF;
	border: 1px solid #E5E5E5;
	border-radius: 15px 15px 15px 15px;
	box-shadow: 0 0 10px #E8E8E8 inset;
	height: 45px;
	width: 185px;
	padding: 10px;
	}

	.formulario input[type=text], input[type=email] {
	position:relative;
	padding-left:10px;
	}

	.formulario input[type=submit], input[type=reset] {
	position:relative;
	}
	</style>
	
	</head>
	
	<body>

		<div id="myNav" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> &times; </a>
				<div class="overlay-content">
					<a href="dublagem.html"> VOLTAR A PÁGINA INICIAL </a><br>
					<a href="dubladores.html"> DUBLADORES BRASILEIROS </a><br>
					<a href="series.html"> SÉRIES </a>
				</div>
		</div>

	<span style="font-size:30px;cursor:pointer" onclick="openNav()"> &#9776; Menu </span>

	<script>
	function openNav() {
	  document.getElementById("myNav").style.width = "100%";
	}

	function closeNav() {
	  document.getElementById("myNav").style.width = "0%";
	}
	</script>
	
	<br><br>
	
		<section id="sistema_mensagem">

			<form class="formulario" action="conexao.php" method="POST">
				<center><h2> Mensagem </h2></center>
		
	<br>

		<input type="text" name="nome" required placeholder="Nome" />
	
	<br>
	
		<input type="text" name="email" required placeholder="Email" />
		
	<br>

		<input type="text" name="serie" required placeholder="Série Preferida" />
	
	<br>

		<input type="text" name="mensagem" required placeholder="Envie-nos uma mensagem" />
	
	<br><br>

		<input type="submit" name="enviar" value="Enviar" />
	
	<br>
	
		<input type="reset" name="limpar" value="Limpar" />

				</form>
        
		</section>
	
	<br><br><br>
	
	<hr color="black">
	
	<br><br>
		
	<center><h3> Se gostaram do site não esqueçam de me seguir no Instagram. Obrigado a todos </h3></center>
		
	<br>
		
	<center><a href="https://www.instagram.com/adriangbenetti/?hl=pt-br"><img src="instagram.png" width="40" height="40"></a></center>
	
	<br><br><br>
	
	<hr color="black">
	
	<center><p class="rodape"> Criador do site: Adrian Gabriel Benetti - Todos os direitos reservados </p></center>

  </body>
</html>
