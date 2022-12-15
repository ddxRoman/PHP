<?php

require __DIR__. '../../../vendor/autoload.php';

$url = 'https://market.yandex.ru/product--protsessor-intel-core-i3-12100f-lga1700-4-x-3300-mgts/1497301526?glfilter=37693330%3A38326419_101556128769&cpa=1&suggest_text=Процессор%20Intel%20Core%20i3-12100F%20LGA1700%2C%204%20x%203300%20МГц&sku=101556128769';


$client = new \GuzzleHttp\Client();
$resp = $client->get($url);
$html = $resp->getBody()->getContents();


 echo $html;

$document = new \DiDom\Document();
$document->loadHtml($html);
$catalog=$document->find( '._37Axw cia-cs h3._1He5n _36SPc _2kgEE fhbmm');
// var_dump($catalog);
foreach($catalog as $item)
{
    var_dump($item->find('span.owc9B')[0]->text);
// var_dump($item->find('div')[0]->text);
echo "<br>";
}



?> 
