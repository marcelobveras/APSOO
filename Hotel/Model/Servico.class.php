<?php
require_once '/PDOConnectionFactory.class.php';
require_once '/model.interface.php';
class Servico implements model {
	private $connection;
	private $id;
	private $nome;
	private $descricao;
	private $preco;

	public function Hospede(){
		$con = new PDOConnectionFactory();
		$this->connection = $con->getConnection();
	}
	
	public function getId() {
		return $this->id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function getDescricao() {
		return $this->descricao;
	}

	public function getPreco() {
		return $this->preco;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}

	public function setPreco($preco) {
		$this->preco = $preco;
	}

	public function setId($id) {
		$this->id = $id;
	}
	
	public function save(){
		$stmt = $this->connection->prepare("INSERT INTO servico (nome, descricao, preco)
			VALUES (?,?,?)") or die(mysql_error());
	
		$stmt->bindValue(1, $this->getNome());
		$stmt->bindValue(2, $this->getDescricao());
		$stmt->bindValue(3, $this->getPreco());
	
		return $stmt->execute();
	}
	public function delete(){
		$stmt = $this->connection->prepare("DELETE FROM servico WHERE id = ?") or die(mysql_error());
		$stmt->bindValue(1, $this->getId());
		return $stmt->execute();
	}
	
	public function SelectById($Id){
		$stmt = $this->connection->prepare("SELECT * FROM servico WHERE id = ?") or die(mysql_error());
		$stmt->bindValue(1, $Id);
		$stmt->execute();
		$row = $stmt->fetch();
		//var_dump($row);
		$this->setId($row['id']);
		$this->setNome($row['nome']);
		$this->setCpf($row['desc']);
		$this->setSexo($row['preco']);
		return $row;
	}
	
	public function ListAll(){
		$all;
		$ind = 0;
		$stmt = $this->connection->prepare("SELECT * FROM servico", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL)) or die(mysql_error());
		$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))
		{
				
			$all[$ind]['id'] = $row[0];
			$all[$ind]['nome'] = $row[1];
			$all[$ind]['desc'] = $row[2];
			$all[$ind]['preco'] = $row[3];
			$ind++;
		}
		return $all;
	}
}