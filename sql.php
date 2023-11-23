<?php

class sql extends PDO
{

	private $conn;

	public function __construct()
	{

		$this->conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

	}

	private function setParams($statment, $parameters = array())
	{

		foreach ($parameters as $key => $value) {

			$this->setParam($statment, $key, $value);

		}

	}

	private function setParam($statment, $key, $value)
	{

		$statment->bindParam($key, $value);

	}

	public function run($rawQuery, $params = array()) //NO Php8 não usa mias a método QUERY, usa-se RUN para montar uma "query."
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;

	}

	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->run($rawQuery, $params); //query

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}
}

?>