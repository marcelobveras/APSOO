<?php
require_once '/PDOConnectionFactory.class.php';
require_once '/model.interface.php';
class Quarto implements model {
	private $connection;
	private $id;
	private $nome;
	private $numero;
	private $disponivel;
	private $tipo;
	private $preco;

	public function Quarto(){
		$con = new PDOConnectionFactory();
		$this->connection = $con->getConnection();
	}
	
	public function getId() {
		return $this->id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function getNumero() {
		return $this->numero;
	}

	public function getDisponivel() {
		return $this->disponivel;
	}
	
	public function getTipo() {
		return $this->tipo;
	}
	
	public function getPreco() {
		return $this->preco;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function setNumero($numero) {
		$this->id = $numero;
	}

	public function setDisponivel($disponivel) {
		$this->disponivel = $disponivel;
	}

	public function setId($id) {
		$this->id = $id;
	}
	
	public function setTipo($tipo) {
		$this->tipo = $tipo;
	}
	
	public function setPreco($preco) {
		$this->preco = $preco;
	}
	
	public function save(){
		$stmt = $this->connection->prepare("INSERT INTO quarto (nome, numero, disponivel, tipo)
			VALUES (?,?,?") or die(mysql_error());
	
		$stmt->bindValue(1, $this->getNome());
		$stmt->bindValue(2, $this->getNumero());
		$stmt->bindValue(3, $this->getDisponivel());
		$stmt->bindValue(4, $this->getTipo());
	
		return $stmt->execute();
	}
	public function delete(){
		$stmt = $this->connection->prepare("DELETE FROM quarto WHERE id = ?") or die(mysql_error());
		$stmt->bindValue(1, $this->getId());
		return $stmt->execute();
	}
	
	public function SelectById($Id){
		$stmt = $this->connection->prepare("SELECT * FROM quarto WHERE id = ?") or die(mysql_error());
		$stmt->bindValue(1, $Id);
		$stmt->execute();
		$row = $stmt->fetch();
		//var_dump($row);
		$this->setId($row['id']);
		$this->setNome($row['nome']);
		$this->setNumero($row['numero']);
		$this->setDisponivel($row['disponivel']);
		$this->tipo($row['tipo']);
		$this->preco($row['preco']);
		return $row;
	}
	
	public function ListAll(){
		$all;
		$ind = 0;
		$stmt = $this->connection->prepare("SELECT * FROM quarto", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL)) or die(mysql_error());
		$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))
		{
				
			$all[$ind]['id'] = $row[0];
			$all[$ind]['nome'] = $row[1];
			$all[$ind]['cpf'] = $row[2];
			$all[$ind]['disp'] = $row[3];
			$ind++;
		}
		return $all;
	}

}