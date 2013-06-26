<?php
date_default_timezone_set("Brazil/East");
	require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Model/Reserva_servico.class.php';
class ReservaServicoControl {
	private $ReservaServico;
	public static $border = 1;

	public function ReservaServicoControl(){
		$this->ReservaServico = new Reserva_Servico();
	}
	
	public function showByReserva($id_reserva)
	{
		$todos = $this->ReservaServico->SelectByReserva($id_reserva);
		?><table border='<?php echo ServicoControl::$border;?>'>
				<tr>
					<td align="center">&zwnj;&zwnj;</td>
					<td align="center" style="display:none;">Id</td>
					<td align="center">Servi&ccedil;o</td>
				</tr>
				<?php
				if($todos != null){ 
					foreach ($todos as $row){
						$serv = new ServicoControl();
						$s = $serv->ServicoI($row['servic_id']);?>
				<tr>
					<td><a href="/Hotel/View/service/LancarServico.php?rs=<?php echo $row['id'];?>&d=1">Estornar</a></td>
					<td style="display:none;"><?php echo $row['id']; ?></td>
					<td><?php echo $s->getNome(); ?></td>
				</tr>
				<?php }
				} ?>
				</table>
				<?php 
	}
	
	public function ReservaServicoI($id)
	{
		$hosp = $this->ReservaServico->SelectById($id);
		return $hosp;
	}
	
	public function Add($reserv_id, $servic_id)
	{
		$this->ReservaServico->setReserv_id($reserv_id);
		$this->ReservaServico->setServic_id($servic_id);
		$this->ReservaServico->save();
	}
	
	
	public function Del($id)
	{
		$this->ReservaServico->setId($id);
		$this->ReservaServico->delete();
	}
	
}