<?php

require __DIR__. '../../vendor/autoload.php';

$url = 'https://clinic-mobile.ru';


$client = new \GuzzleHttp\Client();
$resp = $client->get($url);
$html = $resp->getBody()->getContents();


// echo $html;

$document = new \DiDom\Document();
$document->loadHtml($html);
$catalog=$document->find( '.vc_column-inner a');
// var_dump($catalog);
foreach($catalog as $item)
{
    var_dump($item->attr('href'));
    var_dump($item->first('href')->text);
// var_dump($item->find('div')[0]->text);
echo "<br>";
}



?> 
