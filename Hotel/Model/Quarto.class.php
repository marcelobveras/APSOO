<?php
require_once '/PDOConnectionFactory.class.php';
require_once '/model.interface.php';
class Quarto implements model {
	private $connection;
	private $id;
	private $nome;
	private $disponivel;
	private $tipo;


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

	public function getDisponivel() {
		return $this->disponivel;
	}
	
	public function getTipo() {
		return $this->tipo;
	}
	

	public function setNome($nome) {
		$this->nome = $nome;
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
	
	public function edit(){
		$stmt = $this->connection->prepare("UPDATE quarto SET
				nome=?, disponivel=?, tipo_quarto=?
				WHERE id=? ") or die(mysql_error());
	
		$stmt->bindValue(1, $this->getNome());
		$stmt->bindValue(2, $this->getDisponivel());
		$stmt->bindValue(3, $this->getTipo());
		$stmt->bindValue(4, $this->getId());
		$bool = $stmt->execute();
		return $bool;
	}

	public function save(){
		$stmt = $this->connection->prepare("INSERT INTO quarto (nome, disponivel, tipo_quarto)
			VALUES (?,?,?") or die(mysql_error());
	
		$stmt->bindValue(1, $this->getNome());
		$stmt->bindValue(2, $this->getDisponivel());
		$stmt->bindValue(3, $this->getTipo());
	
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
		$this->setDisponivel($row['disponivel']);
		$this->setTipo($row['tipo_quarto']);
		return $this;
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
			$all[$ind]['disponivel'] = $row[2];
			$all[$ind]['tipo'] = $row[3];
			$ind++;
		}
		return $all;
	}
	
	public function ListAllData($dateini, $datefim){
		$all;
		$ind = 0;
		$stmt = $this->connection->prepare("SELECT DISTINCT q.* FROM quarto q 
					WHERE q.id NOT IN (SELECT q.id FROM quarto q, reserva r 
										WHERE q.id = r.quarto_id
											AND r.data_inicio < ? 
											AND r.data_fim > ? AND (r.check_in != 0 || r.check_in != 1)) ", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL)) or die(mysql_error());
		$stmt->bindValue(1, $datefim);
		$stmt->bindValue(2, $dateini);
		$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))
		{
	
			$all[$ind]['id'] = $row[0];
			$all[$ind]['nome'] = $row[1];
			$all[$ind]['disponivel'] = $row[2];
			$all[$ind]['tipo'] = $row[3];
			$ind++;
		}
		return $all;
	}

}