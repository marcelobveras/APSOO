<?php 
require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/ServicoControl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/HospedeControl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/QuartoControl.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/ReservaControl.php';
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
		<?php if(!isset($_GET['f'])) { ?>
			<form action="process.php?funcao=4" method="post">
				<table border="1">
				<tr>
				<td>Cliente:</td>
				<td><?php $hc = new HospedeControl();
				 		$hc->ShowAll();  ?></td>
				</tr>
				<tr>
				<td>Quarto:</td>
				<td><?php $qu = new QuartoControl();
				 		$qu->ShowAll($_POST['dataIni'], $_POST['dataFim']);  ?></td>
				</tr>
				</table>
				<input type="hidden" name="data" size="20" width="30" readonly value="<?php echo $_POST['dataIni']?>"></td>
				<input type="hidden" name="dataFim" size="20" width="30" readonly value="<?php echo $_POST['dataFim']?>"></td>
				
				<input type="submit" value="Salvar">
				</form>
				<?php } ?>
		<?php if(isset($_GET['f'])) 
			   { if(!isset($_GET['d']))
			  {
			   $sc = new ReservaControl();
				$serv = $sc->ReservaI($f);
				$hosp =  new HospedeControl();
				$quart = new QuartoControl();
				?>
				<form action="process.php?funcao=5" method="post">
				<input name="id" type="hidden" value="<?php echo  $serv->getId(); ?>">
				<table border="1">
				<tr>
				<td>Cliente</td>
				<td><input value="<?php echo $hosp->HospedeI($serv->getHosp_id())['nome']; ?>" ></td>
				</tr>
				<tr>
				<td>Quarto</td>
				<td><?php echo $quart->QuartoI($serv->getQuarto_id())->getNome(); ?></td>
				</tr>
				<tr>
				<td>Data</td><td><input value="<?php echo $serv->getData_ini(); ?>" type="date" name="data" size="20" width="30" readonly="readonly"></td>
				</tr>
				<tr>
				<td>Data Fim</td><td><input value="<?php echo $serv->getData_fim(); ?>" type="date" name="data" size="20" width="30" readonly="readonly"></td>
				</tr>
				</table>
				<input type="submit" value="Realizar check in">
				</form>
			<?php 
			  }else{
				$sc = new ReservaControl();
				$serv = $sc->ReservaI($f);
				$hosp =  new HospedeControl();
				$quart = new QuartoControl();
				?>
				<form action="process.php?funcao=6" method="post">
				<input name="id" type="hidden" value="<?php echo  $serv->getId(); ?>">
				<table border="1">
				<tr>
				<td>Cliente</td>
				<td><input value="<?php echo $hosp->HospedeI($serv->getHosp_id())['nome']; ?>" name ></td>
				</tr>
				<tr>
				<td>Quarto</td>
				<td><?php echo $quart->QuartoI($serv->getQuarto_id())->getNome(); ?></td>
				</tr>
				<tr>
				<td>Data</td><td><input value="<?php echo $serv->getData_ini(); ?>" type="date" name="data" size="20" width="30" readonly="readonly"></td>
				</tr>
				</table>
				<input type="submit" value="Cancelar Reserva">
				</form>
				<?php 
				}
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