<?php
	require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Model/Reserva.class.php';
	require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/HospedeControl.php';
	require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Control/QuartoControl.php';
class ReservaControl {
	private $Reserva;
	public static $border = 1;

	public function ReservaControl(){
		$this->Reserva = new Reserva();
	}
	
	public function ShowAll()
	{
		$todos = $this->Reserva->ListAll();
		?><table border='<?php echo ReservaControl::$border;?>'>
		<tr>
			<td align="center">&zwnj;&zwnj;</td>
			<td align="center">&zwnj;&zwnj;</td>
			<td align="center" style="display:none;">Id</td>
			<td align="center">CPF Cliente</td>
			<td align="center">Quarto</td>
			<td align="center">Data Reserva</td>
			<td align="center">Data Fim Reserva</td>
		</tr>
		<?php foreach ($todos as $row){
			if (!$row['check_in'] && $row['check_in'] != null){
			?>
			<tr>
				<td><a href="/Hotel/View/service/AddReserva.php?f=<?php echo $row['id'];?>&d=1">Cancelar</a></td>
				<td><a href="/Hotel/View/service/AddReserva.php?f=<?php echo $row['id'];?>">Check In</a></td>
				<td style="display:none;"><?php echo $row['id']; ?></td>
				<?php $hosp = new HospedeControl();
						$quart = new QuartoControl();?>
			 	<td><?php echo $hosp->HospedeI($row['hosp_id'])['cpf']; ?></td>
				<td><?php echo $quart->QuartoI($row['quarto_id'])->getNome(); ?></td>
				<td><?php echo $row['data_inicio']; ?></td>
				<td><?php echo $row['data_fim']; ?></td>
			</tr>
		<?php }
			} ?>
		</table>
		<?php 
	}
	
	public function ShowCheckIn()
	{
		$todos = $this->Reserva->ListAll();
		?><table border='<?php echo ReservaControl::$border;?>'>
			<tr>
				<td align="center">&zwnj;&zwnj;</td>
				<td align="center" style="display:none;">Id</td>
				<td align="center">CPF Cliente</td>
				<td align="center">Quarto</td>
				<td align="center">Data Reserva</td>
			</tr>
			<?php foreach ($todos as $row){
				if ($row['check_in'] && $row['check_in'] != null){
				?>
				<tr>
					<td><a href="">Check Out</a></td>
					<td style="display:none;"><?php echo $row['id']; ?></td>
					<?php $hosp = new HospedeControl();
							$quart = new QuartoControl();?>
				 	<td><?php echo $hosp->HospedeI($row['hosp_id'])['cpf']; ?></td>
					<td><?php echo $quart->QuartoI($row['quarto_id'])->getNome(); ?></td>
					<td><?php echo $row['data_inicio']; ?></td>
				</tr>
			<?php }
				} ?>
			</table>
			<?php 
		}
	
	public function Add($hosp_id, $quarto_id, $dataIni)
	{
		
		$this->Reserva->setHosp_id($hosp_id);
		$this->Reserva->setQuarto_id($quarto_id);
		$this->Reserva->setData_ini($dataIni);
		$this->Reserva->setData_fim(null);
		$this->Reserva->setCheck_in(false);
		$this->Reserva->save();
	}
	
	public function ReservaI($id)
	{
		$serv = $this->Reserva->SelectById($id);
		return $serv;
	}
	
	public function CancelarI($id)
	{
		$serv = $this->Reserva->SelectById($id);
		$serv->setCheck_in(null);
		$serv->edit();
	}
	
	public function CheckIn($id)
	{
		$serv = $this->Reserva->SelectById($id);
		$serv->setCheck_in(true);
		$serv->edit();
	}
	
	/* 
	
	
	
	public function Mod($id, $nome, $preco, $descricao)
	{
		$this->Servico->setId($id);
		$this->Servico->setNome($nome);
		$this->Servico->setPreco($preco);
		$this->Servico->setDescricao($descricao);
		$this->Servico->edit();
	}
	public function Del($id)
	{
		$this->Servico->setId($id);
		$this->Servico->delete();
	} */
	
}