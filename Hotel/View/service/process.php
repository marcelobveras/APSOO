<?php
	require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/ServicoControl.php';
	switch ($_GET['funcao']) {
		case 1:
			$serv = new ServicoControl();
			$serv->Add($_POST['nome'], $_POST['preco'], $_POST['descricao']);
			?>
			  <script type="text/javascript">
			    alert("Servico Registrado");
			    history.back();
			  </script>
			<?php
		break;
		case 2:
			$serv = new ServicoControl();
			$serv->Mod($_POST['id'], $_POST['nome'], $_POST['preco'], $_POST['descricao']);
			?>
			  <script type="text/javascript">
			    alert("Servico Modificado");
			    history.back();
			  </script>
			<?php
		break;
		case 3:
			$serv = new ServicoControl();
			$serv->Del($_POST['id']);
			?>
			  <script type="text/javascript">
			    alert("Servico Excluido");
			    history.back();
			  </script>
			<?php
		break;
		default:
		break;
	}