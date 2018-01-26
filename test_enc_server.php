<?php
header('Content-Type: text/html; charset=utf-8');

  $data = 'Hello TEst';

  $key = 'my1script2okforyouonly9990100251';
  $suffix = '1235013851189485';

  $code = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_CFB, $suffix); 
  echo $code; exit;

?>