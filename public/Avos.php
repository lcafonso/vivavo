
		<?php






			$dsn = 'mysql:host=localhost;dbname=vivavo_data';
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


			//$stmt = $conn->prepare("SELECT * FROM wp_leafletmapsmarker_markers") ;


			//$emparray = array();
			//$myLat = floatval($_GET["lat"]);
			//$myLng = floatval($_GET["lng"]);
			//$myRng = floatval($_GET["range"]);

			$nID = 0;


			$rs = $conn->query("SELECT * FROM grandmas") ;

			if(!$rs){
     			 print_r($conn->errorInfo());
   			}



			//echo 'Latitude: ' . $myLat . '<br />';
      		//echo 'Longitude: ' . $myLng . '<br />';
      		//echo 'Distancia: ' . $myRng . '<br /><br />';




   			foreach ($rs as $row){
   				//$thisLat = floatval($row['latitude']);
				//$thisLng = floatval($row['longitude']);

				//$myDist = round(distancia($myLat,$myLng, $thisLat, $thisLng, "K"),2);

				//echo 'Latitude: ' . $thisLat . '<br />';
      			//echo 'Longitude: ' . $thisLng . '<br />';
      			//echo 'Distancia: ' . $myDist . '<br /><br />';

				//if( floatval($myDist) < $myRng ) {



      				$arr =  array('id' => strval($nID+1),
								'avo_aldeia' => $row['id'],
								'Nome' => $row['name'],
								'Descricao' => $row['excerpt'],
								'Image' => $row['file'], );











      				$lista[$nID] = array_map("utf8_encode",$arr);

      				//echo '<br />';
      				//echo $lista[$nID];

      				$nID++;

      			}

   			//echo 'Lista Final <br />';
			$resposta = array('grandmas' => $lista );
			echo json_encode($resposta);

		?>
