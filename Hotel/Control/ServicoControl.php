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
			<td align="center">&zwnj;&zwnj;</td>
			<td align="center">&zwnj;&zwnj;</td>
			<td align="center" style="display:none;">Id</td>
			<td align="center">Nome</td>
			<td align="center">pre&ccedil;o</td>
			<td align="center">Descricao</td>
		</tr>
		<?php foreach ($todos as $row){?>
		<tr>
			<td><button>Deletar</button></td>
			<td><button>Editar</button></td>
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
	
}