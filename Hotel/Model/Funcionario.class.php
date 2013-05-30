<?php
require_once '/PDOConnectionFactory.class.php';
require_once '/model.interface.php';
class Funcionario implements model {
	private $connection;
	private $id;
	private $nome;
	private $cpf;
	private $sexo;

	public function Funcionario(){
		$con = new PDOConnectionFactory();
		$this->connection = $con->getConnection();
	}
	
	public function getId() {
		return $this->id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function getCpf() {
		return $this->cpf;
	}

	public function getSexo() {
		return $this->sexo;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function setCpf($cpf) {
		$this->id = $cpf;
	}

	public function setSexo() {
		$this->sexo = $sexo;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function save(){
		$stmt = $this->connection->prepare("INSERT INTO funcionario (nome, cpf, sexo)
			VALUES (?,?,?)") or die(mysql_error());
	
		$stmt->bindValue(1, $this->getNome());
		$stmt->bindValue(2, $this->getCpf());
		$stmt->bindValue(3, $this->getSexo());
	
		return $stmt->execute();
	}
	public function delete(){
		$stmt = $this->connection->prepare("DELETE FROM funcionario WHERE id = ?") or die(mysql_error());
		$stmt->bindValue(1, $this->getId());
		return $stmt->execute();
	}
	
	public function SelectById($Id){
		$stmt = $this->connection->prepare("SELECT * FROM funcionario WHERE id = ?") or die(mysql_error());
		$stmt->bindValue(1, $Id);
		$stmt->execute();
		$row = $stmt->fetch();
		//var_dump($row);
		$this->setId($row['id']);
		$this->setNome($row['nome']);
		$this->setCpf($row['cpf']);
		$this->setSexo($row['sexo']);
		return $row;
	}
	
	public function ListAll(){
		$all;
		$ind = 0;
		$stmt = $this->connection->prepare("SELECT * FROM funcionario", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL)) or die(mysql_error());
		$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))
		{
				
			$all[$ind]['id'] = $row[0];
			$all[$ind]['nome'] = $row[1];
			$all[$ind]['cpf'] = $row[2];
			$all[$ind]['sexo'] = $row[3];
			$ind++;
		}
		return $all;
	}
}