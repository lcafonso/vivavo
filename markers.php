<?php

       
$resposta =  array (
  'markers' => 
  array (
    0 => 
    array (
      'id' => '1',
      'Nome' => 'GrandmasHouse',
      'Descricao' => 'Casa da Avó',
      'Latitude' => '41.4917142',
      'Longitude' => '-7.1779117',
      'Icon' => 'file:///android_asset/icon_maps.png',
      'Image' => 'casaavo',
      'Texto' => 'A avó Maria da Graça é uma contadora inata de histórias',
    ),
    1 => 
    array (
      'id' => '2',
      'Nome' => 'TrilhoPartidamark',
      'Descricao' => 'Inicio do Trilho',
      'Latitude' => '41.4814295',
      'Longitude' => '-7.1851115',
      'Icon' => 'file:///android_asset/icon_maps.png',
      'Image' => 'iniciotrilho',
      'Texto' => 'Aqui inicia-se o trilho de Agrochao com 17km de caminha até o seu destino',
    ),
    2 => 
    array (
      'id' => '3',
      'Nome' => 'TrilhoFimmark',
      'Descricao' => 'Fim do Trilho',
      'Latitude' => '41.4835923',
      'Longitude' => '-7.2400477',
      'Icon' => 'file:///android_asset/icon_maps.png',
      'Image' => 'fimtrilho',
      'Texto' => 'O trilho acaba nesta bela paisagem de Agrochao, perto do rio',
    ),
    3 => 
    array (
      'id' => '4',
      'Nome' => 'Ponte de Mirandela',
      'Descricao' => 'Ponte historica de Mirandela',
      'Latitude' => '41.4833067',
      'Longitude' => '-7.1879877',
      'Icon' => 'file:///android_asset/icon_maps.png',
      'Image' => 'pontemirandela',
      'Texto' => 'A Ponte sobre o rio Tua, conhecida também como Ponte Velha ou Ponte Medieval de Mirandela, é uma ponte de estilo românico que se localiza sobre o Rio Tua. Esta ponte é um ex-libris da cidade de Mirandela e é uma das três pontes que atravessam o Rio Tua, em Mirandela. A Ponte sobre o rio Tua está, desde 1910, classificada como Monumento nacional.',
    ),
    4 => 
    array (
      'id' => '5',
      'Nome' => 'Mercado',
      'Descricao' => 'Mercado de Mirandela',
      'Latitude' => '41.4876932',
      'Longitude' => '-7.1706125',
      'Icon' => 'file:///android_asset/icon_maps.png',
      'Image' => 'mercadomirandela',
      'Texto' => 'O Mercado de Mirandela é o típico local da cidade onde se vende de todos os produtos nacionais e estrangeiros. Está rodeado por um belo jardim, com bancos e sombras, um espaço infantil e um enorme painel de azulejos representativo das atividades agrícolas do concelho.',
    ),
  ),
);

echo json_encode($resposta);

?>
