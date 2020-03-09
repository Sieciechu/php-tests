<?php
$from = 'test_from@gmail.com';
$to = 'your.emailaddress@gmail.com';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: '. $from . "\r\n";

$x = mail($to, 'subject'.time(), '<html><body>This should be html email<br/>Thank you</body></html>', $headers);
var_dump($x);

echo PHP_EOL;

