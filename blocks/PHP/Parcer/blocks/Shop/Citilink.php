<?php

require __DIR__. '../../../vendor/autoload.php';

$url = 'https://www.citilink.ru/product/processor-intel-s-core-i3-12100-soc-1700-3-3ghz-iuhdg730-oem-1779455/?text=i3-12100';

$client=new \GuzzleHttp\Client();
$resp = $client->get($url);
$html = $resp->getBody()->getContents();

// echo $html;
$document = new \DiDom\Document();
$document->loadHtml($html);
$catalog=$document->find('.css-1ewlh6d e10c8yzv0');
var_dump($catalog);

foreach($catalog as $item){
    $link = ($item->attr('href') );
    $name = ($item->find('span.e1j9birj0 e106ikdt0 app-catalog-1f8xctp e1gjr6xo0')[0]->text());

    $price = ($item->find('span.b-services-list__price')[0]->text());
    echo "По ссылке ".$link.' находятся услуги "<b>'.$name,'</b>" их цены начинаются от <i>'.$price. "</i><br>";
    // echo($price);
    // echo ' <b>рублей</b> <br>';

}
?>



