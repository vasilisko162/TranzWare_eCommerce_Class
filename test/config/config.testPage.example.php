<?php
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
  'formApproveurl' => 'http://bank-ecom?status=Approve',
  'formCancelurl'  => 'http://bank-ecom?status=Cancel',
  'formDeclineurl' => 'http://bank-ecom?status=Decline',
  'formAmount'     => '',
  'formAmount100'  => TRUE,
  'formCurrency'   => '',
  'formLanguage'   => 'RU' // RU / EN
);
?>