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


			<div id="conteudo">
				<h3> Um pouco da minha Pessoa</h3>
				<div id="dados"> 
					<form>
						<fieldset>
							<legend>Dados Pessoais</legend>
							<table class="tabela">
								<tr>
									<td align="right">Nome:</td><td><input type="text" disabled="true" size="50%" value="Jossefa Joaquim"></td>
									<td align="right">Apelido:</td><td><input type="text" disabled="true" size="50%" value="Tamele"></td>
								</tr>
								<tr>
									<td align="right">Sexo:</td><td><input type="text" disabled="true" size="50%" value="Masculino"></td>
									<td align="right">Nacionalidade:</td><td><input type="text" disabled="true" size="50%" value="Moçambicana"></td>
								</tr>
								<tr>
									<td align="right">Filho de:</td><td><input type="text" disabled="true" size="50%" value="Joaquim João Tamele"></td>
									<td align="right">e de:</td><td><input type="text" disabled="true" size="50%" value="Maria João Mazuze"></td>
								</tr>

							</table>
						</fieldset>
					</form>
				</div>
			</div>
			<div class="section box">
					<h1>Jossefa Joaquim Tamele</h1>
			</div>
			<div class="habilitacao">
				<h3>Habilitações Literarias</h3>
				<form>
					<fieldset>
						<table>
						<legend>Escolas frequentadas</legend>
						<tr>
							<td align="right"><p>5<sup>a</sup> Classe:</p></td>
							<td><p><b>Escola Primaria Unidade - 8</b></p></td>
						</tr>
						<tr>
							<td align="right"><p>7<sup>a</sup> Classe:</p></td>
							<td><p><b>Escola Primária Unidade - 8</b></p></td>
						</tr>
						<tr>
							<td align="right"><p>10<sup>a</sup> Classe:</p></td>
							<td><p><b>Escola Secundária Força do Povo</b></p></td>
						</tr>
						<tr>
							<td align="right"><p>12<sup>a</sup> Classe:<p></td>
							<td><p><b>Escola Secundária Eduardo Mondlane</b></p></td>
						</tr>
					</table>
					</fieldset>

				</form>
			</div>
			
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