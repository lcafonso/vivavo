<html>
<head>
<title>Query string </title>
</head>
	<body>

		<?php

			
                
           

        
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
            

			//$emparray = array();
			//$myLat = floatval($_GET["lat"]);
			//$myLng = floatval($_GET["lng"]);
			//$myRng = floatval($_GET["range"]);

			$nID = 0;
		
						
			$rs = $conn->query("SELECT * FROM events") ;
			
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
								'Estado' => $row['status'], );
										
				    
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
                    
      				//echo '<br />';
      				//echo $lista[$nID];
                    
      				$nID++;

      			}
   			
   			//echo 'Lista Final <br />';
			$resposta = array('events' => $lista );
			echo json_encode($resposta);
          
		?>


	</body>
</html>
	
	
