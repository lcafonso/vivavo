
<?php

	// Abrindo a base de Dados local
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

	//header('Content-Type: application/json; charset=utf-8');

	$nID = 0;

	$rs = $conn->query("SELECT * FROM events") ;

	if(!$rs){
		print_r($conn->errorInfo());
	}

	foreach ($rs as $row){

		$arr =  array(
			'id' => strval($nID+1),
			'avo_aldeia' => $row['grandma_id'],
			'Nome' => $row['name'],
			'Descricao' => $row['excerpt'],
			'Local' => $row['local'],
			'Image1' => $row['file1'],
			'Image2' => $row['file2'],
			'Image3' => $row['file3'],
			'Image4' => $row['file4'],
			'Image5' => $row['file5'],
			'Programa' => $row['body'],
			'Estado' => $row['status'],
		);

		$sqltext = 'SELECT a.*, b.* FROM activit_event a INNER JOIN activits b ON  a.activit_id = b.id WHERE a.event_id ='.$arr['id'];

    $rs2 = $conn->query($sqltext);

		if(!$rs2){
			print_r($conn->errorInfo());
		}

		$x = 0;

		foreach($rs2 as $atividade){
			$act_arr = array(
				'Data_Hora' => $atividade['scheduled'],
				'Titulo' => $atividade['name'],
				'Descricao' =>  $atividade['body'],
			);

			$arr_atividade[$x] = $act_arr ;

			$x++;

		};

		$arr['Actividades'] = $arr_atividade ;

		$lista[$nID] = $arr;

		$nID++;
	}

	//echo 'Lista Final <br />';

	$resposta = array('events' => $lista );


	echo json_encode($resposta);


?>
