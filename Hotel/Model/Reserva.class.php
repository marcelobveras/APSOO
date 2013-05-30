<?php
require_once '/Hospede.class.php';
require_once '/PDOConnectionFactory.class.php';
require_once '/model.interface.php';
class Hospede implements model {
	private $connection;
	private $id;
	private $recep_id;
	private $hosp_id;
	private $quarto_id;
	private $data_ini;
	private $data_fim;
	private $check_in;

	public function Reserva(){
		$con = new PDOConnectionFactory();
		$this->connection = $con->getConnection();
	}
	
	public function getId() {
		return $this->id;
	}

	public function getRecep_id() {
		return $this->recep_id;
	}

	public function getHosp_id() {
		return $this->hosp_id;
	}

	public function getQuarto_id() {
		return $this->quarto_id;
	}

	public function getData_ini() {
		return $this->data_ini;
	}
	
	public function getData_fim() {
		return $this->data_fim;
	}

	public function setRecep_id($recep_id) {
		$this->recep_id = $recep_id;
	}

	public function setHosp_id($hosp_id) {
		$this->id = $hosp_id;
	}

	public function setQuarto_id() {
		$this->quarto_id = $quarto_id;
	}
	
	public function setData_ini() {
		$this->data_ini = $data_ini;
	}

	public function setData_fim() {
		$this->data_fim = $data_fim;
	}

	public function setId($id) {
		$this->id = $id;
	}
	
	public function save(){
		$stmt = $this->connection->prepare("INSERT INTO reserva (recep_id, hosp_id, quarto_id, data_ini, data_fim)
			VALUES (?,?,?,?,?)") or die(mysql_error());
	
		$stmt->bindValue(1, $this->getRecep_id());
		$stmt->bindValue(2, $this->getHosp_id());
		$stmt->bindValue(3, $this->getQuarto_id());
		$stmt->bindValue(4, $this->getData_ini());
		$stmt->bindValue(5, $this->getData_fim());
		$stmt->bindValue(6, $this->check_in());
		return $stmt->execute();
	}
	public function delete(){
		$stmt = $this->connection->prepare("DELETE FROM reserva WHERE id = ?") or die(mysql_error());
		$stmt->bindValue(1, $this->getId());
		return $stmt->execute();
	}
	
	public function SelectById($Id){
		$stmt = $this->connection->prepare("SELECT * FROM reserva WHERE id = ?") or die(mysql_error());
		$stmt->bindValue(1, $Id);
		$stmt->execute();
		$row = $stmt->fetch();
		//var_dump($row);
		$this->setId($row['id']);
		$this->setRecep_id($row['recep']);
		$this->setHosp_id($row['hosp']);
		$this->setQuarto_id($row['quarto']);
		$this->setData_ini($row['data_inicio']);
		$this->setData_fim($row['data_fim']);
		$this->check_in($row['check_in']);
		return $row;
	}
	
	public function ListAll(){
		$all;
		$ind = 0;
		$stmt = $this->connection->prepare("SELECT * FROM reserva", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL)) or die(mysql_error());
		$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))
		{
				
			$all[$ind]['id'] = $row[0];
			$all[$ind]['recep_id'] = $row[1];
			$all[$ind]['hosp_id'] = $row[2];
			$all[$ind]['quarto_id'] = $row[3];
			$all[$ind]['data_inicio'] = $row[4];
			$all[$ind]['data_fim'] = $row[5];
			$all[$ind]['check_in'] = $row[5];
			$ind++;
		}
		return $all;
	}

}