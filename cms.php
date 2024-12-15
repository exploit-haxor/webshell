<html>
<head>
<title>[+] Mass CMS Scanner [+]</title>
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
</head>
<body bgcolor="#1e1e1e" text="white">
<style>
  @import url('https://fonts.googleapis.com/css?family=Staatliches');

textarea {
max-width: 95%;
width: 500px;
height: 150px;
resize: none;
outline: none;
overflow: auto;
background: transparent;
color: #ffffff;
}

button {
  background: transparent;
    font-family: Staatliches;
  color: #ffffff;
  border-color: #ffffff;
  cursor: pointer;
}

input {
  background: transparent;
  font-family: Staatliches;
  color: #ffffff;
  border-color: #ffffff;
  cursor: pointer;
}

font {
  font-family: Staatliches;
}

body::-webkit-scrollbar {
  width: 12px;               /* width of the entire scrollbar */
}

body::-webkit-scrollbar-track {
  background: ##1e1e1e;        /* color of the tracking area */
}

body::-webkit-scrollbar-thumb {
  background-color: ##1e1e1e;    /* color of the scroll thumb */
  border: 3px solid gray;  /* creates padding around scroll thumb */
}
</style>
<center>
<font new size=5>Mass CMS Scanner<br></font><font>mencari cms yang di gunakan target<hr><br>
<form action="" method="POST">
<textarea name=site cols=50 rows=10></textarea><br>
<input style="width: 300px;" type=submit class=asu name=au value="Scan CMS">
</center><hr>

<?php
// 0x1999
// Res7ock Crew
// Web Based By UstadCage_48
function send($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);
	curl_close($ch);
	return $output;
}
function save($site,$ext){
	$fp = fopen("temp/".$ext.".txt", 'a');
  fwrite($fp, "$site
  ");
  fclose($fp);
}
function detect($site){
	$send = send($site);
if(preg_match('/\/wp-content\/|\/wp-includes\/|\/xmlrpc.php/',$send)) {
    echo "<b><font face=courier><center> [ WordPress ]</b> : $site<br>";
echo save("$site","WordPress");
}
elseif(preg_match('/<script type=\"text\/javascript\" src=\"\/media\/system\/js\/mootools.js\"><\/script>|Joomla|\/media\/system\/js\/|mootools-core.js|com_content|Joomla!/',$send)) {
    echo "<b><font face=courier><center> [ Joomla]</b> : $site<br>";
echo save("$site","Joomla");
    }
elseif(preg_match('/\/faq.php\/vb|\/clientscript\/|vBulletin|vbulletin/',$send)) {
    echo "<b><font face=courier><center> [ vBulletin ]</b> : $site<br>";
echo save("$site","vbulletin");
  }
elseif(preg_match('/Drupal|drupal|sites\/all|drupal.org/',$send)) {
    echo "<b><font face=courier><center> [ Drupal]</b> : $site<br>";
echo save("$site","Drupal");
    }
elseif(preg_match('/\/skin\/frontend\/base\/default\/|\/\/magentocore.net\/mage\/mage.js|\/webforms\/index\/index\/|\/customer\/account\/login/',$send)) {
    echo "<b><font face=courier><center> [ Magento ]</b> : $site<br>";
echo save("$site","Magento");
    }
elseif(preg_match('/route=product|OpenCart|route=common|catalog\/view\/theme/',$send)) {
    echo "<b><font face=courier><center> [ OpenCart ]</b> : $site<br>";
echo save("$site","OpenCart");
    }
elseif(preg_match('/zcadmin\/login.php|zcadmin|zencart/',$send)) {
    echo "<b><font face=courier><center> [ ZenCart ]</b> : $site<br>";
echo save("$site","ZenCart");
    }
elseif(preg_match('/\/collections\/all|Powered by Shopify|\/\/cdn.shopify.com\//',$send)) {
    echo "<b><font face=courier><center> [ Shopify ]</b> : $site<br>";
echo save("$site","Shopify");
    }

elseif(preg_match('/xenforo|XenForo|uix_sidePane_content/',$send)) {
    echo "<b><font face=courier><center> [ XenForo ]</b> : $site<br>";
echo save("$site","XenForo");
    }
elseif(preg_match('/semua-agenda.html|foto_banner\/|lokomedia/',$send)) {
    echo "<b><font face=courier><center> [ Lokomedia ]</b> : $site<br>";
echo save("$site","Lokomedia");
    }
elseif(preg_match('/typo3|TYPO3|Typo3/',$send)) {
    echo "<b><font face=courier><center> [ Typo3 ]</b> : $site<br>";
echo save("$site","Typo3");
    }
elseif(preg_match('/filemanager.php|filemanager|fileman|\/assets\/global\/plugins\/|\/assets\/plugins\/|\/assets\/public\/plugins\/|\/assets\/private\/plugins\/|\/assets\/admin|\/admin\/plugins\/|assets\/dashboard\//',$send)) {
    echo "<b><font face=courier><center> [ Responsive FileManager ]</b> : $site<br>";
echo save("$site","filemanager_source");
    } 
elseif(preg_match('/upload.php|admin.php|administrator.php|upload file|input type=\"file\"/',$send)) {
    echo "<b><font face=courier><center> [ Weak Website ]</b> : $site<br>";
echo save("$site","Weak_website");
    }
elseif(preg_match('/porn|blowjob/',$send)) {
    echo "<b><font face=courier><center> [ Bokep ]</b> : $site<br>";
echo save("$site","xxx");
    }
elseif(preg_match("/\/feeds\/posts\/default?alt=rss|meta content=\'blogger\' name=\'generator\'/",$send)) {
    echo "<b><font face=courier><center> [ Blogger ]</b> : $site<br>";
echo save("$site","TYPO3");
    }
elseif(preg_match('/Liferay|liferay/',$send)) {
    echo "<b><font face=courier><center> [ Liferay ]</b> : $site<br>";
echo save("$site","Liferay");
    }
elseif(preg_match('/Wolf|Wolf CMS|\?admin/',$send)) {
    echo "<b><font face=courier><center> [ Wolf CMS ]</b> : $site<br>";
echo save("$site","Wolf");
    }
elseif(preg_match('/timthumb|\/tim.php|\/thumb.php|\/foto.php/',$send)) {
    echo "<b><font face=courier><center> [ Timthumb ]</b> : $site<br>";
echo save("$site","Timthumb");
    }
elseif(preg_match('/Index of|Last modified/',$send)) {
    echo "<b><font face=courier><center> [ Web Rusak ]</b> : $site<br>";
echo save("$site","Naked_website");
    }
elseif(preg_match('/mcc.godaddy.com\/park\/|domain has expired|Domain Expired|domain expired|Undermainteance|mcc.godaddy.com|Under Construction|Construction|expired/',$send)) {
    echo "<b><font face=courier><center> [ Web Expired ]</b> : $site<br>";
echo save("$site","Expired");
    }
elseif(preg_match('/html|head|body/',$send)) {
    echo "<b><font face=courier><center> [ Web Biasa ]</b> : $site<br>";
echo save("$site","Live_but_unknown");
    }
else{
    echo "<b><font face=courier><center> [ Unknown ]</b> : $site<br>";
echo save("$site","Unknown");
}
}

$er = explode("\r\n",$_POST['site']);
if($_POST['au']){
	echo "<br>";
foreach($er as $sites){
	echo detect($sites);
}
}

?>
<center><hr><small><font size=3>Unknown45 - 2021
