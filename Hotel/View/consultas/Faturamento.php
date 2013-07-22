<?php require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Model/Reserva.class.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Model/Reserva_servico.class.php';  ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title>Home</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen, projection" />
</head>

<body>

<div id="wrapper">
	<header id="header">
		<br><br>
		<h1 align="center">M&amp;M Hotel</h1>
	</header><!-- #header-->

	<section id="middle">

		<div id="container">
			<div id="content">
				<table border="1">
				<tr>
				<td>M&ecirc;s</td>
				<td>Faturamento</td>
				</tr>
				<tr>
				<td><?php echo $month = date('m', strtotime("-1 month")); ?></td>
				<td><?php $r = new Reserva(); $rs = new Reserva_Servico(); 
					$p = $r->ListMonths(1); $p2 = $rs->ListMonths(1);  echo "R$ ".($p[0]['valor'] + $p2[0]['valor']); ?></td>
				</tr>
				<?php ?>
				<tr>
				<td><?php echo $prevmonth = date('m', strtotime("-2 month")); ?></td>
				<td><?php $p = $r->ListMonths(2); $p2 = $rs->ListMonths(2);  echo "R$ ".($p[0]['valor'] + $p2[0]['valor']); ?></td>
				</tr>
				<tr>
				<td><?php echo $prevmonth2 = date('m', strtotime("-3 month")) ; ?></td>
				<td><?php $p = $r->ListMonths(3); $p2 = $rs->ListMonths(3);  echo "R$ ".($p[0]['valor'] + $p2[0]['valor']); ?></td>
				</tr>
				</table>
				</div><!-- #content-->
		</div><!-- #container-->

		<aside id="sideLeft">
			<strong>
			<a href="/Hotel/view/index.php">Voltar</a>
			<br>
			<a href="/Hotel/view/consultas/Ocupacao.php">Ocupa&ccedil;&atilde;o</a>
			<br>
			<a href="/Hotel/view/consultas/Faturamento.php">Faturamento</a>
			<br>
			<a href="/Hotel/view/consultas/PesquisaHospede.php">Pesquisar Hospede</a>
			<br>
			<a href="/Hotel/view/consultas/FaturamentoServicos.php">Faturamento por servico</a>
			<br>
			</strong> 
			</aside><!-- #sideLeft -->

	</section><!-- #middle-->

	<footer id="footer">
		Marcelo e Mauricio &copy;
	</footer><!-- #footer -->

</div><!-- #wrapper -->

</body>
</html>