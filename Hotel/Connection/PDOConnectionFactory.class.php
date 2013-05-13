<?php 
class PDOConnectionFactory{
	// recebe a conex�o
	public $con = null;
	// qual o banco de dados?
	public $dbType 	= "mysql";

	// par�metros de conex�o
	// quando n�o for necess�rio deixe em branco apenas com as aspas duplas ""
	public $host 	= "localhost";
	public $user 	= "root";
	public $senha 	= "";
	public $db		= "memhotel";

	// seta a persist�ncia da conex�o
	public $persistent = false;

	// new PDOConnectionFactory( true ) <--- conex�o persistente
	// new PDOConnectionFactory()       <--- conexao n�o persistente
	public function PDOConnectionFactory( $persistent=false ){
		// verifico a persist�ncia da conexao
		if( $persistent != false){
			$this->persistent = true;
		}
	}

	public function getConnection(){
		try{
			// realiza a conex�o
			$this->con = new PDO($this->dbType.":host=".$this->host.";dbname=".$this->db, $this->user, $this->senha,
					array( PDO::ATTR_PERSISTENT => $this->persistent ) );
			// realizado com sucesso, retorna conectado
			return $this->con;
			// caso ocorra um erro, retorna o erro;
		}catch ( PDOException $ex ){
			echo "Erro: ".$ex->getMessage();
		}

	}

	// desconecta
	public function Close(){
		if( $this->con != null )
			$this->con = null;
	}

}