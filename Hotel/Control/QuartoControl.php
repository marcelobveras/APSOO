<?php
	require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Model/Quarto.class.php';
class QuartoControl {
	private $Quarto;
	public static $border = 1;

	public function QuartoControl(){
		$this->Quarto = new Quarto();
	}
	
	public function ShowAll()
	{
		$todos = $this->Quarto->ListAll();
		?><select name="quarto" >
			<?php foreach ($todos as $row){ 
			if ( $row['disponivel'] == 1){?>
		<option value="<?php echo $row['id']; ?>">
		 	<?php echo $row['nome']; ?>
		</option>
		<?php }
			} ?>
		</select>
		<?php 
	}
	
	public function disponQuarto($id)
	{
		$quarto = $this->Quarto->SelectById($id);;
		$quarto->setDisponivel(!$quarto->getDisponivel());
		$quarto->edit();
	}
	
	public function QuartoI($id)
	{
		$quarto = $this->Quarto->SelectById($id);
		return $quarto;
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