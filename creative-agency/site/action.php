<?php
$name = $_POST['name'];
$email = $_POST['email'];
$email .=   PHP_EOL;
$arq = "emails";

$file = fopen($arq, 'a');
fwrite($file, $email);
fclose($file);
