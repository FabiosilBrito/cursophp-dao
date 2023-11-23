<?php

$comm = new PDO("mysql:dbname=dbphp7;host=localhost", "root", ""); //Conecta no banco com PDO

$stmt = $comm->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {

	foreach ($row as $key => $value) {

		echo "<strong>".$key.":</strong>".$value."</br>";

	}

	echo "################################################</br>";

}

//var_dump($results);

//$login = "user";
//$pass = "654321";

//$stmt->execute();

//$stmt->execute();






?>