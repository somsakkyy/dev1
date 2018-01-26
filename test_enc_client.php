<?php
header('Content-Type: text/html; charset=utf-8');
  $code = file_get_contents('http://127.0.0.1/folder/test_enc_server.php');
  
  $key = 'my1script2okforyouonly9990100251';
  $suffix = '1235013851189485';

  $data = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $code, MCRYPT_MODE_CFB, $suffix);

echo '<br>Data:<br>';
print_r($data);
?>