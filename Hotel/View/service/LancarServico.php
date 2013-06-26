<?php 
require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/ServicoControl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/ReservaServicoControl.php';
if(isset($_GET['f'])) 
{
	$f = $_GET['f'];
}?>
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
				<?php 
					if(isset($_GET['f']))
					{
						$s = new ServicoControl();
						$s->ChoseOne($_GET['f']);
					}
					if(isset($_GET['c']) && isset($_GET['s']))
					{
						$rs = new ReservaServicoControl();
						$rs->Add($_GET['c'], $_GET['s']);
						?>  
						<script type="text/javascript">
						  	alert("Despesa Registrada");
						    window.location = '/Hotel/View/LancarDespesa.php';
						</script>
						<?php 
					}
					if(isset($_GET['c']) && isset($_GET['s']))
					{
						$rs = new ReservaServicoControl();
						$rs->Add($_GET['c'], $_GET['s']);
						?>
											<script type="text/javascript">
											  	alert("Despesa Registrada");
											    window.location = '/Hotel/View/LancarDespesa.php';
											</script>
											<?php 
					}
					if(isset($_GET['c']) && isset($_GET['e']))
					{
						//$rs = new ReservaServicoControl();
						//$rs->Add($_GET['c'], $_GET['s']);
						echo "aqui";
					}
				?>	
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