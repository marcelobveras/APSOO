<?php
	require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Model/Hospede.class.php';
class ServicoControl {
	private $Quarto;
	public static $border = 1;

	public function ServicoControl(){
		$this->Quarto = new Quarto();
	}
	
	public function ShowAll()
	{
		$todos = $this->Hospede->ListAll();
		?><select name="hospede" >
			<?php foreach ($todos as $row){?>
		<option value="id">
		 	<?php echo $row['cpf']; ?>
		</option>
		<?php } ?>
		</select>
		<?php 
	}
	
	public function HospedeI($id)
	{
		$Hospede = $this->Hospede->SelectById($id);
		return $serv;
	}
	
	/* public function Add($nome, $preco, $descricao)
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