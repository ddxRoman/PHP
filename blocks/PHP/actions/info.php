<?php
/*phpinfo(); вывод инфы о рнр*/
echo '<pre>'; 
print_r($_SERVER); //вывод инфы о серваке
echo '</pre>';
// вот дальше замена адресс с ключем, но я не шарю.
echo $_SERVER['HTTPS'];
echo $_SERVER['HTTP_HOST']." - - ".$_SERVER['REQUEST_URI'] ;
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
if($_GET['source']!="")
{
    $link=explode("?php", $_SERVER['REQUEST_URI']);
    $redirect = "http://".$_SERVER['HTTP_HOST'].$link[0];
    header('HTTP/1.1 301 Moved Permamently');
    header('Location: '. $redirect);
    exit();
}