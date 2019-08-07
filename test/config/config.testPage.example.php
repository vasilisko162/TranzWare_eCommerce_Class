<?php
$finishPageUrl = 'http://bank-ecom/test/finish.php';
$config = array(
  'configFile'     => '/test/config/config.php',
  'configArray'    => array(
    'url',
    'merchantid',
    'area',
    'logShow',
    'logCurl',
    'data',
    'curl_referer',
    'curl_Ssl',
    'fileCert',
    'fileCertKey',
    'language'
  ),
  'formReferer'    => 'http://bank-ecom',
  'formApproveurl'  => $finishPageUrl . '?status=approve',
  'formCancelurl'   => $finishPageUrl . '?status=cancel',
  'formDeclineurl'  => $finishPageUrl . '?status=decline',
  'formAmount'     => '',
  'formAmount100'  => FALSE,
  'formCurrency'   => '',
  'formLanguage'   => 'RU' // RU / EN
);
?>