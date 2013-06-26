<?php 
require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/HospedeControl.php';
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
			<form action="process.php?funcao=1" method="post">
				<table border="1">
				<tr>
				<td>Nome Completo:</td><td><input name="nome" size="30" maxlength="80"><br>
				</tr>
				<tr>
				<td valign="top">CPF:</td><td><input type="number" name="cpf" size="20" maxlength="11"></td>
				</tr>
				<tr>
				<td>Endere&ccedil;o:</td><td><input name="endereco" size="50" maxlength="80"></td>
				</tr>
				<tr>
				<td>Telefone:</td><td><input type="number" name="telefone" size="8"></td>
				</table>
				<input type="submit" value="Salvar">
				</form>
				<?php } ?>
		<?php if(isset($_GET['f'])) 
			   { if(!isset($_GET['d']))
			  {
			  
			   $hc = new HospedeControl();
			   $hosp=$hc->HospedeI($f);
			   	?>
				<form action="process.php?funcao=2" method="post">
				<input name="id" type="hidden" value="<?php echo  $hosp->getId(); ?>">
				<table border="1">
				<tr>
				<td>Nome:</td><td><input name="nome" value="<?php echo  $hosp->getNome();?>" size="30" maxlength="80"><br>
				</tr>
				<tr>
				<td valign="top">CPF:</td><td><input type="number" name="cpf" size="20" maxlength="11"><?php echo $hosp->getCpf();?></td>
				</tr>
				<tr>
				<td>Endere&ccedil;o:</td><td><input name="endereco" size="50" maxlength="80"></td>
				</tr>
				<tr>
				<td>Telefone:</td><td><input type="number" name="telefone" size="8"></td>
				</tr>
				</table>
				<input type="submit" value="Salvar">
				</form>
			<?php 
			  }else{
				$hc = new HospedeControl();
				$hosp=$hc->HospedeI($f);
				?>
				<form action="process.php?funcao=3" method="post">
				<input name="id" type="hidden" value="<?php echo  $hosp->getId();; ?>">
				<table border="1">
				<tr>
				<td>Nome:</td><td><input name="nome" value="<?php echo $hosp->getNome();?>" size="30" maxlength="80" readonly><br>
				</tr>
				<tr>
				<td valign="top">CPF:</td><td><input type="number" name="cpf" size="20" maxlength="11" readonly><?php echo   $hosp->getCpf();?></td>
				</tr>
				<tr>
				<td>Endere&ccedil;o:</td><td><input name="endereco" size="50" maxlength="80" readonly></td>
				</tr>
				<tr>
				<td>Telefone:</td><td><input type="number" name="telefone" size="8" readonly></td>
				</tr>
				</table>
				<input type="submit" value="Excluir">
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