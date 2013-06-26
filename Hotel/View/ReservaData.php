<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/ReservaControl.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title>Check In</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />
</head>

<body>

<div id="wrapper">

	<header id="header">
		<br><br>
		<h1 align="center">Check In</h1>
	</header><!-- #header-->

	<section id="middle">

		<div id="container">
			<div id="content">
				<h2>Periodo de estadia:</h2>
				<form action="service/AddReserva.php" method="post">
				<table border="1">
				<tr>
				<td>Data inicio:</td><td><input type="date" name="dataIni" size="20" width="30" ></td>
				</tr>
				<tr>
				<td>Data Fim:</td><td><input type="date" name="dataFim" size="20" width="30" ></td>
				</tr>
				</table>
				<input type="submit" value="Enviar">
				</form>
			</div><!-- #content-->
		</div><!-- #container-->

		<aside id="sideLeft">
			<strong>
			<a href="/Hotel/view/index.php">Home</a>
			<br>
			<a href="/Hotel/view/Reservas.php">Fazer Reservas</a>
			<br>
			<a href="/Hotel/view/Checkin.php">Ver Check in</a>
			<br>
			<a href="/Hotel/view/Servicos.php">Cadastrar Servicos</a>
			<br>
			<a href="/Hotel/view/Hospedes.php">Cadastrar H&oacute;spede</a>
			<br>
			<a href="/Hotel/view/LancarDespesa.php">Lan&ccedil;ar Despesa</a>
			</strong> 
			</aside><!-- #sideLeft -->

	</section><!-- #middle-->

	<footer id="footer">
		Marcelo e Mauricio &copy;
	</footer><!-- #footer -->

</div><!-- #wrapper -->

</body>
</html>