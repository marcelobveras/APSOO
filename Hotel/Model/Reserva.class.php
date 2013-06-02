<?php
require_once '/PDOConnectionFactory.class.php';
require_once '/model.interface.php';
class Reserva implements model {
	private $connection;
	private $id;
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
	
	public function getCheck_in() {
		return $this->check_in;
	}

	public function setHosp_id($hosp_id) {
		$this->hosp_id = $hosp_id;
	}

	public function setQuarto_id($quarto_id) {
		$this->quarto_id = $quarto_id;
	}
	
	public function setData_ini($data) {
		$this->data_ini = $data;
	}

	public function setData_fim($data) {
		$this->data_fim = $data;
	}

	public function setId($id) {
		$this->id = $id;
	}
	
	public function setCheck_in($check_in) {
		$this->check_in = $check_in;
	}
	
	public function edit(){
		$stmt = $this->connection->prepare("UPDATE reserva SET
				hosp_id=?, quarto_id=?, data_inicio=?, data_fim=?, check_in=?
				WHERE id=? ") or die(mysql_error());
	
		$stmt->bindValue(1, $this->getHosp_id());
		$stmt->bindValue(2, $this->getQuarto_id());
		$stmt->bindValue(3, $this->getData_ini());
		$stmt->bindValue(4, $this->getData_fim());
		$stmt->bindValue(5, $this->getCheck_in());
		$stmt->bindValue(6, $this->getId());
		$bool = $stmt->execute();
		return $bool;
	}
	
	public function save(){
		$stmt = $this->connection->prepare("INSERT INTO reserva (hosp_id, quarto_id, data_inicio)
			VALUES (?,?,?)") or die(mysql_error());
		echo $this->getCheck_in();
		$stmt->bindValue(1, $this->getHosp_id());
		$stmt->bindValue(2, $this->getQuarto_id());
		$stmt->bindValue(3, $this->getData_ini());
		$stmt->execute() or die(mysql_errno());
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
		$this->setHosp_id($row['hosp_id']);
		$this->setQuarto_id($row['quarto_id']);
		$this->setData_ini($row['data_inicio']);
		$this->setData_fim($row['data_fim']);
		$this->setCheck_in($row['check_in']);
		return $this;
	}
	
	public function ListAll(){
		$all;
		$ind = 0;
		$stmt = $this->connection->prepare("SELECT * FROM reserva", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL)) or die(mysql_error());
		$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))
		{
			$all[$ind]['id'] = $row[0];
			$all[$ind]['hosp_id'] = $row[1];
			$all[$ind]['quarto_id'] = $row[2];
			$all[$ind]['data_inicio'] = $row[3];
			$all[$ind]['data_fim'] = $row[4];
			$all[$ind]['check_in'] = $row[5];
			$ind++;
		}
		return $all;
	}

}
