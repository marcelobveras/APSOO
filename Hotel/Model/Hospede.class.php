<?php
require_once '/PDOConnectionFactory.class.php';
require_once '/model.interface.php';
class Hospede implements model {
	private $connection;
	private $id;
	private $nome;
	private $cpf;
	private $sexo;

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
		$this->cpf = $cpf;
	}

	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}

	public function setId($id) {
		$this->id = $id;
	}
	
	public function save(){
		$stmt = $this->connection->prepare("INSERT INTO hospede (nome, cpf, sexo)
			VALUES (?,?,?)") or die(mysql_error());
		
		$stmt->bindValue(1, $this->getNome());
		$stmt->bindValue(2, $this->getCpf());
		$stmt->bindValue(3, $this->getSexo());
	
		return $stmt->execute();
	}
	public function delete(){
		$stmt = $this->connection->prepare("DELETE FROM hospede WHERE id = ?") or die(mysql_error());
		$stmt->bindValue(1, $this->getId());
		return $stmt->execute();
	}
	
	public function SelectById($Id){
		$stmt = $this->connection->prepare("SELECT * FROM hospede WHERE id = ?") or die(mysql_error());
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
		$stmt = $this->connection->prepare("SELECT * FROM hospede order by nome", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL)) or die(mysql_error());
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
	
	public function selectByName($name){
		$all;
		$ind = 0;
		$stmt = $this->connection->prepare("SELECT * FROM hospede where nome like '%?%' order by nome", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL)) or die(mysql_error());
		$stmt->bindValue(1, $name);
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