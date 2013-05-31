<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/ServicoControl.php';
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title>Servicos</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />
</head>

<body>

<div id="wrapper">

	<header id="header">
		<br><br>
		<h1 align="center">Manuten&ccedil;&atilde;o de Servi&ccedil;os</h1>
	</header><!-- #header-->

	<section id="middle">

		<div id="container">
			<div id="content">
				<button >Novo Servi&ccedil;o</button>
				<br>
				<br>
				<?php $serv = new ServicoControl();
					  $serv->ShowAll();
				?>	
			</div><!-- #content-->
		</div><!-- #container-->

		<aside id="sideLeft">
			<strong>
			<a href="index.php">Home</a>
			<br>
			<a href="Reservas.php">Fazer Reservas</a>
			<br>
			<a href="Checkin.php">Fazer Check in</a>
			<br>
			<a href="Servicos.php">Cadastrar Servi&ccedil;os</a>
			</strong> 
			</aside><!-- #sideLeft -->

	</section><!-- #middle-->

	<footer id="footer">
		Marcelo e Mauricio &copy;
	</footer><!-- #footer -->

</div><!-- #wrapper -->

</body>
</html>