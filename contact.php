<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Curriculum Vitae</title>
		<link rel="stylesheet" type="text/css" href="css/fonts/css/all.css">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
			
		<div id="interface">
			<header>
				<marquee direction="left" scrollamount="2" width="100%" style="color: #32c95d; font-size: 20px; font-weight: bold;">
	                Programação Web 2020 - Universidade Eduardo Mondlane (DMI)
	            </marquee>
            </header>
			<nav>
				<div class="menu">
					<i class="fa fa-bars men" aria-hidden="true"></i>
				</div>
				<ul>
					<li><a href="index.html">Inicio</a></li>
					<li><a href="sobre.html">Mais Detalhes</a></li>
					<li><a href="contact.html">Contacto</a></li>
				</ul>

			</nav>
			<br/>
			<br/>
			<div class="proficional">
				<h3>Entre em Contacto</h3>
				<form>
					<fieldset>
						<legend>Formulário de Contacto</legend>
						<table>
							<tr>
								<td align="right">Email:</td><td><input type="text" size="50%" placeholder="Seu email"></td>
								
								
							</tr>
							<tr>
								<td align="right">Nome:</td><td><input type="text" size="50%" placeholder="Seu email"></td>
								
							</tr>
							<tr>
								<td align="right">Descrição:</td><td><textarea style="padding: 50px; width: 400px;" placeholder="Informe algo..."></textarea></td>
							</tr>
							<tr>
								<td align="right"></td><td><input type="submit" style="color: #0ea20e;" value="Enviar"></td>
							</tr>
						</table>
					</fieldset>

				</form>
			</div>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			
			<footer id="rodape">
				<p style="color: #fff; padding-top: 50px;">Copyright &copy; 2020 - by Jossefa Tamele <br/><br/><a href="http://Facebook.com/jossefajoaquimtamele" target="_blank"><i class="fab fa-facebook-f"></i></a> | <a href="http://twitter.exemplo" target="_blank"><i class="fab fa-twitter"></i></a> </p>
				
		
			</footer>
		</div>
	</body>
	<script src="js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.men').click(function(){
				$('ul').toggleClass('activo');
			})
		})
		
	</script>
</html>