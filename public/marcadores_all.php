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

	$myLocid = floatval($_GET["local_id"]);

	$sql="SELECT * FROM pois ";

	$rs = $conn->query($sql) ;

	if(!$rs){
		print_r($conn->errorInfo());
	}

	foreach ($rs as $row){
		$arr =  array(
			'id' => strval($nID+1),
			'avo_aldeia' => $row['local_id'],
			'nome' => $row['name'],
			'descricao' => $row['excerpt'],
			'local' => $row['local'],
			'image' => $row['image'],
			'latitude' => $row['latitude'],
			'icon' => $row['icon'],
			'descricao2' => $row['body'],
			'longitude' => $row['longitude'], );

			$lista[$nID] = $arr;

			$nID++;

		}

		$resposta = array('markers' => $lista );

		echo json_encode($resposta);

?>
