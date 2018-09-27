<?php
$config = array(
  'url'          => '',                   // адрес для выполнения запроса
  'merchantid'   => '',                   // ID мерчанта (торговца)
  'area'         => '',                   // development / production. По умолчанию: development
  'logShow'      => TRUE,
  'logCurl'      => 'full',               // standart / full. По умолчанию: standart
  'data'         => 'json',               // json / text формат возврата данных. По умолчанию: json
  'curl_referer' => 'https://site.name',  // Страница, откуда идет запрос
  'curl_Ssl'     => TRUE,                 // TRUE / FALSE Использовать сертификат при отправке запроса
  'dirCert'      => '/certs/'             // Директория, где лежат сертификаты
);

?>