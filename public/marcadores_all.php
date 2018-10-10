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
			
			$myLocid = floatval($_GET["local_id"]);
			
			$sql="SELECT * FROM pois ";
						
			$rs = $conn->query($sql) ;
			
			
			
			
			
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
								'avo_aldeia' => $row['local_id'],
								'nome' => $row['name'],
								'descricao' => $row['excerpt'],
								'local' => $row['local'],
								'image' => $row['image'],
								'latitude' => $row['latitude'],
								'icon' => $row['icon'],
								'descricao2' => $row['body'],
								'longitude' => $row['longitude'], );
								
					
      				$lista[$nID] = array_map("utf8_encode",$arr);
                    
      				//echo '<br />';
      				//echo $lista[$nID];
                    
      				$nID++;

      			}
   			
   			//echo 'Lista Final <br />';
			$resposta = array('markers' => $lista );
			echo json_encode($resposta);
          
		?>