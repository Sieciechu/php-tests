<?php
$from = 'test_from@gmail.com';
$to = 'your.emailaddress@gmail.com';
$x = mail($to, 'subject'.time(), 'Hello World', 'From: '. $from);
var_dump($x);

echo PHP_EOL;

