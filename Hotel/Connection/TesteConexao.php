<?php
require("PDOConnectionFactory.class.php");

try {
	$pdo = new PDOConnectionFactory();
	$pdo->getConnection();
	// estou conectado
	echo "Sucesso";

	$pdo = null;
}catch (PDOException $ex){
	echo $ex->getMessage();
}
echo "<br>teste 123";