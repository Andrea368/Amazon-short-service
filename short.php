<?php

function short-it($link){
$a = file_get_contents("https://programma-affiliazione.amazon.it/tools/services/getShortUrl?longUrl=".urlencode($link));
$a = json_decode($a, true);
return $a[shortUrl];
}

function short-uk($link){
$a = file_get_contents("https://affiliate-program.amazon.co.uk/tools/services/getShortUrl?longUrl=".urlencode($link));
$a = json_decode($a, true);
return $a[shortUrl];
}

function short-com($link){
$a = file_get_contents("https://affiliate-program.amazon.com/tools/services/getShortUrl?longUrl=".urlencode($link));
$a = json_decode($a, true);
return $a[shortUrl];
}

function short-de($link){
$a = file_get_contents("https://partnernet.amazon.de/tools/services/getShortUrl?longUrl=".urlencode($link));
$a = json_decode($a, true);
return $a[shortUrl];
}

function short-fr($link){
$a = file_get_contents("https://partenaires.amazon.fr/tools/services/getShortUrl?longUrl=".urlencode($link));
$a = json_decode($a, true);
return $a[shortUrl];
}

function short-es($link){
$a = file_get_contents("https://afiliados.amazon.es/tools/services/getShortUrl?longUrl=".urlencode($link));
$a = json_decode($a, true);
return $a[shortUrl];
}

?>
