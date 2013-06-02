<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Model/PDOConnectionFactory.class.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Model/model.interface.php';
class Servico implements model {
	private $connection;
	private $id;
	private $nome;
	private $descricao;
	private $preco;

	public function Servico(){
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

		$bool = $stmt->execute();
		$this->setId(mysql_insert_id());
		return $bool;
	}
	
	public function edit(){
		$stmt = $this->connection->prepare("UPDATE servico SET 
				nome=?, descricao=?, preco=? 
				WHERE id=? ") or die(mysql_error());
	
		$stmt->bindValue(1, $this->getNome());
		$stmt->bindValue(2, $this->getDescricao());
		$stmt->bindValue(3, $this->getPreco());
		$stmt->bindValue(4, $this->getId());
		$bool = $stmt->execute();
		return $bool;
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
		$this->setDescricao($row['descricao']);
		$this->setPreco($row['preco']);
		return $this;
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
			$all[$ind]['descricao'] = $row[2];
			$all[$ind]['preco'] = $row[3];
			$ind++;
		}
		@return $all;
	}
}