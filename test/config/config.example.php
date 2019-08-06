<?php
$config = array(
  'url'          => '',                         // адрес для выполнения запроса
  'merchantid'   => '',                         // ID мерчанта (торговца)
  'area'         => '',                         // development / production. По умолчанию: development
  'logShow'      => TRUE,
  'logCurl'      => 'full',                     // standart / full. По умолчанию: standart
  'data'         => 'json',                     // json / text формат возврата данных. По умолчанию: json
  'amountChange' => FALSE,                      // Умножать цену на 100:  547.21 руб => 54721
  'curl_referer' => 'https://site.name',        // Страница, откуда идет запрос
  'curl_Ssl'     => TRUE,                       // TRUE / FALSE Использовать сертификат при отправке запроса
  'fileCert'     => '/test/certs/example.crt',  // Ссылка на сертификат
  'fileCertKey'  => '/test/certs/example.key',  // Ссылка на ключ для сертификата
  'language'     => 'RU'
);

?>