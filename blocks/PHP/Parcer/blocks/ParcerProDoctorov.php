
<?php

use DiDom\Document;

require_once __DIR__. '../../vendor/autoload.php';
$url = 'https://prodoctorov.ru/krasnodar/uslugi/stomatologiya/implantaciya-zubov/';

$client=new \GuzzleHttp\Client();
$resp = $client->get($url);
$html = $resp->getBody()->getContents();

// echo $html;
$document = new \DiDom\Document();
$document->loadHtml($html);
$catalog=$document->find('.b-services-list__subcategory a');
// var_dump($catalog);

foreach($catalog as $item){
    $link = ($item->attr('href') );
    $name = ($item->find('span.b-services-list__name')[0]->text());

    $price = ($item->find('span.b-services-list__price')[0]->text());
    echo "По ссылке ".$link.' находятся услуги "<b>'.$name,'</b>" их цены начинаются от <i>'.$price. "</i><br>";
    // echo($price);
    // echo ' <b>рублей</b> <br>';

}
?>



