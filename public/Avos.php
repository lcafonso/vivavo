<?php

	$dsn = 'mysql:host=localhost;dbname=vivavo_data;charset=utf8';
	$user = 'root';
	$password = 'esact.ipb.pt';
	try {
		$conn = new PDO($dsn, $user, $password);
		if(!$conn){
			die('Erro ao criar a conexão');
		}
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}

	$nID = 0;

	$rs = $conn->query("SELECT * FROM grandmas") ;

	if(!$rs){
		print_r($conn->errorInfo());
	}

	foreach ($rs as $row){

		$arr =  array(
			'id' => strval($nID+1),
			'avo_aldeia' => $row['id'],
			'Nome' => $row['name'],
			'Descricao' => $row['excerpt'],
			'Image' => $row['file'], );

			$lista[$nID] = $arr;

			$nID++;

		}

		$resposta = array('grandmas' => $lista );

		echo json_encode($resposta);

?>
