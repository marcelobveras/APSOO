<?php
	require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/ServicoControl.php';
	require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/ReservaControl.php';
	switch ($_GET['funcao']) {
		case 1:
			$serv = new ServicoControl();
			$serv->Add($_POST['nome'], $_POST['preco'], $_POST['descricao']);
			?>
			  <script type="text/javascript">
			    alert("Servico Registrado");
			    window.location = '/Hotel/View/Servicos.php';
			  </script>
			<?php
		break;
		case 2:
			$serv = new ServicoControl();
			$serv->Mod($_POST['id'], $_POST['nome'], $_POST['preco'], $_POST['descricao']);
			?>
			  <script type="text/javascript">
			    alert("Servico Modificado");
			    window.location = '/Hotel/View/Servicos.php';
			  </script>
			<?php
		break;
		case 3:
			$serv = new ServicoControl();
			$serv->Del($_POST['id']);
			?>
			  <script type="text/javascript">
			    alert("Servico Excluido");
			    window.location = '/Hotel/View/Servicos.php';
			  </script>
			<?php
		break;
		case 4:
			$reserv = new ReservaControl();
			$reserv->Add($_POST['hospede'], $_POST['quarto'], $_POST['data']);
			?>
						  <script type="text/javascript">
						    alert("Servico Registrado");
						    window.location = '/Hotel/View/Reservas.php';
						  </script>
			<?php			
			break;
		default:
		break;
	}