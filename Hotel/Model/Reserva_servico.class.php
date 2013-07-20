<?php
require_once '/PDOConnectionFactory.class.php';
require_once '/model.interface.php';
class Reserva_Servico {
	private $connection;
	private $id;
	private $reserv_id;
	private $servic_id;
	private $data;
	
	public function Reserva_Servico(){
		$con = new PDOConnectionFactory();
		$this->connection = $con->getConnection();
	}

	public function getId() {
		return $this->id;
	}

	public function getReserv_id() {
		return $this->reserv_id;
	}

	public function getServic_id() {
		return $this->servic_id;
	}

	public function setReserv_id($reserv_id) {
		$this->reserv_id = $reserv_id;
	}

	public function setServic_id($servic_id) {
		$this->servic_id = $servic_id;
	}

	public function setId($id) {
		$this->id = $id;
	}
	
	public function getData() {
		return $this->data;
	}
	
	public function setData($data) {
		$this->data = $data;
	}
	
	public function save(){
		$stmt = $this->connection->prepare("INSERT INTO reserva_servico (reserv_id, servic_id, data)
			VALUES (?,?,CURDATE())") or die(mysql_error());
	
		$stmt->bindValue(1, $this->getReserv_id());
		$stmt->bindValue(2, $this->getServic_id());
		return $stmt->execute();
	}
	public function delete(){
		$stmt = $this->connection->prepare("DELETE FROM reserva_servico WHERE id = ?") or die(mysql_error());
		$stmt->bindValue(1, $this->getId());
		return $stmt->execute();
	}
	
	public function SelectById($Id){
		$stmt = $this->connection->prepare("SELECT * FROM reserva_servico WHERE id = ?") or die(mysql_error());
		$stmt->bindValue(1, $Id);
		$stmt->execute();
		$row = $stmt->fetch();
		//var_dump($row);
		$this->setId($row['id']);
		$this->setNome($row['reserv_id']);
		$this->setCpf($row['servic_id']);
		$this->setData($row['data']);
		return $this;
	}
	
	public function SelectByReserva($id_reserva){
		$all;
		$ind = 0;
		$stmt = $this->connection->prepare("SELECT * FROM reserva_servico WHERE reserv_id = ?") or die(mysql_error());
		$stmt->bindValue(1, $id_reserva);
		$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))
		{
				
			$all[$ind]['id'] = $row[0];
			$all[$ind]['reserv_id'] = $row[1];
			$all[$ind]['servic_id'] = $row[2];
			$all[$ind]['data'] = $row[3];
			$ind++;
		}
		return $all;
	}
	
	public function ListAll(){
		$all;
		$ind = 0;
		$stmt = $this->connection->prepare("SELECT * FROM reserva_servico", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL)) or die(mysql_error());
		$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))
		{
				
			$all[$ind]['id'] = $row[0];
			$all[$ind]['id reserva'] = $row[1];
			$all[$ind]['id servico'] = $row[2];
			$all[$ind]['data'] = $row[3];
			$ind++;
		}
		return $all;
	}
}