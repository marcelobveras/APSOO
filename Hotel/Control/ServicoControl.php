<?php
	require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Model/Servico.class.php';
class ServicoControl {
	private $Servico;
	public static $border = 1;

	public function ServicoControl(){
		$this->Servico = new Servico();
	}
	
	public function ShowAll()
	{
		$todos = $this->Servico->ListAll();
		?><table border='<?php echo ServicoControl::$border;?>'>
		<tr>
			<td>Nome</td>
			<td>Descricao</td>
			<td>preco</td>
		</tr>
		<?php foreach ($todos as $row){?>
		<tr>
		 	<td><?php echo $row['nome']; ?></td>
			<td><?php echo $row['preco']; ?></td>
			<td><?php echo $row['descricao']; ?></td>
		</tr>
		<?php } ?>
		</table>
		<?php 
	}
}