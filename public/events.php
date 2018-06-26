<?php

       
$resposta =  array (
  'events' => 
  array (
    0 => 
    array (
      'id' => '1',
      'Nome' => 'Preparação do Folar',
      'Descricao' => 'Um evento criativo e delicioso na aldeia de Vila Verde da Raia!! Um momento de aprendizagem, descontração e sabores únicos estão à sua espera! 
	  Leve companhia e divirta-se!
Delicie-se em cada dentada do maravilhoso folar da Avó Lucinda ou com os tradicionais milhos com couve lombarda. 
Reserve a sua presença!
Boas Experiências!
',
	'Descricao2' => ''
      'Local' => 'Vila Verde da Raia(Chaves)',
      'Data' => '15-jun-2018(Sexta)',
      'Image' => 'http://www.ipb.pt/~vivavo/public/uploads/evento1.jpg',
	  'Image2' =>'http://www.ipb.pt/~vivavo/public/uploads/patri1_vila.png',
	  'Image3' =>'http://www.ipb.pt/~vivavo/public/uploads/patri2_vila.png',
	  'Image4' =>'http://www.ipb.pt/~vivavo/public/uploads/patri3_vila.png',
	  'Image5' =>'http://www.ipb.pt/~vivavo/public/uploads/patri4_vila.png',
	  'Aldeia' => 'VVR',	
    ),
    1 => 
    array (
      'id' => '2',
      'Nome' => 'Cantar dos Reis',
      'Descricao' => 'O evento foi constituído pelo acompanhamento dos habitantes da aldeia no Canto dos Reis, uma refeição partilhada na antiga escola primária da aldeia (jantar) que contou com a participação de vários moradores e por fim, uma encenação teatral. Uma experiência única e autêntica numa das mais bonitas regiões de Portugal. ',
      'Descricao2' => 'O Cantar os Reis é uma prática poético-musical, realizada em coletivo, em espaços públicos e privados que ainda se celebra na aldeia de Agrochão, Vinhais. Esta manifestação celebrada na aldeia implica a participação de vários residentes. O ritual começa pela constituição dos grupos que anualmente se reúnem na tarde do dia 6 de janeiro sob a organização da Dona Maria da Graça. Os membros do grupo juntam-se no local habitual (Igreja de São Mamede) e o número de participantes varia de ano para ano. Sem ensaios ou combinações elaboradas, o grupo encontra-se de forma espontânea e rapidamente define as funções de cada um. Depois partem pelas arruadas, deslocando-se às casas e lá soltam o canto. Conhecedora do ritual, a Dona Maria da Graça é usualmente o elemento que assume o papel de porta-voz do grupo e tem a responsabilidade de manter viva a tradição transmitindo-a às novas gerações.' 
	 'Local' => 'Agrochão(Vinhais)',
      'Data' => '06-nov-2017(Sábado)',
      'Image' => 'http://www.ipb.pt/~vivavo/public/uploads/evento2.jpg',
	  'Image2' =>'http://www.ipb.pt/~vivavo/public/uploads/teatro1_agro.png',
	  'Image3' =>'http://www.ipb.pt/~vivavo/public/uploads/teatro2_agro.png',
	  'Image4' =>'http://www.ipb.pt/~vivavo/public/uploads/teatro3_agro.png',
	  'Image5' =>'http://www.ipb.pt/~vivavo/public/uploads/teatro4_agro.png',
	  'Aldeia' =>'AV',
    ),

    
  ),
);

echo json_encode($resposta);


?>
