<?php 
require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/ServicoControl.php';
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
				<td>Cliente</td>
				<td><?php $hc = new HospedeControl();
				 		$hc->ShowAll();  ?></td>
				</tr>
				<tr>
				<td>Nome</td><td><input name="nome" size="20" width="30"></td>
				</tr>
				<tr>
				<td>pre&ccedil;o:</td><td><input name="preco" size="20" width="30"></td>
				</tr>
				</table>
				<input type="submit" value="Salvar">
				</form>
				<?php } ?>
		<?php if(isset($_GET['f'])) 
			   { if(!isset($_GET['d']))
			  {
			  
			   $sc = new ServicoControl();
			   $serv=$sc->ServicoI($f);
			   	?>
				<form action="process.php?funcao=2" method="post">
				<input name="id" type="hidden" value="<?php echo  $serv["id"]; ?>">
				<table border="1">
				<tr>
				<td>Nome:</td><td><input name="nome" value="<?php echo  $serv["nome"];?>" size="20" maxlength="40"><br>
				</tr>
				<tr>
				<td valign="top">Descri&ccedil;&atilde;o:</td><td><textarea name="descricao" rows="4" cols="20"><?php echo  $serv["descricao"];?></textarea></td>
				</tr>
				<tr>
				<td>pre&ccedil;o:</td><td><input name="preco" type="number" value="<?php echo  $serv["preco"];?>" size="8" width="30"></td>
				</tr>
				</table>
				<input type="submit" value="Salvar">
				</form>
			<?php 
			  }else{
				$sc = new ServicoControl();
				$serv=$sc->ServicoI($f);
				?>
				<form action="process.php?funcao=3" method="post">
				<input name="id" type="hidden" value="<?php echo  $serv["id"]; ?>">
				<table border="1">
				<tr>
				<td>Nome:</td><td><input name="nome" value="<?php echo  $serv["nome"];?>" size="20" maxlength="40" readonly><br>
				</tr>
				<tr>
				<td valign="top">Descri&ccedil;&atilde;o:</td><td><textarea name="descricao" rows="4" cols="20" readonly><?php echo  $serv["descricao"];?></textarea></td>
				</tr>
				<tr>
				<td>pre&ccedil;o:</td><td><input name="preco" type="number" value="<?php echo  $serv["preco"];?>" size="8" width="30" readonly></td>
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
			</strong> 
			</aside><!-- #sideLeft -->

	</section><!-- #middle-->

	<footer id="footer">
		Marcelo e Mauricio &copy;
	</footer><!-- #footer -->

</div><!-- #wrapper -->

</body>
</html>