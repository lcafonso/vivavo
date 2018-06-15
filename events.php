<?php

       
$resposta =  array (
  'events' => 
  array (
    0 => 
    array (
      'id' => '1',
      'Nome' => 'Teatro em vila nova da raia',
      'Descricao' => 'Teatro em vila nova da raia, teatro de fantoches seguido de almoço tradicional.',
      'Local' => 'Montalegre',
      'Data' => '20/07/2018',
      'Image' => 'url da imagem',
    ),
    1 => 
    array (
      'id' => '2',
      'Nome' => 'Almoço em vila nova da raia',
      'Descricao' => 'Almoço em vila nova da raia, tiroliro tirola.',
      'Local' => 'Agroção',
      'Data' => '10/07/2018',
      'Image' => 'url da imagem',
    ),
    2 => 
    array (
      'id' => '3',
      'Nome' => 'Almoço com a senhora M',
      'Descricao' => 'Encenação de almoço tradicional.',
      'Local' => 'Vila Raal',
      'Data' => '20/05/2018',
      'Image' => 'url da imagem',
    ),
    3 => 
    array (
      'id' => '4',
      'Nome' => 'Dia da colve',
      'Descricao' => 'Teatro da colve tradicional.',
      'Local' => 'Macedo de Cavaleiros',
      'Data' => '25/07/2018',
      'Image' => 'url da imagem',
    ),
    4 => 
    array (
      'id' => 5,
      'Nome' => 'Ja to farto disso',
      'Descricao' => 'vila nova da raia, almoço tradicional com corrida de galos.',
      'Local' => 'Miranda do douro',
      'Data' => '22/07/2018',
      'Image' => 'url da imagem',
    ),
    
  ),
);

echo json_encode($resposta);

?>
