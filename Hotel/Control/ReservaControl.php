<?php
	require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Model/Reserva.class.php';
class ServicoControl {
	private $Reserva;
	public static $border = 1;

	public function ReservaControl(){
		$this->Reserva = new Reserva();
	}
	
	public function ShowAll()
	{
		$todos = $this->Reserva->ListAll();
		?><table border='<?php echo ServicoControl::$border;?>'>
		<tr>
			<td align="center">&zwnj;&zwnj;</td>
			<td align="center">&zwnj;&zwnj;</td>
			<td align="center" style="display:none;">Id</td>
			<td align="center">CPF Cliente</td>
			<td align="center">Quarto</td>
			<td align="center">Data Reserva</td>
		</tr>
		<?php foreach ($todos as $row){?>
		<tr>
			<td><a href="">Cancelar</a></td>
			<td><a href="">Check In</a></td>
			<td style="display:none;"><?php echo $row['id']; ?></td>
		 	<td><?php echo $row['nome']; ?></td>
			<td><?php echo $row['preco']; ?></td>
			<td><?php echo $row['descricao']; ?></td>
		</tr>
		<?php } ?>
		</table>
		<?php 
	}
	
	public function ServicoI($id)
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
	}
	
}