<html>
<head>
<title>Query string </title>
</head>
	<body>

		<?php

			function distancia($lat1, $lon1, $lat2, $lon2, $unit) {

				$theta = $lon1 - $lon2;
				$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
				$dist = acos($dist);
				$dist = rad2deg($dist);
				$miles = $dist * 60 * 1.1515;
				$unit = strtoupper($unit);

				if ($unit == "K") {
						return ($miles * 1.609344);
					} else if ($unit == "N") {
						return ($miles * 0.8684);
					} else {
						return $miles;
				}
			}
                
           

        
			$dsn = 'mysql:host=db4free.net;dbname=vivavo_data';
			$user = 'vivavousername';
			$password = 'vivavo2018';
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
            

			$emparray = array();
			$myLat = floatval($_GET["lat"]);
			$myLng = floatval($_GET["lng"]);
			$myRng = floatval($_GET["range"]);

			$nID = 0;
		
						
			$rs = $conn->query("SELECT * FROM pois") ;
			if(!$rs){
     			 print_r($conn->errorInfo());
   			}
			
			//echo 'Latitude: ' . $myLat . '<br />';
      		//echo 'Longitude: ' . $myLng . '<br />';
      		//echo 'Distancia: ' . $myRng . '<br /><br />';
			
			
			
		
   			foreach ($rs as $row){
   				$thisLat = floatval($row['latitude']);
				$thisLng = floatval($row['longitude']);

				$myDist = round(distancia($myLat,$myLng, $thisLat, $thisLng, "K"),2);
				
				//echo 'Latitude: ' . $thisLat . '<br />';
      			//echo 'Longitude: ' . $thisLng . '<br />';
      			//echo 'Distancia: ' . $myDist . '<br /><br />';

				if( floatval($myDist) < $myRng ) {

      				
      				
      				$arr =  array('id' => strval($nID+1),
								'Longitude' => $row['longitude'],
								'Latitude' => floatval($row['latitude']),
								'Descricao' => $row['excerpt'],
								'Nome' => $row['name'],
								'Icon' => $row['icon'],
								'Image' => $row['image'],
								'Texto' => $row['body'],
								'distance' => strval($myDist)); 

					
                    
                    
      				$lista[$nID] = $arr;
                    
      				//echo '<br />';
      				//echo $lista[$nID];
                    
      				$nID++;

      			}
   			}
   			//echo 'Lista Final <br />';
			$resposta = array('markers' => $lista );
			echo json_encode($resposta);
          
		?>


	</body>
</html>
	
	
