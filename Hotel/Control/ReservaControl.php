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
		</tr>
		<?php foreach ($todos as $row){
			if (!$row['check_in']){
			?>
			<tr>
				<td><a href="">Cancelar</a></td>
				<td><a href="">Check In</a></td>
				<td style="display:none;"><?php echo $row['id']; ?></td>
				<?php $hosp = new HospedeControl();
						$quart = new QuartoControl();?>
			 	<td><?php echo $hosp->HospedeI($row['hosp_id'])['cpf']; ?></td>
				<td><?php echo $quart->QuartoI($row['quarto_id'])['nome']; ?></td>
				<td><?php echo $row['data_inicio']; ?></td>
			</tr>
		<?php }
			} ?>
		</table>
		<?php 
	}
	
	/* public function ServicoI($id)
	{
		$serv = $this->Servico->SelectById($id);
		return $serv;
	}
	
	public function Add($nome, $preco, $descricao)
	{
		$this->Servico->setNome($nome);
		$this->Servico->setPreco($preco);
		$this->Servico->setDescricao($descricao);
		$this->Servico->save();
	}
	
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