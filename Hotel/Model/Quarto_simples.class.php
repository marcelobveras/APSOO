<?php
require_once '/PDOConnectionFactory.class.php';
require_once '/model.interface.php';
class Quarto_simples extends Quarto{
	private $connection;
	private $id;
	private $quarto_id;
	private $valor_diaria;
	
	public function Quarto_simples(){
		$con = new PDOConnectionFactory();
		$this->connection = $con->getConnection();
	}

	public function getId() {
		return $this->id;
	}

	public function getQuarto_id() {
		return $this->quarto_id;
	}

	public function getValor_diaria() {
		return $this->valor_diaria;
	}

	public function setQuarto_id($quarto_id) {
		$this->quarto_id = $quarto_id;
	}

	public function setValor_diaria($valor_diaria) {
		$this->valor_diaria = $valor_diaria;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function save(){
		$stmt = $this->connection->prepare("INSERT INTO quarto_simples (quarto_id, valor_diaria)
			VALUES (?,?)") or die(mysql_error());
	
		$stmt->bindValue(1, $this->getQuarto_id());
		$stmt->bindValue(2, $this->getValor_diaria());
	
		return $stmt->execute();
	}
	
	public function delete(){
		$stmt = $this->connection->prepare("DELETE FROM quarto_simples WHERE id = ?") or die(mysql_error());
		$stmt->bindValue(1, $this->getId());
		return $stmt->execute();
	}
	
	public function SelectById($Id){
		$stmt = $this->connection->prepare("SELECT * FROM quarto_simples WHERE id = ?") or die(mysql_error());
		$stmt->bindValue(1, $Id);
		$stmt->execute();
		$row = $stmt->fetch();
		//var_dump($row);
		$this->setId($row['id']);
		$this->setNome($row['quarto_id']);
		$this->setNumero($row['valor_diaria']);
		return $row;
	}
	
	public function ListAll(){
		$all;
		$ind = 0;
		$stmt = $this->connection->prepare("SELECT * FROM quarto_simples", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL)) or die(mysql_error());
		$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))
		{
	
			$all[$ind]['id'] = $row[0];
			$all[$ind]['id quarto'] = $row[1];
			$all[$ind]['diaria'] = $row[2];
			$ind++;
		}
		return $all;
	}
}