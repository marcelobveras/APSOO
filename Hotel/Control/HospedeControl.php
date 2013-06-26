<?php
date_default_timezone_set("Brazil/East");
	require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Model/Hospede.class.php';
class HospedeControl {
	private $Hospede;
	public static $border = 1;

	public function HospedeControl(){
		$this->Hospede = new Hospede();
	}
	
	public function ShowAll()
	{
		$todos = $this->Hospede->ListAll();
		?><select name="hospede" >
			<?php foreach ($todos as $row){?>
		<option value="<?php echo $row['id']; ?>" >
		 	<?php echo $row['nome']; ?>
		</option>
		<?php } ?>
		</select>
		<?php 
	}
	
	public function ShowAllTable()
	{
		$todos = $this->Hospede->ListAll();
		?><table border="1">
				<tr>
					<td align="center">&zwnj;&zwnj;</td>
					<td align="center">&zwnj;&zwnj;</td>
					<td align="center" style="display:none;">Id</td>
					<td align="center">Nome</td>
					<td align="center">Numero do Documento</td>
					<td align="center">Sexo</td>
				</tr>
				<?php foreach ($todos as $row){?>
				<tr>
				<td><a href="/Hotel/View/service/AddService.php?f=<?php echo $row['id'];?>&d=1">Deletar</a></td>
				<td><a href="/Hotel/View/service/AddService.php?f=<?php echo $row['id'];?>">Editar</a></td>
				<td style="display:none;"><?php echo $row['id']; ?></td>
			 	<td><?php echo $row['nome']; ?></td>
				<td><?php echo $row['cpf']; ?></td>
				<td><?php echo $row['sexo']; ?></td>
				</tr>
			<?php } ?>
			</table>
			<?php 
		}
	
	public function HospedeI($id)
	{
		$Hospede = $this->Hospede->SelectById($id);
		return $Hospede;
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