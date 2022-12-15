<?php

require __DIR__. '../../../vendor/autoload.php';

$url = 'https://www.dns-shop.ru/product/ebd4f363fcc7ed20/processor-intel-core-i3-12100-oem/';


$client = new \GuzzleHttp\Client();
$resp = $client->get($url);
$html = $resp->getBody()->getContents();

 echo $html;

$document = new \DiDom\Document();
$document->loadHtml($html);

// $posts = $document->find('h1.product-card-top__title');
// echo $document->text();
// foreach ($posts as $post) {
//     echo $post->text();
// }

?> 
