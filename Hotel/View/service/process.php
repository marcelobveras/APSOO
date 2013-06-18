<?php
	require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/ServicoControl.php';
	require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/ReservaControl.php';
	require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/QuartoControl.php';
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
			$qc = new QuartoControl();
			$qc->disponQuarto($_POST['quarto']);
			$reserv->Add($_POST['hospede'], $_POST['quarto'], $_POST['data'],  $_POST['dataFim']);
			?>
						  <script type="text/javascript">
						    alert("Reserva Registrada");
						    window.location = '/Hotel/View/Reservas.php';
						  </script>
			<?php			
			break;
			case 5:
				$reserv = new ReservaControl();
				$reserv->CheckIn($_POST['id']);
				?>
												  <script type="text/javascript">
												    alert("Check In de cliente realizado");
												    window.location = '/Hotel/View/Checkin.php';
												  </script>
				<?php			
				break;
			case 6:
				$reserv = new ReservaControl();
				$qc = new QuartoControl();
				$qc->disponQuarto($reserv->ReservaI($_POST['id'])->getQuarto_id());
				$reserv->CancelarI($_POST['id']);
				?>
									  <script type="text/javascript">
									    alert("Reserva Cancelada");
									    window.location = '/Hotel/View/Reservas.php';
									  </script>
				<?php			
				break;
				case 4:
					$reserv = new ReservaControl();
					$qc = new QuartoControl();
					$qc->disponQuarto($_POST['quarto']);
					$reserv->Add($_POST['hospede'], $_POST['quarto'], $_POST['data']);
					?>
										  <script type="text/javascript">
										    alert("Reserva Registrada");
										    window.location = '/Hotel/View/Reservas.php';
										  </script>
					<?php			
					break;
				
								
								
				
				
		default:
		break;
	}